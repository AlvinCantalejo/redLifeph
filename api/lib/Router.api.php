<?php
/**
    Specific request router
*/

include_once(__DIR__ . "/helper/Session.helper.php");
include_once(__DIR__ . "/helper/API.helper.php");
include_once(__DIR__ . "/model/Message.model.php");
include_once(__DIR__ . "/model/User.model.php");
include_once(__DIR__ . "/controller/User.controller.php");
include_once(__DIR__ . "/controller/Admin.controller.php");

//include all used models and controllers

class RouterAPI extends APIHelper {

    var $method = "";
    var $message;
    var $endpoint_index = 0;
    var $security;


    /**
        @desc: Init class
    */
    public function __construct (
        $method,
        $request
    ) {
        // init API
        parent::__construct($request); 

        // init message
        $this->message = new Message();

        // set method type
        $this->method = $method;

        // get the endpoint name
        $this->endpoint = $this->param($this->args, $this->endpoint_index, "");


        $this->security = new SessionHelper();
    }

    /**
        @desc: Executes the requested function
    */
    public function process () {
        switch ($this->method) {
            case "GET": // get data
                return $this->get($this->endpoint);
            break;
            case "POST": // insert data
                return $this->post($this->endpoint);
            break;
            default:
                $this->message = new Message("Forbidden access");
                return $this->response($this->message, "503");
        }
    }

    /**
        @desc: call GET accessible functions
    */
    protected function get (
        $endpoint
    ) {
        //variables
        $this->message = new Message("Forbidden access");
        $data = $this->message;
        $code = 503;
		$action = $this->param($this->args, $this->endpoint_index + 1);

         //================================================== USER ENDPOINTS =========================================================
        if ($endpoint == "user") {
            $user = new UserController($_GET);

            
            //ALL PROTECTED ENDPOINTS
            if ($this->security->isCallNotAllowed()) {
                return $this->response($data, $code);
            }
            if($action == "get-time-slots"){
                $return = $user->getTimeSlots();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "has-active-appointment"){
                $return = $user->hasActiveAppointment();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "appointments"){
                $return = $user->getAllAppointment();
                $data = $return[0];
                $code = $return[1];
            }

        }

        if ($endpoint == "admin") {
            $admin = new AdminController($_GET);

            //ALL PROTECTED ENDPOINTS
            if ($this->security->isCallNotAllowed()) {
                return $this->response($data, $code);
            }

            if($action == "donation-drives"){
                $return = $admin->getAllDonationDrives();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "filter-user-role"){
                $return = $admin->filterUserRole();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "participants"){
                $return = $admin->getParticipants();
                $data = $return[0];
                $code = $return[1];
            }

        }

        return $this->response($data, $code);
    }


    /**
        @desc: call POST accessible functions
    */
    protected function post (
        $endpoint
    ) {
        //variables
        $this->message = new Message("Forbidden access");
        $data = $this->message;
        $code = 503;
        $action = $this->param($this->args, $this->endpoint_index + 1);
        
        //router

        //ALL PUBLIC ENDPOINT
        //================================================== USER ENDPOINTS =========================================================
        if ($endpoint == "user") {
            $user = new UserController($_POST);

            if($action == "login"){
                $return = $user->login();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "register"){
                $return = $user->register();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "check-if-logged-in"){
                $return = $user->checkIfLoggedIn();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "logout"){
                $return = $user->logout();
                $data = $return[0];
                $code = $return[1];
            }
            //ALL PROTECTED ENDPOINTS
            if ($this->security->isCallNotAllowed()) {
                return $this->response($data, $code);
            }
            if($action == "add-donation-date"){
                $return = $user->addNewDonationDate();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "add-appointment"){
                $return = $user->addNewAppointment();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "reschedule-appointment"){
                $return = $user->rescheduleAppointment();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "cancel-appointment"){
                $return = $user->cancelAppointment();
                $data = $return[0];
                $code = $return[1];
            }
        }

        //INCLUDE HERE ENDPOINTS FOR ADMIN
        if ($endpoint == "admin") {
            $admin = new AdminController($_POST);

            if($action == "add-donation-drive"){
                $return = $admin->addDonationDrive();
                $data = $return[0];
                $code = $return[1];
            }
            else if($action == "update-donation-drive"){
                $return = $admin->updateDonationDrive();
                $data = $return[0];
                $code = $return[1];
            }

        }
        return $this->response($data, $code);
    }
}	

?>