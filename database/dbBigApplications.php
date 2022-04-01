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


?>