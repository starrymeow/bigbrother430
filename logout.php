<?php
/*
 * Copyright 2013 by Jerrick Hoang, Ivy Xing, Sam Roberts, James Cook, 
 * Johnny Coster, Judy Yang, Jackson Moniaga, Oliver Radwan, 
 * Maxwell Palmer, Nolan McNair, Taylor Talmage, and Allen Tucker. 
 * This program is part of RMH Homebase, which is free software.  It comes with 
 * absolutely no warranty. You can redistribute and/or modify it under the terms 
 * of the GNU General Public License as published by the Free Software Foundation
 * (see <http://www.gnu.org/licenses/ for more information).
 * 
 */
?>
<?php
/*
 * Created on Mar 28, 2008
 * @author Oliver Radwan <oradwan@bowdoin.edu>
 */
?>
<?PHP
session_start();
session_cache_expire(30);
?>
<!-- page generated by the BowdoinRMH software package -->
<html>
    <head>
        <meta HTTP-EQUIV="REFRESH" content="2; url=index.php">
        <title>
            Logged out of BBBS Homebase
        </title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <?PHP include('header.php'); ?>
            <div id="content">
                <?PHP
                session_unset();
                session_write_close();
                ?>
                <p>You are now logged out of BBBS.</p>
                <?PHP include('footer.inc'); ?>
            </div>
        </div>
    </body>
</html>