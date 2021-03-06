<?php
include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/Account.php');
include_once(dirname(__FILE__).'/../domain/Admin.php');

//add an account to the dbAccounts table: if already there, return false
function add_account($account) {
    if (!$account instanceof Account)
        //var_dump(get_class($account));
        die("Error: add_account type mismatch");
        //return false;
    $con=connect();
    $query = "SELECT * FROM dbAccounts WHERE email = '" . $account->get_email() . "'";
    $result = mysqli_query($con,$query);
    //if there's no entry for this id, add it
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_query($con,'INSERT INTO dbAccounts VALUES("' .
            $account->get_email() . '","' .
            $account->get_password() . '","' .
            $account->get_first_name() . '","' .
            $account->get_last_name() . '","' .
            $account->get_status() .
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
    return $result;
}

/*
 * @return an Account from dbAccounts table matching a particular email.
 * if not in table, return false
 */
function retrieve_account($email) {
    $con=connect();
    $query = 'SELECT * FROM dbAccounts WHERE lower(email) = "' . strtolower($email) . '"';
    $result = mysqli_query($con,$query);
    //var_dump(mysqli_error($con));
    if (mysqli_num_rows($result) !== 1) {
        mysqli_close($con);
        return false;
    }
    $result_row = mysqli_fetch_assoc($result);
    //var_dump($result_row);
    $theAccount = make_an_account($result_row);
    //var_dump($theAccount);

    mysqli_close($con);
    return $theAccount;
}


function change_account_password($email, $newPass) {
    $con=connect();
    $query = 'UPDATE dbAccounts SET password = "' . $newPass . '" WHERE email = "' . $email . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return $result;
}

function change_first($email, $newFirst) {
    $con = connect();
    $query = 'UPDATE dbAccounts SET first_name = "' . $newFirst . '" WHERE email = "' . $email . '"';
    $result = mysqli_query($con, $query);
    mysqli_close($con);
    return $result;
}

function change_last($email, $newLast) {
    $con = connect();
    $query = 'UPDATE dbAccounts SET last_name = "' . $newLast . '" WHERE email = "' . $email . '"';
    $result = mysqli_query($con, $query);
    mysqli_close($con);
    return $result;
}

function change_status($email, $status) {
    $con = connect();
    $query = 'UPDATE dbAccounts SET status = "' . $status . '" WHERE email = "' . $email . '"';
    $result = mysqli_query($con, $query);
    mysqli_close($con);
    return $result;
}

function make_an_account($result_row) {
    $theAccount = new Account(
        $result_row["email"],
        $result_row["password"],
        $result_row["first_name"],
        $result_row["last_name"],
        $result_row["status"]);
    return $theAccount;
}


function getall_dbAccounts($name_from, $name_to) {
    $con=connect();
    $query = "SELECT * FROM dbAccounts";
    $query.= " WHERE last_name BETWEEN '" .$name_from. "' AND '" .$name_to. "'";
    $query.= " ORDER BY last_name,first_name";
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $result = mysqli_query($con,$query);
    $theAccounts = array();
    while ($result_row = mysqli_fetch_assoc($result)) {
        $theAccount = make_an_account($result_row);
        $theAccounts[] = $theAccount;
    }

    return $theAccounts;
}

function getall_firstdbAccounts($firstname) {
    $con=connect();
    $query = "SELECT * FROM dbAccounts";
    $query.= " WHERE first_name = '" . $firstname . "'";
    $query.= " ORDER BY last_name,first_name";
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $result = mysqli_query($con,$query);
    $theAccounts = array();
    while ($result_row = mysqli_fetch_assoc($result)) {
        $theAccount = make_an_account($result_row);
        $theAccounts[] = $theAccount;
    }

    return $theAccounts;
}

function getall_lastdbAccounts($lastname) {
    $con=connect();
    $query = "SELECT * FROM dbAccounts";
    $query.= " WHERE last_name = '" . $lastname . "'";
    $query.= " ORDER BY last_name,first_name";
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $result = mysqli_query($con,$query);
    $theAccounts = array();
    while ($result_row = mysqli_fetch_assoc($result)) {
        $theAccount = make_an_account($result_row);
        $theAccounts[] = $theAccount;
    }

    return $theAccounts;
}

function getall_statusdbAccounts($status) {
    $con=connect();
    $query = "SELECT * FROM dbAccounts";
    $query.= " WHERE status = '" . $status . "'";
    $query.= " ORDER BY last_name,first_name";
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $result = mysqli_query($con,$query);
    $theAccounts = array();
    while ($result_row = mysqli_fetch_assoc($result)) {
        $theAccount = make_an_account($result_row);
        $theAccounts[] = $theAccount;
    }

    return $theAccounts;
}
?>