<?php
/*
 * Copyright 2013 by Allen Tucker.
 * This program is part of RMHP-Homebase, which is free software.  It comes with
 * absolutely no warranty. You can redistribute and/or modify it under the terms
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 *
 */
?>
<!-- Begin Header -->
<style type="text/css">
    h1 {padding-left: 0px; padding-right:165px;}
</style>

<div id="navigationLinks">
		<a href="http://www.bbbsfred.org/" id="logo">
			<img src="http://www.bbbsfred.org/wp-content/uploads/sites/17/2018/10/cropped-RGB_Alternate-76-602x124-medium.png"/>
		</a>
    <?PHP
    //Log-in security
    //If they aren't logged in, display our log-in form.
    if ($_SESSION['logged_in']) {

        /*         * Set our permission array.
         * anything a guest can do, a volunteer and manager can also do
         * anything a volunteer can do, a manager can do.
         *
         * If a page is not specified in the permission array, anyone logged into the system
         * can view it. If someone logged into the system attempts to access a page above their
         * permission level, they will be sent back to the home page.
         */
        //pages guests are allowed to view
        $permission_array['index.php'] = 0;
        $permission_array['about.php'] = 0;
        $permission_array['apply.php'] = 0;		//doesn't exist
        //pages volunteers can view
        $permission_array['help.php'] = 1;
        $permission_array['calendar.php'] = 1;
        //pages only managers can view
        $permission_array['accountsearch.php'] = 2;
        $permission_array['accountedit.php'] = 0;	//create account as well, needed for guests
        $permission_array['viewschedule.php'] = 2;
        $permission_array['addweek.php'] = 2;
        $permission_array['log.php'] = 2;
        $permission_array['reports.php'] = 2;

        //Check if they're at a valid page for their access level.
        $current_page = strtolower(substr($_SERVER['PHP_SELF'], strpos($_SERVER['PHP_SELF'],"/")+1));
        $current_page = substr($current_page, strpos($current_page,"/")+1);

        if($permission_array[$current_page]>$_SESSION['access_level']){
            //in this case, the user doesn't have permission to view this page.
            //we redirect them to the index page.
            echo "<script type=\"text/javascript\">window.location = \"index.php\";</script>";
            //note: if javascript is disabled for a user's browser, it would still show the page.
            //so we die().
            die();
        }
        //This line gives us the path to the html pages in question, useful if the server isn't installed @ root.
        $path = strrev(substr(strrev($_SERVER['SCRIPT_NAME']), strpos(strrev($_SERVER['SCRIPT_NAME']), '/')));


        //they're logged in and session variables are set.
        if ($_SESSION['access_level'] == 0) {
        	  echo(' <a href="' . $path . 'accountEdit.php?id=' . 'new' . '">Apply</a>');
        }
        if ($_SESSION['access_level'] >= 1) {
            echo('<a href="' . $path . 'index.php">Home</a>');
            echo('<a href="' . $path . 'about.php">*About*</a>');
            echo('<a href="' . $path . 'help.php?helpPage=' . $current_page . '" target="_BLANK">*Help*</a>');
        }

//          if ($_SESSION['access_level'] >= 2) {
//              echo('<br>master schedules: <a href="' . $path . 'viewSchedule.php?venue=portland'."".'">Portland, </a>');
//              echo('<a href="' . $path . 'viewSchedule.php?venue=bangor'."".'">Bangor</a>');
//              echo('volunteers: <a href="' . $path . 'accountSearch.php">search</a>,
// 			          <a href="accountEdit.php?id=' . 'new' . '">add, </a> <a href="viewScreenings.php?type=new">screenings</a>');
//              echo('<a href="' . $path . 'reports.php?venue='.$_SESSION['venue'].'">reports</a>');
//          }
        echo('<div id="logout"><a href="' . $path . 'logout.php">Logout</a></div><br>');
    } 
    else {
        echo('<div id="logout"><a href="' . $path . 'index.php">Login</a></div><br>');
    }
    

    ?>
</div>
<!-- End Header -->
