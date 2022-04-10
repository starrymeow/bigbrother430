<?php
// Test suite for dbLittleApplication

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../database/dbLittleApplications.php');
include_once(dirname(__FILE__).'/../domain/LittleApplication.php');
class dbLittleApplicationsTest extends TestCase {
    function testdbLittleApplications() {
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
        $middle_name = "m";
        $can_text_child = 0;
        $adult_name = "adult_name";
        $relation = "relation";
        $legal_custody = 1;
        $share_custody = 0;
        $other_supports_enrollment = 1;
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
        $can_contact_work = 1;
        $best_num = "bestnum";
        $best_contact_time = "besttime";
        $alt_contact_name = "altcontact";
        $alt_contact_num = "altcontactnum";
        $does_child_know_enrolling = 1;
        $does_child_want_to_join = 1;
        $BBBS_family_names = "bbbsfamily";
        $will_meet_monthly = 1;
        $medical_conditions = "mconditions";
        $household_size = 4;
        $income_assist = 0;
        $house_assist = 0;
        $development = "development";
        $lunch_assist = "lunch";
        $annual_income = "income";
        $military = "military";
        $service_branch = "branch";
        $deployment_date = "deploy";
        $retired_military = 0;
        $discharged_military = 0;
        $wounded_veteran = 0;
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

        $this->assertTrue(add_little_application($app));

        //test make a little application
        $a = array("id"=>$id,
            "middle_name"=>$middle_name, "can_text_child"=>$can_text_child, "adult_name"=>$adult_name, "relation"=>$relation,
            "legal_custody"=>$legal_custody, "share_custody"=>$share_custody, "other_supports_enrollment"=>$other_supports_enrollment,
            "living_situation"=>$living_situation, "child_cell"=>$child_cell, "child_email"=>$child_email, "school"=>$school,
            "grade_level"=>$grade_level, "studentID"=>$studentID, "nationality"=>$nationality, "how_did_you_hear"=>$how_did_you_hear,
            "parent_employer"=>$parent_employer, "parent_work_num"=>$parent_work_num, "can_contact_work"=>$can_contact_work,
            "best_num"=>$best_num, "best_contact_time"=>$best_contact_time, "alt_contact_name"=>$alt_contact_name,
            "alt_contact_num"=>$alt_contact_num, "does_child_know_enrolling"=>$does_child_know_enrolling,
            "does_child_want_to_join"=>$does_child_want_to_join, "BBBS_family_names"=>$BBBS_family_names,
            "will_meet_monthly"=>$will_meet_monthly, "medical_conditions"=>$medical_conditions, "household_size"=>$household_size,
            "income_assist"=>$income_assist, "house_assist"=>$house_assist, "development"=>$development,
            "lunch_assist"=>$lunch_assist, "annual_income"=>$annual_income, "military"=>$military, "service_branch"=>$service_branch,
            "deployment_date"=>$deployment_date, "retired_military"=>$retired_military, "discharged_military"=>$discharged_military,
            "wounded_veteran"=>$wounded_veteran, "incarcerated"=>$incarcerated, "juvenile_record"=>$juvenile_record,
            "school_trouble"=>$school_trouble
        );
        $little = make_a_little_application($a);
        $this->assertTrue($little->get_id() == $id);
        $this->assertTrue($little->get_middle_name() == $middle_name);
        $this->assertTrue($little->get_can_text_child() == $can_text_child);
        $this->assertTrue($little->get_adult_name() == $adult_name);
        $this->assertTrue($little->get_relation() == $relation);
        $this->assertTrue($little->get_legal_custody() == $legal_custody);
        $this->assertTrue($little->get_share_custody() == $share_custody);
        $this->assertTrue($little->get_other_supports_enrollment() == $other_supports_enrollment);
        $this->assertTrue($little->get_living_situation() == $living_situation);
        $this->assertTrue($little->get_child_cell() == $child_cell);
        $this->assertTrue($little->get_child_email() == $child_email);
        $this->assertTrue($little->get_school() == $school);
        $this->assertTrue($little->get_grade_level() == $grade_level);
        $this->assertTrue($little->get_studentID() == $studentID);
        $this->assertTrue($little->get_nationality() == $nationality);
        $this->assertTrue($little->get_how_did_you_hear() == $how_did_you_hear);
        $this->assertTrue($little->get_parent_employer() == $parent_employer);
        $this->assertTrue($little->get_parent_work_num() == $parent_work_num);
        $this->assertTrue($little->get_can_contact_work() == $can_contact_work);
        $this->assertTrue($little->get_best_num() == $best_num);
        $this->assertTrue($little->get_best_contact_time() == $best_contact_time);
        $this->assertTrue($little->get_alt_contact_name() == $alt_contact_name);
        $this->assertTrue($little->get_alt_contact_num() == $alt_contact_num);
        $this->assertTrue($little->get_does_child_know_enrolling() == $does_child_know_enrolling);
        $this->assertTrue($little->get_does_child_want_to_join() == $does_child_want_to_join);
        $this->assertTrue($little->get_BBBS_family_names() == $BBBS_family_names);
        $this->assertTrue($little->get_will_meet_monthly() == $will_meet_monthly);
        $this->assertTrue($little->get_medical_conditions() == $medical_conditions);
        $this->assertTrue($little->get_household_size() == $household_size);
        $this->assertTrue($little->get_income_assist() == $income_assist);
        $this->assertTrue($little->get_house_assist() == $house_assist);
        $this->assertTrue($little->get_development() == $development);
        $this->assertTrue($little->get_lunch_assist() == $lunch_assist);
        $this->assertTrue($little->get_annual_income() == $annual_income);
        $this->assertTrue($little->get_military() == $military);
        $this->assertTrue($little->get_service_branch() == $service_branch);
        $this->assertTrue($little->get_deployment_date() == $deployment_date);
        $this->assertTrue($little->get_retired_military() == $retired_military);
        $this->assertTrue($little->get_discharged_military() == $discharged_military);
        $this->assertTrue($little->get_wounded_veteran() == $wounded_veteran);
        $this->assertTrue($little->get_incarcerated() == $incarcerated);
        $this->assertTrue($little->get_juvenile_record() == $juvenile_record);
        $this->assertTrue($little->get_school_trouble() == $school_trouble);

        // retrieve the LittleApplication and test the fields
        $little = retrieve_little_application($id);
        $this->assertTrue($little!==False);
        $this->assertTrue($little->get_middle_name() == $middle_name);
        $this->assertTrue($little->get_can_text_child() == $can_text_child);
        $this->assertTrue($little->get_adult_name() == $adult_name);
        $this->assertTrue($little->get_relation() == $relation);
        $this->assertTrue($little->get_legal_custody() == $legal_custody);
        $this->assertTrue($little->get_share_custody() == $share_custody);
        $this->assertTrue($little->get_other_supports_enrollment() == $other_supports_enrollment);
        $this->assertTrue($little->get_living_situation() == $living_situation);
        $this->assertTrue($little->get_child_cell() == $child_cell);
        $this->assertTrue($little->get_child_email() == $child_email);
        $this->assertTrue($little->get_school() == $school);
        $this->assertTrue($little->get_grade_level() == $grade_level);
        $this->assertTrue($little->get_studentID() == $studentID);
        $this->assertTrue($little->get_nationality() == $nationality);
        $this->assertTrue($little->get_how_did_you_hear() == $how_did_you_hear);
        $this->assertTrue($little->get_parent_employer() == $parent_employer);
        $this->assertTrue($little->get_parent_work_num() == $parent_work_num);
        $this->assertTrue($little->get_can_contact_work() == $can_contact_work);
        $this->assertTrue($little->get_best_num() == $best_num);
        $this->assertTrue($little->get_best_contact_time() == $best_contact_time);
        $this->assertTrue($little->get_alt_contact_name() == $alt_contact_name);
        $this->assertTrue($little->get_alt_contact_num() == $alt_contact_num);
        $this->assertTrue($little->get_does_child_know_enrolling() == $does_child_know_enrolling);
        $this->assertTrue($little->get_does_child_want_to_join() == $does_child_want_to_join);
        $this->assertTrue($little->get_BBBS_family_names() == $BBBS_family_names);
        $this->assertTrue($little->get_will_meet_monthly() == $will_meet_monthly);
        $this->assertTrue($little->get_medical_conditions() == $medical_conditions);
        $this->assertTrue($little->get_household_size() == $household_size);
        $this->assertTrue($little->get_income_assist() == $income_assist);
        $this->assertTrue($little->get_house_assist() == $house_assist);
        $this->assertTrue($little->get_development() == $development);
        $this->assertTrue($little->get_lunch_assist() == $lunch_assist);
        $this->assertTrue($little->get_annual_income() == $annual_income);
        $this->assertTrue($little->get_military() == $military);
        $this->assertTrue($little->get_service_branch() == $service_branch);
        $this->assertTrue($little->get_deployment_date() == $deployment_date);
        $this->assertTrue($little->get_retired_military() == $retired_military);
        $this->assertTrue($little->get_discharged_military() == $discharged_military);
        $this->assertTrue($little->get_wounded_veteran() == $wounded_veteran);
        $this->assertTrue($little->get_incarcerated() == $incarcerated);
        $this->assertTrue($little->get_juvenile_record() == $juvenile_record);
        $this->assertTrue($little->get_school_trouble() == $school_trouble);

        // remove the LittleApplication
        $this->assertTrue(remove_little_application($id));

        echo("dbLittleApplicationsTest complete\n");
    }
}
?>