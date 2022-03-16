<?php
namespace domain;

/*
 * Copyright 2013 by Allen Tucker.
 * This program is part of RMHC-Homebase, which is free software.  It comes with
 * absolutely no warranty. You can redistribute and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 *
 */

/*
 * Created on Mar 28, 2008
 * @author Oliver Radwan <oradwan@bowdoin.edu>, Sam Roberts, Allen Tucker
 * @version 3/28/2008, revised 7/1/2015
 */
 class Account {
	private $email;   // email address as a string
	private $password;     // password for account access: default = $email
	private $applications;     // array of applications acosiated with this account: key=id
	private $first_name;       //first name of account holder as a string
	private $last_name;        //last name of account holder as a string
	private $status;     // a person may be an "applicant", "active", "LOA", or "former"


	function __construct($first, $last, $e, $s, $pass) {
	    $this->first_name = $first;
	    $this->last_name = $last;
		$this->email = $e;
		$this->status = $s;
		if ($pass == "")
			$this->password = md5($this->email);
		else
			$this->password = $pass;  // default password == md5($email)
		$this->applications = array();
	}

	function get_email() {
		return $this->email;
	}

	function get_password() {
		return $this->password;
	}

	function set_password($pass) {
	    $this->password = $pass;
	}

	function add_application($id, $application) {
	    $this->applications[$id] = $application;
	}

	function get_applications() {
	    return $this->applications;
	}

	function get_first_name() {
	    return $this->first_name;
	}

	function get_last_name() {
	    return $this->last_name;
	}

	function get_status() {
	    return $this->status;
	}

	function set_status($s) {
	   $this->status = $s;
	}
}
?>

