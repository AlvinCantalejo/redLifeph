import App from "./class/App.class.js";
import CookieClass from "./class/Cookie.class.js";

$(document).ready(function() {
    
    $(".open-login-form").on("click", function(e){
        e.preventDefault();

        window.location.href = "./login.php";

    });

    $(".open-register-form").on("click", function(e){
        e.preventDefault();

        window.location.href = "./register.php";

    });
});


