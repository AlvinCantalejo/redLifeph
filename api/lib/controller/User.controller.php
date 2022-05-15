<?php
include_once(__DIR__ . "/../helper/Session.helper.php");
include_once(__DIR__ . "/../model/User.model.php");
include_once(__DIR__ . "/../helper/Param.helper.php");
include_once(__DIR__ . "/../helper/Token.helper.php");

class UserController {

	var $cryptor = "";
	var $string = "";
    var $params = [];
    var $sessionHelper;
	var $userModel;
	var $attendanceModel;
    /**
        @desc: Init class
    */
    public function __construct ($params) {
        $this->sessionHelper = new SessionHelper();
        $this->params = $params;//$_POST, $_GET
        $this->userModel = new User();
    }

    //===========================================CREDENTIALS===================================================================
    /**
	 * @name: "user/login"
	 * 
	 * */
    public function login () {
        $email = ParamHelper::param($this->params, User::EMAIL);
        $password = ParamHelper::param($this->params, User::PASSWORD);
        $user_status = "Active";
        $encPassword = md5($password);

        $dataset = $this->userModel->loginUser($email, $user_status);

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

        $id = ParamHelper::param($this->params, User::ID);
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

        $id = ParamHelper::param($this->params, User::ID);
        $first_name = ParamHelper::param($this->params, User::FIRST_NAME);
        $last_name = ParamHelper::param($this->params, User::LAST_NAME);
        $email = ParamHelper::param($this->params, User::EMAIL);
        $phone_number = ParamHelper::param($this->params, User::PHONE_NUMBER);
        $user_status = ParamHelper::param($this->params, User::USER_STATUS);
        $user_role = ParamHelper::param($this->params, User::USER_ROLE);
 
        $excecuted = $this->userModel->updateProfile($id,
                                                    $first_name,
                                                    $last_name,
                                                    $email,
                                                    $phone_number,
                                                    $user_status,
                                                    $user_role);

        $data = new Message("User not updated!");
        
        if ($excecuted) {
            unset($data);
            $data["message"] = "User updated successfully!";
            return array($data, 200);
        }
        return array($data, 605);
    }

}
