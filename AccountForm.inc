<?php
/*
 * Copyright 2015 by Allen Tucker. This program is part of RMHC-Homebase, which is free
 * software.  It comes with absolutely no warranty. You can redistribute and/or
 * modify it under the terms of the GNU General Public License as published by the
 * Free Software Foundation (see <http://www.gnu.org/licenses/ for more information).
 */

/*
 * 	accountForm.inc
 *  shows a form for an account to be added or edited in the database
 * 	@author Oliver Radwan, Xun Wang and Allen Tucker
 * 	@version 9/1/2008, revised 4/1/2012, revised 3/11/2015
 */

if ($_SESSION['access_level'] == 0) {
    echo('<p><strong>Volunteer Service Application</strong><br />');
    echo('Please provide as much information as you can. ' .
       '<br>When finished, hit <b>Submit</b> at the bottom of this page, and then <b>logout</b>.');
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
    echo '<br> (<span style="font-size:x-small;color:FF0000">*</span> denotes required information).';
?>
<form method="POST">
    <input type="hidden" name="old_id" value=<?PHP echo("\"" . $email . "\""); ?>>
    <input type="hidden" name="old_pass" value=<?PHP echo("\"" . $account->get_password() . "\""); ?>>
    <input type="hidden" name="_form_submit" value="1">
    <?php /*<script>
			$(function(){
				$( "#birthday" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
				$( "#start_date" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
				$( "#screening_status" ).datepicker({dateFormat: 'y-mm-dd',changeMonth:true,changeYear:true,yearRange: "1920:+nn"});
			})
	</script>*/?>
    <?PHP
    	/*$venues = array('portland'=>"Portland House", 'bangor'=>"Bangor House");
        echo '<table><tr><td>Date: '.
	             '</td><td colspan=2><input name="start_date" type="text" id="start_date" value="'.$account->get_start_date().'">';
	   	echo "</td></tr><tr><td>Location<span style='font-size:x-small;color:FF0000'>*</span>: </td>";
	   	foreach ($venues as $venue=>$venuename) {
	   		echo ('<td><input type="radio" name="location" value="' .$venue.'"'. ($account->get_venue()==$venue?' checked':'').'>');
	    	echo "</td><td>".$venuename."</td>";
	   	}
	   	echo "</tr></table><br>";*/
    ?>
    <fieldset>
        <legend>Personal information:</legend>
    <?php
        if ($account->get_first_name() == "new")
        	echo '<p>First Name<span style="font-size:x-small;color:FF0000">*</span>: <input type="text" name="first_name" tabindex="1" value="'.$account->get_first_name().'">';
        else
        	echo '<p>First Name: '.$account->get_first_name();
    ?>  &nbsp;&nbsp;&nbsp;&nbsp;  Last Name<span style="font-size:x-small;color:FF0000">*</span>: <input type="text" name="last_name" tabindex="2" value="<?PHP echo($account->get_last_name()) ?>">
<?php
        echo '<p>Email address: '. '<input type="text" name="email" tabindex="10" value="'.$account->get_email().'">';
?>
<script src="lib/jquery-1.9.1.js"></script>
<script src="lib/jquery-ui.js"></script>
</fieldset>

<?php
if ($_SESSION['access_level']==2) {
	echo('<p>Manager Notes:<br />');
	echo('<textarea name="notes" rows="2" cols="75">');
	echo($account->get_notes().'</textarea>');
}

echo ('<p>Status:');
echo('<span style="font-size:x-small;color:FF0000">*</span>&nbsp;&nbsp;');
echo('<select name="status">');
if ($_SESSION['access_level'] == 0) {
	echo ('<option value="applicant"');
    echo (' SELECTED');
    echo('>applicant</option>');
}
else {
	echo ('<option value="applicant"');
	if ($account->get_status() == 'applicant')
    	echo (' SELECTED');
    echo('>applicant</option>'); echo ('<option value="active"');
	if ($account->get_status() == 'active')
	    echo (' SELECTED'); echo('>active</option>');
	echo ('<option value="LOA"');
	if ($account->get_status() == 'LOA')
	    echo (' SELECTED'); echo('>on leave</option>');
	echo ('<option value="former"');
	if ($account->get_status() == 'former')
	    echo (' SELECTED'); echo('>former</option>');
}
echo('</select>');
?>
<p>
<?PHP
echo('<input type="hidden" name="password" value="' . $account->get_password() . ')">');
echo('<input type="hidden" name="_submit_check" value="1"><p>');
if ($_SESSION['access_level'] == 0)
    echo('By hitting <input type="submit" value="Submit" name="Submit Edits">, I understand the importance of this volunteer
    		commitment and have answered the application questions honestly and to the best of my knowledge.<br /><br />');
else
    echo('Hit <input type="submit" value="Submit" name="Submit Edits"> to submit these edits.<br /><br />');
if ($email != 'new' && $_SESSION['access_level'] >= 2) {
    echo ('<input type="checkbox" name="deleteMe" value="DELETE"> Check this box and then hit ' .
    '<input type="submit" value="Delete" name="Delete Entry"> to delete this entry. <br />' .
    '<input type="checkbox" name="reset_pass" value="RESET"> Check this box and then hit ' .
    '<input type="submit" value="Reset Password" name="Reset Password"> to reset this account\'s password.</p>');
}
?>
</form>