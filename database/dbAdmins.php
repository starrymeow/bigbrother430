<?php


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
            $admin->get_email() . '","' .
            $admin->get_password() . '","' .
            $admin->get_first_name() . '","' .
            $admin->get_last_name() . '","' .
            $admin->get_status() . '","' .
            $admin->get_is_super() .
            '");');
        mysqli_close($con);
        return true;
    }
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
    return true;
}


/*
 * @return a Person from dbPersons table matching a particular id.
 * if not in table, return false
 */
function retrieve_admin($email) {
    $con=connect();
    $query = "SELECT * FROM dbAdmins WHERE email = '" . $email . "'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) !== 1) {
        mysqli_close($con);
        return false;
    }
    $result_row = mysqli_fetch_assoc($result);
    // var_dump($result_row);
    $theAdmin = make_a_admin($result_row);
    mysqli_close($con);
    return $theAdmin;
}

function change_admin_password($email, $newPass) {
    $con=connect();
    $query = 'UPDATE dbAdmins SET password = "' . $newPass . '" WHERE email = "' . $email . '"';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return $result;
}

function make_an_admin($result_row) {
    $account = retrieve_admin($result_row['email']);
    $theAdmin = new Admin(
        $account->get_email(),
        $account->get_is_super());
    return $theAdmin;
}

function promote($email) {
    $con=connect();
    $query = 'UPDATE dbAdmins SET is_super = "yes" WHERE email = "' . $email . '"';
    $result = mysqli_query($con, $query);
    mysqli_close($con);
    return $result;
}

function get_all_admins() {
    $con=connect();
    $query = 'SELECT * FROM dbAdmins NATURAL JOIN dbAccounts';
    $result = mysqli_query($con,$query);
    mysqli_close($con);
    return $result;
}
?>
