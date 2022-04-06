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
				<div class="infoform">
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
				    echo ('<form method="POST">');
				    echo ('<h1>Promote Admin</h1>');
				    echo ('<input type="hidden" name="_submit_check" value="true"><br>');
				    echo ('<label for="user">Email</label><br>');
				    echo ('<input type="text" name="user" tabindex="1" placeholder="example@email.com"><br>');
				    echo ('<input type="submit" name="Promote" value="Log In" class="greenButton">');
				    echo ('</form>');

// 				    echo ('<h2> Is this person an already existing admin?</h2>');
// 				    if (array_key_exists('Yes', $POST)) {
// 				        search_admin();
// 				    }
// 				    else if(array_key_exists('No', $POST)) {
// 				        add_new_account();
// 				    }
// 				    function search_admin() {
				        
// 				    }
// 				    function add_new_account() {
				        
// 				    }
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
