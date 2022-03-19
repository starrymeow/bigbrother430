<?php
namespace database;


include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/Application.php');

/*
 * add a application to dbApplications table: if already there, return false
 */
function add_application($app) {
    if (!$app instanceof \Application)
        die("Error: add_application type mismatch");
    $con=connect();
    $query = "SELECT * FROM dbApplications WHERE id = '" . $app->get_id() . "'";
    $result = mysqli_query($con,$query);
    //if there's no entry for this id, add it
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_query($con,'INSERT INTO dbApplications VALUES("' .
            $app->get_id() . '","' .
            $app->get_first_name() . '","' .
            $app->get_last_name() . '","' .
            $app->get_languages() . '","' .
            $app->get_primary_language() . '","' .
            $app->get_prefered_name() . '","' .
            $app->get_birthday() . '","' .
            $app->get_cell_phone() . '","' .
            $app->get_can_text_cell() . '","' .
            $app->get_home_phone() . '","' .
            $app->get_gender() . '","' .
            $app->get_address() . '","' .
            $app->get_city() . '","' .
            $app->get_state() . '","' .
            $app->get_zip() . '","' .
            $app->get_race() . '","' .
            $app->get_apply_reason() . '","' .
            $app->get_life_changes() .
            '");');
            mysqli_close($con);
            return true;
    }
    mysqli_close($con);
    return false;
}
                

