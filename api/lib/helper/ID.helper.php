<?php
/**
    @desc: ID helper
 */

class IDHelper
{
    /**
     * Generate initials from a name
     *
     * @param string $name
     * @return string
     */
    static function generateDonorID(string $name, string $birthDate) : string
    {   
        //Generate a 3-digit random number.
        $RANDOM_NUMBER_MIN = 100;
        $RANDOM_NUMBER_MAX = 999;
        $randomNumber = rand($RANDOM_NUMBER_MIN, $RANDOM_NUMBER_MAX);

        $words = explode(' ', $name);
        if (count($words) >= 2) {
            $initials = mb_strtoupper(
                mb_substr($words[0], 0, 1, 'UTF-8') . 
                mb_substr(end($words), 0, 1, 'UTF-8'), 
            'UTF-8');
        }
        $initials = IDHelper::makeInitialsFromSingleWord($name);
        $stringBirthday = IDHelper::cleanStringDate($birthDate);

        $donorID = $initials . "-" . $stringBirthday . "-" . $randomNumber;
        return $donorID;

    }



    /**
     * Make initials from a word with no spaces
     *
     * @param string $name
     * @return string
     */
    static function makeInitialsFromSingleWord(string $name) : string
    {
        preg_match_all('#([A-Z]+)#', $name, $capitals);
        if (count($capitals[1]) >= 2) {
            return mb_substr(implode('', $capitals[1]), 0, 2, 'UTF-8');
        }
        return mb_strtoupper(mb_substr($name, 0, 2, 'UTF-8'), 'UTF-8');
    }

    /**
     * Make initials from a word with no spaces
     *
     * @param string $name
     * @return string
     */
    static function cleanStringDate(string $date) : string
    {
        return str_replace('-', '', $date);  
        
    }
}