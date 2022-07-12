import App from "./../../class/App.class.js";
import CookieClass from "./../../class/Cookie.class.js";
import User from "./../../model/User.model.js";

$(document).ready(function() {
    
    App.checkIfLoggedIn(userRole);
    App.handlePageRestore();
});

var userRole = User.USER;


var requestResult = $("#request-result");

$("#track-request").on("click", function(e){
    e.preventDefault();
    requestResult = $("#request-result");
    let releaseNumber = $("#release-number").val();
    let html = "";

    if(releaseNumber == ""){
        html    += "<div class='row'>"
        + "<h2 class='card-title'>Input your release number.</h2>"
        + "<div class='col-6'>";
        requestResult.html(html);
    }
    else {
        getRequest(releaseNumber);
    }
});


function getRequest(releaseNumber){
    var apiURL = App.getApiUrl();
    var endpoint = "user/request";
    var api = apiURL + endpoint;
    var parameters = {
        "release_number" : releaseNumber
    }
    $.ajax({
        url: api,
        type: "GET",
        data: parameters,
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Koauthorization",
                CookieClass.getCookie(User.TOKEN)
            );
        },
        success: function (data) {
            renderResult(data, "success");
        },
        error: function (error) {
            renderResult("", "failed");
        },
    });
}

function renderResult(data, type){
    let html = "";
    if(type == "success"){
        $(".card-title").text("Request Details");
        html = "<p><b>Release Number:</b> " + data.release_number + "<br>"
                + "<b>Patient Name:</b> " + data.patient_name + "<br>"
                + "<b>Request Details:</b> <em> " + data.blood_product + " | "+ data.unit + " unit/s requested</em></p><br>"
                + "<h3><b>" + data.request_status + "</b></h3>";
    }else{
        $(".card-title").text("No information found!");
        html = "";
    }
    $("#result-area").html(html);
}

