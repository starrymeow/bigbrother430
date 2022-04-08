<?php
// Test suite for dbApplications

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../database/dbApplications.php');
include_once(dirname(__FILE__).'/../domain/Application.php');
class dbApplicationsTest extends TestCase {
    function testdbApplications() {
        $email = "susanf@aol.com";
        $id = 123456;
        $first_name = "Susan";
        $last_name = "Fast";
        $languages = "eng, span";
        $primary_language = "eng";
        $preferred_name = "Susan";
        $birthday = "01-01-1970";
        $cell_phone = "5401234567";
        $can_text_cell = "no";
        $home_phone = "5405403403";
        $gender = "other";
        $address = "17493 road drive";
        $city = "Fredericksburg";
        $state = "VA";
        $zip = 45697;
        $race = "White";
        $apply_reason = "example";
        $life_changes = "something";

        $m = new Application($email, $id, $first_name, $last_name, $languages, $primary_language, $preferred_name,
            $birthday, $cell_phone, $can_text_cell, $home_phone, $gender, $address, $city, $state, $zip, $race, $apply_reason,
            $life_changes);
        $this->assertTrue(add_application($m));

        // retrieve the Application and test the fields
        $myApplication = retrieve_application($id);
        $this->assertTrue($myApplication!==false);
        //$this->assertTrue($myApplication->get_email()==$email);
        $this->assertTrue($myApplication->get_id()==$id);
        $this->assertTrue($myApplication->get_first_name()==$first_name);
        $this->assertTrue($myApplication->get_last_name()==$last_name);
        $this->assertTrue($myApplication->get_languages()==$languages);
        $this->assertTrue($myApplication->get_primary_language()==$primary_language);
        $this->assertTrue($myApplication->get_preferred_name()==$preferred_name);
        $this->assertTrue($myApplication->get_birthday()==$birthday);
        $this->assertTrue($myApplication->get_cell_phone()==$cell_phone);
        $this->assertTrue($myApplication->get_can_text_cell()==$can_text_cell);
        $this->assertTrue($myApplication->get_home_phone()==$home_phone);
        $this->assertTrue($myApplication->get_gender()==$gender);
        $this->assertTrue($myApplication->get_address()==$address);
        $this->assertTrue($myApplication->get_city()==$city);
        $this->assertTrue($myApplication->get_state()==$state);
        $this->assertTrue($myApplication->get_zip()==$zip);
        $this->assertTrue($myApplication->get_race()==$race);
        $this->assertTrue($myApplication->get_apply_reason()==$apply_reason);
        $this->assertTrue($myApplication->get_life_changes()==$life_changes);

        $id2 = 76543;
        $m = new Application($email, $id2, $first_name, $last_name, $languages, $primary_language, $preferred_name,
            $birthday, $cell_phone, $can_text_cell, $home_phone, $gender, $address, $city, $state, $zip, $race, $apply_reason,
            $life_changes);
        $this->assertTrue(add_application($m));

        $ids = retrieve_application_ids($email);
        $this->assertTrue($ids!==false);
        $this->assertTrue(in_array($id, $ids));
        $this->assertTrue(in_array($id, $ids));

        $a = array("email"=>$email, "id"=>$id, "first_name"=>$first_name,"last_name"=>$last_name, "languages"=>$languages,
            "primary_language"=>$primary_language, "preferred_name"=>$preferred_name, "birthday"=>$birthday, "cell_phone"=>$cell_phone,
            "can_text_cell"=>$can_text_cell, "home_phone"=>$home_phone, "gender"=>$gender, "address"=>$address, "city"=>$city,
            "state"=>$state, "zip"=>$zip, "race"=>$race, "apply_reason"=>$apply_reason, "life_changes"=>$life_changes
        );
        $app = make_an_application($a);
        $this->assertTrue($app->get_id()==$id);
        $this->assertTrue($app->get_first_name()==$first_name);
        $this->assertTrue($app->get_last_name()==$last_name);
        $this->assertTrue($app->get_languages()==$languages);
        $this->assertTrue($app->get_primary_language()==$primary_language);
        $this->assertTrue($app->get_preferred_name()==$preferred_name);
        $this->assertTrue($app->get_birthday()==$birthday);
        $this->assertTrue($app->get_cell_phone()==$cell_phone);
        $this->assertTrue($app->get_can_text_cell()==$can_text_cell);
        $this->assertTrue($app->get_home_phone()==$home_phone);
        $this->assertTrue($app->get_gender()==$gender);
        $this->assertTrue($app->get_address()==$address);
        $this->assertTrue($app->get_city()==$city);
        $this->assertTrue($app->get_state()==$state);
        $this->assertTrue($app->get_zip()==$zip);
        $this->assertTrue($app->get_race()==$race);
        $this->assertTrue($app->get_apply_reason()==$apply_reason);
        $this->assertTrue($app->get_life_changes()==$life_changes);

        // remove the Application
        $this->assertTrue(remove_application($id));
        $this->assertTrue(remove_application($id2));

        echo("dbApplicationsTest complete\n");
    }
}
?>