<?php
namespace domain;

class Big extends Applicant
{
    
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
    
    function get_secondary_email() {
        return $this->secondary_email;
    }
}

