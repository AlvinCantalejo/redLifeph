<?php
include_once(__DIR__ . "/../helper/DB.helper.php");
include_once(__DIR__ . "/../helper/Session.helper.php");
include_once(__DIR__ . "/../helper/Param.helper.php");
include_once(__DIR__ . "/../helper/Token.helper.php");

class AdminController {

	var $cryptor = "";
	var $string = "";
    var $params = [];
    var $sessionHelper = null;
    //declare model here eg //var $userModel;
	
    /**
        @desc: Init class
    */
    public function __construct ($params) {
        
        $this->sessionHelper = new SessionHelper();  
        $this->params = $params;//$_POST, $_GET

        //Import models here eg //$this->accountModel = new Account();
    }

    //====================================================EMPLOYEES========================================================

     /** 
        SAMPLE CONTROLLER
        @name: "admin/employees"
        @desc: gets all employees of an account
        @usage: display employees table
	 */
    public function getAllEmployees (){

        $id_account = SessionHelper::get(AccountUser::ID_ACCOUNT, "");

        $dataset = $this->userModel->getAllEmployees($id_account);
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
