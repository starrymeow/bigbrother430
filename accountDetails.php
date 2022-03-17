<?php
/*
 * Copyright 2015 by Jerrick Hoang, Ivy Xing, Sam Roberts, James Cook, 
 * Johnny Coster, Judy Yang, Jackson Moniaga, Oliver Radwan, 
 * Maxwell Palmer, Nolan McNair, Taylor Talmage, and Allen Tucker. 
 * This program is part of RMH Homebase, which is free software.  It comes with 
 * absolutely no warranty. You can redistribute and/or modify it under the terms 
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 * 
 */

	session_start();
	session_cache_expire(30);
	
	// Tests if user can access page
	if (!($_SESSION['access_level'] >= 1)) {
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
		<div id="container">
			<?PHP include('header.php');?>
			<div id="content">
				<div id="accountDetails">
					<h1>Account Details</h1>
					<form method="post">
					<?php //TODO Fill in defaults?>
						<label for="email">Email</label><br>
						<input type="text" name="email" value="TEST@TEST.COM"/><br>
						<label for="namef">Name</label><br>
						<input type="text" name="namef" value="First Test"/><br>
						<input type="text" name="namel" value="Last Test"/><br>
						<input type="submit" name="changedata" value="Confirm Changes"><br>
					</form>
					
					<form method="post">
						<label for="oldpass">Old Password</label><br>
						<input type="password" name="oldpass" placeholder="**********"/><br>
						<label for="newpass">New Password</label><br>
						<input type="password" name="newpass" placeholder="**********"/><br>
						<label for="passcheck">Re-Enter New Pass</label><br>
						<input type="password" name="passcheck" placeholder="**********"/><br>
						<input type="submit" name="changepass" value="Change Password"><br>
					</form>
				</div>
			</div>
		<?PHP include('footer.inc');?>
		</div>
	</body>
</html>
