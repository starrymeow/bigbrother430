<?php
namespace database;

use LittleApplication;

include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/LittleApplication.php');

/*
 * add a person to dbPersons table: if already there, return false
 */
function add_little($little) {
    if (!$little instanceof LittleApplication)
        die("Error: add_little type mismatch");
    $con=connect();
    $query = "SELECT * FROM dbLittleApplications WHERE id = '" . $little->get_id() . "'";
    $result = mysqli_query($con,$query);
    //if there's no entry for this id, add it
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_query($con,'INSERT INTO dbLittleApplications VALUES("' .
            $little->get_id() . '","' .
            $little->get_first_name() . '","' .
            $little->get_last_name() . '","' .
            $little->get_languages() . '","' .
            $little->get_primary_language() . '","' .
            $little->get_prefered_name() . '","' .
            $little->get_birthday() . '","' .
            $little->get_cell_phone() . '","' .
            $little->get_can_text_cell() . '","' .
            $little->get_home_phone() . '","' .
            $little->get_gender() . '","' .
            $little->get_address() . '","' .
            $little->get_city() . '","' .
            $little->get_state() . '","' .
            $little->get_zip() . '","' .
            $little->get_race() . '","' .
            $little->get_apply_reason() . '","' .
            $little->get_life_changes() . '","' .
            $little->get_is_super() . '","' .
            $little->get_password() . '","' .
            $little->get_adult_name() . '","' .
            $little->get_relation() . '","' .
            $little->get_legal_custody() . '","' .
            $little->get_share_custody() . '","' .
            $little->get_others_support_enrollment() . '","' .
            $little->get_living_situation() . '","' .
            $little->get_child_email() . '","' .
            $little->get_grade_level() . '","' .
            $little->get_studentID() . '","' .
            $little->get_nationality() . '","' .
            $little->get_how_did_you_hear() .
            '");');
            mysqli_close($con);
            return true;
    }
    mysqli_close($con);
    return false;
}