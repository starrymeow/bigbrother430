<?php

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
            $app->get_email() . '","' .
            $app->get_id() . '","' .
            $app->get_first_name() . '","' .
            $app->get_last_name() . '","' .
            $app->get_languages() . '","' .
            $app->get_primary_language() . '","' .
            $app->get_preferred_name() . '","' .
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

/*
 * remove an application from dbApplicatios table.  If not there, return false
 */
function remove_application($id) {
    $con=connect();
    $query = 'SELECT * FROM dbApplications WHERE id = "' . $id . '"';
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $query = 'DELETE FROM dbApplications WHERE id = "' . $id . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return true;
}

/*
 * @return an Application from dbApplications table matching a particular id.
 * if not in table, return false
 */

function retrieve_application($id) {
    $con=connect();
    $query = "SELECT * FROM dbApplications WHERE id = '" . $id . "'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) !== 1) {
        mysqli_close($con);
        return false;
    }
    $result_row = mysqli_fetch_assoc($result);
    //var_dump($result_row);
    $theApplication = make_an_application($result_row);
    //var_dump($theApplication);
    //    mysqli_close($con);
    return $theApplication;
}

/*
 * @return a list of application ids from dbApplications table matching a particular email.
 * if none in table, return false
 */

function retrieve_application_ids($email) {
    $con=connect();
    $query = "SELECT * FROM dbApplications WHERE email = '" . $email . "'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) < 1) {
        mysqli_close($con);
        return false;
    }

    for ($x=0; $x < mysqli_num_rows($result); $x++)
        $ids[] = mysqli_fetch_assoc($result)['id'];
    return $ids;
}

function make_an_application($result_row) {
    $theApplication = new Application(
        $result_row["email"],
        $result_row["id"],
        $result_row["first_name"],
        $result_row["last_name"],
        $result_row["languages"],
        $result_row["primary_language"],
        $result_row["preferred_name"],
        $result_row["birthday"],
        $result_row["cell_phone"],
        $result_row["can_text_cell"],
        $result_row["home_phone"],
        $result_row["gender"],
        $result_row["address"],
        $result_row["city"],
        $result_row['state'],
        $result_row["zip"],
        $result_row["race"],
        $result_row["apply_reason"],
        $result_row["life_changes"]);
    return $theApplication;
}
?>
