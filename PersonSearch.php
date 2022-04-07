<?php

session_start();
session_cache_expire(30);
include_once('database/dbAccounts.php');
include_once('domain/Account.php');
//include_once('database/dbMatches.php');
//include_once('domain/Admin.php');
include_once('database/dbinfo.php');
// Tests if user can access page
if (!($_SESSION['access_level'] >= 2)) {
    header("Location: index.php");
    die();
}
?>
<html>
	<head>
        <title>
            Search Account
        </title>
        <link rel="icon" href="http://www.bbbsfred.org/wp-content/uploads/sites/17/2018/12/cropped-10.25.18-Favico-512x512-white-background-192x192.jpg" sizes="192x192" />
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
	<body>
		<div id="container">
		<?PHP include('header.php');?>
			<div id="content">
				<div class="infoform">
					<h1>Search for a Person</h1>
					<?php //TODO Fill in default name
                    $accounts = getall_dbAccounts("A", "Z");
                    var_dump($accounts);
                    
                    
   					?>
				</div>
			</div>
		<?PHP include('footer.inc');?>
		</div>
	</body>
</html>
