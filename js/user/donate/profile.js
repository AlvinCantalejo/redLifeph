import App from "./../../class/App.class.js";
import CookieClass from "./../../class/Cookie.class.js";
import User from "./../../model/User.model.js";

$(document).ready(function() {
    
    App.checkIfLoggedIn(userRole);
    App.handlePageRestore();
    renderProfileDetails();
    bindActionButtons();
});

var userRole = User.USER;

function renderProfileDetails (){
    let id = CookieClass.getCookie(User.ID);
    let firstName = CookieClass.getCookie(User.FIRST_NAME);
    let lastName = CookieClass.getCookie(User.LAST_NAME);
    let email = CookieClass.getCookie(User.EMAIL);
    let donorID = CookieClass.getCookie(User.ID_DONOR);
    let birthDate = CookieClass.getCookie(User.BIRTH_DATE);
    let gender = CookieClass.getCookie(User.GENDER);
    let phoneNumber = CookieClass.getCookie(User.PHONE_NUMBER);
    $(".profileName").text(firstName + " " + lastName);
    $(".email-address").text(email);
    $("#donor-ID").val(donorID);

    $("#id").val(id);
    $("#first-name").val(firstName);
    $("#last-name").val(lastName);
    $("#email").val(email);
    $("#birth-date").val(birthDate);
    $("#gender").val(gender);
    $("#phone-number").val(phoneNumber);
}

function bindActionButtons(){
    $("#btn-view-donor-card").on("click", function(e){
        e.preventDefault();

        $("#donor-card-modal").modal("show");
        $("#blood-type").text(CookieClass.getCookie(User.BLOOD_TYPE));
        $("#donor-id").val(CookieClass.getCookie(User.ID_DONOR));
        $("#donor-name").val(CookieClass.getCookie(User.FIRST_NAME) + " " + CookieClass.getCookie(User.LAST_NAME));
        $("#donor-gender").val(CookieClass.getCookie(User.GENDER));
    });

    $("#btn-open-password-modal").on("click", function(e){
        e.preventDefault();

        $("#change-password-modal").modal("show");
    });

    $("#btn-update-profile").on("click", function(e){
        e.preventDefault();

        var form = $("form#profile-form");
        var data = form.serialize().split("&");
        var formData = App.objectConverter(data);
        formData.id_donor = CookieClass.getCookie(User.ID_DONOR);
        if( formData.birth_date == "" ||
            formData.email == "" ||
            formData.first_name == "" ||
            formData.gender == "" ||
            formData.last_name == "" ||
            formData.phone_number == "")
            App.validateAlertModal("All fields are required!", "failed");
        else{
            updateProfile(formData);
        }
    });

    $("#confirm-reset").on("click", function(e){
    e.preventDefault();
        
        console.log("got here");
        var form = $("form#password-reset-form");
        var data = form.serialize().split("&");
        var formData = App.objectConverter(data);
        if(formData.new_password == "" ||formData.confirm_password == "" )
            App.validateAlertModal("All fields are required!", "failed");
        else if(formData.new_password != formData.confirm_password)
            App.validateAlertModal("Passwords not match!", "failed");
        else resetPassword(formData);
    });
};
function updateProfile(profile){
    var apiURL = App.getApiUrl();
    var endpoint = "user/update-profile";
    var api = apiURL + endpoint;

    $.ajax({
        url: api,
        type: "POST",
        data: profile,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Koauthorization",
                CookieClass.getCookie(User.TOKEN)
            );
        },
        success: function (data) {
            App.validateAlertModal(data.message, "success");
            CookieClass.setCookie(User.ID, profile.id);
            CookieClass.setCookie(User.FIRST_NAME, profile.first_name);
            CookieClass.setCookie(User.LAST_NAME, profile.last_name);
            CookieClass.setCookie(User.EMAIL, profile.email);
            CookieClass.setCookie(User.ID_DONOR, profile.id_donor);
            CookieClass.setCookie(User.BIRTH_DATE, profile.birth_date);
            CookieClass.setCookie(User.GENDER, profile.gender);
            CookieClass.setCookie(User.PHONE_NUMBER, profile.phone_number);
            window.location.reload();
        },
        error: function (error) {
            console.log(error);
            App.validateAlertModal("Email already exist!", "failed");
        },
    });
}

function resetPassword(formData){

    formData.password = formData.new_password;

    console.log(formData);
    var apiURL = App.getApiUrl();
    var endpoint = "user/reset-password";
    var api = apiURL + endpoint;

    $.ajax({ 
        url: api,
        type: "POST",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Koauthorization', 
                CookieClass.getCookie(User.TOKEN)
            );
        },
        data: formData,
        success: function (data) {  
            $("#change-password-modal").modal("hide");
            App.validateAlertModal(data.message, "success"); //Password change successfully
        },
        error: function (error) {  
            console.log(`ajax error:`, error);
            $("#change-password-modal").modal("hide");
            App.validateAlertModal("Password reset failed!", "failed");
        }
    });
}