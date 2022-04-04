<?php
// Test suite for Account

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../domain/Account.php');
class AccountTest extends TestCase {
    function testAccount() {
        $myAccount = new Account("susanl@aol.com", "password", "Susan","Last", "status");

        $this->assertTrue($myAccount->get_first_name()=="Susan");
        $this->assertTrue($myAccount->get_last_name()=="Last");
        $this->assertTrue($myAccount->get_email()=="susanl@aol.com");
        $this->assertTrue($myAccount->get_status()=="status");
        $this->assertTrue($myAccount->get_password()=="password");

        $myAccount->set_password("password2");
        $myAccount->set_status("status2");

        $this->assertTrue($myAccount->get_password()=="password2");
        $this->assertTrue($myAccount->get_status()=="status2");

        echo("AccountTest complete\n");
    }
}
?>