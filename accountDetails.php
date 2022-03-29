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
				<div class="infoform">
					<h1>Account Details</h1>
					
					<form method="post">
					<?php //TODO Fill in default name
        				echo ('<form method="post">');
        				echo ('<label for="email">Email</label><br>');
       					echo ('<input type="text" name="email" value="' . $_SESSION['_id'] . '" style="color: black; background-color: #A1A1A1;">');
        				echo ('<label for="user">Email</label><br>');
        				echo ('<input type="text" name="user" tabindex="1" placeholder="example@email.com"><br>');
       				 	echo ('<label for="pass">Password</label><br>');
        				echo ('<input type="password" name="pass" tabindex="2" placeholder="**********"><br>');
        				echo ('<input type="submit" name="Login" value="Log In" class="greenButton">');
        				echo ('</form>');
        
        				echo ('<form method="post" action="' . $path . 'accountEdit.php?id=' . 'new' . '">');
        				echo ('<br><label for="register">Don\'t have an account yet?</label><br>');
       					echo ('<input type="submit" name="register" value="Create Account" class="greenButton">');
        				echo ('</form>');
        			?>
<!-- 						<label for="email">Email</label><br> -->
							<input type="text" name="email" value="<?php echo($_SESSION['_id']); ?>" style="color: black; background-color: #A1A1A1;" readonly/><br>
<!-- 						<label for="namef">Name</label><br> -->
							<input type="text" name="namef" value="<?php echo($_SESSION['f_name']); ?>" style="color: black; background-color: white;"/><br>
							<input type="text" name="namel" value="<?php echo($_SESSION['l_name']); ?>" style="color: black; background-color: white;"/><br>
		
<!-- 						<label for="oldpass">Old Password</label><br> -->
<!-- 						<input type="password" name="oldpass" placeholder="**********"/><br> -->
<!-- 						<label for="newpass">New Password</label><br> -->
<!-- 						<input type="password" name="newpass" placeholder="**********"/><br> -->
<!-- 						<label for="passcheck">Re-Enter New Pass</label><br> -->
<!-- 						<input type="password" name="passcheck" placeholder="**********"/><br> -->
<!-- 						<input type="submit" name="changedata" value="Confirm Changes" class="greenButton"><br> -->
						<!--<input type="submit" name="changepass" value="Change Password" class="greenButton"><br> -->
<!-- 					</form> -->
					<?php
					$new_first = $_POST['f_name'];
					var_dump($new_first);
					$new_last = $_POST['l_name']
// 					$account = change_first($_SESSION['_id'], $_POST['namef']);
// 					var_dump($account);
// 					$account = change_last($_SESSION['_id'], $_POST['namel']);
// 					var_dump($account);
					
// 					$account = change_account_password($_SESSION['_id'], $_POST['newpass']);
// 					var_dump($account);
					
					
// 					?>
				</div>
			</div>
		<?PHP include('footer.inc');?>
		</div>
	</body>
</html>
