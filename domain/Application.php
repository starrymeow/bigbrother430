<?php
class Application {
    private $email;     //email; of the account that created the applicatino
    private $id;        //unique id for each application
    private $first_name;     //first name of the big or little
    private $last_name;      //last name of the big or little
    private $languages;     //array of strings that are the names of the known languages
    private $primary_language;
    private $prefered_name;      //nick name if applicable as a string
    private $birthday;
    private $cell_phone;      //cell phone number
    private $can_text_cell;     //whether or not the cell; boolean
    private $home_phone;        //home phone number
    private $gender;        //male, female, trans, or other (those were what the current site uses)
    private $address;
    private $city;
    private $state;
    private $zip;
    private $race;
    private $apply_reason;      //reason for applying
    private $life_changes;      //recent major life changes

    function __construct ($e, $i, $f, $l, $langs, $prime, $name, $dob, $cell, $text, $home, $g, $a, $c, $state, $z, $r, $apply, $life) {
        $this->email = $e;
        $this->id = $i;
        $this->first_name = $f;
        $this->last_name = $l;
        $this->languages = $langs;
        $this->primary_language = $prime;
        $this->perfered_name = $name;
        $this->birthday = $dob;
        $this->cell_phone = $cell;
        $this->can_text_cell = $text;
        $this->home_phone = $home;
        $this->gender = $g;
        $this->address = $a;
        $this->city = $c;
        $this->state = $state;
        $this->zip = $z;
        $this->race = $r;
        $this->apply_reason = $apply;
        $this->life_changes = $life;
    }

    function get_email () {
        return $this->email;
    }

    function get_id () {
        return $this->id;
    }

    function get_first_name() {
        return $this->first_name;
    }

    function get_last_name () {
        return $this->last_name;
    }

    function get_languages () {
        return $this->languages;
    }

    function get_primary_language () {
        return $this->id;
    }

    function get_prefered_name () {
        return $this->perfered_name;
    }

    function get_birthday () {
        return $this->birthday;
    }

    function get_cell_phone () {
        return $this->cell_phone;
    }

    function get_can_text_cell () {
        return $this->can_text_cell;
    }

    function get_home_phone () {
        return $this->home_phone;
    }

    function get_gender() {
        return $this->gender;
    }

    function get_address () {
        return $this->address;
    }

    function get_city () {
        return $this->city;
    }

    function get_state() {
        return $this->state;
    }

    function get_zip () {
        return $this->zip;
    }

    function get_race () {
        return $this->race;
    }

    function get_apply_reason () {
        return $this->apply_reason;
    }

    function get_life_changes () {
        return $this->life_changes;
    }

    function set_firstname($v) {
        $this->firstname = $v;
    }

    function set_lastname($v) {
        $this->lastname = $v;
    }

    function set_languages($v) {
        $this->languages = $v;
    }

    function set_primary_language($v) {
        $this->primary_language = $v;
    }

    function set_perfered_name($v) {
        $this->perfered_name = $v;
    }

    function set_birthday($v) {
        $this->birthday = $v;
    }

    function set_cell_phone($v) {
        $this->cell_phone = $v;
    }

    function set_can_text_cell($v) {
        $this->firstname = $v;
    }

    function set_home_phone($v) {
        $this->home_phone = $v;
    }

    function set_gender($v) {
        $this->gender = $v;
    }

    function set_address($v) {
        $this->address = $v;
    }

    function set_city($v) {
        $this->city = $v;
    }

    function set_zip($v) {
        $this->zip = $v;
    }

    function set_race($v) {
        $this->race = $v;
    }

    function set_apply_reason($v) {
        $this->apply_reason = $v;
    }

    function set_life_changes($v) {
        $this->life_changes = $v;
    }
}
?>