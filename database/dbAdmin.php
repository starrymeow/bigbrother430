<?php

use domain\Admin;

include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/Admin.php');

/*
 * add a person to dbPersons table: if already there, return false
 */
function add_admin($admin) {
    if (!$admin instanceof Admin)
        die("Error: add_admin type mismatch");
        $con=connect();
        $query = "SELECT * FROM dbAdmins WHERE email = '" . $admin->get_email() . "'";
        $result = mysqli_query($con,$query);
        //if there's no entry for this id, add it
        if ($result == null || mysqli_num_rows($result) == 0) {
            mysqli_query($con,'INSERT INTO dbAdmins VALUES("' .
                $admin->get_first_name() . '","' .
                $admin->get_last_name() . '","' .
                $admin->get_email() . '","' .
                $admin->get_is_super() . '","' .
                $admin->get_password() . '","' .
                '");');
            mysqli_close($con);
            return true;
        }
        mysqli_close($con);
        return false;
}

function make_an_admin($result_row) {
    /*
     ($f, $l, $v, $a, $c, $s, $z, $p1, $p1t, $p2, $p2t, $e, $t,
     $screening_type, $screening_status, $st, $emp, $pos, $hours, $comm, $mot, $spe,
     $convictions, $av, $sch, $hrs, $bd, $sd, $hdyh, $notes, $pass)
     */
    $theAdmin = new Admin(
        $result_row['first_name'],
        $result_row['last_name'],
        $result_row['email'],
        $result_row['status'],
        $result_row['password'],
        $result_row['is_super']);
    return $theAdmin;
}
?>
