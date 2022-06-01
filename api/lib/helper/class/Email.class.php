<?php 


class EmailClass{

    var $EMAIL_TYPE_REGISTRATION = "registration";
    
    
    function __construct () {
    }

    public function createEmailBody($emailType, $Name, $AdditionalDetails=""){

        if($emailType == $this->EMAIL_TYPE_REGISTRATION){
            return "<h1>Welcome to redLifeph <strong>" . $Name ."</strong>!</h1><br>"
            ."Your journey as a life saver starts here! <br>"
            ."Login now to continue with your first appointment. Thank you! <br>"
            .$AdditionalDetails
            ."<br><strong>-redLifeph</strong>";
        }

        
           
    }
}

?>