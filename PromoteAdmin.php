<?php

session_start();
session_cache_expire(30);
?>
<html>
    <head>
        <title>
            BBBS Fredericksburg Promote Admin
        </title>
        <link rel="icon" href="http://www.bbbsfred.org/wp-content/uploads/sites/17/2018/12/cropped-10.25.18-Favico-512x512-white-background-192x192.jpg" sizes="192x192" />
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <?PHP include('header.php'); ?>
            <div id="content">
                <?PHP
                if ($_SESSION['access_level'] < 2) {
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
				<!-- BBBS Code -->
				<div id="homeoptions">
				<?php
				
// 				if ($_SESSION['access_level'] >= 1) {
// 				    echo ('<a href="' . $path . 'accountDetails.php" class="greenButton">Account Details</a>'); // TODO

// 				}
				if ($_SESSION['access_level'] >= 2) {
				    echo('<h2>Enter the email of the admin</h2><br>');
				    echo ('<form method="post">');
				    //echo ('<input type="hidden" name="_submit_check" value="true"><br>');
				    echo ('<label for="email">Email</label><br>');
				    echo ('<input type="text" name="email" tabindex="1" placeholder="example@email.com"><br>');
				    echo ('<input type="submit" name="promote" value="promote" class="greenButton">');
				    echo ('</form>');
				    if ($_POST['promote']) {
                        $admin = retrieve_admin($_POST['email']);                        
                            $result = promote($_POST['email']);
                            echo ('<h2> "' . $_POST['email'] . '" has been promoted to a super admin.</h2>');
				    }
                        else {
                            echo ('<h2> no record of admin in the database</h2>');
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
