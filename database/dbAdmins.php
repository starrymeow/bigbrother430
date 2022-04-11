<?php


include_once('dbinfo.php');
include_once(dirname(__FILE__).'/../domain/Admin.php');
include_once('dbAccounts.php');

// add a person to dbPersons table: if already there, return false
function add_admin($admin) {
    if (!$admin instanceof Admin)
        die("Error: add_admin type mismatch");
    $con=connect();
    $query = "SELECT * FROM dbAdmins WHERE email = '" . $admin->get_email() . "'";
    $result = mysqli_query($con,$query);
    //if there's no entry for this id, add it
    if ($result == null || mysqli_num_rows($result) == 0) {
        $acc = add_account($admin);
        if ($acc == false) {
            mysqli_close($con);
            return false;
        }
        $result = mysqli_query($con,'INSERT INTO dbAdmins VALUES("' .
            $admin->get_email() . '","' .
            $admin->get_is_super() .
            '");');
        //var_dump(mysqli_error($con));
        //var_dump($result);
        mysqli_close($con);
        return $result;
    }
    //var_dump(mysqli_error($con));
    mysqli_close($con);
    return false;
}

// remove an admin by email. Return false if there's no admin matching the email
function remove_admin($email) {
    $con=connect();
    $query = 'SELECT * FROM dbAdmins WHERE email = "' . $email. '"';
    $result = mysqli_query($con,$query);
    if ($result == null || mysqli_num_rows($result) == 0) {
        mysqli_close($con);
        return false;
    }
    $query = 'DELETE FROM dbAdmins WHERE email = "' . $email . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return remove_account($email);
}

/*
 * @return an Admin from dbAdmins table matching a particular email.
 * if not in table, return false
 */
function retrieve_admin($email) {
    $con=connect();
    $query = "SELECT * FROM dbAdmins WHERE email = '" . $email . "'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) !== 1) {
        //var_dump($result);
        mysqli_close($con);
        return false;
    }
    $result_row = mysqli_fetch_assoc($result);
    //var_dump($result_row);
    $theAdmin = make_an_admin($result_row);
    mysqli_close($con);
    return $theAdmin;
}

function change_admin_password($email, $newPass) {
    return change_account_password($email, $newPass);
    /*
    $con=connect();
    $query = 'UPDATE dbAdmins SET password = "' . $newPass . '" WHERE email = "' . $email . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return $result;*/
}

function make_an_admin($result_row) {
    $account = retrieve_account($result_row['email']);
    if ($account == false)
        return false;
    $theAdmin = new Admin(
        $account->get_email(),
        $account->get_password(),
        $account->get_first_name(),
        $account->get_last_name(),
        $result_row['is_super'],
        $account->get_status());
    return $theAdmin;
}

//promote on admin given an email
//return false on fail
function promote($email) {
    $con=connect();
    $query = 'UPDATE dbAdmins SET is_super = true WHERE email = "' . $email . '"';
    $result = mysqli_query($con, $query);
    mysqli_close($con);
    return $result;
}

//Return the emails of all the admins
function get_all_admins() {
    $con=connect();
    $query = 'SELECT `email` FROM dbAdmins';
    $result = mysqli_query($con,$query);
    for ($x=0; $x < mysqli_num_rows($result); $x++)
        $emails[] = mysqli_fetch_assoc($result)['email'];
    mysqli_close($con);
    return $emails;
}
?>
