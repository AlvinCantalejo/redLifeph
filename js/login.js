import App from "./class/App.class.js";
import CookieClass from "./class/Cookie.class.js";

$(document).ready(function() {

});

    
    $("#btn-login").on("click", function(e){
        e.preventDefault();

        var errorMessage = $("#error-message");
        var email = $("#email").val(); 
        var password = $("#password").val();
        
        var apiURL = App.getApiUrl();
        var endpoint = "user/login";
        var parameters = {
            "email": email,
            "password": password
        };
        var api = apiURL + endpoint;
        if(email != "" && password !="")
        {
            $.ajax({
                url: api,
                type: 'POST',
                data: parameters,
                success: function (data) { 
                    CookieClass.createCookie(data);
                    console.log(data);
                    // App.checkUser();
                },
                error: function () { 
                    errorMessage.text("Wrong email or password!");
                    window.alert("Wrong email or password!");
                }
            });
        }
        else{
            errorMessage.text("All fields are required!");
        }
    });
