<?php

include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/LittleApplication.php');

// add a LittleApplication to dbLittleApplications table: if already there, return false
function add_little_application($little) {
    if (!$little instanceof LittleApplication)
        die("Error: add_little_application type mismatch");
    $con=connect();
    $query = "SELECT * FROM dbLittleApplications WHERE id = '" . $little->get_id() . "'";
    $result = mysqli_query($con,$query);
    //if there's no entry for this id, add it
    if ($result == null || mysqli_num_rows($result) == 0) {
        $app = add_application($little);
        if ($app == false) {
            mysqli_close($con);
            return false;
        }
        $result = mysqli_query($con,'INSERT INTO dbLittleApplications VALUES("' .
            $little->get_id() . '","' .
            $little->get_middle_name() . '","' .
            $little->get_can_text_child() . '","' .
            $little->get_adult_name() . '","' .
            $little->get_relation() . '","' .
            $little->get_legal_custody() . '","' .
            $little->get_share_custody() . '","' .
            $little->get_other_supports_enrollment() . '","' .
            $little->get_living_situation() . '","' .
            $little->get_child_cell() . '","' .
            $little->get_child_email() . '","' .
            $little->get_school() . '","' .
            $little->get_grade_level() . '","' .
            $little->get_studentID() . '","' .
            $little->get_nationality() . '","' .
            $little->get_how_did_you_hear() . '","' .
            $little->get_parent_employer() . '","' .
            $little->get_parent_work_num() . '","' .
            $little->get_can_contact_work() . '","' .
            $little->get_best_num() . '","' .
            $little->get_best_contact_time() . '","' .
            $little->get_alt_contact_name() . '","' .
            $little->get_alt_contact_num() . '","' .
            $little->get_does_child_know_enrolling() . '","' .
            $little->get_does_child_want_to_join() . '","' .
            $little->get_BBBS_family_names() . '","' .
            $little->get_will_meet_monthly() . '","' .
            $little->get_medical_conditions() . '","' .
            $little->get_household_size() . '","' .
            $little->get_income_assist() . '","' .
            $little->get_house_assist() . '","' .
            $little->get_development() . '","' .
            $little->get_lunch_assist() . '","' .
            $little->get_annual_income() . '","' .
            $little->get_military() . '","' .
            $little->get_service_branch() . '","' .
            $little->get_deployment_date() . '","' .
            $little->get_retired_military() . '","' .
            $little->get_discharged_military() . '","' .
            $little->get_wounded_veteran() . '","' .
            $little->get_incarcerated() . '","' .
            $little->get_juvenile_record() . '","' .
            $little->get_school_trouble() .
            '");');
            //var_dump(mysqli_error($con));
            mysqli_close($con);
            return $result;
    }
    mysqli_close($con);
    return false;
}

/*
 * remove a LittleApplication from dbLittleApplications table.
 * If not there, return false
 */
function remove_little_application($id) {
    $con=connect();
    $query = 'SELECT * FROM dbLittleApplications WHERE id = "' . $id . '"';
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $query = 'DELETE FROM dbLittleApplications WHERE id = "' . $id . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return $result;
}

/*
 * @return a LittleApplication from dbLittleApplications table matching given id.
 * if not in table, return false
 */
function retrieve_little_application($id) {
    $con=connect();
    $query = 'SELECT * FROM dbLittleApplications WHERE id = "' . $id . '"';
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) !== 1) {
        mysqli_close($con);
        return false;
    }
    $result_row = mysqli_fetch_assoc($result);
    //var_dump($result_row);
    $theAccount = make_a_little_application($result_row);
    //var_dump($theAccount);
    mysqli_close($con);
    return $theAccount;
}

function make_a_little_application($result_row) {
    $app = retrieve_application($result_row['id']);

    $theApp = new LittleApplication(
        $app->get_email(),
        $result_row['id'],
        $app->get_first_name(),
        $app->get_last_name(),
        $app->get_languages(),
        $app->get_primary_language(),
        $app->get_preferred_name(),
        $app->get_birthday(),
        $app->get_cell_phone(),
        $app->get_can_text_cell(),
        $app->get_home_phone(),
        $app->get_gender(),
        $app->get_address(),
        $app->get_city(),
        $app->get_state(),
        $app->get_zip(),
        $app->get_race(),
        $app->get_apply_reason(),
        $app->get_life_changes(),
        $result_row['middle_name'],
        $result_row['can_text_child'],
        $result_row['adult_name'],
        $result_row['relation'],
        $result_row['legal_custody'],
        $result_row['share_custody'],
        $result_row['other_supports_enrollment'],
        $result_row['living_situation'],
        $result_row['child_cell'],
        $result_row['child_email'],
        $result_row['school'],
        $result_row['grade_level'],
        $result_row['studentID'],
        $result_row['nationality'],
        $result_row['how_did_you_hear'],
        $result_row['parent_employer'],
        $result_row['parent_work_num'],
        $result_row['can_contact_work'],
        $result_row['best_num'],
        $result_row['best_contact_time'],
        $result_row['alt_contact_name'],
        $result_row['alt_contact_num'],
        $result_row['does_child_know_enrolling'],
        $result_row['does_child_want_to_join'],
        $result_row['BBBS_family_names'],
        $result_row['will_meet_monthly'],
        $result_row['medical_conditions'],
        $result_row['household_size'],
        $result_row['income_assist'],
        $result_row['house_assist'],
        $result_row['development'],
        $result_row['lunch_assist'],
        $result_row['annual_income'],
        $result_row['military'],
        $result_row['service_branch'],
        $result_row['deployment_date'],
        $result_row['retired_military'],
        $result_row['discharged_military'],
        $result_row['wounded_veteran'],
        $result_row['incarcerated'],
        $result_row['juvenile_record'],
        $result_row['school_trouble']
        );
    return $theApp;
}
?>
