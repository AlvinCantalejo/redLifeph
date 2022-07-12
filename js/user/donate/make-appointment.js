

import CookieClass from "./../../class/Cookie.class.js";
import App from "./../../class/App.class.js";
import User from "./../../model/User.model.js";
import Appointment from "./../../model/Appointment.model.js";
$(document).ready(function(){

    App.checkIfLoggedIn(userRole);
    App.handlePageRestore();
    bindActionButtons();
    renderProfileDetails();
    renderDatePicker();
    hasActiveAppointment();
});

var userRole = User.USER;
var appointmentData={};
var current_fs, next_fs, previous_fs; //fieldsets
var currentFieldSetID; //fieldset id
var opacity;
var isDonationCenterSelected = false;
var selectedDonationDate;
var selectedDonationTime;
var selectedDonationCenter;
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
        appointmentData.id_donation_drive = 0;
        appointmentData.appointment_type = Appointment.IN_HOUSE;
        appointmentData.appointment_location = "Dasmariñas Branch";
        appointmentData.appointment_date = selectedDonationDate;
        appointmentData.appointment_time = selectedDonationTime.val();
        appointmentData.slots = availableSlot;

        addNewAppointment(appointmentData);
    });

    $("#donor-center").on("click", function(){
        isDonationCenterSelected = true;
        selectedDonorCenter(this);
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

function selectedDonorCenter(id) {
    var divs=document.getElementById('card').getElementsByTagName('div');  //get all divs from div called container
    for(var i=0;i<divs.length; i++) {
        if(divs[i]!=id) {  //if not selected div set .items css
            divs[i].className='card-body';
        }
    }
    id.className='selected-donation-center';  //set different css for selected one
}

var minDate, maxDate;
//Date Picker
function renderDatePicker() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    } 
        
    minDate = yyyy + '-' + mm + '-' + dd;
    maxDate = yyyy + '-' + 12 + '-' + 30;
}

$(function(){
    rome(inline_cal, {
        time: false, 
        date: true,
        min: minDate,
        max: maxDate,
        initialValue: moment().day(6),
        dateValidator: function (d) {
            return moment(d).day() == 6;
        }
    }).on('data', function (value) {
        result.value = value;
        var options = { weekday: 'short', year: 'numeric', month: 'long', day: 'numeric' };
        var today  = new Date(value);
        selectedDonationDate = value;
        result.value = today.toLocaleDateString("en-US", options);

        getTimeSlots(selectedDonationDate);
        $("#time-slots-message").text("");
	});
})

//Tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})


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
        case "fs-donation-center":
            errorMessage = $("#error-message-donation-center");
            if (!isDonationCenterSelected){
                errorMessage.text("Select donation center to proceed.")
            }else{
                errorMessage.text("");
                selectedDonationCenter = "Dasmariñas Branch";
                return true;
            }
            break;
        case "fs-schedule":
            errorMessage = $("#error-message-schedule");
            if(selectedDonationDate == null || selectedDonationTime.val() == null){
                errorMessage.text("Select desired date and time for your appointment.");
            }else{
                errorMessage.text("");
                let dateTime = $("#card-date-time");
                let donationCenter = $("#card-donor-center");
                let donationCenterAddress = $("#donor-center-address");
                dateTime.text(selectedDonationDate + " | " + selectedDonationTime.val());
                donationCenter.text(selectedDonationCenter);
                donationCenterAddress.text("Philippine Red Cross - Cavite Chapter Dasmariñas Branch, Emilio Aguinaldo Highway, Dasmarinas City, Cavite, Philippines");
                return true;
            }
        case "fs-confirm":
            break;
    }
}

function hasActiveAppointment(){
    var apiURL = App.getApiUrl();
    var endpoint = "user/has-active-appointment";
    var api = apiURL + endpoint;
    var parameter = {
        "id_donor": CookieClass.getCookie(Appointment.ID_DONOR)
    }
    $.ajax({
        url: api,
        type: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Koauthorization', 
                CookieClass.getCookie(User.TOKEN)
            );
        },
        data: parameter,                
        success: function (data) {
            console.log(data);
            if(data) {
                displayConfirmationModal("","has-active");
                setTimeout(function () {
                    window.location.href = "./../../../module/user/donate/index.php";
                }, 4000);
            }
                
        },
        error: function (error) { 
            
        }
    });  
}

function addNewAppointment(appointment){
    var apiURL = App.getApiUrl();
    var endpoint = "user/add-appointment";
    var api = apiURL + endpoint;
    $.ajax({
        url: api,
        type: 'POST',
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Koauthorization', 
                CookieClass.getCookie(User.TOKEN)
            );
        },
        data: appointment,                
        success: function (data) { 
            displayConfirmationModal("","success");
            setTimeout(function () {
                window.location.href = "./../../../module/user/donate/index.php";
            }, 6000);
        },
        error: function (error) { 
            displayConfirmationModal("","success");
            setTimeout(function () {
                window.location.href = "./../../../module/user/donate/index.php";
            }, 6000);
        }
    });  
}

function getTimeSlots(selectedDonationDate){
    var apiURL = App.getApiUrl();
    var endpoint = "user/get-time-slots";
    var api = apiURL + endpoint;
    var parameters = {
        "date" : selectedDonationDate
    }
    $.ajax({
        url: api,
        type: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Koauthorization', 
                CookieClass.getCookie(User.TOKEN)
            );
        },
        data: parameters,                
        success: function (data) { 
            renderTimePicker(data);
            return true;
        },
        error: function (error) { 
            addNewDonationDate(selectedDonationDate);
        }
    });
}

function addNewDonationDate(selectedDonationDate){
    var apiURL = App.getApiUrl();
        var endpoint = "user/add-donation-date";
        var api = apiURL + endpoint;
        var parameters = {
            "date" : selectedDonationDate
        }
        $.ajax({
            url: api,
            type: 'POST',
            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Koauthorization', 
                    CookieClass.getCookie(User.TOKEN)
                );
            },
            data: parameters,                
            success: function (data) { 
                getTimeSlots(selectedDonationDate);
            },
            error: function (error) { 

            }
        });
}

function renderTimePicker(timeSlots){
    let timeSlotsArray = ['9:00AM', "10:00AM", "11:00AM", "12:00PM", "1:00PM", "2:00PM"];
    let slotsButtonGroup= $("#slots-button-group");

    let html = "";
    timeSlotsArray.forEach(time => {
        html += "<button "
                +"type='button' "
                +"class='btn btn-outline-danger time-picker' "
                +"data-bs-toggle='tooltip' "
                +"data-bs-placement='right' " 
                +"title='"+ timeSlots[time] +" slots remaining'"
                +"name='time_slot'"
                +"value='" + time + "' ";

        if(timeSlots[time] == 0)
            html += "disabled"

        html +=">"+time +"</button>"
    });
    slotsButtonGroup.html(html);

    $(".time-picker").on("click", function(){
        selectedDonationTime = $(this);
        $("#time-slots-message").text("- " + selectedDonationTime.attr("title")+ " -");
        availableSlot = parseInt(selectedDonationTime.attr("title").replace(" slots remaining"));
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
            title = "Appointment Successful";
            icon = "bi bi-check2-circle";
            iconStyle = "font-size: 4rem; color: green";
            message = "<b>Thank you!</b> <br>Your appointment schedule is successful.<br> Please expect an email shortly..";
        break;

        case "failed-eligibility":
            title = "Appointment Failed";
            icon = "bi bi-x-circle";
            iconStyle = "font-size: 4rem; color: red";
            message = "<b>Thank you for your interest in donating.</b> <br>"
                            +"Unfortunately, we cannot proceed with your <br> appoinment because of the following reasons: </br></br><em>"
                            +reasons + "</em></br>Learn more about eligibility <a href='./../../user/learn/index.php'>here</a>.";
        break;

        case "failed":
            title = "Appointment Failed";
            icon = "bi bi-x-circle";
            iconStyle = "font-size: 4rem; color: red";
            message = "<b>Thank you for your interest in donating.</b> <br>"
                            +"Unfortunately, we ran into some error. Please try again later.";
        break;

        case "has-active":
            title = "You have an active appointment.";
            icon = "bi bi-exclamation-circle";
            iconStyle = "font-size: 4rem; color: yellow";
            message = "<b>You can only have one active appointment. Thank you.";
        break;
        }
    

    confirmModal.modal("show");
    modalTitle.text(title);
    modalIcon.attr("class", icon);
    modalIcon.attr("style", iconStyle);
    modalMessage.html(message);

}