<?php

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
                include_once('database/dbLog.php');
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
				    //include('accountEdit.php');
				    include('accountvalidate.inc');
				    echo ('<h1>Enter email for new admin</h1>');
				    echo ('<form method="post"');
				    echo ('<label for="email">Email</label><br>');
				    echo ('<input type="text" name="email"<br>');
				    echo ('<input type="submit" name="checkemail" value="Check Email" class="greenButton">');
				    
				    if ($_POST['email'] != "") {
				        if (valid_email($_POST['email']) == false)
				            echo ('<h2>Email given is not a valid email</h2>');
				        else {
				            $account = new Account($_POST['email'], 'applicant', "new", null, "admin");
				          
				        }
				    }
				    //include('accountValidate.inc');
				    if ($_POST['_form_submit'] != 1)
				        //in this case, the form has not been submitted, so show it
				        include('accountForm.inc');
				        else {
				            //in this case, the form has been submitted, so validate it
				            $errors = validate_account($account);  //step one is validation.
				            // errors array lists problems on the form submitted
				            if ($errors) {
				                // display the errors and the form to fix
				                show_errors($errors);
				                $account = new Account($account->get_email(), $_POST['pass'], $_POST['first_name'], $_POST['last_name'], "admin");
				                
				                include('accountForm.inc');
				            }
				            // this was a successful form submission; update the database and exit
				            else
				                process_form($_POST['email'],$account);
				                $result = add_admin($account->get_email(), "no");
				                echo "</div>";
				                include('footer.inc');
				                echo('</div></body></html>');
				                die();
				        }
				}

				goto end;
				?>
				<form method="POST">
        			<input type="submit" name="Yes"
                		class="button" value="Yes" />
          
        			<input type="submit" name="No"
                		class="button" value="No" />
    			</form>
				</div>
                <!-- your main page data goes here. This is the place to enter content -->
                <p>
                    <?PHP
                    
                    end:
                    ?>
                    </div>
                    <?PHP include('footer.inc'); ?>
        </div>
    </body>
</html>


