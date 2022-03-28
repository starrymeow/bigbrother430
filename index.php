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
            BBBS Fredericksburg
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
				if ($_SESSION['access_level'] == 0) {
				    echo ('<a href="' . $path . 'accountEdit.php?id=' . 'new' . '" class="greenButton">Apply</a>'); // TODO
				}
				if ($_SESSION['access_level'] == 1) {
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Check Match Status</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Submit Application</a>'); // TODO
				}
				if ($_SESSION['access_level'] >= 1) {
				    echo ('<a href="' . $path . 'accountDetails.php" class="greenButton">Account Details</a>'); // TODO

				}
				if ($_SESSION['access_level'] >= 2) {
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Person Search</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Checklist</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Submissions</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Generate Matches</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Generate Report</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Create New Admin</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/PromoteAdmin.php" class="greenButton">Promote New Admin</a>'); // TODO
				    
				}
				?>
				</div>
			</div>
        </div>
    </body>
</html>