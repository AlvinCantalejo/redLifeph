<?php
include_once(__DIR__ . "/../helper/DB.helper.php");
class Appointment extends DBHelper{

    const ID = "id";   
    const ID_APPOINTMENT = "id_appointment";   
    const ID_DONOR = "id_donor";   
    const ID_DONATION_DRIVE = "id_donation_drive";   
    const APPOINTMENT_TYPE = "appointment_type";
    const APPOINTMENT_DATE = "appointment_date";
    const APPOINTMENT_TIME = "appointment_time";
    const APPOINTMENT_LOCATION = "appointment_location";
    const APPOINTMENT_STATUS = "appointment_status";
    /**
        @desc: Init class
    */
    public function __construct () {
        parent::__construct();
    }

    public function addNewAppointment(  $id,
                                        $idDonor,
                                        $appointmentType,
                                        $appointmentDate,
                                        $appointmentTime,
                                        $appointmentLocation){

        $sql = "INSERT INTO r_donation_appointment
                (id, id_donor, appointment_type, appointment_date, appointment_time, appointment_location)
                VALUES(?,?,?,?,?,?)";
                
        $statement = $this->db->prepare($sql);
        $statement->bind_param('ssssss',$id,
                                        $idDonor,
                                        $appointmentType,
                                        $appointmentDate,
                                        $appointmentTime,
                                        $appointmentLocation);
        $executed = $statement->execute();
        Appointment::decrementSlot($appointmentDate,$appointmentTime);
        return $executed;
    }

    public function rescheduleAppointment(  $appointmentDate,
                                            $appointmentTime,
                                            $appointmentLocation,
                                            $id){

        $sql = "UPDATE r_donation_appointment 
                SET appointment_date = ?, 
                    appointment_time = ?, 
                    appointment_location = ? 
                WHERE id = ?";
                
        $statement = $this->db->prepare($sql);
        $statement->bind_param('ssss',  $appointmentDate,
                                        $appointmentTime,
                                        $appointmentLocation,
                                        $id);
        $executed = $statement->execute();

        Appointment::decrementSlot($appointmentDate,$appointmentTime);
        return $executed;
    }

    public function cancelAppointment($id){
        $status = "Cancelled";
        $sql = "UPDATE r_donation_appointment 
                SET appointment_status = ? 
                WHERE id = ?";
                
        $statement = $this->db->prepare($sql);
        $statement->bind_param('ss',$status, $id);
        $executed = $statement->execute();
        return $executed;
    }

    public function decrementSlot($appointmentDate,$appointmentTime){

        $sql = "UPDATE r_donation_schedule 
                SET slots = slots - 1
                WHERE date = ?
                AND time = ?;";
                
        $statement = $this->db->prepare($sql);
        $statement->bind_param('ss',$appointmentDate, $appointmentTime);
        $statement->execute();
    }

    public function doesScheduleDateExists($date){

        $sql = "SELECT * FROM r_appointment_schedule
                WHERE date = ?";
                
        $statement = $this->db->prepare($sql);
        $statement->bind_param('s',$date);
        $statement->execute();
        $dataset = $statement->get_result();
        return $dataset;
    }

    public function hasActiveAppointment($idDonor){
        $status = "Active";
        $sql = "SELECT id FROM r_donation_appointment
                WHERE id_donor = ?
                AND appointment_status = ?";
                
        $statement = $this->db->prepare($sql);
        $statement->bind_param('ss',$idDonor, $status);
        $statement->execute();
        $dataset = $statement->get_result();
        return $dataset;
    }

    public function addNewSchedule($date, $time){

        $sql = "INSERT INTO r_appointment_schedule(date, time) 
                VALUES (?,?)";
                
        $statement = $this->db->prepare($sql);
        $statement->bind_param('ss',$date,
                                    $time);
        $executed = $statement->execute();
        return $executed;
    }

    public function getAllAppointment($idDonor){
        $status = "Active";
        $sql = "SELECT * FROM r_donation_appointment
                WHERE id_donor = ?
                AND appointment_status = ?";
                
        $statement = $this->db->prepare($sql);
        $statement->bind_param('ss',$idDonor, $status);
        $statement->execute();
        $dataset = $statement->get_result();
        return $dataset;
    }

} 