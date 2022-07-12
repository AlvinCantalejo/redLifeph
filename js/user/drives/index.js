import App from "./../../class/App.class.js";
import CookieClass from "./../../class/Cookie.class.js";
import User from "./../../model/User.model.js";

$(document).ready(function() {
    
    App.checkIfLoggedIn(userRole);
    App.handlePageRestore();
    renderProfileDetails();
    getDriveRegistrations();
    getDonationDrives();
    bindActionButtons();
});

var userRole = User.USER;
var donationDrives = {};
var driveRegistration = {};
var selectedDonationDriveID;

function renderProfileDetails (){
    let firstName = CookieClass.getCookie(User.FIRST_NAME);
    let lastName = CookieClass.getCookie(User.LAST_NAME);
    $(".profileName").text(firstName + " " + lastName);
}

function bindActionButtons (){
    $("#drives-container").on("click", ".join-button",function(e){
        e.preventDefault();
        selectedDonationDriveID = $(this).attr("attr");
        window.location.href="./make-mobile-donation.php#drive-id=" + selectedDonationDriveID;
        
    });
}


//READ DONATION DRIVE TABLE
function getDonationDrives() {
    var apiURL = App.getApiUrl();
    var endpoint = "user/donation-drives";
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
            donationDrives = data;
            renderDonationDriveViewer(donationDrives);
        },
        error: function (error) {
            renderDonationDriveViewer(donationDrives);
        },
    });

    return donationDrives;
}

//READ DONATION DRIVE TABLE
function getDriveRegistrations() {

    var apiURL = App.getApiUrl();
    var endpoint = "user/drive-registration";
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
            driveRegistration = data;
        },
        error: function (error) {
            console.log(error);
        },
    });
}

function renderDonationDriveViewer(donationDrives) {
    let reg = driveRegistration;
    let drivesContainer = $("#drives-container");
    let drivesContent = "";
    if (donationDrives.length <= 0 || donationDrives.length == null) {
        drivesContent = "<h3> No donation drives available. </h3>";
    } 
    else{
        
        for (var i = 0; i < donationDrives.length; i++) {
            let drive = donationDrives[i];
            drivesContent += '<div class="col">';
            drivesContent += '<div class="card shadow-sm">';
            drivesContent += '<svg class="bd-placeholder-img card-img-top" width="100%" height="500" role="img">';
            drivesContent += '<rect width="100%" height="100%" fill="#a83232"/>';
            drivesContent += '<image xlink:href="./../../../res/img/event-images/'+ drive.photo_filename + '" x="0" y="0" height="100%" width="100%"/>';
            drivesContent += '</svg>';

            drivesContent += '<div class="card-body">';
            drivesContent += '<p class="card-text text-dark">';
            drivesContent += '<span id="drive-title" name="drive_title">' + drive.event_title + '</span><br>';
            drivesContent += '<span id="drive-location" name="drive_location">' + drive.event_location + '</span><br>';
            drivesContent += '<span id="drive-schedule" name="drive_schedule">'+ drive.event_date + ' | ' + drive.event_time + '</span></p>';
            drivesContent += '<div class="d-flex justify-content-between align-items-center">';
            drivesContent += '<div class="btn-group">';
            if(reg.length > 0){
                if(reg.some(obj => obj.id === drive.id))
                    drivesContent += '<button type="button" class="btn btn-sm btn-outline-info join-button" attr="'+drive.id+'" disabled>Going</button>';
            }else{
                drivesContent += '<button type="button" class="btn btn-sm btn-outline-danger join-button" attr="'+drive.id+'">Join Now &raquo;</button>';
            }
            
            
            drivesContent+= '</div></div></div></div></div>' 
        }
    }
    drivesContainer.html(drivesContent);
}
