<?php
namespace domain;

class Account
{
    private $email; //serves as primary key
    private $password; // password for account access
    
    // creates an account with given email and password
    function __construct($e, $p) {
        $this->email = $e;
        $this->password = $p;
    }
    
    // Returns account's email
    function get_email() {
        return $this->email;
    }
    
    // updates the account's email
    function update_email($e) {
        $this->email = $e;
    }
    
    // updates the account's password
    function update_password($p) {
        $this->password = $p;
    }
}
?>
