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
         $myAccount = new Account("Susan","L","portland","928 SU","Portland", "ME",04011,
              2074415902,"home",2072654046,"cell", "susanl@aol.com", "volunteer",
              "","","active", "USM","student",3,"semester","I like helping out","cooking","",
              "Mon:9-12:portland,Sun:evening:portland", "", "", "89-02-19", "08-03-14", "internet",
              "this is a note","");

         $this->assertTrue($myAccount->get_first_name()=="Susan");
         $this->assertTrue($myAccount->get_type()==array("volunteer"));
         $this->assertTrue($myAccount->get_status()=="active");
         $this->assertTrue($myAccount->get_city()=="Portland");
         $this->assertTrue($myAccount->get_phone1()==2074415902);
         $this->assertTrue($myAccount->get_employer()=="USM");
         $this->assertEquals($myAccount->get_availability(),array("Mon:9-12:portland","Sun:evening:portland"));
         $this->assertTrue($myAccount->get_last_name() !== "notMyLastName");
         $this->assertTrue($myAccount->get_phone1type()!=="work");
         $this->assertTrue($myAccount->get_howdidyouhear()=="internet");
         $this->assertTrue($myAccount->get_birthday()=="89-02-19");
      }
 }

?>
