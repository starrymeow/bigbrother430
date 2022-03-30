<?php


if ($_SESSION['access_level'] == 0) {

} else if ($_SESSION['access_level'] == 1) {
    if ($_SESSION['_id'] != $account->get_id()) {
        echo("<p id=\"error\">You do not have sufficient permissions to edit this user.</p>");
        include('footer.inc');
        echo('</div></div></body></html>');
        die();
    } else {
        echo '<p><strong>Personnel Edit Form</strong>';
        echo(' Here you can edit your own information in the database.' .
        '<br>When finished, hit <b>Submit</b> at the bottom of this page.');
    }
} else if ($_SESSION['access_level'] == 2)
	    if ($email == 'new') {
	        echo('<p><strong>Volunteer Service Application</strong><br />');
	        echo('Adding a new volunteer to the database. ' .
	        '<br>When finished, hit <b>Submit</b> at the bottom of this page.');
	    } else {
	        echo '<p><strong>Personnel Edit Form</strong>'.
	        		'&nbsp;&nbsp;&nbsp;&nbsp;(View <strong><a href="volunteerLog.php?id='.$account->get_id().'">Log Sheet</a></strong>)<br>';
	        echo('Here you can edit, delete, or reset the password for an account in the database.' .
	        '<br>When finished, hit <b>Submit</b> at the bottom of this page.');
	    }
	    else {
		    echo("<p id=\"error\">You do not have sufficient permissions to add a new account to the database.</p>");
		    include('footer.inc');
		    echo('</div></div></body></html>');
		    die();
	    }
?>
<form method="POST">
    <label for="email">Email </label><br>
    <input type="text" name="email" placeholder="example@email.com"><br>
    <input type="hidden" name="_form_submit" value="1">
    <?php
        echo('<label for="first_name">Name</label><br>');
        echo('<input type="text" name="first_name" placeholder="First Name"/><br>');
        echo('<input type="text" name="last_name" placeholder="Last Name"/><br>');
    ?>
    <script src="lib/jquery-1.9.1.js"></script>
    <script src="lib/jquery-ui.js"></script>

<p>
<?PHP
//echo('<input type="hidden" name="password" value="' . $account->get_password() . ')">');
echo('<input type="hidden" name="_submit_check" value="1"><p>');
echo('<input type="submit" value="Submit" name="Submit Edits" class="greenButton"><br /><br />');
if ($email != 'new' && $_SESSION['access_level'] >= 2) {
    echo ('<input type="checkbox" name="deleteMe" value="DELETE"> Check this box and then hit ' .
    '<input type="submit" value="Delete" name="Delete Entry"> to delete this entry. <br />' .
    '<input type="checkbox" name="reset_pass" value="RESET"> Check this box and then hit ' .
    '<input type="submit" value="Reset Password" name="Reset Password"> to reset this account\'s password.</p>');
}
?>
</form>