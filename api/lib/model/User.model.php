<?php
include_once(__DIR__ . "/../helper/DB.helper.php");
class User extends DBHelper{

    const ID = "id";   
    const EMAIL = "email";
    const PASSWORD = "password";
    const FIRST_NAME = "first_name";
    const LAST_NAME = "last_name";
    const PHONE_NUMBER = "phone_number";
    const USER_STATUS = "user_status";
    const USER_ROLE = "user_role";
    const TOKEN = "token";

    /**
        @desc: Init class
    */
    public function __construct () {
        parent::__construct();
    }   

    public function loginUser($email, $user_status){
        $sql = "SELECT r_user.*
                FROM r_user 
                WHERE r_user.email = ? 
                AND r_user.user_status = ?  
                LIMIT 1";
                
        $statement = $this->db->prepare($sql);
        $statement->bind_param('ss', $email, $user_status);
        $statement->execute();
        $dataset = $statement->get_result();

        return $dataset;
    }

    public function resetUserPassword($id, $encPassword ) {

        $sql = "UPDATE c_user SET password = ? WHERE id = ?";
        $statement = $this->db->prepare($sql);
        $statement->bind_param("si", $encPassword, $id);
        $excecuted = $statement->execute();

        return $excecuted;
    }

    public function filterUserRole ($user_role) {

        $user_status = "Deleted";
        $sql = "SELECT * FROM c_user WHERE user_role = ? AND user_status <> ?";
        $statement = $this->db->prepare ($sql);
        $statement->bind_param('ss', $user_role, $user_status);
        $statement->execute();
        $dataset = $statement->get_result();
        return $dataset;
    }

    public function updateProfile ( $id,
                                    $first_name,
                                    $last_name,
                                    $email,
                                    $phone_number,
                                    $user_status,
                                    $user_role) {

        $data = new Message("All fields are required!");

        $sql = "UPDATE c_user 
                SET first_name = ?, 
                last_name = ?, 
                email = ?, 
                phone_number = ?, 
                user_status = ?, 
                user_role = ? 
                WHERE id = ?";
        $statement = $this->db->prepare ($sql);
        $statement->bind_param('ssssssi',
                                            $first_name,
                                            $last_name,
                                            $email,
                                            $phone_number,
                                            $user_status,
                                            $user_role,
                                            $id);

        $excecuted = $statement->execute();
        return $excecuted;
    }


    public function addNewUser ($first_name,
                                $last_name,
                                $email,
                                $encPassword,
                                $phone_number,
                                $user_role) {

        $sql = "INSERT INTO c_user(first_name, last_name, email, password, phone_number, user_role) 
                VALUES(?, ?, ?, ?, ?, ?)";
        $statement = $this->db->prepare ($sql);
        $statement->bind_param('ssssss',
                                        $first_name,
                                        $last_name,
                                        $email,
                                        $encPassword,
                                        $phone_number,
                                        $user_role);
        $excecuted = $statement->execute();

        return $excecuted;
    }

    public function getAllUsers () {

        $sql = "SELECT c_user.*, 
                GROUP_CONCAT(DISTINCT c_account.account_name SEPARATOR ', ') AS account_name, 
                c_account_user.id AS id_account_user, 
                c_account_user.id_account, 
                c_account_user.is_owner
                FROM c_user 
                LEFT JOIN c_account_user 
                ON c_user.id = c_account_user.id_user 
                LEFT JOIN c_account 
                ON c_account_user.id_account = c_account.id 
                AND c_account.account_status = 'Active'
                GROUP BY c_user.email 
                ORDER BY c_user.email";
        $statement = $this->db->prepare ($sql);
        $statement->execute();
        
        $dataset = $statement->get_result();
        return $dataset;
    }

    public function updateUser ($first_name,
                                $last_name,
                                $email,
                                $phone_number,
                                $user_status,
                                $user_role,
                                $id) {

        $sql = "UPDATE c_user 
                SET first_name = ?, 
                last_name = ?, 
                email = ?, 
                phone_number = ?, 
                user_status  = ?, 
                user_role  = ?
                WHERE id = ?";
        $statement = $this->db->prepare ($sql);
        $statement->bind_param('ssssssi',
                                            $first_name,
                                            $last_name,
                                            $email,
                                            $phone_number,
                                            $user_status,
                                            $user_role,
                                            $id);

        $excecuted = $statement->execute();
        return $excecuted;
    }

    public function updateUserStatus ($user_status, $id) {

        $sql = "UPDATE c_user 
                SET user_status = ? 
                WHERE id = ?";
        $statement = $this->db->prepare ($sql);
        $statement->bind_param('si', $user_status, $id);

        $excecuted = $statement->execute();
        return $excecuted;
    }

    public function getAllUserRoles () {

        $sql = "SELECT * FROM c_user_role";
        $statement = $this->db->prepare ($sql);
        $statement->execute();
        $dataset = $statement->get_result();
        return $dataset;
    }

    public function getAllUserStatus() {

        $sql = "SELECT * FROM c_user_status";
        $statement = $this->db->prepare ($sql);
        $statement->execute();

        $dataset = $statement->get_result();
        return $dataset;
    }

    public function getAllEmployees ($id_account){

        $sql = "SELECT c_user.* 
                FROM c_user 
                LEFT JOIN c_account_user 
                ON c_user.id = c_account_user.id_user 
                WHERE c_account_user.id_account = ?
                ORDER BY c_user.id";
        $statement = $this->db->prepare ($sql);
        $statement->bind_param('i', $id_account);
        $statement->execute();
        $dataset = $statement->get_result();
        return $dataset;
    }

    public function deleteEmployee ($id, $user_status){

        $sql = "UPDATE c_user 
                SET user_status = ? 
                WHERE id = ?";
        $statement = $this->db->prepare ($sql);
        $statement->bind_param('si', $user_status, $id);
        $excecuted = $statement->execute();
        return $excecuted;
    }

    
}

?>