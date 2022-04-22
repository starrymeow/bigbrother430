<?php
session_start();
session_cache_expire(30);
include_once('database/dbAccounts.php');
include_once('domain/Account.php');
include_once('database/dbBigApplications.php');
include_once('domain/BigApplication.php');
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
		<div id="container">
			<?PHP include('header.php');?>
			<div id="content">
				<div class='infoform'>
					<?php
					echo('<h1>Big Application</h1>');
            		include_once('big_validate.inc');
            		if (! array_key_exists('_submit_check', $_POST)) {
            		    include("bigApplicationForm.inc");
            		} else {
            		    //in this case, the form has been submitted, so validate it
            		    $errors = validate_form($account);  //step one is validation.
            		    // errors array lists problems on the form submitted
            		    if ($errors) {
            		        show_errors($errors);
            		        include('bigApplicationForm.inc');

            		    }
            		    // this was a successful form submission; update the database and exit
            		    else {
            		        process_form($email,$form_id);
            		    }
            		    echo "</div>";
            		    include('footer.inc');
            		    echo('</div></body></html>');
            		    die();
            		}

            		/**
            		 * process_form sanitizes data, concatenates needed data, and enters it all into a database
            		 */
            		function process_form($email,$form_id) {
                        //TODO
            		}
            		?>
        		</div>
			</div>
		</div>
	</body>
</html>