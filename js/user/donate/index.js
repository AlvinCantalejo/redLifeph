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
    let firstName = CookieClass.getCookie(User.FIRST_NAME);
    let lastName = CookieClass.getCookie(User.LAST_NAME);
    $(".profileName").text(firstName + " " + lastName);
}

function bindActionButtons(){
    $("#book-appointment").on("click", function(e){
        e.preventDefault();
        window.location.href = "make-appointment.php";
    })
}