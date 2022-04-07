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
					<form method="post">
					<label for="email">Email</label><br>
					<input type="text" name="email" placeholder="email"><br>
					<label for="first_name">First Name</label><br>
					<input type="text" name="first_name" placeholder="first name"><br>
					<label for="last_name">Last Name</label><br>
					<input type="text" name="last_name" placeholder="last name"><br>
					<label for="search_options">Search by Status:</label>
					<select name="status_options" id="status_options">
					<option value="new">New</option>
					<option value="active">Active</option>
					<option value="applicant">Applicant</option>
					<option value="admin">Admin</option>
					</select>
					<input type="submit" name="search" value="Search" class="greenButton">
					</form>
					<?php
					echo ('<table border="1" cellpadding="5" cellspacing="5">');
					echo ('<tr><th>Email</th><th>First Name</th><th>Last Name</th><th>Status</th></tr>');
					if ($_POST['search']) {
					    if ($_POST['email']) {
					        $account = retrieve_account($_POST['email']);
					        if (!$account) {
					            echo ('<h2>There is no person in the database with this email</h2>');
					        }
					        else {
					            echo('
                                <tr>
                                <td> ' . $account->get_email() . '</td>
                                <td> ' . $account->get_first_name() . '</td>
                                <td> ' . $account->get_last_name() . '</td>
                                <td> ' . $account->get_status() . '
                                </td>
                                </tr>
                                    ');
					        }
					    }
					       
					}
					else {
                        $accounts = getall_dbAccounts("A", "Z");
                        //echo ('<table border="1" cellpadding="5" cellspacing="5">');
                        //echo ('<tr><th>Email</th><th>First Name</th><th>Last Name</th><th>Status</th></tr>');
                        foreach($accounts as $account) {
                            echo ('
                            <tr>
                            <td> ' . $account->get_email() . '</td>
                            <td> ' . $account->get_first_name() . '</td>
                            <td> ' . $account->get_last_name() . '</td>
                            <td> ' . $account->get_status() . '
                            </td>
                            </tr>
                                 '); 
                        }
					}
                    echo ('</table>');
                    
                    
   					?>
				</div>
			</div>
		<?PHP include('footer.inc');?>
		</div>
	</body>
</html>
