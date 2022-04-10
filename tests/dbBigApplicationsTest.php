<?php
// Test suite for dbBigApplications

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../database/dbBigApplications.php');
include_once(dirname(__FILE__).'/../domain/BigApplication.php');
class dbBigApplicationsTest extends TestCase {
    function testdbBigApplications() {
        $email = "susanl@aol.com";
        $id = 123456;
        $first_name = "Susan";
        $last_name = "Last";
        $languages = "eng, span";
        $primary_language = "eng";
        $preferred_name = "Susan";
        $birthday = "01/01/1970";
        $cell_phone = "5401234567";
        $can_text_cell = 1;
        $home_phone = "5405403403";
        $gender = "other";
        $address = "17493 road drive";
        $city = "Fredericksburg";
        $state = "VA";
        $zip = 45697;
        $race = "White";
        $apply_reason = "example";
        $life_changes = "something";
        $secondary_email = "se";
        $ssn = "34567889";
        $relationship_status = "relation";
        $orientation = "o";
        $faith = "faith";
        $DL_number = "number";
        $DL_state = "state";
        $DL_expiration = "2026-01-01";
        $emergency_contact = "emerg";
        $EC_number = "EC_number";
        $EC_relation = "EC_relation";
        $job_title = "jt";
        $employer = "emp";
        $employer_address = "empadd";
        $employer_city = "empcity";
        $employer_state = "empstate";
        $employer_zip = "empzip";
        $can_contact_work = 0;
        $work_length = "work_length";
        $work_hours = "work_hours";
        $highest_education = "high_edu";
        $years_completed = 10;
        $graduation_year = 2020;
        $ohio = True;
        $prev_add_1_date = "2020-01-05";
        $prev_add_1_add = "prevadd1add";
        $prev_add_2_date = "2015-05-03";
        $prev_add_2_add = "prevadd2add";
        $prev_add_3_date = "2006-04-12";
        $prev_add_3_add = "prevadd3add";
        $military_experience = True;
        $military_branch = "branch";
        $date_of_service = "dos";
        $military_status = "milstatus";
        $military_discharge = "mildis";
        $significant_name = "signame";
        $significant_number = "signum";
        $significant_email = "sigemail";
        $significant_relationship = "sigrel";
        $significant_years_known = 8;
        $professional_reference_name = "prorefname";
        $professional_reference_number = "prorefnum";
        $professional_reference_email = "prorefemail";
        $professional_reference_relationship = "prorefrel";
        $professional_reference_years_known = 4;
        $personal_reference_name = "perrefname";
        $personal_reference_number = "perrefnum";
        $personal_reference_email = "perrefemail";
        $personal_reference_relationship = "perrefrel";
        $personal_reference_years_known = 10;
        $worked_with_youth = 1;
        $organization_1 = "org1";
        $organization_1_manager = "org1manager";
        $organization_1_number = "org1num";
        $organization_1_email = "org1email";
        $organization_1_dates = "org1dates";
        $organization_1_reason = "org1reason";
        $organization_2 = "org2";
        $organization_2_manager = "org2manager";
        $organization_2_number = "org2num";
        $organization_2_email = "org2email";
        $organization_2_dates = "org2dates";
        $organization_2_reason = "org2reason";
        $organization_3 = "org3";
        $organization_3_manager = "org3manager";
        $organization_3_number = "org3num";
        $organization_3_email = "org3email";
        $organization_3_dates = "org3dates";
        $organization_3_reason = "org3reason";
        $organization_4 = "org4";
        $organization_4_manager = "org4manager";
        $organization_4_number = "org4num";
        $organization_4_email = "org4email";
        $organization_4_dates = "org4dates";
        $organization_4_reason = "org4reason";
        $community_mentor = 0;
        $community_couple = 0;
        $school_mentor = 1;
        $commitment_concerns = "commitmentconcerns";
        $interest_in_children = "interest";
        $comfortable_driving_distance = "comfortdriving";
        $interview_availability = "interview";
        $uncomfortable_traits = "uncomforttraits";
        $big_sister_with_little_brother = 0;
        $weapons_at_home = 1;
        $concealed_permit = 0;
        $pets = "pets";
        $other_people_in_house = 1;
        $other_1_name = "other1name";
        $other_1_age = 4;
        $other_1_relationship = "other1rel";
        $other_2_name = "other2name";
        $other_2_age = 26;
        $other_2_relationship = "other2rel";
        $other_3_name = "other3name";
        $other_3_age = 8;
        $other_3_relationship = "other3rel";
        $other_4_name = "other4name";
        $other_4_age = 37;
        $other_4_relationship = "other4rel";
        $other_5_name = null;
        $other_5_age = 0;
        $other_5_relationship = null;
        $questions_or_comments = "qoc";
        $convicted_felon = "felon";
        $driving_citations = "citations";
        $conflicting_convictions = "conflicts";
        $fail_to_care = "failtocare";
        $charged_with_abuse = "abuse";
        $health_limitations = "health";
        $mental_help = 0;
        $substance_abuse_history = 0;
        $sober_two_years = 1;
        $illegal_drugs = 0;
        $auto_insurance = 1;
        $can_submit_insurance_copy = 1;
        $sports_activities = "sports";
        $stem_activities = "stem";
        $arts_crafts_activities = "crafts";
        $outdoor_activities = "outdooract";
        $games_activities = "games";
        $misc_activities = "misc";
        $quiet_talkitive = 0;
        $outdoor_indoor = 1;
        $watch_do = 1;
        $other_interests = "other";

        $app = new BigApplication($email, $id, $first_name, $last_name, $languages, $primary_language, $preferred_name, $birthday,
            $cell_phone, $can_text_cell, $home_phone, $gender, $address, $city, $state, $zip, $race, $apply_reason, $life_changes,
            $secondary_email, $ssn, $relationship_status, $orientation, $faith, $DL_number, $DL_state, $DL_expiration,
            $emergency_contact, $EC_number, $EC_relation, $job_title, $employer, $employer_address, $employer_city,
            $employer_state, $employer_zip, $can_contact_work, $work_length, $work_hours, $highest_education, $years_completed,
            $graduation_year, $ohio, $prev_add_1_date, $prev_add_1_add, $prev_add_2_date, $prev_add_2_add, $prev_add_3_date,
            $prev_add_3_add, $military_experience, $military_branch, $date_of_service, $military_status, $military_discharge,
            $significant_name, $significant_number, $significant_email, $significant_relationship, $significant_years_known,
            $professional_reference_name, $professional_reference_number, $professional_reference_email,
            $professional_reference_relationship, $professional_reference_years_known, $personal_reference_name,
            $personal_reference_number, $personal_reference_email, $personal_reference_relationship, $personal_reference_years_known,
            $worked_with_youth, $organization_1, $organization_1_manager, $organization_1_number, $organization_1_email,
            $organization_1_dates, $organization_1_reason, $organization_2, $organization_2_manager, $organization_2_number,
            $organization_2_email, $organization_2_dates, $organization_2_reason, $organization_3, $organization_3_manager,
            $organization_3_number, $organization_3_email, $organization_3_dates, $organization_3_reason, $organization_4,
            $organization_4_manager, $organization_4_number, $organization_4_email, $organization_4_dates, $organization_4_reason,
            $community_mentor, $community_couple, $school_mentor, $commitment_concerns, $interest_in_children,
            $comfortable_driving_distance, $interview_availability, $uncomfortable_traits, $big_sister_with_little_brother,
            $weapons_at_home, $concealed_permit, $pets, $other_people_in_house, $other_1_name, $other_1_age, $other_1_relationship,
            $other_2_name, $other_2_age, $other_2_relationship, $other_3_name, $other_3_age, $other_3_relationship, $other_4_name,
            $other_4_age, $other_4_relationship, $other_5_name, $other_5_age, $other_5_relationship, $questions_or_comments,
            $convicted_felon, $driving_citations, $conflicting_convictions, $fail_to_care, $charged_with_abuse,
            $health_limitations, $mental_help, $substance_abuse_history, $sober_two_years, $illegal_drugs, $auto_insurance,
            $can_submit_insurance_copy, $sports_activities, $stem_activities, $arts_crafts_activities, $outdoor_activities,
            $games_activities, $misc_activities, $quiet_talkitive, $outdoor_indoor, $watch_do, $other_interests
        );

        $this->assertTrue(add_big_application($app));

        //test make a big application
        $a = array("id"=>$id, "secondary_email"=>$secondary_email, "ssn"=>$ssn, "relationship_status"=>$relationship_status,
            "orientation"=>$orientation, "faith"=>$faith, "DL_number"=>$DL_number, "DL_state"=>$DL_state, "DL_expiration"=>$DL_expiration,
            "emergency_contact"=>$emergency_contact, "EC_number"=>$EC_number, "EC_relation"=>$EC_relation, "job_title"=>$job_title,
            "employer"=>$employer, "employer_address"=>$employer_address, "employer_city"=>$employer_city,
            "employer_state"=>$employer_state, "employer_zip"=>$employer_zip, "can_contact_work"=>$can_contact_work,
            "work_length"=>$work_length, "work_hours"=>$work_hours, "highest_education"=>$highest_education,
            "years_completed"=>$years_completed, "graduation_year"=>$graduation_year, "ohio"=>$ohio,
            "prev_add_1_date"=>$prev_add_1_date, "prev_add_1_add"=>$prev_add_1_add, "prev_add_2_date"=>$prev_add_2_date,
            "prev_add_2_add"=>$prev_add_2_add, "prev_add_3_date"=>$prev_add_3_date, "prev_add_3_add"=>$prev_add_3_add,
            "military_experience"=>$military_experience, "military_branch"=>$military_branch, "date_of_service"=>$date_of_service,
            "military_status"=>$military_status, "military_discharge"=>$military_discharge, "significant_name"=>$significant_name,
            "significant_number"=>$significant_number, "significant_email"=>$significant_email,
            "significant_relationship"=>$significant_relationship, "significant_years_known"=>$significant_years_known,
            "professional_reference_name"=>$professional_reference_name,
            "professional_reference_number"=>$professional_reference_number,
            "professional_reference_email"=>$professional_reference_email,
            "professional_reference_relationship"=>$professional_reference_relationship,
            "professional_reference_years_known"=>$professional_reference_years_known,
            "personal_reference_name"=>$personal_reference_name, "personal_reference_number"=>$personal_reference_number,
            "personal_reference_email"=>$personal_reference_email, "personal_reference_relationship"=>$personal_reference_relationship,
            "personal_reference_years_known"=>$personal_reference_years_known, "worked_with_youth"=>$worked_with_youth,
            "organization_1"=>$organization_1, "organization_1_manager"=>$organization_1_manager,
            "organization_1_number"=>$organization_1_number, "organization_1_email"=>$organization_1_email,
            "organization_1_dates"=>$organization_1_dates, "organization_1_reason"=>$organization_1_reason,
            "organization_2"=>$organization_2, "organization_2_manager"=>$organization_2_manager,
            "organization_2_number"=>$organization_2_number, "organization_2_email"=>$organization_2_email,
            "organization_2_dates"=>$organization_2_dates, "organization_2_reason"=>$organization_2_reason,
            "organization_3"=>$organization_3, "organization_3_manager"=>$organization_3_manager,
            "organization_3_number"=>$organization_3_number, "organization_3_email"=>$organization_3_email,
            "organization_3_dates"=>$organization_3_dates, "organization_3_reason"=>$organization_3_reason,
            "organization_4"=>$organization_4, "organization_4_manager"=>$organization_4_manager,
            "organization_4_number"=>$organization_4_number, "organization_4_email"=>$organization_4_email,
            "organization_4_dates"=>$organization_4_dates, "organization_4_reason"=>$organization_4_reason,
            "community_mentor"=>$community_mentor, "community_couple"=>$community_couple, "school_mentor"=>$school_mentor,
            "commitment_concerns"=>$commitment_concerns, "interest_in_children"=>$interest_in_children,
            "comfortable_driving_distance"=>$comfortable_driving_distance, "interview_availability"=>$interview_availability,
            "uncomfortable_traits"=>$uncomfortable_traits, "big_sister_with_little_brother"=>$big_sister_with_little_brother,
            "weapons_at_home"=>$weapons_at_home, "concealed_permit"=>$concealed_permit, "pets"=>$pets,
            "other_people_in_house"=>$other_people_in_house, "other_1_name"=>$other_1_name, "other_1_age"=>$other_1_age,
            "other_1_relationship"=>$other_1_relationship, "other_2_name"=>$other_2_name, "other_2_age"=>$other_2_age,
            "other_2_relationship"=>$other_2_relationship, "other_3_name"=>$other_3_name, "other_3_age"=>$other_3_age,
            "other_3_relationship"=>$other_3_relationship, "other_4_name"=>$other_4_name, "other_4_age"=>$other_4_age,
            "other_4_relationship"=>$other_4_relationship, "other_5_name"=>$other_5_name, "other_5_age"=>$other_5_age,
            "other_5_relationship"=>$other_5_relationship, "questions_or_comments"=>$questions_or_comments,
            "convicted_felon"=>$convicted_felon, "driving_citations"=>$driving_citations,
            "conflicting_convictions"=>$conflicting_convictions, "fail_to_care"=>$fail_to_care,
            "charged_with_abuse"=>$charged_with_abuse, "health_limitations"=>$health_limitations, "mental_help"=>$mental_help,
            "substance_abuse_history"=>$substance_abuse_history, "sober_two_years"=>$sober_two_years,
            "illegal_drugs"=>$illegal_drugs, "auto_insurance"=>$auto_insurance,
            "can_submit_insurance_copy"=>$can_submit_insurance_copy, "sports_activities"=>$sports_activities,
            "stem_activities"=>$stem_activities, "arts_crafts_activities"=>$arts_crafts_activities,
            "outdoor_activities"=>$outdoor_activities, "games_activities"=>$games_activities, "misc_activities"=>$misc_activities,
            "quiet_talkitive"=>$quiet_talkitive, "outdoor_indoor"=>$outdoor_indoor, "watch_do"=>$watch_do,
            "other_interests"=>$other_interests
        );
        $big = make_a_big_application($a);
        $this->assertTrue($big->get_id() == $id);
        $this->assertTrue($big->get_secondary_email() == $secondary_email);
        $this->assertTrue($big->get_ssn() == $ssn);
        $this->assertTrue($big->get_relationship_status() == $relationship_status);
        $this->assertTrue($big->get_orientation() == $orientation);
        $this->assertTrue($big->get_faith() == $faith);
        $this->assertTrue($big->get_DL_number() == $DL_number);
        $this->assertTrue($big->get_DL_state() == $DL_state);
        $this->assertTrue($big->get_DL_expiration() == $DL_expiration);
        $this->assertTrue($big->get_emergency_contact() == $emergency_contact);
        $this->assertTrue($big->get_EC_number() == $EC_number);
        $this->assertTrue($big->get_EC_relation() == $EC_relation);
        $this->assertTrue($big->get_job_title() == $job_title);
        $this->assertTrue($big->get_employer() == $employer);
        $this->assertTrue($big->get_employer_address() == $employer_address);
        $this->assertTrue($big->get_employer_city() == $employer_city);
        $this->assertTrue($big->get_employer_state() == $employer_state);
        $this->assertTrue($big->get_employer_zip() == $employer_zip);
        $this->assertTrue($big->get_can_contact_work() == $can_contact_work);
        $this->assertTrue($big->get_work_length() == $work_length);
        $this->assertTrue($big->get_work_hours() == $work_hours);
        $this->assertTrue($big->get_highest_education() == $highest_education);
        $this->assertTrue($big->get_years_completed() == $years_completed);
        $this->assertTrue($big->get_graduation_year() == $graduation_year);
        $this->assertTrue($big->get_ohio() == $ohio);
        $this->assertTrue($big->get_prev_add_1_date() == $prev_add_1_date);
        $this->assertTrue($big->get_prev_add_1_add() == $prev_add_1_add);
        $this->assertTrue($big->get_prev_add_2_date() == $prev_add_2_date);
        $this->assertTrue($big->get_prev_add_2_add() == $prev_add_2_add);
        $this->assertTrue($big->get_prev_add_3_date() == $prev_add_3_date);
        $this->assertTrue($big->get_prev_add_3_add() == $prev_add_3_add);
        $this->assertTrue($big->get_military_experience() == $military_experience);
        $this->assertTrue($big->get_military_branch() == $military_branch);
        $this->assertTrue($big->get_date_of_service() == $date_of_service);
        $this->assertTrue($big->get_military_status() == $military_status);
        $this->assertTrue($big->get_military_discharge() == $military_discharge);
        $this->assertTrue($big->get_significant_name() == $significant_name);
        $this->assertTrue($big->get_significant_number() == $significant_number);
        $this->assertTrue($big->get_significant_email() == $significant_email);
        $this->assertTrue($big->get_significant_relationship() == $significant_relationship);
        $this->assertTrue($big->get_significant_years_known() == $significant_years_known);
        $this->assertTrue($big->get_professional_reference_name() == $professional_reference_name);
        $this->assertTrue($big->get_professional_reference_number() == $professional_reference_number);
        $this->assertTrue($big->get_professional_reference_email() == $professional_reference_email);
        $this->assertTrue($big->get_professional_reference_relationship() == $professional_reference_relationship);
        $this->assertTrue($big->get_professional_reference_years_known() == $professional_reference_years_known);
        $this->assertTrue($big->get_personal_reference_name() == $personal_reference_name);
        $this->assertTrue($big->get_personal_reference_number() == $personal_reference_number);
        $this->assertTrue($big->get_personal_reference_email() == $personal_reference_email);
        $this->assertTrue($big->get_personal_reference_relationship() == $personal_reference_relationship);
        $this->assertTrue($big->get_personal_reference_years_known() == $personal_reference_years_known);
        $this->assertTrue($big->get_worked_with_youth() == $worked_with_youth);
        $this->assertTrue($big->get_organization_1() == $organization_1);
        $this->assertTrue($big->get_organization_1_manager() == $organization_1_manager);
        $this->assertTrue($big->get_organization_1_number() == $organization_1_number);
        $this->assertTrue($big->get_organization_1_email() == $organization_1_email);
        $this->assertTrue($big->get_organization_1_dates() == $organization_1_dates);
        $this->assertTrue($big->get_organization_1_reason() == $organization_1_reason);
        $this->assertTrue($big->get_organization_2() == $organization_2);
        $this->assertTrue($big->get_organization_2_manager() == $organization_2_manager);
        $this->assertTrue($big->get_organization_2_number() == $organization_2_number);
        $this->assertTrue($big->get_organization_2_email() == $organization_2_email);
        $this->assertTrue($big->get_organization_2_dates() == $organization_2_dates);
        $this->assertTrue($big->get_organization_2_reason() == $organization_2_reason);
        $this->assertTrue($big->get_organization_3() == $organization_3);
        $this->assertTrue($big->get_organization_3_manager() == $organization_3_manager);
        $this->assertTrue($big->get_organization_3_number() == $organization_3_number);
        $this->assertTrue($big->get_organization_3_email() == $organization_3_email);
        $this->assertTrue($big->get_organization_3_dates() == $organization_3_dates);
        $this->assertTrue($big->get_organization_3_reason() == $organization_3_reason);
        $this->assertTrue($big->get_organization_4() == $organization_4);
        $this->assertTrue($big->get_organization_4_manager() == $organization_4_manager);
        $this->assertTrue($big->get_organization_4_number() == $organization_4_number);
        $this->assertTrue($big->get_organization_4_email() == $organization_4_email);
        $this->assertTrue($big->get_organization_4_dates() == $organization_4_dates);
        $this->assertTrue($big->get_organization_4_reason() == $organization_4_reason);
        $this->assertTrue($big->get_community_mentor() == $community_mentor);
        $this->assertTrue($big->get_community_couple() == $community_couple);
        $this->assertTrue($big->get_school_mentor() == $school_mentor);
        $this->assertTrue($big->get_commitment_concerns() == $commitment_concerns);
        $this->assertTrue($big->get_interest_in_children() == $interest_in_children);
        $this->assertTrue($big->get_comfortable_driving_distance() == $comfortable_driving_distance);
        $this->assertTrue($big->get_interview_availability() == $interview_availability);
        $this->assertTrue($big->get_uncomfortable_traits() == $uncomfortable_traits);
        $this->assertTrue($big->get_big_sister_with_little_brother() == $big_sister_with_little_brother);
        $this->assertTrue($big->get_weapons_at_home() == $weapons_at_home);
        $this->assertTrue($big->get_concealed_permit() == $concealed_permit);
        $this->assertTrue($big->get_pets() == $pets);
        $this->assertTrue($big->get_other_people_in_house() == $other_people_in_house);
        $this->assertTrue($big->get_other_1_name() == $other_1_name);
        $this->assertTrue($big->get_other_1_age() == $other_1_age);
        $this->assertTrue($big->get_other_1_relationship() == $other_1_relationship);
        $this->assertTrue($big->get_other_2_name() == $other_2_name);
        $this->assertTrue($big->get_other_2_age() == $other_2_age);
        $this->assertTrue($big->get_other_2_relationship() == $other_2_relationship);
        $this->assertTrue($big->get_other_3_name() == $other_3_name);
        $this->assertTrue($big->get_other_3_age() == $other_3_age);
        $this->assertTrue($big->get_other_3_relationship() == $other_3_relationship);
        $this->assertTrue($big->get_other_4_name() == $other_4_name);
        $this->assertTrue($big->get_other_4_age() == $other_4_age);
        $this->assertTrue($big->get_other_4_relationship() == $other_4_relationship);
        $this->assertTrue($big->get_other_5_name() == $other_5_name);
        $this->assertTrue($big->get_other_5_age() == $other_5_age);
        $this->assertTrue($big->get_other_5_relationship() == $other_5_relationship);
        $this->assertTrue($big->get_questions_or_comments() == $questions_or_comments);
        $this->assertTrue($big->get_convicted_felon() == $convicted_felon);
        $this->assertTrue($big->get_driving_citations() == $driving_citations);
        $this->assertTrue($big->get_conflicting_convictions() == $conflicting_convictions);
        $this->assertTrue($big->get_fail_to_care() == $fail_to_care);
        $this->assertTrue($big->get_charged_with_abuse() == $charged_with_abuse);
        $this->assertTrue($big->get_health_limitations() == $health_limitations);
        $this->assertTrue($big->get_mental_help() == $mental_help);
        $this->assertTrue($big->get_substance_abuse_history() == $substance_abuse_history);
        $this->assertTrue($big->get_sober_two_years() == $sober_two_years);
        $this->assertTrue($big->get_illegal_drugs() == $illegal_drugs);
        $this->assertTrue($big->get_auto_insurance() == $auto_insurance);
        $this->assertTrue($big->get_can_submit_insurance_copy() == $can_submit_insurance_copy);
        $this->assertTrue($big->get_sports_activities() == $sports_activities);
        $this->assertTrue($big->get_stem_activities() == $stem_activities);
        $this->assertTrue($big->get_arts_crafts_activities() == $arts_crafts_activities);
        $this->assertTrue($big->get_outdoor_activities() == $outdoor_activities);
        $this->assertTrue($big->get_games_activities() == $games_activities);
        $this->assertTrue($big->get_misc_activities() == $misc_activities);
        $this->assertTrue($big->get_quiet_talkitive() == $quiet_talkitive);
        $this->assertTrue($big->get_outdoor_indoor() == $outdoor_indoor);
        $this->assertTrue($big->get_watch_do() == $watch_do);
        $this->assertTrue($big->get_other_interests() == $other_interests);

        // retrieve the BigApplication and test the fields
        $big = retrieve_big_application($id);
        $this->assertTrue($big!==False);
        $this->assertTrue($big->get_secondary_email() == $secondary_email);
        $this->assertTrue($big->get_ssn() == $ssn);
        $this->assertTrue($big->get_relationship_status() == $relationship_status);
        $this->assertTrue($big->get_orientation() == $orientation);
        $this->assertTrue($big->get_faith() == $faith);
        $this->assertTrue($big->get_DL_number() == $DL_number);
        $this->assertTrue($big->get_DL_state() == $DL_state);
        $this->assertTrue($big->get_DL_expiration() == $DL_expiration);
        $this->assertTrue($big->get_emergency_contact() == $emergency_contact);
        $this->assertTrue($big->get_EC_number() == $EC_number);
        $this->assertTrue($big->get_EC_relation() == $EC_relation);
        $this->assertTrue($big->get_job_title() == $job_title);
        $this->assertTrue($big->get_employer() == $employer);
        $this->assertTrue($big->get_employer_address() == $employer_address);
        $this->assertTrue($big->get_employer_city() == $employer_city);
        $this->assertTrue($big->get_employer_state() == $employer_state);
        $this->assertTrue($big->get_employer_zip() == $employer_zip);
        $this->assertTrue($big->get_can_contact_work() == $can_contact_work);
        $this->assertTrue($big->get_work_length() == $work_length);
        $this->assertTrue($big->get_work_hours() == $work_hours);
        $this->assertTrue($big->get_highest_education() == $highest_education);
        $this->assertTrue($big->get_years_completed() == $years_completed);
        $this->assertTrue($big->get_graduation_year() == $graduation_year);
        $this->assertTrue($big->get_ohio() == $ohio);
        $this->assertTrue($big->get_prev_add_1_date() == $prev_add_1_date);
        $this->assertTrue($big->get_prev_add_1_add() == $prev_add_1_add);
        $this->assertTrue($big->get_prev_add_2_date() == $prev_add_2_date);
        $this->assertTrue($big->get_prev_add_2_add() == $prev_add_2_add);
        $this->assertTrue($big->get_prev_add_3_date() == $prev_add_3_date);
        $this->assertTrue($big->get_prev_add_3_add() == $prev_add_3_add);
        $this->assertTrue($big->get_military_experience() == $military_experience);
        $this->assertTrue($big->get_military_branch() == $military_branch);
        $this->assertTrue($big->get_date_of_service() == $date_of_service);
        $this->assertTrue($big->get_military_status() == $military_status);
        $this->assertTrue($big->get_military_discharge() == $military_discharge);
        $this->assertTrue($big->get_significant_name() == $significant_name);
        $this->assertTrue($big->get_significant_number() == $significant_number);
        $this->assertTrue($big->get_significant_email() == $significant_email);
        $this->assertTrue($big->get_significant_relationship() == $significant_relationship);
        $this->assertTrue($big->get_significant_years_known() == $significant_years_known);
        $this->assertTrue($big->get_professional_reference_name() == $professional_reference_name);
        $this->assertTrue($big->get_professional_reference_number() == $professional_reference_number);
        $this->assertTrue($big->get_professional_reference_email() == $professional_reference_email);
        $this->assertTrue($big->get_professional_reference_relationship() == $professional_reference_relationship);
        $this->assertTrue($big->get_professional_reference_years_known() == $professional_reference_years_known);
        $this->assertTrue($big->get_personal_reference_name() == $personal_reference_name);
        $this->assertTrue($big->get_personal_reference_number() == $personal_reference_number);
        $this->assertTrue($big->get_personal_reference_email() == $personal_reference_email);
        $this->assertTrue($big->get_personal_reference_relationship() == $personal_reference_relationship);
        $this->assertTrue($big->get_personal_reference_years_known() == $personal_reference_years_known);
        $this->assertTrue($big->get_worked_with_youth() == $worked_with_youth);
        $this->assertTrue($big->get_organization_1() == $organization_1);
        $this->assertTrue($big->get_organization_1_manager() == $organization_1_manager);
        $this->assertTrue($big->get_organization_1_number() == $organization_1_number);
        $this->assertTrue($big->get_organization_1_email() == $organization_1_email);
        $this->assertTrue($big->get_organization_1_dates() == $organization_1_dates);
        $this->assertTrue($big->get_organization_1_reason() == $organization_1_reason);
        $this->assertTrue($big->get_organization_2() == $organization_2);
        $this->assertTrue($big->get_organization_2_manager() == $organization_2_manager);
        $this->assertTrue($big->get_organization_2_number() == $organization_2_number);
        $this->assertTrue($big->get_organization_2_email() == $organization_2_email);
        $this->assertTrue($big->get_organization_2_dates() == $organization_2_dates);
        $this->assertTrue($big->get_organization_2_reason() == $organization_2_reason);
        $this->assertTrue($big->get_organization_3() == $organization_3);
        $this->assertTrue($big->get_organization_3_manager() == $organization_3_manager);
        $this->assertTrue($big->get_organization_3_number() == $organization_3_number);
        $this->assertTrue($big->get_organization_3_email() == $organization_3_email);
        $this->assertTrue($big->get_organization_3_dates() == $organization_3_dates);
        $this->assertTrue($big->get_organization_3_reason() == $organization_3_reason);
        $this->assertTrue($big->get_organization_4() == $organization_4);
        $this->assertTrue($big->get_organization_4_manager() == $organization_4_manager);
        $this->assertTrue($big->get_organization_4_number() == $organization_4_number);
        $this->assertTrue($big->get_organization_4_email() == $organization_4_email);
        $this->assertTrue($big->get_organization_4_dates() == $organization_4_dates);
        $this->assertTrue($big->get_organization_4_reason() == $organization_4_reason);
        $this->assertTrue($big->get_community_mentor() == $community_mentor);
        $this->assertTrue($big->get_community_couple() == $community_couple);
        $this->assertTrue($big->get_school_mentor() == $school_mentor);
        $this->assertTrue($big->get_commitment_concerns() == $commitment_concerns);
        $this->assertTrue($big->get_interest_in_children() == $interest_in_children);
        $this->assertTrue($big->get_comfortable_driving_distance() == $comfortable_driving_distance);
        $this->assertTrue($big->get_interview_availability() == $interview_availability);
        $this->assertTrue($big->get_uncomfortable_traits() == $uncomfortable_traits);
        $this->assertTrue($big->get_big_sister_with_little_brother() == $big_sister_with_little_brother);
        $this->assertTrue($big->get_weapons_at_home() == $weapons_at_home);
        $this->assertTrue($big->get_concealed_permit() == $concealed_permit);
        $this->assertTrue($big->get_pets() == $pets);
        $this->assertTrue($big->get_other_people_in_house() == $other_people_in_house);
        $this->assertTrue($big->get_other_1_name() == $other_1_name);
        $this->assertTrue($big->get_other_1_age() == $other_1_age);
        $this->assertTrue($big->get_other_1_relationship() == $other_1_relationship);
        $this->assertTrue($big->get_other_2_name() == $other_2_name);
        $this->assertTrue($big->get_other_2_age() == $other_2_age);
        $this->assertTrue($big->get_other_2_relationship() == $other_2_relationship);
        $this->assertTrue($big->get_other_3_name() == $other_3_name);
        $this->assertTrue($big->get_other_3_age() == $other_3_age);
        $this->assertTrue($big->get_other_3_relationship() == $other_3_relationship);
        $this->assertTrue($big->get_other_4_name() == $other_4_name);
        $this->assertTrue($big->get_other_4_age() == $other_4_age);
        $this->assertTrue($big->get_other_4_relationship() == $other_4_relationship);
        $this->assertTrue($big->get_other_5_name() == $other_5_name);
        $this->assertTrue($big->get_other_5_age() == $other_5_age);
        $this->assertTrue($big->get_other_5_relationship() == $other_5_relationship);
        $this->assertTrue($big->get_questions_or_comments() == $questions_or_comments);
        $this->assertTrue($big->get_convicted_felon() == $convicted_felon);
        $this->assertTrue($big->get_driving_citations() == $driving_citations);
        $this->assertTrue($big->get_conflicting_convictions() == $conflicting_convictions);
        $this->assertTrue($big->get_fail_to_care() == $fail_to_care);
        $this->assertTrue($big->get_charged_with_abuse() == $charged_with_abuse);
        $this->assertTrue($big->get_health_limitations() == $health_limitations);
        $this->assertTrue($big->get_mental_help() == $mental_help);
        $this->assertTrue($big->get_substance_abuse_history() == $substance_abuse_history);
        $this->assertTrue($big->get_sober_two_years() == $sober_two_years);
        $this->assertTrue($big->get_illegal_drugs() == $illegal_drugs);
        $this->assertTrue($big->get_auto_insurance() == $auto_insurance);
        $this->assertTrue($big->get_can_submit_insurance_copy() == $can_submit_insurance_copy);
        $this->assertTrue($big->get_sports_activities() == $sports_activities);
        $this->assertTrue($big->get_stem_activities() == $stem_activities);
        $this->assertTrue($big->get_arts_crafts_activities() == $arts_crafts_activities);
        $this->assertTrue($big->get_outdoor_activities() == $outdoor_activities);
        $this->assertTrue($big->get_games_activities() == $games_activities);
        $this->assertTrue($big->get_misc_activities() == $misc_activities);
        $this->assertTrue($big->get_quiet_talkitive() == $quiet_talkitive);
        $this->assertTrue($big->get_outdoor_indoor() == $outdoor_indoor);
        $this->assertTrue($big->get_watch_do() == $watch_do);
        $this->assertTrue($big->get_other_interests() == $other_interests);

        // remove the BigApplication
        $this->assertTrue(remove_big_application($id));

        echo("dbBigApplicationsTest complete\n");
    }
}
?>