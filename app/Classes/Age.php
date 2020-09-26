<?php

use Cassandra\Date;

class Age{

    /*
     * Function counts difference between today and dob(date of birth). Returns difference;
     */
    public function countAge($date) {
        $dob = date_create($date);
        $today = new DateTime();
        $diff = date_diff($today, $dob);
        $age = $diff->y . ' Years, ' . $diff->m . ' Months, ' . $diff->d . ' Days old';
        if($today < $dob) {
            $age = 'invalid date';
        }
        return $age;
    }
}
