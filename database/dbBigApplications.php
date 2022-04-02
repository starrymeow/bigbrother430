<?php
include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/BigApplication.php');
include_once(dirname(__FILE__).'dbApplication.php');

/*
 * add a BigApplication to dbBigApplications table: if already there, return false
 */
function add_big_application($big) {
    if (!$big instanceof BigApplication)
        die("Error: add_big_application type mismatch");
    $con=connect();
    $query = "SELECT * FROM dbBigApplications WHERE id = '" . $big->get_id() . "'";
    $result = mysqli_query($con,$query);
    //if there's no entry for this id, add it
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_query($con,'INSERT INTO dbBigApplications VALUES("' .
            $big->get_id() . '","' .
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
            $big->get_EC_relation() . '","' .
            $big->get_job_title() . '","' .
            $big->get_employer() . '","' .
            $big->get_employer_address() . '","' .
            $big->get_employer_city() . '","' .
            $big->get_employer_state() . '","' .
            $big->get_employer_zip() . '","' .
            $big->get_can_cotact_work() . '","' .
            $big->get_work_length() . '","' .
            $big->get_work_hours() . '","' .
            $big->get_highest_education() . '","' .
            $big->get_years_completed() . '","' .
            $big->get_graduation_year() . '","' .
            $big->get_ohio() . '","' .
            $big->get_prev_add_1_date() . '","' .
            $big->get_prev_add_1_add() . '","' .
            $big->get_prev_add_2_date() . '","' .
            $big->get_prev_add_2_add() . '","' .
            $big->get_prev_add_3_date() . '","' .
            $big->get_prev_add_3_add() . '","' .
            $big->get_military_experiece() . '","' .
            $big->get_military_branch() . '","' .
            $big->get_date_of_service() . '","' .
            $big->get_military_status() . '","' .
            $big->get_military_character() . '","' .
            $big->get_significant_name() . '","' .
            $big->get_significant_number() . '","' .
            $big->get_significant_email() . '","' .
            $big->get_significant_relationship() . '","' .
            $big->get_significant_years_known() . '","' .
            $big->get_professional_reference_name() . '","' .
            $big->get_professional_reference_number() . '","' .
            $big->get_professional_reference_email() . '","' .
            $big->get_professional_reference_relationship() . '","' .
            $big->get_professional_reference_years_known() . '","' .
            $big->get_personal_reference_name() . '","' .
            $big->get_personal_reference_number() . '","' .
            $big->get_personal_reference_email() . '","' .
            $big->get_personal_reference_relationship() . '","' .
            $big->get_personal_reference_years_known() . '","' .
            $big->get_personal_reference_years_known() . '","' .
            $big->get_worked_with_youth() . '","' .
            $big->get_organization_1() . '","' .
            $big->get_organization_1_manager() . '","' .
            $big->get_organization_1_number() . '","' .
            $big->get_organization_1_email() . '","' .
            $big->get_organization_1_dates() . '","' .
            $big->get_organization_1_reason() . '","' .
            $big->get_organization_2() . '","' .
            $big->get_organization_2_manager() . '","' .
            $big->get_organization_2_number() . '","' .
            $big->get_organization_2_email() . '","' .
            $big->get_organization_2_dates() . '","' .
            $big->get_organization_2_reason() . '","' .
            $big->get_organization_3() . '","' .
            $big->get_organization_3_manager() . '","' .
            $big->get_organization_3_number() . '","' .
            $big->get_organization_3_email() . '","' .
            $big->get_organization_3_dates() . '","' .
            $big->get_organization_3_reason() . '","' .
            $big->get_organization_4() . '","' .
            $big->get_organization_4_manager() . '","' .
            $big->get_organization_4_number() . '","' .
            $big->get_organization_4_email() . '","' .
            $big->get_organization_4_dates() . '","' .
            $big->get_organization_4_reason() . '","' .
            $big->get_community_mentor() . '","' .
            $big->get_community_couple() . '","' .
            $big->get_school_mentor() . '","' .
            $big->get_commitment_concerns() . '","' .
            $big->get_iterest_in_children() . '","' .
            $big->get_comfortable_driving_distance() . '","' .
            $big->get_iterview_availability() . '","' .
            $big->get_uncomfortale_traits() . '","' .
            $big->get_big_sister_with_little_brother() . '","' .
            $big->get_weapons_at_home() . '","' .
            $big->get_concealed_permit() . '","' .
            $big->get_pets() . '","' .
            $big->get_other_people() . '","' .
            $big->get_other_people() . '","' .
            $big->get_other_1_name() . '","' .
            $big->get_other_1_age() . '","' .
            $big->get_other_1_relationship() . '","' .
            $big->get_other_2_name() . '","' .
            $big->get_other_2_age() . '","' .
            $big->get_other_2_relationship() . '","' .
            $big->get_other_3_name() . '","' .
            $big->get_other_3_age() . '","' .
            $big->get_other_3_relationship() . '","' .
            $big->get_other_4_name() . '","' .
            $big->get_other_4_age() . '","' .
            $big->get_other_4_relationship() . '","' .
            $big->get_other_5_name() . '","' .
            $big->get_other_5_age() . '","' .
            $big->get_other_5_relationship() . '","' .
            $big->get_commets_or_questions() . '","' .
            $big->get_convicted_felon() . '","' .
            $big->get_driving_citations() . '","' .
            $big->get_coflicting_convictions() . '","' .
            $big->get_fail_to_care() . '","' .
            $big->get_chraged_with_abuse() . '","' .
            $big->get_health_limitations() . '","' .
            $big->get_mental_help() . '","' .
            $big->get_substance_abuse_history() . '","' .
            $big->get_sober_two_years() . '","' .
            $big->get_illegal_drugs() . '","' .
            $big->get_auto_insurance() . '","' .
            $big->get_can_submit_insurance_copy() . '","' .
            $big->get_sports_activities() . '","' .
            $big->get_stem_activites() . '","' .
            $big->get_arts_crafts_activities() . '","' .
            $big->get_outdoor_activites() . '","' .
            $big->get_games_activites() . '","' .
            $big->get_misc_activites() . '","' .
            $big->get_quiet_talkitive() . '","' .
            $big->get_outdoor_indoor() . '","' .
            $big->get_watch_do() . '","' .
            $big->get_other_interests() .
            '");');
            mysqli_close($con);
            return true;
    }
    mysqli_close($con);
    return false;
}

/*
 * remove a BigApplication from dbBigApplications table.  If not there, return false
 */
function remove_big_application($id) {
    $con=connect();
    $query = 'SELECT * FROM dbBigApplications WHERE id = "' . $id . '"';
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $query = 'DELETE FROM dbBigApplications WHERE id = "' . $id . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return $result;
}

/*
 * @return a BigApplication from dbBigApplications table matching a particular id.
 * if not in table, return false
 */
function retrieve_big_application($id) {
    $con=connect();
    $query = 'SELECT * FROM dbBigApplications WHERE lower(id) = "' . strtolower($id) . '"';
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) !== 1) {
        mysqli_close($con);
        return false;
    }
    $result_row = mysqli_fetch_assoc($result);
    //var_dump($result_row);
    $theAccount = make_a_big_application($result_row);
    //var_dump($theAccount);
    mysqli_close($con);
    return $theAccount;
}

function make_a_big_application($result_row) {
    $app = retrieve_application($result_row['id']);

    $theApp = new BigApplication(
        $app->get_email(),
        $result_row['id'],
        $app->get_first_name(),
        $app->get_last_name(),
        $app->get_languages(),
        $app->get_primary_language(),
        $app->get_prefered_name(),
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
        $result_row['secondary_email'],
        $result_row['ssn'],
        $result_row['relationship_status'],
        $result_row['orientation'],
        $result_row['faith'],
        $result_row['DL_number'],
        $result_row['DL_state'],
        $result_row['DL_expiration'],
        $result_row['emergency_contact'],
        $result_row['EC_number'],
        $result_row['EC_relation'],
        $result_row['job_title'],
        $result_row['employer'],
        $result_row['employer_address'],
        $result_row['employer_city'],
        $result_row['employer_state'],
        $result_row['employer_zip'],
        $result_row['can_cotact_work'],
        $result_row['work_length'],
        $result_row['work_hours'],
        $result_row['highest_education'],
        $result_row['years_completed'],
        $result_row['graduation_year'],
        $result_row['ohio'],
        $result_row['prev_add_1_date'],
        $result_row['prev_add_1_add'],
        $result_row['prev_add_2_date'],
        $result_row['prev_add_2_add'],
        $result_row['prev_add_3_date'],
        $result_row['prev_add_3_add'],
        $result_row['military_experiece'],
        $result_row['military_branch'],
        $result_row['date_of_service'],
        $result_row['military_status'],
        $result_row['military_discharge'],
        $result_row['significant_name'],
        $result_row['significant_number'],
        $result_row['significant_email'],
        $result_row['significant_relationship'],
        $result_row['significant_years_known'],
        $result_row['professional_reference_name'],
        $result_row['professional_reference_number'],
        $result_row['professional_reference_email'],
        $result_row['professional_reference_relationship'],
        $result_row['professional_reference_years_known'],
        $result_row['personal_reference_name'],
        $result_row['personal_reference_number'],
        $result_row['personal_reference_email'],
        $result_row['personal_reference_relationship'],
        $result_row['personal_reference_years_known'],
        $result_row['personal_reference_years_known'],
        $result_row['worked_with_youth'],
        $result_row['organization_1'],
        $result_row['organization_1_manager'],
        $result_row['organization_1_number'],
        $result_row['organization_1_email'],
        $result_row['organization_1_dates'],
        $result_row['organization_1_reason'],
        $result_row['organization_2'],
        $result_row['organization_2_manager'],
        $result_row['organization_2_number'],
        $result_row['organization_2_email'],
        $result_row['organization_2_dates'],
        $result_row['organization_2_reason'],
        $result_row['organization_3'],
        $result_row['organization_3_manager'],
        $result_row['organization_3_number'],
        $result_row['organization_3_email'],
        $result_row['organization_3_dates'],
        $result_row['organization_3_reason'],
        $result_row['organization_4'],
        $result_row['organization_4_manager'],
        $result_row['organization_4_number'],
        $result_row['organization_4_email'],
        $result_row['organization_4_dates'],
        $result_row['organization_4_reason'],
        $result_row['community_mentor'],
        $result_row['community_couple'],
        $result_row['school_mentor'],
        $result_row['commitment_concerns'],
        $result_row['iterest_in_children'],
        $result_row['comfortable_driving_distance'],
        $result_row['iterview_availability'],
        $result_row['uncomfortale_traits'],
        $result_row['big_sister_with_little_brother'],
        $result_row['weapons_at_home'],
        $result_row['concealed_permit'],
        $result_row['pets'],
        $result_row['other_people'],
        $result_row['other_people'],
        $result_row['other_1_name'],
        $result_row['other_1_age'],
        $result_row['other_1_relationship'],
        $result_row['other_2_name'],
        $result_row['other_2_age'],
        $result_row['other_2_relationship'],
        $result_row['other_3_name'],
        $result_row['other_3_age'],
        $result_row['other_3_relationship'],
        $result_row['other_4_name'],
        $result_row['other_4_age'],
        $result_row['other_4_relationship'],
        $result_row['other_5_name'],
        $result_row['other_5_age'],
        $result_row['other_5_relationship'],
        $result_row['commets_or_questions'],
        $result_row['convicted_felon'],
        $result_row['driving_citations'],
        $result_row['coflicting_convictions'],
        $result_row['fail_to_care'],
        $result_row['chraged_with_abuse'],
        $result_row['health_limitations'],
        $result_row['mental_help'],
        $result_row['substance_abuse_history'],
        $result_row['sober_two_years'],
        $result_row['illegal_drugs'],
        $result_row['auto_insurance'],
        $result_row['can_submit_insurance_copy'],
        $result_row['sports_activities'],
        $result_row['stem_activites'],
        $result_row['arts_crafts_activities'],
        $result_row['outdoor_activites'],
        $result_row['games_activites'],
        $result_row['misc_activites'],
        $result_row['quiet_talkitive'],
        $result_row['outdoor_indoor'],
        $result_row['watch_do'],
        $result_row['get_other_interests']);
    return $theApp;
}
?>