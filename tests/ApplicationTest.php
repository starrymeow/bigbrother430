<?php
// Test suite for Application

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../domain/Application.php');
class ApplicationTest extends TestCase {
    function testApplication() {
        $email = "susanl@aol.com";
        $id = 123456;
        $first_name = "Susan";
        $last_name = "Last";
        $languages = "eng, span";
        $primary_language = "eng";
        $prefered_name = "Susan";
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

        $myApplication = new Application($email, $id, $first_name, $last_name, $languages, $primary_language, $prefered_name,
            $birthday, $cell_phone, $can_text_cell, $home_phone, $gender, $address, $city, $state, $zip, $race, $apply_reason,
            $life_changes);

        $this->assertTrue($myApplication->get_email()==$email);
        $this->assertTrue($myApplication->get_id()==$id);
        $this->assertTrue($myApplication->get_first_name()==$first_name);
        $this->assertTrue($myApplication->get_last_name()==$last_name);
        $this->assertTrue($myApplication->get_languages()==$languages);
        $this->assertTrue($myApplication->get_primary_language()==$primary_language);
        $this->assertTrue($myApplication->get_prefered_name()==$prefered_name);
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

        $first_name = "Susan2";
        $last_name = "Last2";
        $languages = "eng2";
        $primary_language = "eng2";
        $prefered_name = "Susan2";
        $birthday = "01/01/19702";
        $cell_phone = "54012345672";
        $can_text_cell = false;
        $home_phone = "54054034032";
        $gender = "male";
        $address = "17493 road drive route";
        $city = "Fredericksburg city";
        $state = "virginia";
        $zip = 456972;
        $race = "Caucasion";
        $apply_reason = "example2";
        $life_changes = "something2";

        $myApplication->set_first_name($first_name);
        $myApplication->set_last_name($last_name);
        $myApplication->set_languages($languages);
        $myApplication->set_primary_language($primary_language);
        $myApplication->set_prefered_name($prefered_name);
        $myApplication->set_birthday($birthday);
        $myApplication->set_cell_phone($cell_phone);
        $myApplication->set_can_text_cell($can_text_cell);
        $myApplication->set_home_phone($home_phone);
        $myApplication->set_gender($gender);
        $myApplication->set_address($address);
        $myApplication->set_city($city);
        $myApplication->set_state($state);
        $myApplication->set_zip($zip);
        $myApplication->set_race($race);
        $myApplication->set_apply_reason($apply_reason);
        $myApplication->set_life_changes($life_changes);

        $this->assertTrue($myApplication->get_email()==$email);
        $this->assertTrue($myApplication->get_id()==$id);
        $this->assertTrue($myApplication->get_first_name()==$first_name);
        $this->assertTrue($myApplication->get_last_name()==$last_name);
        $this->assertTrue($myApplication->get_languages()==$languages);
        $this->assertTrue($myApplication->get_primary_language()==$primary_language);
        $this->assertTrue($myApplication->get_prefered_name()==$prefered_name);
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

        echo("ApplicationTest complete\n");
    }
}
?>