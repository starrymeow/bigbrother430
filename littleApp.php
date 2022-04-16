<?php

session_start();
session_cache_expire(30);
include_once('database/dbAccounts.php');
include_once('domain/Account.php');
include_once('database/dbLittleApplications.php');
include_once('domain/LittleApplication.php');
include_once('database/dbinfo.php');
// Tests if user can access page
if ($_SESSION['access_level'] < 1) {
    header("Location: index.php");
    die();
}
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
	<body>
		<div id="container">
		<?PHP include('header.php');?>
		<div id="content"> <?php
		if (! array_key_exists('_submit_check', $_POST)) {
		    include("littleApplicationForm.inc");
		} else {
            //TODO
		}
		?>
		</div>
		</div>
	</body>
</html>