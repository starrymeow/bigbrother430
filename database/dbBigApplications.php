<?php
//namespace database;

// use domain\BigApplication;

include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/BigApplication.php');

/*
 * add a person to dbPersons table: if already there, return false
 */
function add_big($big) {
    if (!$big instanceof BigApplication)
        die("Error: add_big type mismatch");
        $con=connect();
        $query = "SELECT * FROM dbBigApplications WHERE email = '" . $big->get_email() . "'";
        $result = mysqli_query($con,$query);
        //if there's no entry for this id, add it
        if ($result == null || mysqli_num_rows($result) == 0) {
            mysqli_query($con,'INSERT INTO dbBigApplications VALUES("' .
                $big->get_first_name() . '","' .
                $big->get_last_name() . '","' .
                $big->get_email() . '","' .
                $big->get_is_super() . '","' .
                $big->get_password() . '","' .
                '");');
                mysqli_close($con);
                return true;
        }
        mysqli_close($con);
        return false;
}
