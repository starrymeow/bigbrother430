<?php
/*
 * Copyright 2013 by Allen Tucker.
 * This program is part of RMHC-Homebase, which is free software. It comes with
 * absolutely no warranty. You can redistribute and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 *
 */
?><?php

/*
 * Created on Mar 28, 2008
 * @author Oliver Radwan <oradwan@bowdoin.edu>, Sam Roberts, Allen Tucker
 * @version 3/28/2008, revised 7/1/2015
 */
?>
<div id="loginform">
    <?php
    include_once ('database/dbAccounts.php');
    include_once ('domain/Account.php');
    if (($_SERVER['PHP_SELF']) == "/logout.php") {
        // prevents infinite loop of logging in to the page which logs you out...
        echo "<script type=\"text/javascript\">window.location = \"index.php\";</script>";
    }
    if (! array_key_exists('_submit_check', $_POST)) {
        echo ('<h1>Log In</h1>');
        echo ('<form method="post">');
        echo ('<input type="hidden" name="_submit_check" value="true">');
        echo ('<label for="user">Email</label><br>');
        echo ('<input type="text" name="user" tabindex="1" placeholder="example@email.com"><br>');
        echo ('<label for="pass">Password</label><br>');
        echo ('<input type="password" name="pass" tabindex="2" placeholder="**********"><br>');
        echo ('<input type="submit" name="Login" value="Log In">');
        echo ('</form>');

        echo ('<form method="post" action="' . $path . 'accountEdit.php?id=' . 'new' . '">');
        echo ('<br><label for="register">Don\'t have an account yet?</label><br>');
        echo ('<input type="submit" name="register" value="Create Account">');
        echo ('</form>');
    }
    else {
        // check if they logged in as a guest:
        if ($_POST['user'] == "guest" && $_POST['pass'] == "") {
            $_SESSION['logged_in'] = 1;
            $_SESSION['access_level'] = 0;
            $_SESSION['_id'] = "guest";
            echo "<script type=\"text/javascript\">window.location = \"index.php\";</script>";
        }
        elseif ($_POST['user'] == "user" && $_POST['pass'] == "") {
            // TODO Delete, test only
            $_SESSION['logged_in'] = 1;
            $_SESSION['access_level'] = 1;
            $_SESSION['f_name'] = "User V";
            $_SESSION['l_name'] = "Test";
            $_SESSION['_id'] = $_POST['user'];
            echo "<script type=\"text/javascript\">window.location = \"index.php\";</script>";
        }
        elseif ($_POST['user'] == "admin" && $_POST['pass'] == "") {
            // TODO Delete, test only
            $_SESSION['logged_in'] = 1;
            $_SESSION['access_level'] = 2;
            $_SESSION['f_name'] = "Admin";
            $_SESSION['l_name'] = "Test";
            $_SESSION['_id'] = $_POST['user'];
            echo "<script type=\"text/javascript\">window.location = \"index.php\";</script>";
        } // otherwise authenticate their password
        else {
            // TODO
            $db_pass = md5($_POST['pass']);
            $db_email = $_POST['user'];
            $account = retrieve_account($db_email);
            if ($account) { //avoids null results
                if ($account->get_password() == $db_pass) { //if the passwords match, login
                    $_SESSION['logged_in'] = 1;
                    date_default_timezone_set("America/New_York");
                    if ($account->get_status() == "applicant")
                        $_SESSION['access_level'] = 0;
                    else if (get_class($account) == 'admin')
                        $_SESSION['access_level'] = 2;
                    else
                        $_SESSION['access_level'] = 1;
                    $_SESSION['f_name'] = $account->get_first_name();
                    $_SESSION['l_name'] = $account->get_last_name();
                    $_SESSION['_id'] = $_POST['user'];              //email
                    echo "<script type=\"text/javascript\">window.location = \"index.php\";</script>";
                }
                else {
                    //TODO fix this error's css
                    echo ('<div align="left"><p class="error">Error: invalid username/password<br />if you cannot remember your password, ask either the
        		<a href="mailto:allen@npfi.org"><i>Portland House Manager</i></a>
        		or the <a href="mailto:allen@npfi.org"><i>Bangor House Manager</i></a>. to reset it for you.</p><p>Access to Homebase requires a Username and a Password. <p>For guest access, enter Username <strong>guest</strong> and no Password.</p>');
                    echo ('<h1>Log In</h1>');
                    echo ('<form method="post">');
                    echo ('<input type="hidden" name="_submit_check" value="true">');
                    echo ('<label for="user">Email</label><br>');
                    echo ('<input type="text" name="user" tabindex="1" placeholder="example@email.com"><br>');
                    echo ('<label for="pass">Password</label><br>');
                    echo ('<input type="password" name="pass" tabindex="2" placeholder="**********"><br>');
                    echo ('<input type="submit" name="Login" value="Log In">');
                    echo ('</form>');
                }
            } else {
                // At this point, they failed to authenticate
                echo ('<div align="left"><p class="error">Error: invalid username/password<br />if you cannot remember your password, ask the House Manager to reset it for you.</p><p>Access to Homebase requires a Username and a Password. <p>For guest access, enter Username <strong>guest</strong> and no Password.</p>');
                echo ('<h1>Log In</h1>');
                echo ('<form method="post">');
                echo ('<input type="hidden" name="_submit_check" value="true">');
                echo ('<label for="user">Email</label><br>');
                echo ('<input type="text" name="user" tabindex="1" placeholder="example@email.com"><br>');
                echo ('<label for="pass">Password</label><br>');
                echo ('<input type="password" name="pass" tabindex="2" placeholder="**********"><br>');
                echo ('<input type="submit" name="Login" value="Log In">');
                echo ('</form>');
            }
        }
    }
    ?>
    <?php include('footer.inc'); ?>
</div>
