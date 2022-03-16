<?php 
class Application {
    private $id;        //unique id for each application
    private $firstname;     //first name of the big or little
    private $lastname;      //last name of the big or little
    private $languages;     //array of strings that are the names of the known languages
    private $primarylanguage;
    private $prefered_name;      //nick name if applicable as a string
    private $date_of_birth;
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
    
    function __construct ($i, $f, $l, $langs, $prime, $name, $dob, $cell, $text, $home, $g, $a, $c, $z, $r, $apply, $life) {
        $this->id = $i;
        $this->firstname = $f; 
        $this->lastname = $l;
        $this->languages = $langs;
        $this->primary_language = $prime;
        $this->perfered_name = $name;
        $this->date_of_birth = $dob;
        $this->cell_phone = $cell;
        $this->can_text_cell = $text;
        $this->home_phone = $home;
        $this->gender = $g;
        $this->address = $a;
        $this->city = $c;
        $this->zip = $z;
        $this->race = $r;
        $this->apply_reason = $apply;
        $this->life_changes = $life;
    }
    
    function get_id() {
        return $this->id;
    }
}
?>