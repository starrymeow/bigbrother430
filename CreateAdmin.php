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
				    echo ('<label for="f_name">First Name</lable><br>');
				    echo ('<input type="text" name="f_name"/><br>');
				    echo ('<label for="l_name">Last Name</lable><br>');
				    echo ('<input type="text" name="l_name"/><br>');
				    echo ('<input type="submit" name="new_admin" value="Enter" class="greenButton">');
				    echo ('</form>');
				    if ($_POST['new_admin']) {
				        $account = new Account($_POST['email'], "new", $_POST['f_name'], $_POST['l_name'], "admin");
				        var_dump($account);
				        //in this case, the form has been submitted, so validate it
				        $errors = validate_account($account);  //step one is validation.
				        // errors array lists problems on the form submitted
				        if ($errors) {
				            // display the errors and the form to fix
				            show_errors($errors);
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


