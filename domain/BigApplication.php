<?php 
class BigApplication extends Application {

    private $secondary_email; // if applicant has a second email when can reach them by
    private $ssn; // applicant's social security number
    private $relationship_status; // what is applicant's relationship status (i.e., married or single)
    private $orientation; // what is applicant's orientation
    private $faith; // what is applicant's faith/belief
    private $DL_number; // applicant's driver's license number
    private $DL_state; // the state that issued the applicants license
    private $DL_expiration; // date that their license expires
    private $emergency_contact; // who can we contact incase of an emergency
    private $EC_number; // the emergency contact's phone number
    private $EC_relation; // what relation does the contact have with the applicant
    
    //create construction function and get functions
    
    // returns the second email address
    function get_secondary_email() {
        return $this->secondary_email;
    }
    
    // returns their social security number
    function get_ssn() {
        return $this->ssn;
    }
    
    // returns their relationship status
    function get_relationship_status() {
        return $this->relationship_status;
    }
    
    // returns their orientation
    function get_orientation() {
        return $this->orientation;
    }
    
    // returns their faith/belief
    function get_faith() {
        return $this->faith;
    }
    
    // returns their driver's license number
    function get_DL_number() {
        return $this->DL_number;
    }
    
    
    // returns the state that issued their driver's license
    function get_DL_state() {
        return $this->DL_state;
    }
    
    // returns the expiration date of their driver's license
    function get_DL_expiration() {
        return $this->DL_expiration;
    }
    
    // returns the name of their emergency contact
    function get_emergency_contact() {
        return $this->emergency_contact;
    }
    
    // returns the number of their emergency contact
    function get_EC_number() {
        return $this->EC_number;
    }
    
    // returns the relationship between the emergency contact and applicant
    function get_EC_relation() {
        return $this->EC_relation;
    }
}
?>