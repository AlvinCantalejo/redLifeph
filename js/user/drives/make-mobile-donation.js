import CookieClass from "./../../class/Cookie.class.js";
import App from "./../../class/App.class.js";
import User from "./../../model/User.model.js";
import Appointment from "./../../model/Appointment.model.js";
$(document).ready(function(){

    //App.checkIfLoggedIn(userRole);
    App.handlePageRestore();
    bindActionButtons();
    renderProfileDetails();
    getDriveDetails(selectedDonationDriveID);
});

var userRole = User.USER;
var selectedDonationDriveID = CookieClass.getCookie("id_drive");
var appointmentData={};
var current_fs, next_fs, previous_fs; //fieldsets
var currentFieldSetID; //fieldset id
var opacity;
var selectedDonationDate;
var selectedDonationTime;
var availableSlot;

function renderProfileDetails (){
    let firstName = CookieClass.getCookie(User.FIRST_NAME);
    let lastName = CookieClass.getCookie(User.LAST_NAME);
    $(".profileName").text(firstName + " " + lastName);
}

function bindActionButtons(){

    $("#confirm-appointment").on("click", function(){
        $(this).text("");
        $(this).prop("disabled", true);
        $(this).html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>"
            +"<span class='sr-only'>Loading...</span>");
        appointmentData.id_donor = CookieClass.getCookie(Appointment.ID_DONOR);
        appointmentData.appointment_type = Appointment.IN_HOUSE;
        appointmentData.appointment_location = "Dasmariñas Branch";
        appointmentData.appointment_date = selectedDonationDate;
        appointmentData.appointment_time = selectedDonationTime.val();
        appointmentData.slots = availableSlot;

        addNewAppointment(appointmentData);
    });

    $('.checkbox').on("change", function() {
        if(this.checked) {
            $('.checkbox-none').prop("disabled", true);
        }else{
            $('.checkbox-none').prop("disabled", false);
        }      
    });

    $('.checkbox-none').on("change", function() {
        if(this.checked) {
            $('.checkbox').prop("disabled", true);
        }else{
            $('.checkbox').prop("disabled", false);
        }      
    });

    $(".next").on("click", function(){

        current_fs = $(this).parent();
        currentFieldSetID = current_fs.attr('id');

        if (isValidated(currentFieldSetID)){
            next_fs = $(this).parent().next();
        
            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            
            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'display': 'block',
                        'opacity': opacity
                    });
                },
                duration: 500
            });
        }
        
        
    });
    
    $(".previous").click(function(){
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
        
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                opacity = 1 - now;
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            },
            duration: 500
        });
    });

}

function isValidated(currentFieldSetID){
    var errorMessage;

    switch(currentFieldSetID){
        
        case "fs-eligibility-quiz":
            errorMessage = $("#error-message-eligibility-quiz");
            let checked = $("input[type=checkbox]:checked").length;

            if(!checked) {
                errorMessage.text("Select at least one option to proceed.");
            }else if(checked = 1 && $(':checkbox:checked').val() == "none of the following" ){
                errorMessage.text("");
                return true;
            }else{
                errorMessage.text("");
                var reasons="<ul style='margin-left:70px; text-align:left;'>";
                $(':checkbox:checked').each(function(i){
                    reasons += "<li>" + $(this).val() + "</li>";
                });
                reasons+="</ul>";
                displayConfirmationModal(reasons, "failed-eligibility");
            }
            break;
    }
}

function getDriveDetails(id){
    var apiURL = App.getApiUrl();
    var endpoint = "user/donation-drive";
    var api = apiURL + endpoint;
    $.ajax({
        url: api,
        type: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Koauthorization', 
                CookieClass.getCookie(User.TOKEN)
            );
        },
        data: id,                
        success: function (data) { 
            renderConfirmForm();
        },
        error: function (error) { 
            displayConfirmationModal("", "failed");
            
        }
    });  
}


function displayConfirmationModal(reasons="", type){
    var confirmModal= $("#confirm-modal");
    var modalTitle= $(".modal-title");
    var modalIcon= $("#modal-icon");
    var modalMessage = $("#modal-message");
    var title = "";
    var icon = "";
    var iconStyle = "";
    var message = "";

    switch(type){
        case "success":
            title = "Registration Successful";
            icon = "bi bi-check2-circle";
            iconStyle = "font-size: 4rem; color: green";
            message = "<b>Thank you!</b> <br>Your registration is successful.<br> Please expect an email shortly.";
        break;

        case "failed-eligibility":
            title = "Registration Failed";
            icon = "bi bi-x-circle";
            iconStyle = "font-size: 4rem; color: red";
            message = "<b>Thank you for your interest in donating.</b> <br>"
                            +"Unfortunately, we cannot proceed with your <br> registration because of the following reasons: </br></br><em>"
                            +reasons + "</em></br>Learn more about eligibility <a href='./../../user/learn/index.php'>here</a>.";
        break;

        case "failed":
            title = "Registration Failed";
            icon = "bi bi-x-circle";
            iconStyle = "font-size: 4rem; color: red";
            message = "<b>Thank you for your interest in donating.</b> <br>"
                            +"Unfortunately, we ran into some error. Please try again later.";
        break;
        }
    

    confirmModal.modal("show");
    modalTitle.text(title);
    modalIcon.attr("class", icon);
    modalIcon.attr("style", iconStyle);
    modalMessage.html(message);

}