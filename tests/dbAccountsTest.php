<?php
// Test suite for dbAccounts

use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../database/dbAccounts.php');
include_once(dirname(__FILE__).'/../domain/Account.php');
class dbAccountsTest extends TestCase {
    function testdbAccounts() {
        // add two accounts to the database

        $m = new Account("ted@bowdoin.edu", "password1", "Gabrielle", "Booth", "status1");
        $this->assertTrue(add_account($m));

        $m2 = new Account("alfred@whitman.edu", "password2", "Fred", "Wilson", "status2");
        $this->assertTrue(add_account($m2));

        // retrieve the Account and test the fields
        $p = retrieve_account("ted@bowdoin.edu");
        $this->assertTrue($p!==false);
        $this->assertTrue($p->get_status() == "status1");
        $this->assertTrue($p->get_first_name() == "Gabrielle");
        $this->assertTrue($p->get_last_name() == "Booth");
        $this->assertTrue($p->get_password() == "password1");

        $p2 = retrieve_account("alfred@whitman.edu");
        $this->assertTrue($p2!==false);
        $this->assertTrue($p2->get_status() == "status2");
        $this->assertTrue($p2->get_first_name() == "Fred");
        $this->assertTrue($p2->get_last_name() == "Wilson");
        $this->assertTrue($p2->get_password() == "password2");

        $e = $p->get_email();
        change_account_password($e, "password3");
        change_first($e, "Test");
        change_last($e, "Testing");
        change_status($e, "status3");

        $p = retrieve_account($e);
        $this->assertTrue($p->get_password()=="password3");
        $this->assertTrue($p->get_first_name()=="Test");
        $this->assertTrue($p->get_last_name()=="Testing");
        $this->assertTrue($p->get_status()=="status3");

        $a = array("email"=>"email", "password"=>"password4", "first_name"=>"first", "last_name"=>"last", "status"=>null);
        $acc = make_an_account($a);
        $this->assertTrue($acc->get_email() == "email");
        $this->assertTrue($acc->get_status() == null);
        $this->assertTrue($acc->get_first_name() == "first");
        $this->assertTrue($acc->get_last_name() == "last");
        $this->assertTrue($acc->get_password() == "password4");

        // remove the Account
        $this->assertTrue(remove_account("ted@bowdoin.edu"));
        $this->assertTrue(remove_account("alfred@whitman.edu"));

        echo("dbAccountsTest complete\n");
    }
}
?>