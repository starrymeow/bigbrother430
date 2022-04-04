<?php
// Test suite for Admin

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../domain/Admin.php');
class AdminTest extends TestCase {
    function testAdmin() {
        $myAdmin = new Admin("susanl@aol.com", "password", "Susan", "Last", false, "status");

        $this->assertTrue($myAdmin->get_first_name()=="Susan");
        $this->assertTrue($myAdmin->get_last_name()=="Last");
        $this->assertTrue($myAdmin->get_email()=="susanl@aol.com");
        $this->assertTrue($myAdmin->get_status()=="status");
        $this->assertTrue($myAdmin->get_password()=="password");
        $this->assertTrue($myAdmin->get_is_super()==false);

        $myAdmin->set_password("password2");
        $myAdmin->set_status("status2");
        $myAdmin->set_is_super(True);

        $this->assertTrue($myAdmin->get_password()=="password2");
        $this->assertTrue($myAdmin->get_status()=="status2");
        $this->assertTrue($myAdmin->get_is_super()==true);

        echo("AdminTest complete\n");
    }
}
?>