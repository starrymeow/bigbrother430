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
        <div id="container">
            <?PHP include('header.php'); ?>
            <div id="content">
                <?PHP
                if (!isset($_SESSION['logged_in'])) {
                    include('login_form.php');
                    goto end;
                }
                include_once ('database/dbAccounts.php');
                $account = retrieve_account($_SESSION['_id']);
                if ($account->get_status() == "new") {
                    include('Forced_password_change.php');
                    goto end;
                }
                include_once('database/dbAccounts.php');
                include_once('domain/Account.php');
                include_once('database/dbLog.php');

                date_default_timezone_set('America/New_York');

                ?>
				<!-- BBBS Code -->
				<div id="homeoptions">
				<?php
				if ($_SESSION['access_level'] == 0) {
				    echo ('<a href="' . $path . 'accountEdit.php?id=' . 'new' . '" class="greenButton">Apply</a>'); // TODO
				}
				if ($_SESSION['access_level'] == 1) {
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Check Match Status</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Submit Application</a>'); // TODO
				}
				if ($_SESSION['access_level'] >= 1) {
				    echo ('<a href="' . $path . 'accountDetails.php" class="greenButton">Account Details</a>'); // TODO

				}
				if ($_SESSION['access_level'] >= 2) {
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Person Search</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Checklist</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Submissions</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Generate Matches</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Generate Report</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/index.php" class="greenButton">Create New Admin</a>'); // TODO
				    echo ('<a href="http://localhost/bigbrother430/PromoteAdmin.php" class="greenButton">Promote Admin</a>'); // TODO

				}
				goto end;
				?>

<!-- 				</div> -->
                <!-- your main page data goes here. This is the place to enter content -->
<!--                 <p> -->
                <?PHP
//                 if ($_SESSION['access_level'] == 0)
//                     echo('<p> To apply for volunteering at the Portland or Bangor Ronald McDonald House, '.
//                     		'please select <b>apply</b>.');
//                 if ($account) {
//                     /*
//                      * Check type of account, and display home page based on that.
//                      * all: password check
//                      * guests: show link to application form
//                      * applicants: show status of application form
//                      * Volunteers, subs: show upcoming schedule and log sheet
//                      * Managers: show upcoming vacancies, birthdays, anniversaries, applicants
//                      */

//                     //APPLICANT CHECK
//                     if ($account->get_first_name() != 'guest' && $account->get_status() == 'applicant') {
//                         //SHOW STATUS
//                         echo('<div class="infobox"><p><strong>Your application has been submitted.</strong><br><br /><table><tr><td><strong>Step</strong></td><td><strong>Completed?</strong></td></tr><tr><td>Background Check</td><td>' . $account['background_check'] . '</td></tr><tr><td>Interview</td><td>' . $account['interview'] . '</td></tr><tr><td>Shadow</td><td>' . $account['shadow'] . '</td></tr></table></p></div>');
//                     }

//                     //VOLUNTEER CHECK
//                     if ($_SESSION['access_level'] == 1) {

//                     	// display upcoming schedule
//                         $shifts = selectScheduled_dbShifts($account->get_id());

//                         $scheduled_shifts = array();
//                         // link to accountal profile for editing
//                         echo('<br><div class="scheduleBox"><p><strong>Your Personal Profile:</strong><br /></p><ul>');
//                             echo('</ul><p>Go <strong><a href="accountEdit.php?id='.$account->get_id()
//                     	   .'">here</a></strong> to view or update your contact information.</p></div>');
//                         // link to personal log sheet
//                         echo('<br><div class="scheduleBox"><p><strong>Your Log Sheet:</strong><br /></p><ul>');
//                             echo('</ul><p>Go <strong><a href="volunteerLog.php?id='.$account->get_id()
//                     	   .'">here</a></strong> to view or enter your recent volunteering hours.</p></div>');

//                     }

//                     if ($_SESSION['access_level'] == 2) {
//                         //We have a manager authenticated

//                     	//active applicants box
//                     	$con=connect();
//                     	$app_query = "SELECT first_name,last_name,id,start_date FROM dbaccounts WHERE status LIKE '%applicant%'  AND venue='".
//                     			$_SESSION['venue']."'order by start_date desc";
//                     	$applicants_tab = mysqli_query($con,$app_query);
//                     	$numLines = 0;
//                     	//   if (mysqli_num_rows($applicants_tab) > 0) {
//                     	echo('<div class="applicantsBox"><p><strong>Open Applications / Dates:</strong><ul>');
//                     	while ($thisRow = mysqli_fetch_array($applicants_tab, MYSQLI_ASSOC)) {
//                     		echo('<li type="circle"><a href="' . $path . 'accountEdit.php?id=' . $thisRow['id'] .'" id = "appLink">' .
//                     				$thisRow['last_name'] . ', ' . $thisRow['first_name'] . '</a> / '.
//                     				$thisRow['start_date'] . '</li>');
//                     	}
//                     	echo('</ul></p></div><br>');
//                     	//    }
//                     	mysqli_close($con);

//                     }
//                     //DEFAULT PASSWORD CHECK
//                     if (md5($account->get_id()) == $account->get_password()) {
//                         if (!isset($_POST['_rp_submitted']))
//                             echo('<p><div class="warning"><form method="post"><p><strong>We recommend that you change your password, which is currently default.</strong><table class="warningTable"><tr><td class="warningTable">Old Password:</td><td class="warningTable"><input type="password" name="_rp_old"></td></tr><tr><td class="warningTable">New password</td><td class="warningTable"><input type="password" name="_rp_newa"></td></tr><tr><td class="warningTable">New password<br />(confirm)</td><td class="warningTable"><input type="password" name="_rp_newb"></td></tr><tr><td colspan="2" align="right" class="warningTable"><input type="hidden" name="_rp_submitted" value="1"><input type="submit" value="Change Password"></td></tr></table></p></form></div>');
//                         else {
//                             //they've submitted
//                             if (($_POST['_rp_newa'] != $_POST['_rp_newb']) || (!$_POST['_rp_newa']))
//                                 echo('<div class="warning"><form method="post"><p>Error with new password. Ensure passwords match.</p><br /><table class="warningTable"><tr><td class="warningTable">Old Password:</td><td class="warningTable"><input type="password" name="_rp_old"></td></tr><tr><td class="warningTable">New password</td><td class="warningTable"><input type="password" name="_rp_newa"></td></tr><tr><td class="warningTable">New password<br />(confirm)</td><td class="warningTable"><input type="password" name="_rp_newb"></td></tr><tr><td colspan="2" align="center" class="warningTable"><input type="hidden" name="_rp_submitted" value="1"><input type="submit" value="Change Password"></form></td></tr></table></div>');
//                             else if (md5($_POST['_rp_old']) != $account->get_password())
//                                 echo('<div class="warning"><form method="post"><p>Error with old password.</p><br /><table class="warningTable"><tr><td class="warningTable">Old Password:</td><td class="warningTable"><input type="password" name="_rp_old"></td></tr><tr><td class="warningTable">New password</td><td class="warningTable"><input type="password" name="_rp_newa"></td></tr><tr><td class="warningTable">New password<br />(confirm)</td><td class="warningTable"><input type="password" name="_rp_newb"></td></tr><tr><td colspan="2" align="center" class="warningTable"><input type="hidden" name="_rp_submitted" value="1"><input type="submit" value="Change Password"></form></td></tr></table></div>');
//                             else if ((md5($_POST['_rp_old']) == $account->get_password()) && ($_POST['_rp_newa'] == $_POST['_rp_newb'])) {
//                                 $newPass = md5($_POST['_rp_newa']);
//                                 change_password($account->get_id(), $newPass);
//                             }
//                         }
//                         echo('<br clear="all">');
//                     }
//                 }

                end:
                ?>
                </div>
                <?PHP include('footer.inc'); ?>
        </div>
    </body>
</html>