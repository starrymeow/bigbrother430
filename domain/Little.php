<?php
namespace domain;

/**
 * The adult's email is the email extended from the applicant class. The child's school is 
 * extended from the applicant's employer (see applicant.php for detail)
 * @author jwil956
 *
 */
class Little extends Applicant
{
    
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
    
    function get_adult_name() {
        return $this->adult_name;
    }
    
  
    
}

?>