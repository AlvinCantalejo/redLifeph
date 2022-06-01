import App from "./class/App.class.js";
import CookieClass from "./class/Cookie.class.js";

$(document).ready(function() {
    
});

    $("#btn-register").on("click", function(e){
        e.preventDefault();

        var form = $("form#registration-form");
        var data = form.serialize().split("&");
        var formData = App.objectConverter(data);
        register(formData);
    });


var errorMessage = $("#error-message");
function register(formData){
    
    let error = validateFormData(formData);
    if (error != "") errorMessage.text(error);
    else {
        errorMessage.text("");
        var apiURL = App.getApiUrl();
        var endpoint = "user/register";
        var api = apiURL + endpoint;
        $.ajax({
            url: api,
            type: 'POST',
            data: formData,
            success: function (data) { 
                window.location.href = "./login.php#registration-successful"
            },
            error: function () { 
                errorMessage.text("Wrong email or password!");
            }
        });
    }
}

//VALIDATE REGISTRATION FORM DATA
function validateFormData(formData) {
    let error = "";
    let phoneNumber = App.checkPhoneNumber(formData.phone_number);
    let email = App.checkEmail(formData.email);
    let password = App.checkPassword(formData.password);

    if (
        formData.email == "" ||
        formData.password == "" ||
        formData.first_name == "" ||
        formData.last_name == "" ||
        formData.phone_number == "" ||
        formData.email == "" ||
        formData.password == "" ||
        formData.repeat_password == ""
    )
        error = "All fields are required!";
    else if (!phoneNumber) {
        error = "Invalid phone number!";
    }
    else if (!email){
        error = "Invalid email";
    }
    else if (!password) {
        error = "Invalid password!";
    }
    else if(
        formData.password !=
        formData.repeat_password
    )
        error = "Passwords not match!";

    return error;
}
