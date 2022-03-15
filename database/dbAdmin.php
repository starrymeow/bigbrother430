<?php

include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/Admin.php');

function make_a_person($result_row) {
    /*
     ($f, $l, $v, $a, $c, $s, $z, $p1, $p1t, $p2, $p2t, $e, $t,
     $screening_type, $screening_status, $st, $emp, $pos, $hours, $comm, $mot, $spe,
     $convictions, $av, $sch, $hrs, $bd, $sd, $hdyh, $notes, $pass)
     */
    $thePerson = new Person(
        $result_row['first_name'],
        $result_row['last_name'],
        $result_row['venue'],
        $result_row['address'],
        $result_row['city'],
        $result_row['state'],
        $result_row['zip'],
        $result_row['phone1'],
        $result_row['phone1type'],
        $result_row['phone2'],
        $result_row['phone2type'],
        $result_row['email'],
        $result_row['type'],
        $result_row['screening_type'],
        $result_row['screening_status'],
        $result_row['status'],
        $result_row['employer'],
        $result_row['position'],
        $result_row['hours'],
        $result_row['commitment'],
        $result_row['motivation'],
        $result_row['specialties'],
        $result_row['convictions'],
        $result_row['availability'],
        $result_row['schedule'],
        $result_row['hours'],
        $result_row['birthday'],
        $result_row['start_date'],
        $result_row['howdidyouhear'],
        $result_row['notes'],
        $result_row['password']);
    return $thePerson;
}
?>
