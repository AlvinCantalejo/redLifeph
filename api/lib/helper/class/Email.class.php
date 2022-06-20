<?php 


class EmailClass{

    var $EMAIL_TYPE_REGISTRATION = "registration";
    var $EMAIL_TYPE_APPOINTMENT = "appointment";
    var $EMAIL_TYPE_RESCHEDULE_APPOINTMENT = "reschedule-appointment";
    var $EMAIL_TYPE_CANCEL_APPOINTMENT = "cancel-appointment";
    
    
    function __construct () {
    }

    public function createEmailBody($emailType, $Name, $AdditionalDetails=""){
        switch($emailType){
            case $this->EMAIL_TYPE_REGISTRATION:
                return "<h1>Welcome to redLifeph <strong>" . $Name ."</strong>!</h1><br>"
                ."Your journey as a life saver starts here! <br>"
                ."Login now to continue with your first appointment. Thank you! <br>"
                .$AdditionalDetails
                ."<br><strong>-redLifeph</strong>";
                break;
            case $this->EMAIL_TYPE_APPOINTMENT:
                return "<h3>Greetings of Peace and Humanity, <strong>" . $Name ."</strong>!</h3><br>"
                ."Your appointment is scheduled successfully. <br>"
                ."Here is the summary of your appointment: <br><br>"
                ." <strong>Appointment ID:</strong> " . $AdditionalDetails['id']."<br>"
                ." <strong>Date:</strong> " . $AdditionalDetails['appointment_date']."<br>"
                ." <strong>Time: </strong> " . $AdditionalDetails['appointment_time']."<br>"
                ." <strong>Donation Center:</strong> " . $AdditionalDetails['appointment_location']."<br>"
                ." <strong>Address:</strong> Philippine Red Cross - Cavite Chapter Dasmariñas Branch, Emilio Aguinaldo Highway, Dasmarinas City, Cavite, Philippines<br><br>"
                ."Learn more about blood donation, do's and dont's and many more <a href='http://localhost/likhaph/redlife.ph/learn.php'>here</a>. <br>"
                ."Thank you and see you there, life saver!"
                ."<br><strong>-redLifeph</strong>";
                break;
            case $this->EMAIL_TYPE_RESCHEDULE_APPOINTMENT:
                return "<h3>Greetings of Peace and Humanity, <strong>" . $Name ."</strong>!</h3><br>"
                ."Your appointment is rescheduled successfully. <br>"
                ."Here is the summary of your new appointment: <br><br>"
                ." <strong>Appointment ID:</strong> " . $AdditionalDetails['id']."<br>"
                ." <strong>Date:</strong> " . $AdditionalDetails['appointment_date']."<br>"
                ." <strong>Time: </strong> " . $AdditionalDetails['appointment_time']."<br>"
                ." <strong>Donation Center:</strong> " . $AdditionalDetails['appointment_location']."<br>"
                ." <strong>Address:</strong> Philippine Red Cross - Cavite Chapter Dasmariñas Branch, Emilio Aguinaldo Highway, Dasmarinas City, Cavite, Philippines<br><br>"
                ."Learn more about blood donation, do's and dont's and many more <a href='http://localhost/likhaph/redlife.ph/learn.php'>here</a>. <br>"
                ."Thank you and see you there, life saver!"
                ."<br><strong>-redLifeph</strong>";
                break;
            case $this->EMAIL_TYPE_CANCEL_APPOINTMENT:
                return "<h3>Greetings of Peace and Humanity, <strong>" . $Name ."</strong>!</h3><br>"
                ."Your appointment is cancelled. <br>"
                ."Here is the summary of appointment you cancelled: <br><br>"
                ." <strong>Appointment ID:</strong> " . $AdditionalDetails['id']."<br>"
                ." <strong>Date:</strong> " . $AdditionalDetails['appointment_date']."<br>"
                ." <strong>Time: </strong> " . $AdditionalDetails['appointment_time']."<br>"
                ." <strong>Donation Center:</strong> " . $AdditionalDetails['appointment_location']."<br>"
                ." <strong>Address:</strong> Philippine Red Cross - Cavite Chapter Dasmariñas Branch, Emilio Aguinaldo Highway, Dasmarinas City, Cavite, Philippines<br><br>"
                ."Learn more about blood donation, do's and dont's and many more <a href='http://localhost/likhaph/redlife.ph/learn.php'>here</a>. <br>"
                ."Thank you for your good deeds, life saver!"
                ."<br><strong>-redLifeph</strong>";
                break;
        }   

    }
}

?>