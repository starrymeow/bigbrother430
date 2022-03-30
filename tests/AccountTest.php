<?php
/*
 * Copyright 2015 by Adrienne Beebe, Yonah Biers-Ariel, Connor Hargus, Phuong Le,
 * Xun Wang, and Allen Tucker. This program is part of RMHP-Homebase, which is free
 * software.  It comes with absolutely no warranty. You can redistribute and/or
 * modify it under the terms of the GNU General Public License as published by the
 * Free Software Foundation (see <http://www.gnu.org/licenses/ for more information).
 */

/**
 * Test suite for Account
 * @author Taylor Talmage, Phuong Le, and Allen Tucker
 * @version on Feb 27, 2008 (v1), Jan 30, 2015 (v2), and Mar 3, 2015 (v3, last modified)
 */

 use PHPUnit\Framework\TestCase;
 include_once(dirname(__FILE__).'/../domain/Account.php');
 class AccountTest extends TestCase {
      function testAccount() {
          $myAccount = new Account("susanl@aol.com", "password", "Susan","Last", "status");

         $this->assertTrue($myAccount->get_first_name()=="Susan");
         $this->assertTrue($myAccount->get_last_name()=="Last");
         $this->assertTrue($myAccount->get_email()=="susan@aol.com");
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