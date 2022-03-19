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
    $query = "SELECT * FROM dbBigApplications WHERE id = '" . $big->get_id() . "'";
    $result = mysqli_query($con,$query);
    //if there's no entry for this id, add it
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_query($con,'INSERT INTO dbBigApplications VALUES("' .
            $big->get_id() . '","' .
            $big->get_first_name() . '","' .
            $big->get_last_name() . '","' .
            $big->get_languages() . '","' .
            $big->get_primary_language() . '","' .
            $big->get_prefered_name() . '","' .
            $big->get_birthday() . '","' .
            $big->get_cell_phone() . '","' .
            $big->get_can_text_cell() . '","' .
            $big->get_home_phone() . '","' .
            $big->get_gender() . '","' .
            $big->get_address() . '","' .
            $big->get_city() . '","' .
            $big->get_state() . '","' .
            $big->get_zip() . '","' .
            $big->get_race() . '","' .
            $big->get_apply_reason() . '","' .
            $big->get_life_changes() . '","' .
            $big->get_is_super() . '","' .
            $big->get_password() . '","' .
            $big->get_secondary_email() . '","' .
            $big->get_ssn() . '","' .
            $big->get_relationship_status() . '","' .
            $big->get_orientation() . '","' .
            $big->get_faith() . '","' .
            $big->get_DL_number() . '","' .
            $big->get_DL_state() . '","' .
            $big->get_DL_expiration() . '","' .
            $big->get_emergency_contact() . '","' .
            $big->get_EC_number() . '","' .
            $big->get_EC_relation() .
            '");');
            mysqli_close($con);
            return true;
    }
    mysqli_close($con);
    return false;
}
