<?php
namespace domain;

class Admin extends Account
{
    private $is_super; // Value is 1 if admin is a super admin, otherwise 0
    
    // Creates an admin object
    function __construct($e, $p, $s){
        $this->email = e;
        $this->password = $p;
        $this->is_super = $s;
    }
    
    // Returns if the admin is a super admin
    function get_is_super(){
        return $this->is_super;
    }
    
    // Promotes an admin to a super admin, or demotes them to regular admin
    function update_super($s){
        if ($s == 1 || $s == 0) {
            $this->is_super = $s;
        }
    }
    
    
    
}
?>
