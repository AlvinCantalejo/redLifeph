import CookieClass from "./Cookie.class.js";
import ButtonHelper from "./Button.class.js";

class App {
    
    //API URL
    static getApiUrl (){
        return "http://localhost/likhaph/redlife.ph/api/";
    }
    
    //CHECK IF LOGGED IN
    static checkIfLoggedIn (){
        var apiURL = App.getApiUrl();
        var endpoint = "user/check-if-logged-in";
        var api = apiURL + endpoint;
       
        $.ajax({
            url: api,
            type: 'POST',
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Koauthorization', CookieClass.getCookie(User.TOKEN()));
            },
            success: function (data) { 
            },
            error: function (error) { 
                window.location.href = "../login.php?action=logout";
            }
        });
    }

    //VALIDATE PHONE NUMBER
    static checkPhoneNumber(phoneNumber){

        let phoneNumberFormat = /^\(?([0-9]{4})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    
        if(phoneNumber.match(phoneNumberFormat))
            return true;
        else
            return false;
    }

    //VALIDATE EMAIL
    static checkEmail(email){
    
        let mailformat = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    
        if(email.match(mailformat))
            return true;
        else
            return false;
    }

    //VALIDATE PASSWORD
    static checkPassword (password) {
        
        let checker=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        
        if(password.match(checker))
            return true;
        else
            return false;
    }

    //VALIDATE USER UPON LOGIN            
    static checkUser(){
        let user_role = CookieClass.getCookie("user_role");
        if(user_role == "Admin")
            window.location.href = "module/admin/index.php";
        else if(user_role == "User")
            window.location.href = "module/user/index.php";    
    }

    //CONVERT FORM DATA TO OBJECT
    static objectConverter(data){
        var obj={};
        for(var key in data){
            obj[data[key].split("=")[0]] = decodeURIComponent(data[key].split("=")[1]);
        }
        return obj;
    }

    //VALIUDATE ALERT MODALS
    static validateAlertModal(message, action){

        var alertStyle;
        var title;
        var TIME_IN_MILLISECONDS = 2000;

        if (action == "success"){
            alertStyle = "alert alert-success";
            title = "Success!";
        }
        else if (action == "failed"){
            alertStyle = "alert alert-danger";
            title = "Failed!";
        }

        $("#alert").attr("class", alertStyle);
        $("#alert").html(ButtonHelper.alertMessage(message, title));
        $('#alert-modal').modal('show');
        setTimeout(function() {
            $('#alert-modal').modal('hide');
        }, TIME_IN_MILLISECONDS);

    }
}

export default App 