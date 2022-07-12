<?php
include_once(__DIR__ . "/../helper/DB.helper.php");
include_once(__DIR__ . "/../helper/Session.helper.php");
include_once(__DIR__ . "/../helper/Param.helper.php");
include_once(__DIR__ . "/../helper/Token.helper.php");
include_once(__DIR__ . "/../model/User.model.php");
include_once(__DIR__ . "/../model/Appointment.model.php");
include_once(__DIR__ . "/../model/Donation.model.php");
include_once(__DIR__ . "/../model/Request.model.php");
include_once(__DIR__ . "/../model/Drive.model.php");


class AdminController {

	var $cryptor = "";
	var $string = "";
    var $params = [];
    var $sessionHelper;
    var $userModel;
    var $appointmentModel;
    var $donationModel;
    var $requestModel;
    var $driveModel;
	
    /**
        @desc: Init class
    */
    public function __construct ($params) {
        
        $this->sessionHelper = new SessionHelper();  
        $this->params = $params;//$_POST, $_GET

        //Import models here eg //
        $this->userModel = new User();
        $this->appointmentModel = new Appointment();
        $this->donationModel = new Donation();
        $this->requestModel = new Request();
        $this->driveModel = new Drive();
    }

    //============================================DONATIONS========================================================
    /**
	    @name: "admin/add-new-donor"
	    @desc: adds new donor
	 * */
    public function addNewDonor(){
        $firstName = ParamHelper::param($this->params, User::FIRST_NAME);
        $lastName = ParamHelper::param($this->params, User::LAST_NAME);
        $phoneNumber = ParamHelper::param($this->params, User::PHONE_NUMBER);
        $birthDate = ParamHelper::param($this->params, User::BIRTH_DATE);
        $fullName = $firstName . " " . $lastName;
        $donorID = IDHelper::generateDonorID($fullName);
        $gender = ParamHelper::param($this->params, User::GENDER);
        $bloodType = ParamHelper::param($this->params, User::BLOOD_TYPE, "");

        $idAppointment = ParamHelper::param($this->params, Donation::ID_APPOINTMENT);
        $donationType  = ParamHelper::param($this->params, Donation::DONATION_TYPE);
        $donationDate  = ParamHelper::param($this->params, Donation::DONATION_DATE);
        $donationLocation  = ParamHelper::param($this->params, Donation::DONATION_LOCATION);
        $donationStatus  = ParamHelper::param($this->params, Donation::DONATION_STATUS);
        $prcPersonnel  = ParamHelper::param($this->params, Donation::PRC_PERSONNEL);
        $bloodProductNumber  = ParamHelper::param($this->params, Donation::BLOOD_PRODUCT_NUMBER);

        $registered = $this->userModel->register(   $firstName,
                                                    $lastName,
                                                    $phoneNumber,
                                                    "",
                                                    "",
                                                    $donorID,
                                                    $birthDate,
                                                    $gender,
                                                    $bloodType);

        $donationRecorded = $this->addNewDonorDonation( $donorID,
                                                        $idAppointment,
                                                        $donationType,
                                                        $donationDate,
                                                        $donationLocation,
                                                        $donationStatus,
                                                        $prcPersonnel,
                                                        $bloodProductNumber);
        
        $data = new Message("Donation is not added");
        if ($registered && $donationRecorded) {
            unset($data);
            $data['message'] = "Donation is added successfully.";
            if($idAppointment != null){
                $this->successAppointment($idAppointment);
            }
            return array($data, 200);
        }
        return array($data, 604);
    }


    public function addNewDonorDonation (   $donorID,
                                            $idAppointment,
                                            $donationType,
                                            $donationDate,
                                            $donationLocation,
                                            $donationStatus,
                                            $prcPersonnel,
                                            $bloodProductNumber) {
        
        $id = IDHelper::generateDonationID($donorID);
        

        $excecuted = $this->donationModel->addNewDonation(  $id,
                                                            $donorID,
                                                            $donationType,
                                                            $donationDate,
                                                            $donationLocation,
                                                            $donationStatus,
                                                            $prcPersonnel,
                                                            $bloodProductNumber);
        return $excecuted;
    }
    /**
	    @name: "admin/add-donation"
	    @desc: adds new donation
	 * */
    public function addDonation () {
        
        $idDonor  = ParamHelper::param($this->params, Donation::ID_DONOR);
        $id = IDHelper::generateDonationID($idDonor);
        $idAppointment = ParamHelper::param($this->params, Donation::ID_APPOINTMENT);
        $donationType  = ParamHelper::param($this->params, Donation::DONATION_TYPE);
        $donationDate  = ParamHelper::param($this->params, Donation::DONATION_DATE);
        $donationLocation  = ParamHelper::param($this->params, Donation::DONATION_LOCATION);
        $donationStatus  = ParamHelper::param($this->params, Donation::DONATION_STATUS);
        $prcPersonnel  = ParamHelper::param($this->params, Donation::PRC_PERSONNEL);
        $bloodProductNumber  = ParamHelper::param($this->params, Donation::BLOOD_PRODUCT_NUMBER);

        $excecuted = $this->donationModel->addNewDonation(  $id,
                                                            $idDonor,
                                                            $donationType,
                                                            $donationDate,
                                                            $donationLocation,
                                                            $donationStatus,
                                                            $prcPersonnel,
                                                            $bloodProductNumber);
        $data = new Message("Donation not added");
        if ($excecuted) {
            unset($data);
            $data['message'] = "Donation is added successfully.";
            if($idAppointment != null){
                $this->successAppointment($idAppointment);
            }
            return array($data, 200);
        }
        return array($data, 604);
    }

    /**
	    @name: "admin/update-donation"
	    @desc: adds new donations
	 * */
    public function updateDonation () {

        $id = ParamHelper::param($this->params, Donation::ID_DONATION);
        $idDonor  = ParamHelper::param($this->params, Donation::ID_DONOR);
        $bloodType  = ParamHelper::param($this->params, Donation::BLOOD_TYPE);
        $donationType  = ParamHelper::param($this->params, Donation::DONATION_TYPE);
        $donationDate  = ParamHelper::param($this->params, Donation::DONATION_DATE);
        $donationLocation  = ParamHelper::param($this->params, Donation::DONATION_LOCATION);
        $donationStatus  = ParamHelper::param($this->params, Donation::DONATION_STATUS);
        $prcPersonnel  = ParamHelper::param($this->params, Donation::PRC_PERSONNEL);
        $bloodProductNumber  = ParamHelper::param($this->params, Donation::BLOOD_PRODUCT_NUMBER);

        $excecuted = $this->donationModel->updateDonation(  $id,
                                                            $idDonor,
                                                            $bloodType,
                                                            $donationType,
                                                            $donationDate,
                                                            $donationLocation,
                                                            $donationStatus,
                                                            $prcPersonnel,
                                                            $bloodProductNumber);
        $data = new Message("Donation not updated");
        if ($excecuted) {
            unset($data);
            $data['message'] = "Donation is updated successfully.";
            return array($data, 200);
        }
        return array($data, 604);
    } 

    /**
	    @name: "admin/delete-donation"
	    @desc: deletes donation
	 * */
    public function deleteDonation () {

        $id = ParamHelper::param($this->params, Donation::ID);

        $excecuted = $this->donationModel->deleteDonation($id);

        $data = new Message("Donation not deleted");
        if ($excecuted) {
            unset($data);
            $data['message'] = "Donation is deleted successfully.";
            return array($data, 200);
        }
        return array($data, 605);
    } 
    /**
	    @name: "admin/donations"
	    @desc: fetch all donations
	 * */
    public function getAllDonations () {

        $dataset = $this->donationModel->getAllDonations();
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
	    @name: "admin/filter-donations"
	    @desc: filter all active donations
	 * */
    public function filterDonations () {

        $type = ParamHelper::param($this->params, Donation::DONATION_TYPE);
        $status = ParamHelper::param($this->params, Donation::DONATION_STATUS);
        $batchStartDate = ParamHelper::param($this->params, Donation::BATCH_START_DATE, "no_date");
        $batchEndDate = ParamHelper::param($this->params, Donation::BATCH_END_DATE, "no_date");
        $category = ParamHelper::param($this->params, Donation::FILTER_CATEGORY);

        $dataset = $this->donationModel->filterDonations($category, $type, $status, $batchStartDate, $batchEndDate);
        
        $data = new Message("No data found !" );

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
	    @name: "admin/appointment"
	    @desc: fetch one appointment
	 * */
    public function getAppointment () {

        $id = ParamHelper::param($this->params, Appointment::ID);

        $dataset = $this->appointmentModel->getAppointment($id);
        $data = new Message("No data found");
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

     /**
	    @name: "admin/success-appointment"
	    @desc: mark an appointment as successful
	 * */
    public function successAppointment ($id) {

        $this->appointmentModel->successAppointment($id);
        return;
    }

    /**
	    @name: "admin/appointments"
	    @desc: fetch all active appointments
	 * */
    public function getAllAppointments () {

        $dataset = $this->appointmentModel->getAllAppointments();
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
	    @name: "admin/filter-appointments"
	    @desc: filter all active appointments
	 * */
    public function filterAppointments () {

        $date = ParamHelper::param($this->params, Appointment::APPOINTMENT_DATE);
        $time = ParamHelper::param($this->params, Appointment::APPOINTMENT_TIME);
        $type = ParamHelper::param($this->params, Appointment::APPOINTMENT_TYPE);
        $status = ParamHelper::param($this->params, Appointment::APPOINTMENT_STATUS);

        $case = "";
        if($type == 'in-house'){
            if($date == "all" || $date == "" || $date == null){
                $case .= "D";
            }
            if($time == "all" || $time == "" || $time == null){
                $case .= "T";
            }
            if($status == "all" ||  $status == "" || $status == null){
                $case .= "S";
            }
            $dataset = $this->appointmentModel->filterInHouseAppointments(  $case,
                                                                            $date,
                                                                            $time,
                                                                            $status);
        }else{
            $dataset = $this->appointmentModel->filterAppointments($type, $status);
        }

        
        $data = new Message("No data found ! type:" .$type ." case: ". $case );

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

    //REQUESTS

    /**
	    @name: "admin/requests"
	    @desc: fetch all request
	 * */
    public function getAllRequests () {

        $dataset = $this->requestModel->getAllRequests();
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
	    @name: "admin/add-request"
	    @desc: fetch all request
	 * */
    public function addNewRequest () {

        $patientName = ParamHelper::param($this->params, Request::PATIENT_NAME);
        $phoneNumber = ParamHelper::param($this->params, Request::PHONE_NUMBER);
        $clinic = ParamHelper::param($this->params, Request::CLINIC);
        $unit = ParamHelper::param($this->params, Request::UNIT);
        $bloodType = ParamHelper::param($this->params, Request::BLOOD_TYPE);
        $releaseNumber = IDHelper::generateReleaseNumber();
        $requestDate = ParamHelper::param($this->params, Request::REQUEST_DATE);
        $postedBy = SessionHelper::get(User::ID);

        $excecuted = $this->requestModel->addNewRequest($patientName,
                                                        $phoneNumber,
                                                        $clinic,
                                                        $unit,
                                                        $bloodType,
                                                        $releaseNumber,
                                                        $requestDate,
                                                        $postedBy);

        $data = new Message("Request is not added!");
            
        if ($excecuted) {
            unset($data);
            $data = new Message("Request is added successfully!");
            return array($data, 200);
        }
        return array($data, 604);
    }

    /**
	    @name: "admin/update-request"
	    @desc: update request
	 * */
    public function updateRequest () {

        $id = ParamHelper::param($this->params, Request::ID);
        $patientName = ParamHelper::param($this->params, Request::PATIENT_NAME);
        $phoneNumber = ParamHelper::param($this->params, Request::PHONE_NUMBER);
        $clinic = ParamHelper::param($this->params, Request::CLINIC);
        $unit = ParamHelper::param($this->params, Request::UNIT);
        $bloodType = ParamHelper::param($this->params, Request::BLOOD_TYPE);
        $requestStatus = ParamHelper::param($this->params, Request::REQUEST_STATUS);
        $requestDate = ParamHelper::param($this->params, Request::REQUEST_DATE);
        $postedBy = SessionHelper::get(User::ID);

        $excecuted = $this->requestModel->updateRequest(    $id,
                                                            $patientName,
                                                            $phoneNumber,
                                                            $clinic,
                                                            $unit,
                                                            $bloodType,
                                                            $requestDate,
                                                            $requestStatus,
                                                            $postedBy);

        $data = new Message("Request is not updated!");
            
        if ($excecuted) {
            unset($data);
            $data = new Message("Request is updated successfully!");
            return array($data, 200);
        }
        return array($data, 604);
    }

    public function deleteRequest()
    {
        $id = ParamHelper::param($this->params, Request::ID);

        $executed = $this->requestModel->deleteRequest($id);
        $data = new Message("Request is not deleted!");
            
        if ($executed) {
            unset($data);
        	$data = new Message("Request is deleted successfully!");
            return array($data, 200);
        }
        return array($data, 604);
    }
    //============================================DONATION DRIVES========================================================
    
    //creates directory
    private function makeDir($path){
        return is_dir($path) || mkdir($path);
    }

    public function saveDonationDrivePhoto ($eventTitle) {


        $img = ParamHelper::param($this->params, Drive::PHOTO_FILE);
        $cleanedEventTitle = str_replace(' ', '-', strtolower($eventTitle));
        
        $folderPath = "../res/img/event-images/";
        $this->makeDir($folderPath);
        
    
        //render image
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        date_default_timezone_set('Asia/Manila');
        
        $fileName = "event-". $cleanedEventTitle ."-".uniqid() . "." . $image_type;
    
        $file = $folderPath . $fileName;
        if(file_put_contents($file, $image_base64)){
            return array(true, $fileName);
        }
        return false;
    }
    /** 
        @name: "admin/add-donation-drive"
        @desc: adds new donation drive
        @usage: create new donation drive form
	*/
    public function addDonationDrive () {

        $eventTitle = ParamHelper::param($this->params, Drive::EVENT_TITLE);
        $eventDate = ParamHelper::param($this->params, Drive::EVENT_DATE);
        $eventTime = ParamHelper::param($this->params, Drive::EVENT_TIME);
        $location = ParamHelper::param($this->params, Drive::EVENT_LOCATION);
        $eventDetails = ParamHelper::param($this->params, Drive::EVENT_DETAILS);
        $postedBy = SessionHelper::get(User::ID);

        $return = $this->saveDonationDrivePhoto ($eventTitle);
        if(!$return[0]) {
            $data = new Message("Donation Drive is not added!");
            return array($data, 604);
        }
        $photoFilename = $return[1];

        $executed = $this->driveModel->addDonationDrive (   $eventTitle,
                                                            $eventDate,
                                                            $eventTime,
                                                            $location,
                                                            $photoFilename,
                                                            $eventDetails,
                                                            $postedBy);

        $data = new Message("Donation Drive is not added!");
            
        if ($executed) {
            unset($data);
        	$data = new Message("Donation Drive is added successfully!");
            return array($data, 200);
        }
        unset($data);
        return array($data, 604);
    }

    /**
        @name: "admin/donation-drives"
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
        @name: "admin/participants"
        @desc: gets all participants per donation drives
        @usage: display participants table
     * */
    public function getParticipants()
    {
        $id = ParamHelper::param($this->params, Drive::ID);
        $dataset = $this->driveModel->getParticipants($id);
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

    public function updateDonationDrive()
    {
        $id = ParamHelper::param($this->params, Drive::ID);
        $eventTitle = ParamHelper::param($this->params, Drive::EVENT_TITLE);
        $eventDate = ParamHelper::param($this->params, Drive::EVENT_DATE);
        $eventTime = ParamHelper::param($this->params, Drive::EVENT_TIME);
        $eventLocation = ParamHelper::param($this->params, Drive::EVENT_LOCATION);
        $eventDetails = ParamHelper::param($this->params, Drive::EVENT_DETAILS);

        $executed = $this->driveModel->updateDonationDrive( $id,
                                                            $eventTitle,
                                                            $eventDate,
                                                            $eventTime,
                                                            $eventLocation,
                                                            $eventDetails);
        $data = new Message("Donation Drive is not updated!");
            
        if ($executed) {
            unset($data);
        	$data = new Message("Donation Drive is updated successfully!");
            return array($data, 200);
        }
        unset($data);
        $data['executed'] = $executed;
        return array($data, 604);
    }

    public function deleteDonationDrive()
    {
        $id = ParamHelper::param($this->params, Drive::ID);

        $executed = $this->driveModel->deleteDonationDrive($id);
        $data = new Message("Donation Drive is not deleted!");
            
        if ($executed) {
            unset($data);
        	$data = new Message("Donation Drive is deleted successfully!");
            return array($data, 200);
        }
        unset($data);
        $data['executed'] = $executed;
        return array($data, 604);
    }
    //================================================USERS============================================
    /**
        @name: "admin/filter-user-role"
        @desc: filters users by user role
        @usage: get admins 
    * */
    public function filterUserRole () {

        $user_role = ParamHelper::param($this->params, User::USER_ROLE);

        $dataset = $this->userModel->filterUserRole($user_role);
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

}
?>
