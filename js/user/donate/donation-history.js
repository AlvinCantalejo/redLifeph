import App from "./../../class/App.class.js";
import CookieClass from "./../../class/Cookie.class.js";
import User from "./../../model/User.model.js";
import TableHelper from "./../../class/Table.class.js";

$(document).ready(function() {
    
    App.checkIfLoggedIn(userRole);
    App.handlePageRestore();
    renderProfileDetails();
    bindActionButtons();
    getDonations();
});

var userRole = User.USER;
var donations = {};

function renderProfileDetails (){
    let firstName = CookieClass.getCookie(User.FIRST_NAME);
    let lastName = CookieClass.getCookie(User.LAST_NAME);
    let email = CookieClass.getCookie(User.EMAIL);
    $(".profileName").text(firstName + " " + lastName);
    $(".email-address").text(email);
}

function bindActionButtons(){
    $("#book-appointment").on("click", function(e){
        e.preventDefault();
        window.location.href = "make-appointment.php";
    })
}

function getDonations() {
    var apiURL = App.getApiUrl();
    var endpoint = "user/donations";
    var api = apiURL + endpoint;

    $.ajax({
        url: api,
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Koauthorization",
                CookieClass.getCookie(User.TOKEN)
            );
        },
        success: function (data) {
            donations = data;
            displayTable(donations);
        },
        error: function (error) {
            donations="";
            displayTable(donations);
        },
    });
}


//DISPLAY DONATION DRIVE TABLE
var donationTableBody = $("#donation-history-table-body");
function displayTable(donations) {

    let donationTableRow = "";
    if (donations.length <= 0) {
        donationTableRow += "<tr>";
        donationTableRow += "<tr><td colspan='5'>No donation yet! Donate now!</td></tr>";
        donationTableRow += "</tr>";
    } else {
        for (var i = 0; i < donations.length; i++) {
            let donation = donations[i];

            let id = donation.id;
            let donationLocation = donation.donation_location;
            let donationDate = App.stringifyDate(donation.donation_date);
            let bloodProductNumber = donation.blood_product_number;
            let donationStatus = donation.donation_status;
            let numOfSuccessfulDonations = donation.donation_count;

            donationTableRow += "<tr>";
            donationTableRow += TableHelper.addData(id);
            donationTableRow += TableHelper.addData(donationDate);
            donationTableRow += TableHelper.addData(donationLocation);
            donationTableRow += TableHelper.addData(bloodProductNumber);
            donationTableRow += TableHelper.addData(donationStatus);
            
            donationTableRow += "</tr>";
            $(".donation-number").html("<b>Total Successful Donations: </b><em>" + numOfSuccessfulDonations + "</em>");
        }
        
    }donationTableBody.html(donationTableRow);
}