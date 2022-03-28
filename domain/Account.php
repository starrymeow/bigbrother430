<?php

/*
 * Created on Mar 8, 2022
 * @version 3/14/2022, revised 3/16/2022
 */
 class Account {
	private $email;   // email address as a string
	private $password;     // password for account access: default = $email
	private $first_name;       //first name of account holder as a string
	private $last_name;        //last name of account holder as a string
	private $status;     // an account may be ...


	function __construct($first, $last, $e, $s, $pass) {
	    $this->first_name = $first;
	    $this->last_name = $last;
		$this->email = $e;
		$this->status = $s;
		$this->password = $pass;  // default password == md5($email)
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