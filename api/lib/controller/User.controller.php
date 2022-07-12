<?php
include_once(__DIR__ . "/../helper/Session.helper.php");
include_once(__DIR__ . "/../helper/Param.helper.php");
include_once(__DIR__ . "/../helper/Token.helper.php");
include_once(__DIR__ . "/../helper/ID.helper.php");
include_once(__DIR__ . "/../helper/Email.helper.php");
include_once(__DIR__ . "/../model/User.model.php");
include_once(__DIR__ . "/../model/Schedule.model.php");
include_once(__DIR__ . "/../model/Appointment.model.php");
include_once(__DIR__ . "/../model/Request.model.php");
include_once(__DIR__ . "/../model/Donation.model.php");
include_once(__DIR__ . "/../model/Drive.model.php");

class UserController {

	var $cryptor = "";
	var $string = "";
    var $params = [];
    var $sessionHelper;
    var $emailHelper;
	var $userModel;
	var $scheduleModel;
	var $attendanceModel;
	var $appointmentModel;
	var $donationModel;
	var $requestModel;
	var $driveModel;
    /**
        @desc: Init class
    */
    public function __construct ($params) {
        $this->sessionHelper = new SessionHelper();
        $this->emailHelper = new EmailHelper();
        $this->params = $params;//$_POST, $_GET
        $this->userModel = new User();
        $this->driveModel = new Drive();
        $this->scheduleModel = new Schedule();
        $this->requestModel = new Request();
        $this->appointmentModel = new Appointment();
        $this->donationModel = new Donation();
    }

    //===========================================CREDENTIALS===================================================================
    /**
	 * @name: "user/login"
	 * 
	 * */
    public function login () {
        $email = ParamHelper::param($this->params, User::EMAIL);
        $password = ParamHelper::param($this->params, User::PASSWORD);
        $userStatus = "Active";
        $encPassword = md5($password);

        $dataset = $this->userModel->loginUser($email, $userStatus);

        $data = new Message("Wrong email or password!");
        
        if ($dataset->num_rows > 0) {
            while ($row = $dataset->fetch_assoc()) {
                if($row["password"] == $encPassword){
                    unset($data);
                    $data = $row;
                    $data["token"] = TokenHelper::generateToken();
                    if($this->sessionHelper->createSession($data)){
                        $token = SessionHelper::get(User::TOKEN);
                        $data['password'] = "";
                        $data['token'] = $token;
                        $data['message'] = "Login Success!";
                        $temp = json_encode($data);
                        $stringified = str_replace("\\", " ", $temp);
                        return array(json_decode($stringified), 200);
                    }       
                }
                return array(new Message("Wrong email or password!"), 602);
            }
        }
        return array($data = new Message("Wrong email or password!"), 602);
    }

     /**
      @name: "user/register"
      @desc: register new donor
      @usage: register form
     * */
    public function register()
    {

        $firstName = ParamHelper::param($this->params, User::FIRST_NAME);
        $lastName = ParamHelper::param($this->params, User::LAST_NAME);
        $phoneNumber = ParamHelper::param($this->params, User::PHONE_NUMBER);
        $email = ParamHelper::param($this->params, User::EMAIL);
        $password = ParamHelper::param($this->params, User::PASSWORD);
        $birthDate = ParamHelper::param($this->params, User::BIRTH_DATE);
        $fullName = $firstName . " " . $lastName;
        $donorID = IDHelper::generateDonorID($fullName);
        $gender = ParamHelper::param($this->params, User::GENDER);
        $bloodType = ParamHelper::param($this->params, User::BLOOD_TYPE, "");
        $encPassword = md5($password);

        $excecuted = $this->userModel->register(    $firstName,
                                                    $lastName,
                                                    $phoneNumber,
                                                    $email,
                                                    $encPassword,
                                                    $donorID,
                                                    $birthDate,
                                                    $gender,
                                                    $bloodType);
        $data = new Message("User not added!");

        if ($excecuted) {
            unset($data);
            $data["message"] = "User added successfully!";
            $data["token"] = TokenHelper::generateToken();
            $data["email-verification"] = $this->emailHelper->sendEmailVerification($email, $firstName." ".$lastName);
            return array($data, 200);
        }
        return array($data, 604);
    }

    /**
	 * @name: "user/logout"
	 * 
	 * */
    public function logout () {
        if(session_destroy())
            return  array(new Message("Logged out!"), 200);
        return array(new Message("Unable to logout!"), 400); 
    }

    /**
	 * @name: "user/check-if-logged-in"
	 * 
	 * 
     * */
    public function checkIfLoggedIn () { 
        $data = new Message("Not logged in!");
        $hasSession = $this->sessionHelper->hasActiveSession();
        if($hasSession)
            return  array(new Message("Logged in!"), 200);
        return array($data, 602); 
    }
   //==============================================PROFILE============================================================

    /**
    * @name: "user/reset-password"
    * @desc: resets password
    * */
    public function resetUserPassword() {

        $id = SessionHelper::get(User::ID);
        $password = ParamHelper::param($this->params, User::PASSWORD);
        $encPassword = md5($password);

        $excecuted = $this->userModel->resetUserPassword($id, $encPassword);
        $data = new Message("Password reset failed!");
        
        if ($excecuted) {
            unset($data);
            $data["message"] = "Password reset success!";
            return array($data, 200);
        }
        return array($data, 605);
    }    
    
    /**
	 * @name: "user/update-profile"
	 * @desc: updates profile 
	 * */
    public function updateProfile () {

        $id = SessionHelper::get(User::ID);
        $idDonor = SessionHelper::get(User::ID_DONOR);
        $firstName = ParamHelper::param($this->params, User::FIRST_NAME);
        $lastName = ParamHelper::param($this->params, User::LAST_NAME);
        $email = ParamHelper::param($this->params, User::EMAIL);
        $phoneNumber = ParamHelper::param($this->params, User::PHONE_NUMBER);
        $birthDate = ParamHelper::param($this->params, User::BIRTH_DATE);
        $gender = ParamHelper::param($this->params, User::GENDER);
 
        $excecuted = $this->userModel->updateProfile($id,
                                                    $idDonor,
                                                    $firstName,
                                                    $lastName,
                                                    $email,
                                                    $phoneNumber,
                                                    $birthDate,
                                                    $gender);

        $data = new Message("User not updated!");
        
        if ($excecuted) {
            unset($data);
            $data["message"] = "User updated successfully!";
            return array($data, 200);
        }
        return array($data, 605);
    }


    //=====================================SCHEDULE=======================================

    
    /**
	    @name: "user/get-time-slots"
	    @desc: checks if schedule exists
	 * */
    public function getTimeSlots () {

        $date = ParamHelper::param($this->params, Schedule::DATE);

        $return = $this->scheduleModel->getTimeSlots($date);
        $data = new Message("No data found!");

        if ($return[0]) {
            return array($return[1], 200);
        }
        return array($data, 603);
    }

    /**
	    @name: "user/has-active-appointment"
	    @desc: checks if schedule exists
	 * */
    public function hasActiveAppointment () {

        $idDonor =  ParamHelper::param($this->params,Appointment::ID_DONOR);

        $dataset = $this->appointmentModel->hasActiveAppointment($idDonor);

        if ($dataset->num_rows > 0 ) {
            return array(true, 200);
        }
        return array(false, 603);
    }
    
    /**
	    @name: "user/appointments"
	    @desc: fetch all active appointments
	 * */
    public function getAppointments () {

        $idDonor = SessionHelper::get(Appointment::ID_DONOR);

        $dataset = $this->appointmentModel->getAppointments($idDonor);
        $data = new Message("No data found");
        if ($dataset->num_rows > 0) {
            unset($data);
            $data = [];
            while ($row = mysqli_fetch_assoc($dataset)) {
                $data[] = $row;
            }
            return array($data, 200);
        }
        return array($data, 603);
    }
    
    /**
	    @name: "user/add-donation-date"
	    @desc: adds new donation date
	 * */
    public function addNewDonationDate () {

        $date = ParamHelper::param($this->params, Schedule::DATE);

        $excecuted = $this->scheduleModel->addNewDonationDate($date);
        $data = new Message("Date not added!");

        if ($excecuted) {
            $data = new Message("Date added!");
            return array($data, 200);
        }
        return array($data, 604);
    }

    /**
	    @name: "user/add-appointment"
	    @desc: adds new donation date
	 * */
    public function addNewAppointment () {

        $firstName = SessionHelper::get(User::FIRST_NAME);
        $lastName = SessionHelper::get(User::LAST_NAME);
        $email = SessionHelper::get(User::EMAIL);

        $id = IDHelper::generateAppointmentID();
        $idDonor = ParamHelper::param($this->params, Appointment::ID_DONOR);
        $idDonationDrive = ParamHelper::param($this->params, Appointment::ID_DONATION_DRIVE);
        $appointmentType = ParamHelper::param($this->params, Appointment::APPOINTMENT_TYPE);
        $appointmentDate = ParamHelper::param($this->params, Appointment::APPOINTMENT_DATE);
        $appointmentTime = ParamHelper::param($this->params, Appointment::APPOINTMENT_TIME);
        $appointmentLocation = ParamHelper::param($this->params, Appointment::APPOINTMENT_LOCATION);

        $eventTitle = ParamHelper::param($this->params, "event_title");
        $eventDetails = ParamHelper::param($this->params, "event_details");

        
        //preparing appointment information
        $appointmentDetails['id'] = $id;
        $appointmentDetails['appointment_date'] = $appointmentDate;
        $appointmentDetails['appointment_time'] = $appointmentTime;
        $appointmentDetails['appointment_location'] = $appointmentLocation;
        $appointmentDetails['event_title'] = $eventTitle;
        $appointmentDetails['event_details'] = $eventDetails;

        $excecuted = $this->appointmentModel->addNewAppointment($id,
                                                                $idDonor,
                                                                $idDonationDrive,
                                                                $appointmentType,
                                                                $appointmentDate,
                                                                $appointmentTime,
                                                                $appointmentLocation);
        $data = new Message("Appointment not added!");

        if ($excecuted) {
            unset($data);
            $data['message'] = "Appointment is scheduled sucessfully.";
            if($appointmentType == "in-house")
                $data["email-verification"] = $this->emailHelper->sendAppointmentNotification("appointment", $email, $firstName." ".$lastName, $appointmentDetails );
            else
                $data["email-verification"] = $this->emailHelper->sendAppointmentNotification("drive-registration", $email, $firstName." ".$lastName, $appointmentDetails );
            return array($data, 200);
        }
        return array($data, 604);
    }

    /**
	    @name: "user/reschedule-appointment"
	    @desc: reschedules donation appointment
	 * */
    public function rescheduleAppointment () {

        $firstName = SessionHelper::get(User::FIRST_NAME);
        $lastName = SessionHelper::get(User::LAST_NAME);
        $email = SessionHelper::get(User::EMAIL);

        $id = ParamHelper::param($this->params, Appointment::ID);
        $appointmentDate = ParamHelper::param($this->params, Appointment::APPOINTMENT_DATE);
        $appointmentTime = ParamHelper::param($this->params, Appointment::APPOINTMENT_TIME);
        $appointmentLocation = ParamHelper::param($this->params, Appointment::APPOINTMENT_LOCATION);
        
        $excecuted = $this->appointmentModel->rescheduleAppointment($appointmentDate,
                                                                    $appointmentTime,
                                                                    $appointmentLocation,
                                                                    $id);
        $data = new Message("Appointment not rescheduled!");

        //preparing appointment information
        $appointmentDetails['id'] = $id;
        $appointmentDetails['appointment_date'] = $appointmentDate;
        $appointmentDetails['appointment_time'] = $appointmentTime;
        $appointmentDetails['appointment_location'] = $appointmentLocation;

        if ($excecuted) {
            unset($data);
            $data['message'] = "Appointment is rescheduled sucessfully.";
            $data["email-verification"] = $this->emailHelper->sendAppointmentNotification("reschedule-appointment", $email, $firstName." ".$lastName, $appointmentDetails);
            return array($data, 200);
        }
        return array($data, 604);
    }

     /**
	    @name: "user/cancel-appointment"
	    @desc: cancel an appointment
	 * */
    public function cancelAppointment () {

        $id = ParamHelper::param($this->params, Appointment::ID);

        $excecuted = $this->appointmentModel->cancelAppointment($id);
        $data = new Message("No data found");
        if ($excecuted) {
            unset($data);
            $data['message'] = "Appointment is cancelled sucessfully.";
            return array($data, 200);
        }
        return array($data, 604);
    }


    /**
	    @name: "user/donations"
	    @desc: fetch all donations
	 * */
    public function getAllDonations () {

        $idDonor = SessionHelper::get(User::ID_DONOR);
        $dataset = $this->donationModel->getDonations($idDonor);
        
        $data = new Message("No data found");
        if ($dataset->num_rows > 0) {
            unset($data);
            $data = [];
            while ($row = mysqli_fetch_assoc($dataset)) {
                $data[] = $row;
            }
            return array($data, 200);
        }
        return array($data, 603);
    }

//DONATION DRIVES

    /**
        @name: "user/donation-drives"
        @desc: gets all donation drives
        @usage: display donation drives table
    * */
    public function getAllDonationDrives()
    {
        
        $dataset = $this->driveModel->getAllDonationDrives();
        $data = new Message("No data found.");

        if ($dataset->num_rows > 0) {
            unset($data);
            $data = [];
            while ($row = mysqli_fetch_assoc($dataset)) {
                $data[] = $row;
            }
            return array($data, 200);
        }
        return array($data, 603);
    }

    /**
        @name: "user/donation-drive="
        @desc: gets info of a donation drive
        @usage: display donation drive in confirm page
    * */
    public function getDonationDrive()
    {
        $id = ParamHelper::param($this->params, Drive::ID);

        $dataset = $this->driveModel->getDonationDrive($id);
        $data = new Message("No data found.");

        if ($dataset->num_rows > 0) {
            unset($data);
            while ($row = mysqli_fetch_assoc($dataset)) {
                $data = $row;
            }
            return array($data, 200);
        }
        return array($data, 603);
    }

    /**
        @name: "user/drive-registration"
        @desc: gets drive registration of user
        @usage: render going button for registered
    * */
    public function getDriveRegistration()
    {
        $idDonor = SessionHelper::get(Appointment::ID_DONOR, "no_donor");

        $dataset = $this->appointmentModel->getDriveRegistration($idDonor);
        $data = new Message("No data found.");

        if ($dataset->num_rows > 0) {
            unset($data);
            while ($row = mysqli_fetch_assoc($dataset)) {
                $data[] = $row;
            }
            return array($data, 200);
        }
        return array($data, 603);
    }

    //REQUESTS

    /**
        @name: "user/request"
        @desc: gets all donation drives
        @usage: display donation drives table
    * */
    public function trackRequest()
    {
        $releaseNumber = ParamHelper::param($this->params, Request::RELEASE_NUMBER);
        $dataset = $this->requestModel->trackRequest($releaseNumber);
        $data = new Message("No data found.");

        if ($dataset->num_rows > 0) {
            unset($data);
            $data = [];
            while ($row = mysqli_fetch_assoc($dataset)) {
                $data = $row;
            }
            return array($data, 200);
        }
        return array($data, 603);
    }


}