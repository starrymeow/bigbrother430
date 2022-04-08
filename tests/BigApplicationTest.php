<?php
// Test suite for Account

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../domain/BigApplication.php');
class BigApplicationTest extends TestCase {
    function testBigApplication() {
        $email = "susanl@aol.com";
        $id = 123456;
        $first_name = "Susan";
        $last_name = "Last";
        $languages = "eng, span";
        $primary_language = "eng";
        $preferred_name = "Susan";
        $birthday = "01/01/1970";
        $cell_phone = "5401234567";
        $can_text_cell = true;
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
        $ssn = "ssn";
        $relationship_status = "relation";
        $orientation = "o";
        $faith = "faith";
        $DL_number = "number";
        $DL_state = "state";
        $DL_exp = "01/01/2026";
        $emergency_contact = "emerg";
        $EC_number = "EC_number";
        $EC_relation = "EC_relation";
        $job_title = "jt";
        $employer = "emp";
        $employer_address = "empadd";
        $employer_city = "empcity";
        $employer_state = "empstate";
        $employer_zip = "empzip";
        $can_contact_work = "work_contact";
        $work_length = "work_length";
        $work_hours = "work_hours";
        $highest_education = "high_edu";
        $years_completed = "years";
        $graduation_year = "grad";
        $ohio = "ohio";
        $prev_add_1_date = "prevadd1date";
        $prev_add_1_add = "prevadd1add";
        $prev_add_2_date = "prevadd2date";
        $prev_add_2_add = "prevadd2add";
        $prev_add_3_date = "prevadd3date";
        $prev_add_3_add = "prevadd3add";
        $military_experience = "mil";
        $military_branch = "branch";
        $date_of_service = "dos";
        $military_status = "milstatus";
        $military_discharge = "mildis";
        $significant_name = "signame";
        $significant_number = "signum";
        $significant_email = "sigemail";
        $significant_relationship = "sigrel";
        $significant_years_known = "sigyears";
        $professional_reference_name = "prorefname";
        $professional_reference_number = "prorefnum";
        $professional_reference_email = "prorefemail";
        $professional_reference_relationship = "prorefrel";
        $professional_reference_years_known = "prorefyears";
        $personal_reference_name = "perrefname";
        $personal_reference_number = "perrefnum";
        $personal_reference_email =  "perrefemail";
        $personal_reference_relationship = "perrefrel";
        $personal_reference_years_known = "perrefyears";
        $worked_with_youth = "workyouth";
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
        $community_mentor = "communitymentor";
        $community_couple = "communitycouple";
        $school_mentor = "schoolmentor";
        $commitment_concerns = "commitmentconcerns";
        $interest_in_children = "interest";
        $comfortable_driving_distance = "comfortdriving";
        $interview_availability = "interview";
        $uncomfortable_traits = "uncomforttraits";
        $big_sister_with_little_brother = "bigsislittlebro";
        $weapons_at_home = "weapons";
        $concealed_permit = "concealed";
        $pets = "pets";
        $other_people_in_house = "otherpeople";
        $other_1_name = "other1name";
        $other_1_age = "other1age";
        $other_1_relationship = "other1rel";
        $other_2_name = "other2name";
        $other_2_age = "other2age";
        $other_2_relationship = "other2rel";
        $other_3_name = "other3name";
        $other_3_age = "other3age";
        $other_3_relationship = "other3rel";
        $other_4_name = "other4name";
        $other_4_age = "other4age";
        $other_4_relationship = "other4rel";
        $other_5_name = "other5name";
        $other_5_age = "other5age";
        $other_5_relationship = "other5rel";
        $questions_or_comments = "qoc";
        $convicted_felon = "felon";
        $driving_citations = "citations";
        $conflicting_convictions = "conflicts";
        $fail_to_care = "failtocare";
        $charged_with_abuse = "abuse";
        $health_limitations = "health";
        $mental_help = "mental";
        $substance_abuse_history = "substance";
        $sober_two_years = "sober";
        $illegal_drugs = "drugs";
        $auto_insurance = "auto";
        $can_submit_insurance_copy = "copy";
        $sports_activities = "sports";
        $stem_activities = "stem";
        $arts_crafts_activities = "crafts";
        $outdoor_activities = "outdooract";
        $games_activities = "games";
        $misc_activities = "misc";
        $quiet_talkitive = "quiet";
        $outdoor_indoor = "outdoor";
        $watch_do = "watch";
        $other_interests = "other";

        $app = new BigApplication($email, $id, $first_name, $last_name, $languages, $primary_language, $preferred_name, $birthday,
            $cell_phone, $can_text_cell, $home_phone, $gender, $address, $city, $state, $zip, $race, $apply_reason, $life_changes,
            $secondary_email, $ssn, $relationship_status, $orientation, $faith, $DL_number, $DL_state, $DL_exp,
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

        $this->assertTrue($app->get_secondary_email() == $secondary_email);
        $this->assertTrue($app->get_ssn() == $ssn);
        $this->assertTrue($app->get_relationship_status() == $relationship_status);
        $this->assertTrue($app->get_orientation() == $orientation);
        $this->assertTrue($app->get_faith() == $faith);
        $this->assertTrue($app->get_DL_number() == $DL_number);
        $this->assertTrue($app->get_DL_state() == $DL_state);
        $this->assertTrue($app->get_DL_expiration() == $DL_exp);
        $this->assertTrue($app->get_emergency_contact() == $emergency_contact);
        $this->assertTrue($app->get_EC_number() == $EC_number);
        $this->assertTrue($app->get_EC_relation() == $EC_relation);
        $this->assertTrue($app->get_job_title() == $job_title);
        $this->assertTrue($app->get_employer() == $employer);
        $this->assertTrue($app->get_employer_address() == $employer_address);
        $this->assertTrue($app->get_employer_city() == $employer_city);
        $this->assertTrue($app->get_employer_state() == $employer_state);
        $this->assertTrue($app->get_employer_zip() == $employer_zip);
        $this->assertTrue($app->get_can_contact_work() == $can_contact_work);
        $this->assertTrue($app->get_work_length() == $work_length);
        $this->assertTrue($app->get_work_hours() == $work_hours);
        $this->assertTrue($app->get_highest_education() == $highest_education);
        $this->assertTrue($app->get_years_completed() == $years_completed);
        $this->assertTrue($app->get_graduation_year() == $graduation_year);
        $this->assertTrue($app->get_ohio() == $ohio);
        $this->assertTrue($app->get_prev_add_1_date() == $prev_add_1_date);
        $this->assertTrue($app->get_prev_add_1_add() == $prev_add_1_add);
        $this->assertTrue($app->get_prev_add_2_date() == $prev_add_2_date);
        $this->assertTrue($app->get_prev_add_2_add() == $prev_add_2_add);
        $this->assertTrue($app->get_prev_add_3_date() == $prev_add_3_date);
        $this->assertTrue($app->get_prev_add_3_add() == $prev_add_3_add);
        $this->assertTrue($app->get_military_experience() == $military_experience);
        $this->assertTrue($app->get_military_branch() == $military_branch);
        $this->assertTrue($app->get_date_of_service() == $date_of_service);
        $this->assertTrue($app->get_military_status() == $military_status);
        $this->assertTrue($app->get_military_discharge() == $military_discharge);
        $this->assertTrue($app->get_significant_name() == $significant_name);
        $this->assertTrue($app->get_significant_number() == $significant_number);
        $this->assertTrue($app->get_significant_email() == $significant_email);
        $this->assertTrue($app->get_significant_relationship() == $significant_relationship);
        $this->assertTrue($app->get_significant_years_known() == $significant_years_known);
        $this->assertTrue($app->get_professional_reference_name() == $professional_reference_name);
        $this->assertTrue($app->get_professional_reference_number() == $professional_reference_number);
        $this->assertTrue($app->get_professional_reference_email() == $professional_reference_email);
        $this->assertTrue($app->get_professional_reference_relationship() == $professional_reference_relationship);
        $this->assertTrue($app->get_professional_reference_years_known() == $professional_reference_years_known);
        $this->assertTrue($app->get_personal_reference_name() == $personal_reference_name);
        $this->assertTrue($app->get_personal_reference_number() == $personal_reference_number);
        $this->assertTrue($app->get_personal_reference_email() == $personal_reference_email);
        $this->assertTrue($app->get_personal_reference_relationship() == $personal_reference_relationship);
        $this->assertTrue($app->get_personal_reference_years_known() == $personal_reference_years_known);
        $this->assertTrue($app->get_worked_with_youth() == $worked_with_youth);
        $this->assertTrue($app->get_organization_1() == $organization_1);
        $this->assertTrue($app->get_organization_1_manager() == $organization_1_manager);
        $this->assertTrue($app->get_organization_1_number() == $organization_1_number);
        $this->assertTrue($app->get_organization_1_email() == $organization_1_email);
        $this->assertTrue($app->get_organization_1_dates() == $organization_1_dates);
        $this->assertTrue($app->get_organization_1_reason() == $organization_1_reason);
        $this->assertTrue($app->get_organization_2() == $organization_2);
        $this->assertTrue($app->get_organization_2_manager() == $organization_2_manager);
        $this->assertTrue($app->get_organization_2_number() == $organization_2_number);
        $this->assertTrue($app->get_organization_2_email() == $organization_2_email);
        $this->assertTrue($app->get_organization_2_dates() == $organization_2_dates);
        $this->assertTrue($app->get_organization_2_reason() == $organization_2_reason);
        $this->assertTrue($app->get_organization_3() == $organization_3);
        $this->assertTrue($app->get_organization_3_manager() == $organization_3_manager);
        $this->assertTrue($app->get_organization_3_number() == $organization_3_number);
        $this->assertTrue($app->get_organization_3_email() == $organization_3_email);
        $this->assertTrue($app->get_organization_3_dates() == $organization_3_dates);
        $this->assertTrue($app->get_organization_3_reason() == $organization_3_reason);
        $this->assertTrue($app->get_organization_4() == $organization_4);
        $this->assertTrue($app->get_organization_4_manager() == $organization_4_manager);
        $this->assertTrue($app->get_organization_4_number() == $organization_4_number);
        $this->assertTrue($app->get_organization_4_email() == $organization_4_email);
        $this->assertTrue($app->get_organization_4_dates() == $organization_4_dates);
        $this->assertTrue($app->get_organization_4_reason() == $organization_4_reason);
        $this->assertTrue($app->get_community_mentor() == $community_mentor);
        $this->assertTrue($app->get_community_couple() == $community_couple);
        $this->assertTrue($app->get_school_mentor() == $school_mentor);
        $this->assertTrue($app->get_commitment_concerns() == $commitment_concerns);
        $this->assertTrue($app->get_interest_in_children() == $interest_in_children);
        $this->assertTrue($app->get_comfortable_driving_distance() == $comfortable_driving_distance);
        $this->assertTrue($app->get_interview_availability() == $interview_availability);
        $this->assertTrue($app->get_uncomfortable_traits() == $uncomfortable_traits);
        $this->assertTrue($app->get_big_sister_with_little_brother() == $big_sister_with_little_brother);
        $this->assertTrue($app->get_weapons_at_home() == $weapons_at_home);
        $this->assertTrue($app->get_concealed_permit() == $concealed_permit);
        $this->assertTrue($app->get_pets() == $pets);
        $this->assertTrue($app->get_other_people_in_house() == $other_people_in_house);
        $this->assertTrue($app->get_other_1_name() == $other_1_name);
        $this->assertTrue($app->get_other_1_age() == $other_1_age);
        $this->assertTrue($app->get_other_1_relationship() == $other_1_relationship);
        $this->assertTrue($app->get_other_2_name() == $other_2_name);
        $this->assertTrue($app->get_other_2_age() == $other_2_age);
        $this->assertTrue($app->get_other_2_relationship() == $other_2_relationship);
        $this->assertTrue($app->get_other_3_name() == $other_3_name);
        $this->assertTrue($app->get_other_3_age() == $other_3_age);
        $this->assertTrue($app->get_other_3_relationship() == $other_3_relationship);
        $this->assertTrue($app->get_other_4_name() == $other_4_name);
        $this->assertTrue($app->get_other_4_age() == $other_4_age);
        $this->assertTrue($app->get_other_4_relationship() == $other_4_relationship);
        $this->assertTrue($app->get_other_5_name() == $other_5_name);
        $this->assertTrue($app->get_other_5_age() == $other_5_age);
        $this->assertTrue($app->get_other_5_relationship() == $other_5_relationship);
        $this->assertTrue($app->get_questions_or_comments() == $questions_or_comments);
        $this->assertTrue($app->get_convicted_felon() == $convicted_felon);
        $this->assertTrue($app->get_driving_citations() == $driving_citations);
        $this->assertTrue($app->get_conflicting_convictions() == $conflicting_convictions);
        $this->assertTrue($app->get_fail_to_care() == $fail_to_care);
        $this->assertTrue($app->get_charged_with_abuse() == $charged_with_abuse);
        $this->assertTrue($app->get_health_limitations() == $health_limitations);
        $this->assertTrue($app->get_mental_help() == $mental_help);
        $this->assertTrue($app->get_substance_abuse_history() == $substance_abuse_history);
        $this->assertTrue($app->get_sober_two_years() == $sober_two_years);
        $this->assertTrue($app->get_illegal_drugs() == $illegal_drugs);
        $this->assertTrue($app->get_auto_insurance() == $auto_insurance);
        $this->assertTrue($app->get_can_submit_insurance_copy() == $can_submit_insurance_copy);
        $this->assertTrue($app->get_sports_activities() == $sports_activities);
        $this->assertTrue($app->get_stem_activities() == $stem_activities);
        $this->assertTrue($app->get_arts_crafts_activities() == $arts_crafts_activities);
        $this->assertTrue($app->get_outdoor_activities() == $outdoor_activities);
        $this->assertTrue($app->get_games_activities() == $games_activities);
        $this->assertTrue($app->get_misc_activities() == $misc_activities);
        $this->assertTrue($app->get_quiet_talkitive() == $quiet_talkitive);
        $this->assertTrue($app->get_outdoor_indoor() == $outdoor_indoor);
        $this->assertTrue($app->get_watch_do() == $watch_do);
        $this->assertTrue($app->get_other_interests() == $other_interests);

        $app->set_secondary_email("se2");
        $app->set_ssn("ssn2");
        $app->set_relationship_status("relation2");
        $app->set_orientation("o2");
        $app->set_faith("faith2");
        $app->set_DL_number("number2");
        $app->set_DL_state("state2");
        $app->set_DL_expiration("02/02/2026");
        $app->set_emergency_contact("emerg2");
        $app->set_EC_number("EC_number2");
        $app->set_EC_relation("EC_relation2");
        $app->set_job_title("jt2");
        $app->set_employer("emp2");
        $app->set_employer_address("empadd2");
        $app->set_employer_city("empcity2");
        $app->set_employer_state("empstate2");
        $app->set_employer_zip("empzip2");
        $app->set_can_contact_work("work_contact2");
        $app->set_work_length("work_length2");
        $app->set_work_hours("work_hours2");
        $app->set_highest_education("high_edu2");
        $app->set_years_completed("years2");
        $app->set_graduation_year("grad2");
        $app->set_ohio("ohio2");
        $app->set_prev_add_1_date("prevadd1date2");
        $app->set_prev_add_1_add("prevadd1add2");
        $app->set_prev_add_2_date("prevadd2date2");
        $app->set_prev_add_2_add("prevadd2add2");
        $app->set_prev_add_3_date("prevadd3date2");
        $app->set_prev_add_3_add("prevadd3add2");
        $app->set_military_experience("mil2");
        $app->set_military_branch("branch2");
        $app->set_date_of_service("dos2");
        $app->set_military_status("milstatus2");
        $app->set_military_discharge("mildis2");
        $app->set_significant_name("signame2");
        $app->set_significant_number("signum2");
        $app->set_significant_email("sigemail2");
        $app->set_significant_relationship("sigrel2");
        $app->set_significant_years_known("sigyears2");
        $app->set_professional_reference_name("prorefname2");
        $app->set_professional_reference_number("prorefnum2");
        $app->set_professional_reference_email("prorefemail2");
        $app->set_professional_reference_relationship("prorefrel2");
        $app->set_professional_reference_years_known("prorefyears2");
        $app->set_personal_reference_name("perrefname2");
        $app->set_personal_reference_number("perrefnum2");
        $app->set_personal_reference_email("perrefemail2");
        $app->set_personal_reference_relationship("perrefrel2");
        $app->set_personal_reference_years_known("perrefyears2");
        $app->set_worked_with_youth("workyouth2");
        $app->set_organization_1("org12");
        $app->set_organization_1_manager("org1manager2");
        $app->set_organization_1_number("org1num2");
        $app->set_organization_1_email("org1email2");
        $app->set_organization_1_dates("org1dates2");
        $app->set_organization_1_reason("org1reason2");
        $app->set_organization_2("org22");
        $app->set_organization_2_manager("org2manager2");
        $app->set_organization_2_number("org2num2");
        $app->set_organization_2_email("org2email2");
        $app->set_organization_2_dates("org2dates2");
        $app->set_organization_2_reason("org2reason2");
        $app->set_organization_3("org32");
        $app->set_organization_3_manager("org3manager2");
        $app->set_organization_3_number("org3num2");
        $app->set_organization_3_email("org3email2");
        $app->set_organization_3_dates("org3dates2");
        $app->set_organization_3_reason("org3reason2");
        $app->set_organization_4("org42");
        $app->set_organization_4_manager("org4manager2");
        $app->set_organization_4_number("org4num2");
        $app->set_organization_4_email("org4email2");
        $app->set_organization_4_dates("org4dates2");
        $app->set_organization_4_reason("org4reason2");
        $app->set_community_mentor("communitymentor2");
        $app->set_community_couple("communitycouple2");
        $app->set_school_mentor("schoolmentor2");
        $app->set_commitment_concerns("commitmentconcerns2");
        $app->set_interest_in_children("interest2");
        $app->set_comfortable_driving_distance("comfortdriving2");
        $app->set_interview_availability("interview2");
        $app->set_uncomfortable_traits("uncomforttraits2");
        $app->set_big_sister_with_little_brother("bigsislittlebro2");
        $app->set_weapons_at_home("weapons2");
        $app->set_concealed_permit("concealed2");
        $app->set_pets("pets2");
        $app->set_other_people_in_house("otherpeople2");
        $app->set_other_1_name("other1name2");
        $app->set_other_1_age("other1age2");
        $app->set_other_1_relationship("other1rel2");
        $app->set_other_2_name("other2name2");
        $app->set_other_2_age("other2age2");
        $app->set_other_2_relationship("other2rel2");
        $app->set_other_3_name("other3name2");
        $app->set_other_3_age("other3age2");
        $app->set_other_3_relationship("other3rel2");
        $app->set_other_4_name("other4name2");
        $app->set_other_4_age("other4age2");
        $app->set_other_4_relationship("other4rel2");
        $app->set_other_5_name("other5name2");
        $app->set_other_5_age("other5age2");
        $app->set_other_5_relationship("other5rel2");
        $app->set_questions_or_comments("qoc2");
        $app->set_convicted_felon("felon2");
        $app->set_driving_citations("citations2");
        $app->set_conflicting_convictions("conflicts2");
        $app->set_fail_to_care("failtocare2");
        $app->set_charged_with_abuse("abuse2");
        $app->set_health_limitations("health2");
        $app->set_mental_help("mental2");
        $app->set_substance_abuse_history("substance2");
        $app->set_sober_two_years("sober2");
        $app->set_illegal_drugs("drugs2");
        $app->set_auto_insurance("auto2");
        $app->set_can_submit_insurance_copy("copy2");
        $app->set_sports_activities("sports2");
        $app->set_stem_activities("stem2");
        $app->set_arts_crafts_activities("crafts2");
        $app->set_outdoor_activities("outdooract2");
        $app->set_games_activities("games2");
        $app->set_misc_activities("misc2");
        $app->set_quiet_talkitive("quiet2");
        $app->set_outdoor_indoor("outdoor2");
        $app->set_watch_do("watch2");
        $app->set_other_interests("other2");

        $this->assertTrue($app->get_secondary_email() == $secondary_email . "2");
        $this->assertTrue($app->get_ssn() == $ssn . "2");
        $this->assertTrue($app->get_relationship_status() == $relationship_status . "2");
        $this->assertTrue($app->get_orientation() == $orientation . "2");
        $this->assertTrue($app->get_faith() == $faith . "2");
        $this->assertTrue($app->get_DL_number() == $DL_number . "2");
        $this->assertTrue($app->get_DL_state() == $DL_state . "2");
        $this->assertTrue($app->get_DL_expiration() == "02/02/2026");
        $this->assertTrue($app->get_emergency_contact() == $emergency_contact . "2");
        $this->assertTrue($app->get_EC_number() == $EC_number . "2");
        $this->assertTrue($app->get_EC_relation() == $EC_relation . "2");
        $this->assertTrue($app->get_job_title() == $job_title . "2");
        $this->assertTrue($app->get_employer() == $employer . "2");
        $this->assertTrue($app->get_employer_address() == $employer_address . "2");
        $this->assertTrue($app->get_employer_city() == $employer_city . "2");
        $this->assertTrue($app->get_employer_state() == $employer_state . "2");
        $this->assertTrue($app->get_employer_zip() == $employer_zip . "2");
        $this->assertTrue($app->get_can_contact_work() == $can_contact_work . "2");
        $this->assertTrue($app->get_work_length() == $work_length . "2");
        $this->assertTrue($app->get_work_hours() == $work_hours . "2");
        $this->assertTrue($app->get_highest_education() == $highest_education . "2");
        $this->assertTrue($app->get_years_completed() == $years_completed . "2");
        $this->assertTrue($app->get_graduation_year() == $graduation_year . "2");
        $this->assertTrue($app->get_ohio() == $ohio . "2");
        $this->assertTrue($app->get_prev_add_1_date() == $prev_add_1_date . "2");
        $this->assertTrue($app->get_prev_add_1_add() == $prev_add_1_add . "2");
        $this->assertTrue($app->get_prev_add_2_date() == $prev_add_2_date . "2");
        $this->assertTrue($app->get_prev_add_2_add() == $prev_add_2_add . "2");
        $this->assertTrue($app->get_prev_add_3_date() == $prev_add_3_date . "2");
        $this->assertTrue($app->get_prev_add_3_add() == $prev_add_3_add . "2");
        $this->assertTrue($app->get_military_experience() == $military_experience . "2");
        $this->assertTrue($app->get_military_branch() == $military_branch . "2");
        $this->assertTrue($app->get_date_of_service() == $date_of_service . "2");
        $this->assertTrue($app->get_military_status() == $military_status . "2");
        $this->assertTrue($app->get_military_discharge() == $military_discharge . "2");
        $this->assertTrue($app->get_significant_name() == $significant_name . "2");
        $this->assertTrue($app->get_significant_number() == $significant_number . "2");
        $this->assertTrue($app->get_significant_email() == $significant_email . "2");
        $this->assertTrue($app->get_significant_relationship() == $significant_relationship . "2");
        $this->assertTrue($app->get_significant_years_known() == $significant_years_known . "2");
        $this->assertTrue($app->get_professional_reference_name() == $professional_reference_name . "2");
        $this->assertTrue($app->get_professional_reference_number() == $professional_reference_number . "2");
        $this->assertTrue($app->get_professional_reference_email() == $professional_reference_email . "2");
        $this->assertTrue($app->get_professional_reference_relationship() == $professional_reference_relationship . "2");
        $this->assertTrue($app->get_professional_reference_years_known() == $professional_reference_years_known . "2");
        $this->assertTrue($app->get_personal_reference_name() == $personal_reference_name . "2");
        $this->assertTrue($app->get_personal_reference_number() == $personal_reference_number . "2");
        $this->assertTrue($app->get_personal_reference_email() == $personal_reference_email . "2");
        $this->assertTrue($app->get_personal_reference_relationship() == $personal_reference_relationship . "2");
        $this->assertTrue($app->get_personal_reference_years_known() == $personal_reference_years_known . "2");
        $this->assertTrue($app->get_worked_with_youth() == $worked_with_youth . "2");
        $this->assertTrue($app->get_organization_1() == $organization_1 . "2");
        $this->assertTrue($app->get_organization_1_manager() == $organization_1_manager . "2");
        $this->assertTrue($app->get_organization_1_number() == $organization_1_number . "2");
        $this->assertTrue($app->get_organization_1_email() == $organization_1_email . "2");
        $this->assertTrue($app->get_organization_1_dates() == $organization_1_dates . "2");
        $this->assertTrue($app->get_organization_1_reason() == $organization_1_reason . "2");
        $this->assertTrue($app->get_organization_2() == $organization_2 . "2");
        $this->assertTrue($app->get_organization_2_manager() == $organization_2_manager . "2");
        $this->assertTrue($app->get_organization_2_number() == $organization_2_number . "2");
        $this->assertTrue($app->get_organization_2_email() == $organization_2_email . "2");
        $this->assertTrue($app->get_organization_2_dates() == $organization_2_dates . "2");
        $this->assertTrue($app->get_organization_2_reason() == $organization_2_reason . "2");
        $this->assertTrue($app->get_organization_3() == $organization_3 . "2");
        $this->assertTrue($app->get_organization_3_manager() == $organization_3_manager . "2");
        $this->assertTrue($app->get_organization_3_number() == $organization_3_number . "2");
        $this->assertTrue($app->get_organization_3_email() == $organization_3_email . "2");
        $this->assertTrue($app->get_organization_3_dates() == $organization_3_dates . "2");
        $this->assertTrue($app->get_organization_3_reason() == $organization_3_reason . "2");
        $this->assertTrue($app->get_organization_4() == $organization_4 . "2");
        $this->assertTrue($app->get_organization_4_manager() == $organization_4_manager . "2");
        $this->assertTrue($app->get_organization_4_number() == $organization_4_number . "2");
        $this->assertTrue($app->get_organization_4_email() == $organization_4_email . "2");
        $this->assertTrue($app->get_organization_4_dates() == $organization_4_dates . "2");
        $this->assertTrue($app->get_organization_4_reason() == $organization_4_reason . "2");
        $this->assertTrue($app->get_community_mentor() == $community_mentor . "2");
        $this->assertTrue($app->get_community_couple() == $community_couple . "2");
        $this->assertTrue($app->get_school_mentor() == $school_mentor . "2");
        $this->assertTrue($app->get_commitment_concerns() == $commitment_concerns . "2");
        $this->assertTrue($app->get_interest_in_children() == $interest_in_children . "2");
        $this->assertTrue($app->get_comfortable_driving_distance() == $comfortable_driving_distance . "2");
        $this->assertTrue($app->get_interview_availability() == $interview_availability . "2");
        $this->assertTrue($app->get_uncomfortable_traits() == $uncomfortable_traits . "2");
        $this->assertTrue($app->get_big_sister_with_little_brother() == $big_sister_with_little_brother . "2");
        $this->assertTrue($app->get_weapons_at_home() == $weapons_at_home . "2");
        $this->assertTrue($app->get_concealed_permit() == $concealed_permit . "2");
        $this->assertTrue($app->get_pets() == $pets . "2");
        $this->assertTrue($app->get_other_people_in_house() == $other_people_in_house . "2");
        $this->assertTrue($app->get_other_1_name() == $other_1_name . "2");
        $this->assertTrue($app->get_other_1_age() == $other_1_age . "2");
        $this->assertTrue($app->get_other_1_relationship() == $other_1_relationship . "2");
        $this->assertTrue($app->get_other_2_name() == $other_2_name . "2");
        $this->assertTrue($app->get_other_2_age() == $other_2_age . "2");
        $this->assertTrue($app->get_other_2_relationship() == $other_2_relationship . "2");
        $this->assertTrue($app->get_other_3_name() == $other_3_name . "2");
        $this->assertTrue($app->get_other_3_age() == $other_3_age . "2");
        $this->assertTrue($app->get_other_3_relationship() == $other_3_relationship . "2");
        $this->assertTrue($app->get_other_4_name() == $other_4_name . "2");
        $this->assertTrue($app->get_other_4_age() == $other_4_age . "2");
        $this->assertTrue($app->get_other_4_relationship() == $other_4_relationship . "2");
        $this->assertTrue($app->get_other_5_name() == $other_5_name . "2");
        $this->assertTrue($app->get_other_5_age() == $other_5_age . "2");
        $this->assertTrue($app->get_other_5_relationship() == $other_5_relationship . "2");
        $this->assertTrue($app->get_questions_or_comments() == $questions_or_comments . "2");
        $this->assertTrue($app->get_convicted_felon() == $convicted_felon . "2");
        $this->assertTrue($app->get_driving_citations() == $driving_citations . "2");
        $this->assertTrue($app->get_conflicting_convictions() == $conflicting_convictions . "2");
        $this->assertTrue($app->get_fail_to_care() == $fail_to_care . "2");
        $this->assertTrue($app->get_charged_with_abuse() == $charged_with_abuse . "2");
        $this->assertTrue($app->get_health_limitations() == $health_limitations . "2");
        $this->assertTrue($app->get_mental_help() == $mental_help . "2");
        $this->assertTrue($app->get_substance_abuse_history() == $substance_abuse_history . "2");
        $this->assertTrue($app->get_sober_two_years() == $sober_two_years . "2");
        $this->assertTrue($app->get_illegal_drugs() == $illegal_drugs . "2");
        $this->assertTrue($app->get_auto_insurance() == $auto_insurance . "2");
        $this->assertTrue($app->get_can_submit_insurance_copy() == $can_submit_insurance_copy . "2");
        $this->assertTrue($app->get_sports_activities() == $sports_activities . "2");
        $this->assertTrue($app->get_stem_activities() == $stem_activities . "2");
        $this->assertTrue($app->get_arts_crafts_activities() == $arts_crafts_activities . "2");
        $this->assertTrue($app->get_outdoor_activities() == $outdoor_activities . "2");
        $this->assertTrue($app->get_games_activities() == $games_activities . "2");
        $this->assertTrue($app->get_misc_activities() == $misc_activities . "2");
        $this->assertTrue($app->get_quiet_talkitive() == $quiet_talkitive . "2");
        $this->assertTrue($app->get_outdoor_indoor() == $outdoor_indoor . "2");
        $this->assertTrue($app->get_watch_do() == $watch_do . "2");
        $this->assertTrue($app->get_other_interests() == $other_interests . "2");

        echo("BigApplicationTest complete\n");
    }
}
?>