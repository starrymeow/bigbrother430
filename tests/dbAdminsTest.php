<?php
// Test suite for dbAdmins

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../database/dbAdmins.php');
include_once(dirname(__FILE__).'/../database/dbAccounts.php');
include_once(dirname(__FILE__).'/../domain/Admin.php');
include_once(dirname(__FILE__).'/../domain/Account.php');
class dbAdminsTest extends TestCase {
    function testdbAdmins() {
        // add two Admins to the database

        $m = new Admin("ted2@bowdoin.edu", "password1", "Gabrielle", "Booth", 0, "status1");
        $this->assertTrue(add_admin($m));

        $m2 = new Admin("alfred2@whitman.edu", "password2", "Fred", "Wilson", 0, "status2");
        $this->assertTrue(add_admin($m2));

        // retrieve the Admins and test the fields
        $p = retrieve_admin("ted2@bowdoin.edu");
        $this->assertTrue($p!==false);
        $this->assertTrue($p->get_status() == "status1");
        $this->assertTrue($p->get_first_name() == "Gabrielle");
        $this->assertTrue($p->get_last_name() == "Booth");
        $this->assertTrue($p->get_password() == "password1");
        $this->assertTrue($p->get_is_super()==false);

        $p2 = retrieve_admin("alfred2@whitman.edu");
        $this->assertTrue($p2!==false);
        $this->assertTrue($p2->get_status() == "status2");
        $this->assertTrue($p2->get_first_name() == "Fred");
        $this->assertTrue($p2->get_last_name() == "Wilson");
        $this->assertTrue($p2->get_password() == "password2");
        $this->assertTrue($p2->get_is_super()==false);

        change_admin_password($p->get_email(), "password3");
        change_admin_password($p2->get_email(), "password4");

        $p = retrieve_admin("ted2@bowdoin.edu");
        $p2 = retrieve_admin("alfred2@whitman.edu");
        $this->assertTrue($p!==false);
        $this->assertTrue($p2!==false);
        $this->assertTrue($p->get_password()=="password3");
        $this->assertTrue($p2->get_password()=="password4");

        add_account(new Account("example@mail.com", "password5", "Test", "Testing", "status3"));
        $a = array("email" => "example@mail.com", "is_super" => "true");
        $admin = make_an_admin($a);
        $this->assertTrue($admin!==false);
        $this->assertTrue($admin->get_email()=="example@mail.com");
        $this->assertTrue($admin->get_is_super()==true);
        $this->assertTrue($admin->get_first_name()=="Test");
        $this->assertTrue($admin->get_last_name()=="Testing");
        $this->assertTrue($admin->get_status()=="status3");
        $this->assertTrue($admin->get_password()=="password5");

        $this->assertTrue(promote($p->get_email())!==false);
        $p=retrieve_admin($p->get_email());
        $this->assertTrue($p->get_is_super()==true);

        $emails = get_all_admins();
        //var_dump($emails);
        $this->assertTrue(in_array("ted2@bowdoin.edu", $emails));
        $this->assertTrue(in_array("alfred2@whitman.edu", $emails));
        $this->assertTrue(!in_array("example@mail.com", $emails));

        // remove the Admins
        $this->assertTrue(remove_admin("ted2@bowdoin.edu"));
        $this->assertTrue(remove_admin("alfred2@whitman.edu"));
        //remove the account
        $this->assertTrue(remove_account("example@mail.com"));

        echo("dbAdminsTest complete\n");
    }
}
?>