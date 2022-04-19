<?php
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
		// Test if admin, or big or little
		if ($_SESSION['access_level'] == 1) {
		    echo ('<div id="homeoptions">');
		    echo ('<a href="littleApplicationForm.inc" class="greenButton">Little Application</a>');
		    echo ('<a href="bigApp.php" class="greenButton">Big Application</a>');
		    echo ('</div>');
		}
        // Test if little button was pressed, or if Big was pressed
		if ($_SESSION['access_level'] >= 2) {
		    include('littleApplicationForm.inc');
		}
		?>
	</body>
</html>