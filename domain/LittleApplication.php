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
    
    // create construction fucntion and get functions
    
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
    
    // returns the child's email (if they have one)
    function get_child_email() {
        return $this->child_email;
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
}
?>