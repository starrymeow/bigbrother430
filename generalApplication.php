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
		$tempvar = 0;
		?>
		<?php // Test if admin, or big or little
		if ($tempvar == 0){
		  echo ('<div id="homeoptions">');
		  echo ('<a href="littleApp.php" class="greenButton">Little Application</a>');
		  echo ('<a href="https://Something.com" class="greenButton">Big Application</a>');
		  echo ('</div>');
		}
		?>
		<?php // Test if little button was pressed, or if Big was pressed
		if ($tempvar == 1){
		  include('littleApplicationForm.inc');
		}
		?>
	</body>
</html>