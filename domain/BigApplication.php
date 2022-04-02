<?php
class BigApplication extends Application {

    private $secondary_email; // if applicant has a second email we can reach them by
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

    function __construct($e, $i, $f, $l, $langs, $prime, $name, $dob, $cell, $text, $home, $g, $a, $c, $z, $r, $apply, $life,
        $se, $ssn, $relation, $o, $faith, $number, $state, $exp, $emerg, $EC_number, $EC_relation,
        $jt, $emp, $empadd, $empcity, $empstate, $empzip, $work_contact, $work_length, $work_hours, $high_edu, $years, $grad, $ohio,
        $prevadd1date, $prevadd1add, $prevadd2date, $prevadd2add, $prevadd3date, $prevadd3add, $mil, $branch, $dos, $milstatus, $mildis,
        $signame, $signum, $sigemail, $sigrel, $sigyears, $prorefname, $prorefnum, $prorefemail, $prorefrel, $prorefyears, $perrefname,
        $perrefnum, $perrefemail, $perrefrel, $perrefyears, $workyouth,  $org1, $org1manager, $org1num, $org1email, $org1dates, $org1reason,
        $org2, $org2manager, $org2num, $org2email, $org2dates, $org2reason, $org3, $org3manager, $org3num, $org3email, $org3dates, $org3reason,
        $org4, $org4manager, $org4num, $org4email, $org4dates, $org4reason, $communitymentor, $communitycouple, $schoolmentor, $commitmentconcerns,
        $interest, $comfortdriving, $interview, $uncomforttraits, $bigsislittlebro, $weapons, $concealed, $pets, $otherpeople, $other1name, $other1age, $other1rel,
        $other2name, $other2age, $other2rel, $other3name, $other3age, $other3rel, $other4name, $other4age, $other4rel, $other5name, $other5age, $other5rel,
        $qoc, $felon, $citations, $conflicts, $failtocare, $abuse, $health, $mental, $substance, $sober, $drugs, $auto, $copy, $sports, $stem, $crafts,
        $outdooract, $games, $misc, $quiet, $outdoor, $watch, $other) {

        Application::construct($e, $i, $f, $l, $langs, $prime, $name, $dob, $cell, $text, $home, $g, $a, $c, $z, $r, $apply, $life);
        $this->secondary_email = $se;                   //: string
        $this->ssn = $ssn;                              //social security number: string
        $this->relationship_status = $relation;         //: string
        $this->orientation = $o;                        //: string
        $this->faith = $faith;                          //: string
        $this->DL_number = $number;                     //: int
        $this->DL_state = $state;                       //: string
        $this->emergency_contact = $emerg;              //name: string
        $this->EC_number = $EC_number;                  //: string
        $this->EC_relartion = $EC_relation;             //: string
        $this->job_title = $jt;                         //: string
        $this->employer = $emp;                         //name of business: string
        $this->employer_address = $empadd;              //: string
        $this->employer_city = $empcity;                //: string
        $this->employer_state = $empstate;              //: string
        $this->employer_zip = $empzip;                  //: int
        $this->can_contact_work = $work_contact;        //: boolean
        $this->work_length = $work_length;              //duration of employment: string
        $this->work_hours = $work_hours;                //: string
        $this->highest_education = $high_edu;           //: string
        $this->years_completed = $years;                //: int
        $this->graduation_year = $grad;                 //: int
        $this->ohio = $ohio;                            //live in ohio in the past 2 years: boolean
        $this->prev_add_1_date = $prevadd1date;         //previous address dates: string
        $this->prev_add_1_add = $prevadd1add;           //address: string
        $this->prev_add_2_date = $prevadd2date;
        $this->prev_add_2_add = $prevadd2add;
        $this->prev_add_3_date = $prevadd3date;
        $this->prev_add_3_add = $prevadd3add;
        $this->military_experience = $mil;              //: boolean
        $this->military_branch = $branch;               //: string
        $this->date_of_service = $dos;                  //the range of time: string
        $this->military_status = $milstatus;            //: string
        $this->military_discharge = $mildis;            //: string
        $this->significant_name = $signame;             //: string
        $this->significant_number = $signum;            //phone number: string
        $this->sigificant_email = $sigemail;            //: string
        $this->signnificant_relationship = $sigrel;     //: string
        $this->significant_years_known = $sigyears;     //: int
        $this->profesional_reference_name = $prorefname;
        $this->profesional_reference_number = $prorefnum;
        $this->profesional_reference_email = $prorefemail;
        $this->profesional_reference_relationship = $prorefrel;
        $this->profesional_reference_years_known = $prorefyears;
        $this->personal_reference_name = $perrefname;
        $this->personal_reference_number = $perrefnum;
        $this->personal_reference_email =  $perrefemail;
        $this->personal_reference_relationship = $perrefrel;
        $this->personal_reference_years_known = $perrefyears;
        $this->worked_with_youth = $workyouth;          //: int
        $this->organization_1 = $org1;                  //organization name: string
        $this->orginization_1_manager = $org1manager;   //name: string
        $this->orginization_1_number = $org1num;        //manager phone number: string
        $this->orginization_1_email = $org1email;       //manager email: string
        $this->orginization_1_dates = $org1dates;       //dates of involvment: string
        $this->orginization_1_reason = $org1reason;     //reason for leaving: string
        $this->organization_2 = $org2;
        $this->orginization_2_manager = $org2manager;
        $this->orginization_2_number = $org2num;
        $this->orginization_2_email = $org2email;
        $this->orginization_2_dates = $org2dates;
        $this->orginization_2_reason = $org2reason;
        $this->organization_3 = $org3;
        $this->orginization_3_manager = $org3manager;
        $this->orginization_3_number = $org3num;
        $this->orginization_3_email = $org3email;
        $this->orginization_3_dates = $org3dates;
        $this->orginization_3_reason = $org3reason;
        $this->organization_4 = $org4;
        $this->orginization_4_manager = $org4manager;
        $this->orginization_4_number = $org4num;
        $this->orginization_4_email = $org4email;
        $this->orginization_4_dates = $org4dates;
        $this->orginization_4_reason = $org4reason;
        //preinterview questions
        $this->community_mentor = $communitymentor;     //: boolean
        $this->community_couple = $communitycouple;     //: boolean
        $this->school_mentor = $schoolmentor;           //: boolean
        $this->commitment_concerns = $commitmentconcerns;   //if yes explain: string
        $this->interest_in_children = $interest;        //: string
        $this->comfortable_drivig_distace = $comfortdriving;    //: string
        $this->interview_availability = $interview;     //: string
        $this->uncomfortable_traits = $uncomforttraits; //formatted as an array: string
        $this->big_sister_with_little_brother = $bigsislittlebro;   //: boolean
        $this->weapons_at_home = $weapons;              //: boolean
        $this->concealed_permit = $concealed;           //: boolean
        $this->pets = $pets;                            //: string
        $this->other_opeople_in_house = $otherpeople;   //: boolean
        $this->other_1_name = $other1name;              //: string
        $this->other_1_age = $other1age;                //: int
        $this->other_1_relationship = $other1rel;       //: string
        $this->other_2_name = $other2name;
        $this->other_2_age = $other2age;
        $this->other_2_relationship = $other2rel;
        $this->other_3_name = $other3name;
        $this->other_3_age = $other3age;
        $this->other_3_relationship = $other3rel;
        $this->other_4_name = $other4name;
        $this->other_4_age = $other4age;
        $this->other_4_relationship = $other4rel;
        $this->other_5_name = $other5name;
        $this->other_5_age = $other5age;
        $this->other_5_relationship = $other5rel;
        $this->questions_or_comments = $qoc;            //: string
        $this->convicted_felon = $felon;                //if yes explain: string
        $this->driving_citations = $citations;          //if yes explain: string
        $this->conflicting_convictions = $conflicts;    //if yes explain: string
        $this->fail_to_care = $failtocare;              //if yes explain: string
        $this->charged_with_abuse = $abuse;             //if yes explain: string
        $this->health_limitations = $health;            //if yes explain: string
        $this->mental_help = $mental;                   //must fill out another form if true: boolean
        $this->substance_abuse_history = $substance;    //: boolean
        $this->sober_two_years = $sober;                //: boolean
        $this->illegal_drugs = $drugs;                  //: boolean
        $this->auto_insurance = $auto;                    //: boolean
        $this->can_submit_insurance_copy = $copy;        //: boolean
        //interests
        $this->sports_activities = $sports;             //formatted as an array: string
        $this->stem_activities = $stem;                 //formatted as an array: string
        $this->arts_crafts_activities = $crafts;        //formatted as an array: string
        $this->outdoor_activities = $outdooract;        //formatted as an array: string
        $this->games_activities = $games;               //formatted as an array: string
        $this->misc_activities = $misc;                 //formatted as an array: string
        $this->quiet_talkitive = $quiet;                //preference: boolean or both=null
        $this->outdoor_indoor = $outdoor;               //preference: boolean or both=null
        $this->watch_do = $watch;                       //preference: boolean or both=null
        $this->other_interests = $other;                //: string
    }

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

    function get_job_title() {
        return $this->job_title;
    }

    function get_employer() {
        return $this->employer;
    }

    function get_employer_address() {
        return $this->employer_address;
    }

    function get_employer_city() {
        return $this->employer_city;
    }

    function get_employer_state() {
        return $this->employer_state;
    }

    function get_employer_zip() {
        return $this->employer_zip;
    }

    function get_can_cotact_work() {
        return $this->can_cotact_work;
    }

    function get_work_length() {
        return $this->work_length;
    }

    function get_work_hours() {
        return $this->work_hours;
    }

    function get_highest_education() {
         return $this->highest_education;
    }

    function get_years_completed() {
         return $this->years_completed;
    }

    function get_graduation_year() {
        return $this->graduation_year;
    }

    function get_ohio() {
        return $this->ohio;
    }

    function get_prev_add_1_date() {
        return $this->prev_add_1_date;
    }

    function get_prev_add_1_add() {
        return $this->prev_add_1_add;
    }

    function get_prev_add_2_date() {
        return $this->prev_add_2_date;
    }

    function get_prev_add_2_add() {
        return $this->prev_add_2_add;
    }

    function get_prev_add_3_date() {
        return $this->prev_add_3_date;
    }

    function get_prev_add_3_add() {
        return $this->prev_add_3_add;
    }

    function get_military_experiece() {
        return $this->military_experiece;
    }

    function get_military_branch() {
        return $this->military_branch;
    }

    function get_date_of_service() {
       return $this->date_of_service;
    }

    function get_military_status() {
       return $this->military_status;
    }

    function get_military_discharge() {
        return $this->military_discharge;
    }

    function get_significant_name() {
        return $this->significant_name;
    }

    function get_significant_number() {
        return $this->significant_number;
    }

    function get_significant_email() {
        return $this->significant_email;
    }

    function get_significant_relationship() {
        return $this->significant_relationship;
    }

    function get_significant_years_known() {
       return $this->significant_years_known;
    }

    function get_professional_reference_name() {
        return $this->professional_reference_name;
    }

    function get_professional_reference_number() {
        return $this->professional_reference_number;
    }

    function get_professional_reference_email() {
        return $this->professional_reference_email;
    }

    function get_professional_reference_relationship() {
        return $this->professional_reference_relationship;
    }

    function get_professional_reference_years_known() {
        return $this->professional_reference_years_known;
    }

    function get_personal_reference_name() {
        return $this->personal_reference_name;
    }

    function get_personal_reference_number() {
        return $this->personal_reference_number;
    }

    function get_personal_reference_email() {
        return $this->personal_reference_email;
    }

    function get_personal_reference_relationship() {
        return $this->personal_reference_relationship;
    }

    function get_personal_reference_years_known() {
        return $this->personal_reference_years_known;
    }

    function get_worked_with_youth() {
        return $this->worked_with_youth;
    }

    function get_organization_1() {
        return $this->organization_1;
    }

    function get_organization_1_manager() {
        return $this->organization_1_manager;
    }

    function get_organization_1_number() {
        return $this->organization_1_number;
    }

    function get_organization_1_email() {
        return $this->organization_1_email;
    }

    function get_organization_1_dates() {
        return $this->organization_1_dates;
    }

    function get_organization_1_reason() {
        return $this->organization_1_reason;
    }

    function get_organization_2() {
        return $this->organization_2;
    }

    function get_organization_2_manager() {
        return $this->organization_2_manager;
    }

    function get_organization_2_number() {
        return $this->organization_2_number;
    }

    function get_organization_2_email() {
        return $this->organization_2_email;
    }

    function get_organization_2_dates() {
        return $this->organization_2_dates;
    }

    function get_organization_2_reason() {
        return $this->organization_2_reason;
    }

    function get_organization_3() {
        return $this->organization_3;
    }

    function get_organization_3_manager() {
        return $this->organization_3_manager;
    }

    function get_organization_3_number() {
        return $this->organization_3_number;
    }

    function get_organization_3_email() {
        return $this->organization_3_email;
    }

    function get_organization_3_dates() {
        return $this->organization_3_dates;
    }

    function get_organization_3_reason() {
        return $this->organization_3_reason;
    }

    function get_organization_4() {
        return $this->organization_4;
    }

    function get_organization_4_manager() {
        return $this->organization_4_manager;
    }

    function get_organization_4_number() {
        return $this->organization_4_number;
    }

    function get_organization_4_email() {
        return $this->organization_4_email;
    }

    function get_organization_4_dates() {
        return $this->organization_4_dates;
    }

    function get_organization_4_reason() {
        return $this->organization_4_reason;
    }

    function get_community_mentor() {
        return $this->community_mentor;
    }

    function get_community_couple() {
        return $this->community_couple;
    }

    function get_school_mentor() {
        return $this->school_mentor;
    }

    function get_commitment_concerns() {
        return $this->commitment_concerns;
    }

    function get_iterest_in_children() {
        return $this->iterest_in_children;
    }

    function get_comfortable_driving_distance() {
        return $this->comfortable_driving_distance;
    }

    function get_iterview_availability() {
        return $this->iterview_availability;
    }

    function get_uncomfortale_traits() {
        return $this->uncomfortale_traits;
    }

    function get_big_sister_with_little_brother() {
        return $this->big_sister_with_little_brother;
    }

    function get_weapons_at_home() {
        return $this->weapons_at_home;
    }

    function get_concealed_permit() {
        return $this->concealed_permit;
    }

    function get_pets() {
        return $this->pets;
    }

    function get_other_people() {
        return $this->other_people;
    }

    function get_other_1_name() {
        return $this->other_1_name;
    }

    function get_other_1_age() {
        return $this->other_1_age;
    }

    function get_other_1_relationship() {
        return $this->other_1_relationship;
    }

    function get_other_2_name() {
        return $this->other_2_name;
    }

    function get_other_2_age() {
        return $this->other_2_age;
    }

    function get_other_2_relationship() {
        return $this->other_2_relationship;
    }

    function get_other_3_name() {
        return $this->other_3_name;
    }

    function get_other_3_age() {
        return $this->other_3_age;
    }

    function get_other_3_relationship() {
        return $this->other_3_relationship;
    }

    function get_other_4_name() {
        return $this->other_4_name;
    }

    function get_other_4_age() {
        return $this->other_4_age;
    }

    function get_other_4_relationship() {
        return $this->other_4_relationship;
    }

    function get_other_5_name() {
        return $this->other_5_name;
    }

    function get_other_5_age() {
        return $this->other_5_age;
    }

    function get_other_5_relationship() {
        return $this->other_5_relationship;
    }

    function get_commets_or_questions() {
        return $this->commets_or_questions;
    }

    function get_convicted_felon() {
        return $this->convicted_felon;
    }

    function get_driving_citations() {
        return $this->driving_citations;
    }

    function get_coflicting_convictions() {
        return $this->coflicting_convictions;
    }

    function get_fail_to_care() {
        return $this->fail_to_care;
    }

    function get_chraged_with_abuse() {
        return $this->chraged_with_abuse;
    }

    function get_health_limitations() {
        return $this->health_limitations;
    }

    function get_mental_help() {
        return $this->mental_help;
    }

    function get_substance_abuse_history() {
        return $this->substance_abuse_history;
    }

    function get_sober_two_years() {
        return $this->sober_two_years;
    }

    function get_illegal_drugs() {
        return $this->illegal_drugs;
    }

    function get_auto_insurance() {
        return $this->auto_insurance;
    }

    function get_can_submit_insurance_copy() {
        return $this->can_submit_insurance_copy;
    }

    function get_sports_activities() {
        return $this->sports_activities;
    }

    function get_stem_activites() {
        return $this->stem_activites;
    }

    function get_arts_crafts_activities() {
        return $this->arts_crafts_activities;
    }

    function get_outdoor_activites() {
        return $this->outdoor_activites;
    }

    function get_games_activites() {
        return $this->games_activites;
    }

    function get_misc_activites() {
        return $this->misc_activites;
    }

    function get_quiet_talkitive() {
        return $this->quiet_talkitive;
    }

    function get_outdoor_indoor() {
        return $this->outdoor_indoor;
    }

    function get_watch_do() {
        return $this->watch_do;
    }

    function get_other_interests() {
        return $this->other_interests;
    }
}
?>