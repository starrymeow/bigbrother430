<?php
/*
 * Copyright 2015 by Allen Tucker. This program is part of RMHP-Homebase, which is free
 * software.  It comes with absolutely no warranty. You can redistribute and/or
 * modify it under the terms of the GNU General Public License as published by the
 * Free Software Foundation (see <http://www.gnu.org/licenses/ for more information).
 */
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
				<!-- BBBS Code -->
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
				    echo('<h2>Enter the email of the admin</h2>');
				    echo ('<form method="post">');
				    echo ('<input type="hidden" name="_submit_check" value="true"><br>');
				    echo ('<label for="email">Email</label><br>');
				    echo ('<input type="text" name="email" tabindex="1" placeholder="example@email.com"><br>');
				    echo ('<input type="submit" name="promote" value="promote" class="greenButton">');
				    echo ('</form>');
                    $admin = retrieve_admin($_POST['email']);
                    var_dump($admin);
                    if ($admin) { //avoid null result
                        promote($_POST['email']);
                        echo ('<h2> "' . $_POST['email'] . '" has been promoted to a super admin.</h2>');
                    }
                    else {
                        echo ('<h2> no record of admin in the database</h2>');
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
