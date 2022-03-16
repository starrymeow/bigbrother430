<?php
namespace database;

use domain\Account;

include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/Account.php');

/*
 * add a person to dbPersons table: if already there, return false
 */

function add_account($account) {
    if (!$account instanceof Account)
        die("Error: add_account type mismatch");
        $con=connect();
        $query = "SELECT * FROM dbAccounts WHERE email = '" . $account->get_email() . "'";
        $result = mysqli_query($con,$query);
        //if there's no entry for this id, add it
        if ($result == null || mysqli_num_rows($result) == 0) {
            mysqli_query($con,'INSERT INTO dbAccounts VALUES("' .
                $account->get_email() . '","' .
                $account->get_password() .
                '");');
                mysqli_close($con);
                return true;
        }
        mysqli_close($con);
        return false;
}

/*
 * remove an account from dbAccounts table.  If not there, return false
 */
function remove_account($email) {
    $con=connect();
    $query = 'SELECT * FROM dbAccounts WHERE email = "' . $email . '"';
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $query = 'DELETE FROM dbAccounts WHERE email = "' . $email . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return true;
}

/*
 * @return an Account from dbAccounts table matching a particular email.
 * if not in table, return false
 */

function retrieve_account($email) {
    $con=connect();
    $query = "SELECT * FROM dbAccounts WHERE email = '" . $email . "'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) !== 1) {
        mysqli_close($con);
        return false;
    }
    $result_row = mysqli_fetch_assoc($result);
    // var_dump($result_row);
    $theAccount = make_an_account($result_row);
    //    mysqli_close($con);
    return $theAccount;
}


function change_password($email, $newPass) {
    $con=connect();
    $query = 'UPDATE dbPersons SET password = "' . $newPass . '" WHERE email = "' . $email . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return $result;
}
?>
