<?php
class LittleApplication extends Application {

    private $adult_name; // name of adult responsible for the child
    private $relation; // what relationship does the parent have with child
    private $legal_custody; // does adult have custody over the child
    private $share_custody; // does the adult have to share custody with the child
    private $other_supports_enrollment; // does the other adult with shared custody support this
    private $living_situation; // what situation is the child living in
    private $child_email; // if the child enrolling has an email
    private $grade_level; // what grade is the child currently in (ex. 5th grade)
    private $studentID; // the identification number for the child at their school
    private $nationality; // what nation do they have a citizenship

    function __construct($e, $i, $f, $m, $l, $langs, $prime, $name, $dob, $cell, $text, $childtext, $home, $g, $a, $c, $z, $r, $apply, $life,
            $adult_name, $relation, $legal_custody, $share_custody, $other_supports_enrollment, $living_situation, $child_cell, $child_email,
            $school, $grade_level, $student_id, $nationality, $hear, $employer, $worknum, $workcon, $bestnum, $besttime, $altcontact,
            $altcontactnum, $childaware, $childwant, $bbbsfamily, $meet, $mconditions, $household, $incomeassist, $houseassist, $development,
        $lunch, $income, $military, $branch, $deploy, $retiredmil, $dismil, $wounded, $incarcerated, $juv, $schtroub) {

        Application ::__construct($e, $i, $f, $l, $langs, $prime, $name, $dob, $cell, $text, $home, $g, $a, $c, $z, $r, $apply, $life);
        $this->middle_name = $m;
        $this->can_text_child = $childtext;
        $this->adult_name = $adult_name;
        $this->relation = $relation;
        $this->legal_custody = $legal_custody;
        $this->share_custody = $share_custody;
        $this->other_supports_enrollment = $other_supports_enrollment;
        $this->living_situation = $living_situation;
        $this->child_cell = $child_cell;
        $this->child_email = $child_email;
        $this->school = $school;
        $this->grade_level = $grade_level;
        $this->studentID = $student_id;
        $this->nationality = $nationality;
        $this->how_did_you_hear = $hear;
        $this->parent_employer = $employer;
        $this->parent_work_num = $worknum;
        $this->can_contact_work = $workcon;
        $this->best_num = $bestnum;
        $this->best_contact_time = $besttime;
        $this->alt_contact_name = $altcontact;
        $this->alt_contact_num = $altcontactnum;
        $this->does_child_know_enrolling = $childaware;
        $this->does_child_want_to_join = $childwant;
        $this->BBBS_family_names = $bbbsfamily;
        $this->will_meet_monthly = $meet;
        $this->medical_conditions - $mconditions;
        $this->household_size = $household;
        $this->income_assist = $incomeassist;
        $this->house_assist = $houseassist;
        $this->development = $development;
        $this->lunch_assist = $lunch;
        $this->annual_income = $income;
        $this->military = $military;
        $this->service_branch = $branch;
        $this->deployment_date = $deploy;
        $this->retired_military = $retiredmil;
        $this->dischared_military = $dismil;
        $this->wounded_veteran = $wounded;
        $this->incarcerated = $incarcerated;
        $this->juvenile_record = $juv;
        $this->school_trouble = $schtroub;
    }

    // returns child's middle name
    function get_middle_name() {
        return $this->middle_name;
    }

    // returns whether BBBS can text the child's cell
    function get_can_text_child() {
        return $this->can_text_child;
    }
    // returns their adult's name
    function get_adult_name() {
        return $this->adult_name;
    }

    // return the relationship between the adult and applicant
    function get_relation() {
        return $this->relation;
    }

    // returns whether the adult has legal custody of the applicant
    function get_legal_custody() {
        return $this->legal_custody;
    }

    // returns whether the adult shares custody of the applicant
    function get_share_custody() {
        return $this->share_custody;
    }

    // returns whether the other adult supports the applicant's enrollment
    function get_other_support() {
        return $this->other_supports_enrollment;
    }

    // returns the living situation of the applicant
    function get_lving_situation() {
        return $this->living_situation;
    }

    // returns the child's cell phone number (if they have one)
    function get_child_cell() {
        return $this->child_cell;
    }

    // returns the child's email (if they have one)
    function get_child_email() {
        return $this->child_email;
    }

    // returns the child's school
    function get_school() {
        return $this->school;
    }

    // returns the grade level of the applicant
    function get_grade_level() {
        return $this->grade_level;
    }

    // returns the student ID of the applicant
    function get_ID() {
        return $this->studentID;
    }

    // returns the nationality of the applicant
    function get_nationality() {
        return $this->nationality;
    }

    // returns how the guardian heard of BBBS
    function get_how_did_you_hear() {
        return $this->how_did_you_hear;
    }

    // returns guardian's employer
    function get_parent_employer() {
        return $this->parent_employer;
    }

    // returns guardian's work phone number
    function get_parent_work_num() {
        return $this->parent_work_num;
    }

    // returns whether BBBS can contact the guardian at work
    function get_can_contact_work() {
        return $this->can_contact_work;
    }

    // returns which number is best for BBBS to contact
    function get_best_num() {
        return $this->best_num;
    }

    // returns what time (morning, afternoon, evening) is best
    // to contact the guardian
    function get_best_contact_time() {
        return $this->best_contact_time;
    }

    // returns an alternate contact if guardian unavailable
    function get_alt_contact_name() {
        return $this->alt_contact_name;
    }

    // returns the phone number for the alterate contact
    function get_alt_contact_num() {
        return $this->alt_contact_num;
    }

    // returns whether the child knows guardian is enrolling them
    function get_does_child_know_enrolling() {
        return $this->does_child_know_enrolling;
    }

    // returns whether the child wants to join BBBS
    function get_does_child_want_to_join() {
        return $this->does_child_want_to_join;
    }

    // returns whether any of the child's family is enrolled in BBBS
    function get_BBBS_family_names() {
        return $this->BBBS_family_names;
    }

    // returns whether the child is willing to meet 2-4 times monthly
    function get_will_meet_monthly() {
        return $this->will_meet_monthly;
    }

    // returns child's medical conditions (if any)
    function get_medical_conditions() {
        return $this->medical_conditions;
    }

    // returns the size of the child's household
    function get_household_size() {
        return $this->household_size;
    }

    // returns whether the family is receiving income assistance
    function get_income_assist() {
        return $this->income_assist;
    }

    // returns whether the family is receiving any housing assistance
    function get_house_assist() {
        return $this->house_assist;
    }

    // returns the housing development where family lives if receiving assistance
    function get_development() {
        return $this->development;
    }

    // returns whether the chiild receives lunch assistance at school
    function get_lunch_assist() {
        return $this->lunch_assist;
    }

    // returns the annual income of the child's household
    function get_annual_income() {
        return $this->annual_income;
    }

    // returns whether any household member serves in the military
    function get_military() {
        return $this->military;
    }

    // returns which branch/service the household member serves in if in the military
    function get_service_branch() {
        return $this->service_branch;
    }

    // returns which date the household service member deployed, if on deployment
    function get_deployment_date() {
        return $this->deployment_date;
    }

    // returns whether any household is a veteran/retired military
    function get_retired_military() {
        return $this->retired_military;
    }

    // returns whether any household member was discharged from the military
    function get_dischared_military() {
        return $this->dischared_military;
    }

    // returns whether any household member was injured while in the military
    function get_wounded_veteran() {
        return $this->wounded_veteran;
    }

    // returns whether any household member is incarcerated
    function get_incarcerated() {
        return $this->incarcerated;
    }

    // returns whether the child has a juvenile record and the charges
    function get_juvenile_record() {
        return $this->juvenile_record;
    }

    // returns whether the chiild has been in trouble and school and what kind
    function get_school_trouble() {
        return $this->school_trouble;
    }
}
?>
