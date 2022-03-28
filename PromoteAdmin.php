<?php

session_start();
session_cache_expire(30);
?>
<html>
    <head>
        <title>
            BBBS Promote Admin
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
                date_default_timezone_set('America/New_York');
            //    fix_all_birthdays();
                ?>
				<!-- BBBS Code -->
				<div id="homeoptions">
				<?php
// 				if ($_SESSION['access_level'] == 0) {
// 				    echo ('<a href="' . $path . 'accountEdit.php?id=' . 'new' . '" class="greenButton">Apply</a>'); // TODO
// 				}
// 				if ($_SESSION['access_level'] >= 1) {
// 				    echo ('<a href="' . $path . 'accountDetails.php" class="greenButton">Account Details</a>'); // TODO

// 				}
				if ($_SESSION['access_level'] >= 2) {
				    echo ('<h2> You do not have access to promoting admins </h2>');
				    
				}
				goto end;
				?>
				</div>
			</div>
		</div>
	</body>
</html>
