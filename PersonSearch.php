<?php

session_start();
session_cache_expire(30);
include_once('database/dbAccounts.php');
include_once('domain/Account.php');
//include_once('database/dbMatches.php');
//include_once('domain/Admin.php');
include_once('database/dbinfo.php');
// Tests if user can access page
if (!($_SESSION['access_level'] >= 2)) {
    header("Location: index.php");
    die();
}
?>
<html>
	<head>
        <title>
            BBBS Fredericksburg
        </title>
        <link rel="icon" href="http://www.bbbsfred.org/wp-content/uploads/sites/17/2018/12/cropped-10.25.18-Favico-512x512-white-background-192x192.jpg" sizes="192x192" />
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
	<body>
		<div id="container">
		<?PHP include('header.php');?>
			<div id="content">
				<div class="infoform">
					<h1>Search for a Person</h1>
					<?php //TODO Fill in default name
                    $accounts = getall_dbAccounts("A", "Z");
                    var_dump($accounts);
                    
                    if (!array_key_exists('_submit_check', $_POST)) {
              
                    }
                    if ($account == false) {
                        echo  ('<p>Account not in database.</p>');
                    }
                    elseif (! array_key_exists('_submit_check', $_POST)) {
        				echo ('<form method="post">');
        				echo ('<input type="hidden" name="_submit_check" value="true">');
        				echo ('<label for="email">Email</label><br>');
       					echo ('<input type="text" name="email" value="' . $account->get_email() . '" style="color: black; background-color: #A1A1A1;" readonly><br>');
        				echo ('<label for="namef">First Name</label><br>');
        				echo ('<input type="text" name="namef" value="' . $account->get_first_name() . '"><br>');
       				 	echo ('<label for="namel">Last Name</label><br>');
        				echo ('<input type="text" name="namel" value="' . $account->get_last_name() . '"><br>');
        				echo ('<input type="submit" name="changename" value="Change Info" class="greenButton"><br><br><br><br>');
        				echo ('<label for="old_password">Old Password</label><br>');
        				echo ('<input type="password" name="old_password" placeholder="********"><br>');
        				echo ('<label for="new_password">New Password</label><br>');
        				echo ('<input type="password" name="new_password" placeholder="********"><br>');
        				echo ('<label for="confirm_password">Confirm Password</label><br>');
        				echo ('<input type="password" name="confirm_password" placeholder="********"><br>');
        				echo ('<input type="submit" name="changepass" value="Change Password" class="greenButton">');
        				echo ('</form>');
        				
                    } else {
                        print_r($_POST);
                        if ($_POST['changename']) {
        					$new_first = $_POST['namef'];
        					$new_last = $_POST['namel'];
         					change_first($_SESSION['_id'], $_POST['namef']);
         					change_last($_SESSION['_id'], $_POST['namel']);
                        }
                        if ($_POST['changepass']) {
                            $newpass = $_POST['new_password'];
                            $confirm = $_POST['confirm_password'];
                            if ($newpass == $confirm and $newpass != "") {
                                if (password_verify($_POST['old_password'], $account->get_password())) {
                                    $account = change_account_password($_SESSION['_id'], $newpass);
                                } else {
                                    echo ('<p class="error">Incorrect Old password.</p>');
                                }
                            } else {
                                echo ('<p class="error">Passwords do not match or are empty.</p>');
                            }
                        }

                        $account = retrieve_account($_SESSION['_id']);
                        print_r($_SESSION);
                        echo ('<form method="post">');
                        echo ('<input type="hidden" name="_submit_check" value="true">');
                        echo ('<label for="email">Email</label><br>');
                        echo ('<input type="text" name="email" value="' . $account->get_email() . '" style="color: black; background-color: #A1A1A1;" readonly><br>');
                        echo ('<label for="namef">First Name</label><br>');
                        echo ('<input type="text" name="namef" value="' . $account->get_first_name() . '"><br>');
                        echo ('<label for="namel">Last Name</label><br>');
                        echo ('<input type="text" name="namel" value="' . $account->get_last_name() . '"><br>');
                        echo ('<input type="submit" name="changename" value="Change Info" class="greenButton"><br><br><br><br>');
                        echo ('<label for="old_password">Old Password</label><br>');
                        echo ('<input type="password" name="old_password" placeholder="********"><br>');
                        echo ('<label for="new_password">New Password</label><br>');
                        echo ('<input type="password" name="new_password" placeholder="********"><br>');
                        echo ('<label for="confirm_password">Confirm Password</label><br>');
                        echo ('<input type="password" name="confirm_password" placeholder="********"><br>');
                        echo ('<input type="submit" name="changepass" value="Change Password" class="greenButton">');
                        echo ('</form>');
                    }
   					?>
				</div>
			</div>
		<?PHP include('footer.inc');?>
		</div>
	</body>
</html>
