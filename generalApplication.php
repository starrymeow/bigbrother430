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
		// Test if user is logged in
		if ($_SESSION['access_level'] >= 1) {
		    // Show buttons
		    echo ('<div id="homeoptions">');
		    echo ('<a href="littleApp.php?id=new" class="greenButton">Little Application</a>');
		    echo ('<a href="bigApp.php?id=new" class="greenButton">Big Application</a>');
		    echo ('</div>');
		} else {
		    //user is not logged in
		    header("Location: index.php");
		    die();
		}
		?>
	</body>
</html>