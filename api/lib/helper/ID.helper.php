<?php
/**
    @desc: ID helper
 */

class IDHelper {

    /**
        @desc: generates donor id
    */
    static function generateDonorID ($first_name, $last_name, $birth_date){
        //Generate a 3-digit random number.
        $RANDOM_NUMBER_MIN = 100;
        $RANDOM_NUMBER_MAX = 999;
        $randomNumber = rand($RANDOM_NUMBER_MIN, $RANDOM_NUMBER_MAX);
        $initials = $first_name[0][0] . $last_name[1][0];

        //Stringify the donor ID
        $donorID = $initials . "-" . $birth_date . "-" . $randomNumber;
        
        return $donorID;
    }
}