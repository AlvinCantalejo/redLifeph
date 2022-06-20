<?php
include_once(__DIR__ . "/../helper/DB.helper.php");
include_once(__DIR__ . "/../helper/Session.helper.php");
include_once(__DIR__ . "/../helper/Param.helper.php");
include_once(__DIR__ . "/../helper/Token.helper.php");
include_once(__DIR__ . "/../model/User.model.php");
include_once(__DIR__ . "/../model/Drive.model.php");


class AdminController {

	var $cryptor = "";
	var $string = "";
    var $params = [];
    var $sessionHelper;
    var $userModel;
    var $driveModel;
	
    /**
        @desc: Init class
    */
    public function __construct ($params) {
        
        $this->sessionHelper = new SessionHelper();  
        $this->params = $params;//$_POST, $_GET

        //Import models here eg //
        $this->userModel = new User();
        $this->driveModel = new Drive();
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
        $eventLocation = ParamHelper::param($this->params, Drive::EVENT_LOCATION);
        $eventDetails = ParamHelper::param($this->params, Drive::EVENT_DETAILS);

        $executed = $this->driveModel->updateDonationDrive( $id,
                                                            $eventTitle,
                                                            $eventDate,
                                                            $eventLocation,
                                                            $eventDetails);
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
