import App from "../../../js/class/App.class.js";
import TableHelper from "../../../js/class/Table.class.js";
import ButtonHelper from "../../../js/class/Button.class.js";
import CookieClass from "../../../js/class/Cookie.class.js";
import User from "../../../js/model/User.model.js";
import Appointment from "../../../js/model/Appointment.model.js";

$(document).ready(function() {
    
    bindActionButtons();
    App.checkIfLoggedIn(userRole);
    App.handlePageRestore();
    renderProfileDetails();
    getAppointments();
});

var userRole = User.USER;
var selectedAppointmentID;
var appointments = [];

function bindActionButtons (){
    $("#appointment-table").on("click", ".reschedule-button", function(e){
        let id_appointment = $(this).attr("attr");
        CookieClass.setCookie("id_appointment", id_appointment);
        window.location.href ="./reschedule-appointment.php";
    });

    $("#appointment-table").on("click", ".cancel-button", function(e){
        let id_appointment = $(this).attr("attr");
        let appointment = App.index(id_appointment, appointments);
        validateConfirmationModal("cancel", appointment);
        
    });

    $("#confirm").on("click", function(e){
        let id = $(this).val();
        cancelAppoinment(id);
    })
}


//======================================================AJAX CALLS==================================================

//READ DONATION DRIVE TABLE
function getAppointments() {
    var apiURL = App.getApiUrl();
    var endpoint = "user/appointments";
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
            appointments = data;
            displayTable(appointments);
        },
        error: function (error) {
            displayTable(appointments);
        },
    });
}

function cancelAppoinment(id) {
    var apiURL = App.getApiUrl();
    var endpoint = "user/cancel-appointment";
    var api = apiURL + endpoint;
    var parameter = {
        "id": id
    }
    $.ajax({
        url: api,
        type: "POST",
        data: parameter,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Koauthorization",
                CookieClass.getCookie(User.TOKEN)
            );
        },
        success: function (data) {
            $("#confirm-modal").modal("hide");

            let message = "Appointment " + id + " is cancelled successfully";
            App.validateAlertModal(message,"success");
            window.location.reload();
        },
        error: function (error) {
            $("#confirm-modal").modal("hide");

            let message = "We ran into some error. Please reload and try again.";
            App.validateAlertModal(message,"failed");
            window.location.reload();
        },
    });
}

//========================================CALLED FUNCTIONS=========================================================
//DISPLAY DONATION DRIVE TABLE
var appointmentTableBody = $("#appointment-table-body");
function displayTable(appointments) {

    let appointmentTableRow = "";
    if (appointments.length <= 0) {
        appointmentTableRow += "<tr>";
        appointmentTableRow += "<tr><td colspan='6'>No records found</td></tr>";
        appointmentTableRow += "</tr>";
    } else {
        for (var i = 0; i < appointments.length; i++) {
            let appointment = appointments[i];

            let id = appointment.id;
            let appointmentLocation = appointment.appointment_location;
            let appointmentDate = App.stringifyDate(appointment.appointment_date);
            let appointmentTime = appointment.appointment_time;
            let appointmentStatus = appointment.appointment_status;

            appointmentTableRow += "<tr>";
            appointmentTableRow += TableHelper.addData(id);
            appointmentTableRow += TableHelper.addData(   "<strong>" +appointmentLocation + "</strong></br>" + 
                                                            appointmentDate + " | " + appointmentTime + "</br>" + 
                                                            "<em>" + appointmentStatus + "</em>");

            appointmentTableRow += TableHelper.addButton(
                ButtonHelper.rescheduleButton(id)
            )
            appointmentTableRow += TableHelper.addButton(
                ButtonHelper.cancelButton(id)
            )
            appointmentTableRow += "</tr>";
        }
    }appointmentTableBody.html(appointmentTableRow);
}



function renderProfileDetails (){
    let firstName = CookieClass.getCookie(User.FIRST_NAME);
    let lastName = CookieClass.getCookie(User.LAST_NAME);
    $(".profileName").text(firstName + " " + lastName);
}


//VALIDATE MODAL (DELETE AND RESTORE)
function validateConfirmationModal(action, appointment) {
    $("#confirm-modal").modal("show");

    if (action == "cancel") {
        $(".modal-title").html("Cancel Appointment");
        $("#confirm").text("Cancel Appointment");
        $("#confirm").val(appointment.id);
        $("#confirmation-message").html(
            "<p>Are you sure you want to cancel this appointment?</br>Appointment Number: <b>" 
            + appointment.id + "</b></br> Appointment Date and Time <b>" 
            + appointment.appointment_date + " | " + appointment.appointment_time + "</b></br> Appointment Location: <b>"
            + appointment.appointment_location + "</b></p>"
        );
    } 
}