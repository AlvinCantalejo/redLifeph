<?php
/**
    @wrapper for email class
 * */

use PHPMailer\PHPMailer\PHPMailer;

include_once(__DIR__ . "/class/smtp/PHPMailer.php");
include_once(__DIR__ . "/class/smtp/SMTP.php");
include_once(__DIR__ . "/class/smtp/Exception.php");
include_once(__DIR__ . "/class/Email.class.php");

class EmailHelper extends EmailClass {
    var $MAIL;
    var $emailClass;

    var $HOST = "smtp-mail.outlook.com";
    var $PORT = 587;
    var $SMTP_AUTH = true;
    var $SMTP_SECURE = "tls";

    var $USER_NAME = "donate-redlifeph@outlook.ph";
    var $PASSWORD = "batangredcross2022";
    
    var $EMAIL_FROM1 = "donate-redlifeph@outlook.ph";
    var $EMAIL_FROM2 = "redLifeph";

    var $REGISTRATION_EMAIL_SUBJECT = "Thank you for registering to redLifeph! Your initiative saves life.";
    var $APPOINTMENT_CONFIRMATION_EMAIL_SUBJECT = "Appointment is set Successfully! Your initiative saves life.";
    
    var $REGISTRATION_EMAIL_BODY = "";
    var $APPOINTMENT_CONFIRMATION_EMAIL_BODY = "";

    public function __construct () {
        $this->MAIL = new PHPMailer();
        $this->emailClass = new EmailClass;
    }

    public function sendEmailVerification($emailTo, $fullName){

        $this->MAIL->isSMTP();
        $this->MAIL->Host = $this->HOST;
        $this->MAIL->Port = $this->PORT;
        $this->MAIL->SMTPAuth = $this->SMTP_AUTH;
        $this->MAIL->SMTPSecure = $this->SMTP_SECURE;

        $this->MAIL->Username = $this->USER_NAME;
        $this->MAIL->Password = $this->PASSWORD;

        $this->MAIL->smtpConnect([
            'ssl' =>[
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);

        $this->MAIL->setFrom($this->EMAIL_FROM1, $this->EMAIL_FROM2);
        $this->MAIL->addAddress($emailTo, $fullName);
        $this->MAIL->addReplyTo("","This email is generated. Please dont reply.");

        $this->MAIL->isHTML(true);
        $this->MAIL->Subject = $this->REGISTRATION_EMAIL_SUBJECT;
        $this->MAIL->Body = $this->emailClass->createEmailBody("registration", $fullName);

        if(!$this->MAIL->send()){
            return "Email failed to send.";
        }
        else{
            return "Email sent!";
        }
    }

    public function sendAppointmentNotification($appointmentType, $emailTo, $fullName, $appointmentDetails){

        $this->MAIL->isSMTP();
        $this->MAIL->Host = $this->HOST;
        $this->MAIL->Port = $this->PORT;
        $this->MAIL->SMTPAuth = $this->SMTP_AUTH;
        $this->MAIL->SMTPSecure = $this->SMTP_SECURE;

        $this->MAIL->Username = $this->USER_NAME;
        $this->MAIL->Password = $this->PASSWORD;

        $this->MAIL->smtpConnect([
            'ssl' =>[
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);

        $this->MAIL->setFrom($this->EMAIL_FROM1, $this->EMAIL_FROM2);
        $this->MAIL->addAddress($emailTo, $fullName);
        $this->MAIL->addReplyTo("","This email is generated. Please dont reply.");

        $this->MAIL->isHTML(true);
        $this->MAIL->Subject = $this->APPOINTMENT_CONFIRMATION_EMAIL_SUBJECT;

        switch($appointmentType){
            case "appointment":
                $this->MAIL->Body = $this->emailClass->createEmailBody("appointment", $fullName, $appointmentDetails);
                break;
            case "reschedule-appointment":
                $this->MAIL->Body = $this->emailClass->createEmailBody("reschedule-appointment", $fullName, $appointmentDetails);
                break;
            case "cancel-appointment":
                $this->MAIL->Body = $this->emailClass->createEmailBody("cancel-appointment", $fullName, $appointmentDetails);
                break;
        }
        

        if(!$this->MAIL->send()){
            return "Email failed to send.";
        }
        else{
            return "Email sent!";
        }
    }
}
