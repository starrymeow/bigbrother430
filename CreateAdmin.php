<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

session_start();
session_cache_expire(30);
?>
<html>
    <head>
        <title>
            BBBS Fredericksburg Create New Admin
        </title>
        <link rel="icon" href="http://www.bbbsfred.org/wp-content/uploads/sites/17/2018/12/cropped-10.25.18-Favico-512x512-white-background-192x192.jpg" sizes="192x192" />
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <?PHP include('header.php'); ?>
            <div id="content">
                <?PHP
                if (!isset($_SESSION['logged_in'])) {
                    include('login_form.php');
                    goto end;
                }
                include_once('database/dbAccounts.php');
                include_once('domain/Account.php');
                include_once('database/dbinfo.php');
                include_once('domain/Admin.php');
                include_once('database/dbAdmins.php');
                date_default_timezone_set('America/New_York');
                ?>
				<div id="homeoptions">
				<?php
				if ($_SESSION['access_level'] == 0) {
				    echo ('<a href="' . $path . 'accountEdit.php?id=' . 'new' . '" class="greenButton">Apply</a>'); // TODO
				}
				if ($_SESSION['access_level'] == 1) {
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Check Match Status</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Submit Application</a>'); // TODO
				}
// 				if ($_SESSION['access_level'] >= 1) {
// 				    echo ('<a href="' . $path . 'accountDetails.php" class="greenButton">Account Details</a>'); // TODO

// 				}
				if ($_SESSION['access_level'] >= 2) {
				    include('accountValidate.inc');
				    echo ('<h1>Create new admin</h1>');
				    echo ('<form method="post"');
				    echo ('<label for="email">Email</label><br>');
				    echo ('<input type="text" name="email"/><br>');
				    echo ('<label for="first_name">First Name</lable><br>');
				    echo ('<input type="text" name="first_name"/><br>');
				    echo ('<label for="last_name">Last Name</lable><br>');
				    echo ('<input type="text" name="last_name"/><br>');
				    echo ('<input type="submit" name="new_admin" value="Enter" class="greenButton"><br>');
				    echo ('</form>');
				    if ($_POST['new_admin']) {
				        $account = new Account("new", "new", $_POST['first_name'], $_POST['last_name'], "admin", "no");
				        //var_dump($account);
				        //in this case, the form has been submitted, so validate it
				        $errors = validate_account($account);  //step one is validation.
				        // errors array lists problems on the form submitted
				        if ($errors) {
				            // display the errors and the form to fix
				            show_errors($errors);
				        }
				        else {
				            //$result = new Admin($account->get_email(), $account->get_password(),  );
				            process_form($_POST['email'],$account);
				            $admin = new Admin($_POST['email'], $account->get_password(), $account->get_first_name(), $account->get_last_name(), "no");
				            $result = add_admin($admin);
				            if (!$result) {
				                echo ('<h2>Admin couldn\'t be added to database. Sorry</h2>');
				            }
				            else {
				                echo ('<h2> Admin added to database</h2>');
				            }
				            
				            
				        }
				        echo "</div>";
				        include('footer.inc');
				        echo('</div></body></html>');
				        die();
				            
				    }
				}
				
				function generateRandomString($length = 20) {
				    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				    $charactersLength = strlen($characters);
				    $randomString = '';
				    for ($i = 0; $i < $length; $i++) {
				        $randomString .= $characters[rand(0, $charactersLength - 1)];
				    }
				    return $randomString;
				}
				
				function execInBackground($cmd){
				    if (substr(php_uname(), 0, 7) == "Windows"){
				        $p = popen("start /B ". $cmd, "r");
				        sleep(1);
				        pclose($p);
				    }else{
				        exec($cmd . " > /dev/null &");
				    }
				}
				
				
				/**
				 * process_form sanitizes data, concatenates needed data, and enters it all into a database
				 */
				function process_form($email,$account) {
				    //echo($account->get_email() == "new");
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
				                            if (!$managers || mysqli_num_rows($managers) <= 1 || $email==$defaultAdmin || $email==$_SESSION['_id'] || retrieve_admin($email)->get_is_super() )
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
				            //TODO use random string for reset password
				            else if ($_POST['reset_pass'] == "RESET") {
				                $email = $_POST['email'];
				                $result = remove_account($email);
				                $pass = $first_name . $last_name;
				                $newaccount = new Account($email, $pass, $first_name, $last_name, $status);
				                $result = add_account($newaccount);
				                var_dump($result);
				                if (!$result)
				                    echo ('<p class="error">Unable to reset ' . $first_name . ' ' . $last_name . "'s password.. <br>Please report this error to the House Manager.");
				                    else
				                        echo("<p>You have successfully reset " . $first_name . " " . $last_name . "'s password.</p>");
				            }
				            
				            // try to add a new account to the database
				            else if ($account->get_email() == "new") {
				                //check if there's already an entry
				                //TODO link to verification page in email body
				                //TODO enter old password to change to a new one
				                $dup = retrieve_account($email);
				                if ($dup) {
				                    echo('<p class="error">Unable to add ' . $first_name . ' ' . $last_name . ' to the database. <br>An account with the same email already exists.');
				                } else {
				                    try {
				                        $mail = new PHPMailer(true);
				                        //$mail->SMTPDebug = 2;                   // Enable verbose debug output
				                        $mail->isSMTP();                        // Set mailer to use SMTP
				                        $mail->Host       = 'smtp.gmail.com;';    // Specify main SMTP server
				                        $mail->SMTPAuth   = true;               // Enable SMTP authentication
				                        $mail->Username   = 'Fredericksburg.BBBS@gmail.com';     // SMTP username
				                        $mail->Password   = get_pass();         // SMTP password
				                        $mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
				                        $mail->Port       = 587;                // TCP port to connect to
				                        $mail->setFrom('Fredericksburg.BBBS@gmail.com', 'BigBrotherBigSister');           // Set sender of the mail
				                        $mail->addAddress($email, $first_name);   // Name is optional
				                        $mail->isHTML(true);
				                        
				                        $tempPass = generateRandomString();
				                        
				                        $mail->Subject = 'BigBrotherBigSister email verification';
				                        $mail->Body    = '<p>Your temporary password: ' . $tempPass . '</p><p>This account will be deleted one hour after creation if you do not log in for th first time before then.</p>';
				                        $mail->AltBody = 'This account will be deleted one hour after creation if you do not log in for th first time before then. \nYour temporary password: ' . $tempPass;    //Body in plain text for non-HTML mail clients
				                        $mail->send();
				                        echo ("<p>Mail has been sent successfully!<p>");
				                        
				                        $newaccount = new Account($email,  password_hash($tempPass, PASSWORD_DEFAULT), $first_name, $last_name, "new");
				                        $result = add_account($newaccount);
				                        if (!$result)
				                            echo ('<p class="error">Unable to add '.$first_name.' '.$last_name.' in the database. <br>Please report this error to the Manager.</p>');
				                            else if ($_SESSION['access_level'] == 0) {
				                                echo("<p>Your account has been successfully created.</p><br>");
				                                //delete account if it hasn't been loged into
				                                //this requires that there is an ini file in the listed directory
				                                execInBackground('C:\\MAMP\\bin\\php\\php8.0.1\\php.exe removeTemporaryAccount.php '.$newaccount->get_email());
				                                // execInBackground('C:\MAMP\bin\php\php8.0.1\php.exe removeTemporaryAccount.php '.$newaccount->get_email());
				                            } else
				                                echo('<p>You have successfully added <a href="' . $path . 'accountEdit.php?id=' . $email . '"><b>' . $first_name . ' ' . $last_name . ' </b></a> to the database.</p>');
				                    } catch (Exception $e) {
				                        echo ("<p class='error'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>");
				                        echo ('<p class="error">Unable to add " .$first_name." ".$last_name. " in the database. <br>Please report this error to the House Manager.');
				                    }
				                }
				            }
				            
				            // try to replace an existing account in the database by removing and adding
				            else {
				                $email = $_POST['email'];
				                $pass = $_POST['pass'];
				                $status = $_POST['status'];
				                $result = remove_account($email);
				                if (!$result)
				                    echo ('<p class="error">Unable to update ' . $first_name . ' ' . $last_name . '. <br>Please report this error to the Manager.</p>');
				                    else {
				                        $newaccount = new Account($email, $pass, $first_name, $last_name, $status);
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

				goto end;
				?>
                    <?PHP
                    
                    end:
                    ?>
                    
                    
                    </div>
            <?PHP include('footer.inc'); ?>
        </div>
      </div>
    </body>
</html>


