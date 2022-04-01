<?php
include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/BigApplication.php');

/*
 * add a person to dbPersons table: if already there, return false
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
            $big->get_EC_relation() . '","' .
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


?>