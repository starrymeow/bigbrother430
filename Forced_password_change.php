<div class="infoform">
    <?php
    include_once ('database/dbAccounts.php');
    include_once ('domain/Account.php');
//     if (($_SERVER['PHP_SELF']) == "/logout.php") {
//         // prevents infinite loop of logging in to the page which logs you out...
//         echo "<script type=\"text/javascript\">window.location = \"index.php\";</script>";
//     }
    if (! array_key_exists('_submit_check', $_POST)) {
        echo ('<h1>First time login</h1>');
        echo ('<h2>Users must create a new password</h2>');
        echo ('<form method="post">');
        echo ('<input type="hidden" name="_submit_check" value="true">');
        echo ('<label for="newpassword">New Password</label><br>');
        echo ('<input type="password" name="newpassword" tabindex="1" placeholder="**********"><br>');
        echo ('<label for="repass">Confirm Password</label><br>');
        echo ('<input type="password" name="repass" tabindex="2" placeholder="**********"><br>');
        echo ('<input type="submit" name="Change" value="Change Password" class="greenButton">');
        echo ('</form>');
    } else {
        $newPass = $_POST['newpassword'];
        $repass = $_POST['repass'];
        if ($newPass == $repass) {
            $email = $_SESSION['_id'];
            if (!change_account_password($email, password_hash($newPass, PASSWORD_DEFAULT))) {
                echo ('<p class="error">Unable to update ' . $first_name . ' ' . $last_name . '. <br>Please report this error to the House Manager.');
                goto end;
            }
            if (!change_status($email, 'active')) {
                echo ('<p class="error">Unable to update ' . $first_name . ' ' . $last_name . '. <br>Please report this error to the House Manager.');
                goto end;
            }

            echo ('<h2>Account password successfully changed.</h2>');
            goto end;
        }
        echo ('<h1>First time login</h1>');
        echo ('<h2>Error: Passwords did not match,<br>Please Try Again.</h2>');
        echo ('<form method="post">');
        echo ('<input type="hidden" name="_submit_check" value="true">');
        echo ('<label for="newpassword">New Password</label><br>');
        echo ('<input type="password" name="password" tabindex="1" placeholder="**********"><br>');
        echo ('<label for="repass">Confirm Password</label><br>');
        echo ('<input type="password" name="pass" tabindex="2" placeholder="**********"><br>');
        echo ('<input type="submit" name="Change" value="Change Password" class="greenButton">');
        echo ('</form>');
    }
    end:
    ?>
    <?php include('footer.inc'); ?>
</div>
