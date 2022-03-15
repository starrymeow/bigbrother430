<?php
namespace domain;

class Applicant extends Account
{
    var $first_name; // applicants first name
    var $last_name; // applicants last name
    var $primary_language; // language applicant is most comfortable with
    var $additional_languages; // if applicant speaks more than one language
    var $preferred_name; // if applicant would prefer to be addressed by a nickname or other
    var $address;   // address - string
    var $city;    // city - string
    var $state;   // state - string
    var $zip;    // zip code - integer
    var $phone1;   // primary phone -- home, cell, or work
    var $phone1type; // home, cell, or work
    var $can_text1; // if phone1 is a cell, can we send it text messages
    var $phone2;   // secondary phone -- home, cell, or work
    var $phone2type; // home, cell, or work
    var $can_text2; // if phone2 is a cell, can we send it text messages
    var $birthday;     // format: 64-03-12
    var $gender; // applicants gender
    var $employer;    // current employer or school attending
    var $how_did_you_hear;  // about RMH; internet, family, friend, volunteer, other (explain)
    var $motivation;   // App: why interested in RMH?
    var $specialties;  // App: special interests and hobbies related to RMH
    var $convictions;  // App: ever convicted of a felony?  "yes" or blank
    var $screening_type; // if status is "applicant", type of screening used for this applicant
    var $screening_status; // array of dates showing completion of screening steps
    var $status;     // a person may be an "applicant", "active", "LOA", or "former"
    var $availability; // array of day:hours:venue triples; e.g., Mon:9-12:bangor, Sat:afternoon:portland
    var $lifechanges; // does applicant foresee any life changes soon (i.e., moving)
    
    function __construct($e, $p, $fn, $ln, $pl, $al, $pn, $ad, $c, $st, $z, $p1, $p1t, $p1c, $p2, $p2t, 
                $p2c, $bd, $g, $em, $hdyh, $mot, $spec, $con, $scrt, $scrs, $stat, $ava, $lc) {
        Applicant::construct($e, $p, $e, $fn, $ln);
        $this->primary_language = $pl;
        if ($al != "")
            $this->additional_languages = explode(',', $ad);
        else
            $this->additional_languages = array();
        $this->preferred_name = $pn;
        $this->address = $ad;
        $this->city = $c;
        $this->state = $st;
        $this->zip = $z;
        $this->phone1 = $p1;
        $this->phone1type = $p1t;
        $this->can_text1 = $p1c;
        $this->phone2 = $p2;
        $this->phone2type = $p2t;
        $this->can_text2 = $p2c;
        $this->birthday = $bd;
        $this->gender = $g;
        $this->employer = $em;
        $this->how_did_you_hear = $hdyh;
        $this->motivation = $mot;
        $this->convictions = $con;
        $this->screening_type = $scrt;
        $this->screening_status = $scrs;
        $this->status = $stat;
        $this->availability = $ava;
        $this->lifechanges = $lc;
    }
    
    function get_first_name() {
        return $this->first_name;
    }
    
    function get_last_name() {
        return $this->last_name;
    }
    
    function get_primary_language() {
        return $this->primary_language;
    }
    
    function set_first_name($fn) {
        $this->first_name = $fn; 
    }
    
    function set_last_name($ln) {
        $this->last_name = $ln;
    }
    
    // finish get functions for all fields
}
?>