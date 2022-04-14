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
                    header('login_form.php');
                    die();
                }
                include_once('database/dbAdmins.php');
                include_once('domain/Admin.php');
                include_once('database/dbinfo.php');
                date_default_timezone_set('America/New_York');
                ?>
				<div class="infoform">
				<?php
				if ($_SESSION['access_level'] >= 2) {
				    include('accountValidate.inc');

				    echo ('<form method="POST">');
				    echo ('<h1>Create Admin</h1>');
				    echo ('<label for="email">Email</label><br>');
				    echo ('<input type="text" name="email" placeholder="example@email.com"/><br>');
				    echo ('<label for="first_name">First Name</label><br>');
				    echo ('<input type="text" name="first_name" placeholder="First name"/><br>');
				    echo ('<label for="last_name">Last Name</label><br>');
				    echo ('<input type="text" name="last_name" placeholder="Last name"/><br>');
				    echo ('<input type="submit" name="new_admin" value="Enter" class="greenButton">');
				    echo ('</form>');
				    if ($_POST['new_admin']) {
				        $admin = new Admin("new", "new", $_POST['first_name'], $_POST['last_name'], false, "admin");
				        //var_dump($admin);
				        //in this case, the form has been submitted, so validate it
				        $errors = validate_account($admin);  //step one is validation.
				        // errors array lists problems on the form submitted
				        if ($errors) {
				            // display the errors and the form to fix
				            show_errors($errors);
				        } else {
				            //$result = new Admin($admin->get_email(), $admin->get_password(),  );
				            process_form($_POST['email'],$admin);
				            $admin = new Admin($_POST['email'], $admin->get_password(), $admin->get_first_name(), $admin->get_last_name(), false, "admin");
				            $result = add_admin($admin);
				            if ($result != false) {
				                echo ('<h2>Admin couldn\'t be added to database.</h2>');
				            } else {
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

				//process_form sanitizes data, concatenates needed data, and enters it all into a database
				function process_form($email,$admin) {
				    //echo($admin->get_email() == "new");
				    //step one: sanitize data by replacing HTML entities and escaping the ' character
				    if ($admin->get_first_name()=="new") {
				        $first_name = trim(str_replace('\\\'', '', htmlentities(str_replace('&', 'and', $_POST['first_name']))));
				    } else {
			            $first_name = $admin->get_first_name();
				    }
		            $last_name = trim(str_replace('\\\'', '\'', htmlentities($_POST['last_name'])));
		            $email = $_POST['email'];
		            $status = $_POST['status'];
		            $path = strrev(substr(strrev($_SERVER['SCRIPT_NAME']), strpos(strrev($_SERVER['SCRIPT_NAME']), '/')));
		            // try to add a new admin to the database
		            if ($admin->get_email() == "new") {
		                //check if there's already an entry
		                $dup = retrieve_admin($email);
		                if ($dup) {
		                    echo('<p class="error">Unable to add ' . $first_name . ' ' . $last_name . ' to the database. <br>An admin with the same email already exists.');
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

		                        $mail->Subject = 'Big Brother Big Sister email verification';
		                        $mail->Body    = '<p>Your temporary password: ' . $tempPass . '</p><p>This admin will be deleted one hour after creation if you do not log in for th first time before then.</p>';
		                        $mail->AltBody = 'This admin will be deleted one hour after creation if you do not log in for th first time before then. \nYour temporary password: ' . $tempPass;    //Body in plain text for non-HTML mail clients
		                        $mail->send();
		                        echo ("<p>Mail has been sent successfully!<p>");

		                        $newadmin = new Admin($email,  password_hash($tempPass, PASSWORD_DEFAULT), $first_name, $last_name, 0, "new");
		                        $result = add_admin($newadmin);
		                        if (!$result)
		                            echo ('<p class="error">Unable to add '.$first_name.' '.$last_name.' in the database. <br>Please report this error to the Manager.</p>');
		                            else if ($_SESSION['access_level'] == 0) {
		                                echo("<p>Your admin has been successfully created.</p><br>");
		                                //delete admin if it hasn't been loged into in 1 hour
		                                //this requires that there is an ini file in the listed directory
		                                execInBackground('C:\\MAMP\\bin\\php\\php8.0.1\\php.exe removeTemporaryAdmin.php '.$newadmin->get_email());
		                                // execInBackground('C:\MAMP\bin\php\php8.0.1\php.exe removeTemporaryAdmin.php '.$newadmin->get_email());
		                            } else
		                                echo('<p>You have successfully added <b>' . $first_name . ' ' . $last_name . ' </b></a> to the database.</p>');
		                    } catch (Exception $e) {
		                        echo ("<p class='error'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</p>");
		                        echo ('<p class="error">Unable to add " .$first_name." ".$last_name. " in the database. <br>Please report this error to the House Manager.');
		                    }
		                }
		            }
		            // try to replace an existing admin in the database by removing and adding
		            else {
		                $email = $_POST['email'];
		                $pass = $_POST['pass'];
		                $status = $_POST['status'];
		                $result = remove_admin($email);
		                if (!$result)
		                    echo ('<p class="error">Unable to update ' . $first_name . ' ' . $last_name . '. <br>Please report this error to the Manager.</p>');
	                    else {
	                        $newadmin = new Admin($email, $pass, $first_name, $last_name, $status);
	                        $result = add_admin($newadmin);
	                        if (!$result)
	                            echo ('<p class="error">Unable to update ' . $first_name . ' ' . $last_name . '. <br>Please report this error to the House Manager.');
                            //else echo("<p>You have successfully edited " .$first_name." ".$last_name. " in the database.</p>");
                            else
                                echo('<p>You have successfully edited <a href="' . $path . 'adminEdit.php?id=' . $email . '"><b>' . $first_name . ' ' . $last_name . ' </b></a> in the database.</p>');
	                    }
		            }
				}
                ?>
                </div>
            <?PHP include('footer.inc'); ?>
        </div>
      </div>
    </body>
</html>