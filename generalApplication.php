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
		<?PHP include('header.php'); 
		//$tempvar = 1;
		?>
		<?php /* Some test if admin, or not big or little*/
		if ($_SESSION['access_level'] == 1) {
		  echo ('<div id="homeoptions">');
		  echo ('<a href="littleApp.php" class="greenButton">Little Application</a>');
		  echo ('<a href="https://Something.com" class="greenButton">Big Application</a>');
		  echo ('</div>');
		}
		?>
		<?php /* Some test if little button was pressed, or if little */ 
		if ($_SESSION['access_level'] >= 2) {
		  include('littleApplicationForm.inc');
		}
		?>
	</body>
</html>