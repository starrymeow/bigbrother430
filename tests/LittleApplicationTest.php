<?php
// Test suite for LittleApplication

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../domain/LittleApplication.php');
class LittleApplicationTest extends TestCase {
    function testLittleApplication() {
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
        $middle_name = "m";
        $can_text_child = "childtext";
        $adult_name = "adult_name";
        $relation = "relation";
        $legal_custody = "legal_custody";
        $share_custody = "share_custody";
        $other_supports_enrollment = "other_supports_enrollment";
        $living_situation = "living_situation";
        $child_cell = "child_cell";
        $child_email = "child_email";
        $school = "school";
        $grade_level = "grade_level";
        $studentID = "student_id";
        $nationality = "nationality";
        $how_did_you_hear = "hear";
        $parent_employer = "employer";
        $parent_work_num = "worknum";
        $can_contact_work = "workcon";
        $best_num = "bestnum";
        $best_contact_time = "besttime";
        $alt_contact_name = "altcontact";
        $alt_contact_num = "altcontactnum";
        $does_child_know_enrolling = "childaware";
        $does_child_want_to_join = "childwant";
        $BBBS_family_names = "bbbsfamily";
        $will_meet_monthly = "meet";
        $medical_conditions = "mconditions";
        $household_size = "household";
        $income_assist = "incomeassist";
        $house_assist = "houseassist";
        $development = "development";
        $lunch_assist = "lunch";
        $annual_income = "income";
        $military = "military";
        $service_branch = "branch";
        $deployment_date = "deploy";
        $retired_military = "retiredmil";
        $discharged_military = "dismil";
        $wounded_veteran = "wounded";
        $incarcerated = "incarcerated";
        $juvenile_record = "juv";
        $school_trouble = "schtroub";

        $app = new LittleApplication($email, $id, $first_name, $last_name, $languages, $primary_language, $preferred_name, $birthday,
            $cell_phone, $can_text_cell, $home_phone, $gender, $address, $city, $state, $zip, $race, $apply_reason, $life_changes,
            $middle_name, $can_text_child, $adult_name, $relation, $legal_custody, $share_custody, $other_supports_enrollment,
            $living_situation, $child_cell, $child_email, $school, $grade_level, $studentID, $nationality, $how_did_you_hear,
            $parent_employer, $parent_work_num, $can_contact_work, $best_num, $best_contact_time, $alt_contact_name,
            $alt_contact_num, $does_child_know_enrolling, $does_child_want_to_join, $BBBS_family_names, $will_meet_monthly,
            $medical_conditions, $household_size, $income_assist, $house_assist, $development, $lunch_assist, $annual_income,
            $military, $service_branch, $deployment_date, $retired_military, $discharged_military, $wounded_veteran, $incarcerated,
            $juvenile_record, $school_trouble
        );

        $this->assertTrue($app->get_middle_name() == $middle_name);
        $this->assertTrue($app->get_can_text_child() == $can_text_child);
        $this->assertTrue($app->get_adult_name() == $adult_name);
        $this->assertTrue($app->get_relation() == $relation);
        $this->assertTrue($app->get_legal_custody() == $legal_custody);
        $this->assertTrue($app->get_share_custody() == $share_custody);
        $this->assertTrue($app->get_other_supports_enrollment() == $other_supports_enrollment);
        $this->assertTrue($app->get_living_situation() == $living_situation);
        $this->assertTrue($app->get_child_cell() == $child_cell);
        $this->assertTrue($app->get_child_email() == $child_email);
        $this->assertTrue($app->get_school() == $school);
        $this->assertTrue($app->get_grade_level() == $grade_level);
        $this->assertTrue($app->get_studentID() == $studentID);
        $this->assertTrue($app->get_nationality() == $nationality);
        $this->assertTrue($app->get_how_did_you_hear() == $how_did_you_hear);
        $this->assertTrue($app->get_parent_employer() == $parent_employer);
        $this->assertTrue($app->get_parent_work_num() == $parent_work_num);
        $this->assertTrue($app->get_can_contact_work() == $can_contact_work);
        $this->assertTrue($app->get_best_num() == $best_num);
        $this->assertTrue($app->get_best_contact_time() == $best_contact_time);
        $this->assertTrue($app->get_alt_contact_name() == $alt_contact_name);
        $this->assertTrue($app->get_alt_contact_num() == $alt_contact_num);
        $this->assertTrue($app->get_does_child_know_enrolling() == $does_child_know_enrolling);
        $this->assertTrue($app->get_does_child_want_to_join() == $does_child_want_to_join);
        $this->assertTrue($app->get_BBBS_family_names() == $BBBS_family_names);
        $this->assertTrue($app->get_will_meet_monthly() == $will_meet_monthly);
        $this->assertTrue($app->get_medical_conditions() == $medical_conditions);
        $this->assertTrue($app->get_household_size() == $household_size);
        $this->assertTrue($app->get_income_assist() == $income_assist);
        $this->assertTrue($app->get_house_assist() == $house_assist);
        $this->assertTrue($app->get_development() == $development);
        $this->assertTrue($app->get_lunch_assist() == $lunch_assist);
        $this->assertTrue($app->get_annual_income() == $annual_income);
        $this->assertTrue($app->get_military() == $military);
        $this->assertTrue($app->get_service_branch() == $service_branch);
        $this->assertTrue($app->get_deployment_date() == $deployment_date);
        $this->assertTrue($app->get_retired_military() == $retired_military);
        $this->assertTrue($app->get_discharged_military() == $discharged_military);
        $this->assertTrue($app->get_wounded_veteran() == $wounded_veteran);
        $this->assertTrue($app->get_incarcerated() == $incarcerated);
        $this->assertTrue($app->get_juvenile_record() == $juvenile_record);
        $this->assertTrue($app->get_school_trouble() == $school_trouble);

        $app->set_middle_name("m2");
        $app->set_can_text_child("childtext2");
        $app->set_adult_name("adult_name2");
        $app->set_relation("relation2");
        $app->set_legal_custody("legal_custody2");
        $app->set_share_custody("share_custody2");
        $app->set_other_supports_enrollment("other_supports_enrollment2");
        $app->set_living_situation("living_situation2");
        $app->set_child_cell("child_cell2");
        $app->set_child_email("child_email2");
        $app->set_school("school2");
        $app->set_grade_level("grade_level2");
        $app->set_studentID("student_id2");
        $app->set_nationality("nationality2");
        $app->set_how_did_you_hear("hear2");
        $app->set_parent_employer("employer2");
        $app->set_parent_work_num("worknum2");
        $app->set_can_contact_work("workcon2");
        $app->set_best_num("bestnum2");
        $app->set_best_contact_time("besttime2");
        $app->set_alt_contact_name("altcontact2");
        $app->set_alt_contact_num("altcontactnum2");
        $app->set_does_child_know_enrolling("childaware2");
        $app->set_does_child_want_to_join("childwant2");
        $app->set_BBBS_family_names("bbbsfamily2");
        $app->set_will_meet_monthly("meet2");
        $app->set_medical_conditions("mconditions2");
        $app->set_household_size("household2");
        $app->set_income_assist("incomeassist2");
        $app->set_house_assist("houseassist2");
        $app->set_development("development2");
        $app->set_lunch_assist("lunch2");
        $app->set_annual_income("income2");
        $app->set_military("military2");
        $app->set_service_branch("branch2");
        $app->set_deployment_date("deploy2");
        $app->set_retired_military("retiredmil2");
        $app->set_discharged_military("dismil2");
        $app->set_wounded_veteran("wounded2");
        $app->set_incarcerated("incarcerated2");
        $app->set_juvenile_record("juv2");
        $app->set_school_trouble("schtroub2");

        $this->assertTrue($app->get_middle_name() == $middle_name . "2");
        $this->assertTrue($app->get_can_text_child() == $can_text_child . "2");
        $this->assertTrue($app->get_adult_name() == $adult_name . "2");
        $this->assertTrue($app->get_relation() == $relation . "2");
        $this->assertTrue($app->get_legal_custody() == $legal_custody . "2");
        $this->assertTrue($app->get_share_custody() == $share_custody . "2");
        $this->assertTrue($app->get_other_supports_enrollment() == $other_supports_enrollment . "2");
        $this->assertTrue($app->get_living_situation() == $living_situation . "2");
        $this->assertTrue($app->get_child_cell() == $child_cell . "2");
        $this->assertTrue($app->get_child_email() == $child_email . "2");
        $this->assertTrue($app->get_school() == $school . "2");
        $this->assertTrue($app->get_grade_level() == $grade_level . "2");
        $this->assertTrue($app->get_studentID() == $studentID . "2");
        $this->assertTrue($app->get_nationality() == $nationality . "2");
        $this->assertTrue($app->get_how_did_you_hear() == $how_did_you_hear . "2");
        $this->assertTrue($app->get_parent_employer() == $parent_employer . "2");
        $this->assertTrue($app->get_parent_work_num() == $parent_work_num . "2");
        $this->assertTrue($app->get_can_contact_work() == $can_contact_work . "2");
        $this->assertTrue($app->get_best_num() == $best_num . "2");
        $this->assertTrue($app->get_best_contact_time() == $best_contact_time . "2");
        $this->assertTrue($app->get_alt_contact_name() == $alt_contact_name . "2");
        $this->assertTrue($app->get_alt_contact_num() == $alt_contact_num . "2");
        $this->assertTrue($app->get_does_child_know_enrolling() == $does_child_know_enrolling . "2");
        $this->assertTrue($app->get_does_child_want_to_join() == $does_child_want_to_join . "2");
        $this->assertTrue($app->get_BBBS_family_names() == $BBBS_family_names . "2");
        $this->assertTrue($app->get_will_meet_monthly() == $will_meet_monthly . "2");
        $this->assertTrue($app->get_medical_conditions() == $medical_conditions . "2");
        $this->assertTrue($app->get_household_size() == $household_size . "2");
        $this->assertTrue($app->get_income_assist() == $income_assist . "2");
        $this->assertTrue($app->get_house_assist() == $house_assist . "2");
        $this->assertTrue($app->get_development() == $development . "2");
        $this->assertTrue($app->get_lunch_assist() == $lunch_assist . "2");
        $this->assertTrue($app->get_annual_income() == $annual_income . "2");
        $this->assertTrue($app->get_military() == $military . "2");
        $this->assertTrue($app->get_service_branch() == $service_branch . "2");
        $this->assertTrue($app->get_deployment_date() == $deployment_date . "2");
        $this->assertTrue($app->get_retired_military() == $retired_military . "2");
        $this->assertTrue($app->get_discharged_military() == $discharged_military . "2");
        $this->assertTrue($app->get_wounded_veteran() == $wounded_veteran . "2");
        $this->assertTrue($app->get_incarcerated() == $incarcerated . "2");
        $this->assertTrue($app->get_juvenile_record() == $juvenile_record . "2");
        $this->assertTrue($app->get_school_trouble() == $school_trouble . "2");

        echo("LittleApplicationTest complete\n");
    }
}
?>