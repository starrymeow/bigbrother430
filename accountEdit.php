<?php
/*
 * Copyright 2015 by Allen Tucker. This program is part of RMHC-Homebase, which is free
 * software.  It comes with absolutely no warranty. You can redistribute and/or
 * modify it under the terms of the GNU General Public License as published by the
 * Free Software Foundation (see <http://www.gnu.org/licenses/ for more information).
 */
/*
 * 	accountEdit.php
 *  oversees the editing of a account to be added, changed, or deleted from the database
 * 	@author Oliver Radwan, Xun Wang and Allen Tucker
 */
session_start();
session_cache_expire(30);
include_once('database/dbAccounts.php');
include_once('domain/Account.php');
include_once('database/dbAdmins');
include_once('database/dbApplicantScreenings.php');
include_once('domain/ApplicantScreening.php');
include_once('database/dbLog.php');
$defaultAdmin = "example@example.com";
$email = str_replace("_"," ",$_GET["id"]);

if ($email == 'new') {
    $account = new Account('new', 'applicant', "new", null, "");
} else {
    $account = retrieve_account($email);
    if (!$account) { // try again by changing blanks to _ in id
        $email = str_replace(" ","_",$_GET["id"]);
        $account = retrieve_account($email);
        if (!$account) {
            echo('<p id="error">Error: there\'s no account with this id (email) in the database</p>' . $id);
            die();
        }
    }
}
?>
<html>
    <head>
        <title>
            Editing <?PHP echo($account->get_first_name() . " " . $account->get_last_name()); ?>
        </title>
        <link rel="stylesheet" href="lib/jquery-ui.css" />
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <script src="lib/jquery-1.9.1.js"></script>
		<script src="lib/jquery-ui.js"></script>
		<?php /*<script>
			$(function(){
				$( "#birthday" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
				$( "#start_date" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
				$( "#end_date" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
				$( "#screening_status[]" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
			})
		</script>*/?>
    </head>
    <body>
        <div id="container">
            <?php include('header.php'); ?>
            <div id="content">
                <?php
                include('accountValidate.inc');
                if ($_POST['_form_submit'] != 1)
                //in this case, the form has not been submitted, so show it
                    include('accountForm.inc');
                else {
                    //in this case, the form has been submitted, so validate it
                    $errors = validate_form($account);  //step one is validation.
                    // errors array lists problems on the form submitted
                    if ($errors) {
                        // display the errors and the form to fix
                        show_errors($errors);
                        $account = new Account($_POST['first_name'], $_POST['last_name'], $account->get_email(), null, $_POST['old_pass']);
                        include('accountForm.inc');
                    }
                    // this was a successful form submission; update the database and exit
                    else
                        process_form($id,$account);
                        echo "</div>";
                    include('footer.inc');
                    echo('</div></body></html>');
                    die();
                }

                /**
                 * process_form sanitizes data, concatenates needed data, and enters it all into a database
                 */
                function process_form($email,$account) {
                    //echo($_POST['first_name']);
                    //step one: sanitize data by replacing HTML entities and escaping the ' character
                    if ($account->get_first_name()=="new")
                   		$first_name = trim(str_replace('\\\'', '', htmlentities(str_replace('&', 'and', $_POST['first_name']))));
                    else
                    	$first_name = $account->get_first_name();
                    $last_name = trim(str_replace('\\\'', '\'', htmlentities($_POST['last_name'])));
                    $email = $_POST['email'];
                    $status = $_POST['status'];
                	$path = strrev(substr(strrev($_SERVER['SCRIPT_NAME']), strpos(strrev($_SERVER['SCRIPT_NAME']), '/')));
                    //step two: try to make the deletion, password change, addition, or change
                    if ($_POST['deleteMe'] == "DELETE") {
                        $result = retrieve_account($email);
                        if (!$result)
                            echo('<p>Unable to delete. ' . $first_name . ' ' . $last_name . ' is not in the database. <br>Please report this error to the House Manager.');
                        else {
                            //What if they're the last remaining manager account?
                            if (retrieve_admin($result->email)) {
                                //They're a manager, we need to check that they can be deleted
                                $managers = get_all_admins();
                                if (!$managers || mysqli_num_rows($managers) <= 1 || $email==$defaultAdmin || $email==$_SESSION['id'] || retrieve_admin($email)->get_is_super())
                                    echo('<p class="error">You cannot remove this manager from the database.</p>');
                                else {
                                    remove_account($email);
                                    remove_admin($email);
                                    echo("<p>You have successfully removed " . $first_name . " " . $last_name . " from the database.</p>");
                                    if ($email == $_SESSION['_id']) {
                                        session_unset();
                                        session_destroy();
                                    }
                                }
                            } else {
                                $result = remove_account($email);
                                echo("<p>You have successfully removed " . $first_name . " " . $last_name . " from the database.</p>");
                                if ($email == $_SESSION['_id']) {
                                    session_unset();
                                    session_destroy();
                                }
                            }
                        }
                    }

                    // try to reset the account's password
                    else if ($_POST['reset_pass'] == "RESET") {
                        $email = $_POST['old_id'];
                        $result = remove_account($email);
                        $pass = $first_name . $last_name;
                        $newaccount = new Account($first_name, $last_name, $email, $status, $pass);
                        $result = add_account($newaccount);
                        if (!$result)
                            echo ('<p class="error">Unable to reset ' . $first_name . ' ' . $last_name . "'s password.. <br>Please report this error to the House Manager.");
                        else
                            echo("<p>You have successfully reset " . $first_name . " " . $last_name . "'s password.</p>");
                    }

                    // try to add a new account to the database
                    else if ($_POST['old_id'] == 'new') {
                        //check if there's already an entry
                        $dup = retrieve_account($email);
                        if ($dup)
                            echo('<p class="error">Unable to add ' . $first_name . ' ' . $last_name . ' to the database. <br>An account with the same email already exists.');
                        else {
                        	$newaccount = new Account($first_name, $last_name, $email, $status, $_POST['old_pass']);
                            $result = add_account($newaccount);
                            if (!$result)
                                echo ('<p class="error">Unable to add " .$first_name." ".$last_name. " in the database. <br>Please report this error to the House Manager.');
                            else if ($_SESSION['access_level'] == 0)
                                echo("<p>Your account has been successfully created.<br>");
                            else
                                echo('<p>You have successfully added <a href="' . $path . 'accountEdit.php?id=' . $email . '"><b>' . $first_name . ' ' . $last_name . ' </b></a> to the database.</p>');
                        }
                    }

                    // try to replace an existing account in the database by removing and adding
                    else {
                        $email = $_POST['old_id'];
                        $pass = $_POST['old_pass'];
                        $result = remove_account($email);
                        if (!$result)
                            echo ('<p class="error">Unable to update ' . $first_name . ' ' . $last_name . '. <br>Please report this error to the House Manager.');
                        else {
                            $newaccount = new Account($first_name, $last_name, $email, $status, $pass);
                            $result = add_account($newaccount);
                            if (!$result)
                                echo ('<p class="error">Unable to update ' . $first_name . ' ' . $last_name . '. <br>Please report this error to the House Manager.');
                            //else echo("<p>You have successfully edited " .$first_name." ".$last_name. " in the database.</p>");
                            else
                                echo('<p>You have successfully edited <a href="' . $path . 'accountEdit.php?id=' . $email . '"><b>' . $first_name . ' ' . $last_name . ' </b></a> in the database.</p>');
                            add_log_entry('<a href=\"accountEdit.php?id=' . $email . '\">' . $first_name . ' ' . $last_name . '</a>\'s Account Edit Form has been changed.');
                        }
                    }
                }
                ?>
            </div>
            <?PHP include('footer.inc'); ?>
        </div>
    </body>
</html>
