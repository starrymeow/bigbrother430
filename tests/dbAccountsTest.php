<?php
/*
 * Copyright 2013 by Jerrick Hoang, Ivy Xing, Sam Roberts, James Cook,
 * Johnny Coster, Judy Yang, Jackson Moniaga, Oliver Radwan,
 * Maxwell Palmer, Nolan McNair, Taylor Talmage, and Allen Tucker.
 * This program is part of RMH Homebase, which is free software.  It comes with
 * absolutely no warranty. You can redistribute and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 *
 */
/*
 * Modified March 2012
 * @Author Taylor and Allen
 */
use PHPUnit\Framework\TestCase;
include_once(dirname(__FILE__).'/../database/dbAccounts.php');
include_once(dirname(__FILE__).'/../domain/Account.php');

class dbAccountsTest extends TestCase {
      function testdbAccounts() {
      	// add two accounts to the database

          $m = new Account("ted@bowdoin.edu","password1","Gabrielle","Booth","status1");
		$this->assertTrue(add_account($m));

		$m2 = new Account("alfred@whitman.edu", "password2", "Fred", "Wilson","status2");
		$this->assertTrue(add_account($m2));

		// retrieve the Account and test the fields
		$p = retrieve_account("ted@bowdoin.edu");
		$this->assertTrue($p!==false);
		$this->assertTrue($p->get_status() == "status1");
		$this->assertTrue($p->get_first_name() == "Garielle");
		$this->assertTrue($p->get_last_name() == "Booth");
		$this->assertTrue($p->get_password() == "password1");

		$p2 = retrieve_account("alfred@whitman.edu");
		$this->assertTrue($p2!==false);
		$this->assertTrue($p2->get_status() == "status2");
		$this->assertTrue($p2->get_first_name() == "Fred");
		$this->assertTrue($p2->get_last_name() == "Wilson");
		$this->assertTrue($p2->get_password() == "password2");

		// remove the Account
		$this->assertTrue(remove_account("ted@bowdoin.edu"));
		$this->assertTrue(remove_account("alfred@whitman.edu"));


		echo("dbAccountsTest complete\n");

      }
}
?>