<?php
session_start();
session_cache_expire(30);
//include_once('database/dbAccounts.php');
include_once('domain/Account.php');
include_once('database/dbLittleApplications.php');
include_once('domain/LittleApplication.php');
include_once('database/dbinfo.php');

// Tests if user can access page
if ($_SESSION['access_level'] < 1) {
    header("Location: index.php");
    die();
}

$id = $_GET["id"];
if ($id == 'new') {
    $form = new LittleApplication('new', 'new', null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null);
} else {
    $form = retrieve_little_application($id);
    if (!$form) {
        echo('<p id="error">Error: there are no little applications with this id in the database</p>' . $id);
        die();
    }
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
					echo('<h1>Little Application</h1>');

            		if (! array_key_exists('_submit_check', $_POST)) {
            		    include("littleApplicationForm.inc");
            		} else {
            		    include_once('littleValidate.inc');
            		    //in this case, the form has been submitted, so validate it
            		    $errors = validate_little();  //step one is validation.
            		    // errors array lists problems on the form submitted
            		    if ($errors) {
            		        show_errors($errors);
            		        include('littleApplicationForm.inc');
            		    }
            		    // this was a successful form submission; update the database and exit
            		    else {
            		        process_form($form);
            		    }
            		    echo "</div>";
            		    include('footer.inc');
            		    echo('</div></body></html>');
            		    die();
            		}

            		function generate_id() {
            		    $id = uniqid();
            		    $result = retrieve_little_application($id);
            		    if (!$result) {
            		        return $id;
            		    }
            		    return generate_id();
            		}

            		function newApp($email, $id) {
            		    return new LittleApplication($email, $id, $_POST['first_name'], $_POST['last_name'], $_POST['languages'],
            		        $_POST['primary_language'], $_POST['preferred_name'], $_POST['birthday'], $_POST['cell_phone'],
            		        $_POST['can_text_cell'], $_POST['home_phone'], $_POST['gender'], $_POST['address'], $_POST['city'],
            		        $_POST['state'], $_POST['zip'], $_POST['race'], $_POST['apply_reasons'], $_POST['life_changes'],
            		        $_POST['middle_name'], $_POST['can_text_child'], $_POST['adult_name'], $_POST['relation'], $_POST['legal_custody'],
            		        $_POST['share_custody'], $_POST['other_supports_enrollment'], $_POST['living_situation'], $_POST['child_cell'],
            		        $_POST['child_email'], $_POST['school'], $_POST['grade_level'], $_POST['studentID'], $_POST['nationality'],
            		        $_POST['how_did_you_hear'], $_POST['parent_employer'], $_POST['parent_work_num'], $_POST['can_contact_work'],
            		        $_POST['best_num'], $_POST['best_contact_time'], $_POST['alt_contact_name'], $_POST['alt_contact_num'],
            		        $_POST['does_child_know_enrolling'], $_POST['does_child_want_to_join'], $_POST['BBBS_family_names'],
            		        $_POST['will_meet_monthly'], $_POST['medical_conditions'], $_POST['household_size'], $_POST['income_assist'],
            		        $_POST['house_assist'], $_POST['development'], $_POST['lunch_assist'], $_POST['annual_income'],
            		        $_POST['military'], $_POST['service_branch'], $_POST['deployment_date'], $_POST['retired_military'],
            		        $_POST['discharged_military'], $_POST['wounded_veteran'], $_POST['incarcerated'],
            		        $_POST['juvenile_record'], $_POST['school_record']);
            		}

            		// process_form sanitizes data, concatenates needed data, and enters it all into a database
            		function process_form($form) {
                        $email = $_POST['email'];       //TODO this shouldc only be for admin, use session for other users
                        $id = generate_id();
                        //step two: try to make the deletion, password change, addition, or change
                        if (array_key_exists('delete', $_POST)) {
                            $result = retrieve_little_application($id);
                            if (!$result) {
                                echo('<p>Unable to delete. ' . $email . ':' . $id . ' is not in the database. <br>Please report this error to the Manager.</p>');
                            } else {
                                $result = remove_little_application($id);
                                if (!$result) {
                                    echo("<p>You have successfully removed the form (" . $email . ":" . $id . ") from the database.</p>");
                                } else {
                                    echo('<p>Unable to delete. ' . $email . ':' . $id . ' is not in the database. <br>Please report this error to the Manager.</p>');
                                }
                            }
                        } else if ($form->get_id() == 'new') { //try to add a new form to the database
                            //check if there's already an entry
                            $dup = retrieve_little_application($id);
                            if ($dup) {
                                echo('<p class="error">Unable to add ' . $email . ':' . $id . ' to the database. <br>A form with the same id already exists. <br>Please report this error to the Manager.</p>');
                            } else {
                                $app = newApp($email, $id);
                                $result = add_little_application($app);
                                if (!$result) {
                                    echo ('<p class="error">Unable to add ' . $email . ':' . $id . ' in the database. <br>Please report this error to the Manager.</p>');
                                } else {
                                    echo('<p>You have successfully added <a href="' . $path . 'littleApplicationEdit.php?id=' . $id . '"><b>' . $email . ':' . $id . ' </b></a> to the database.</p>');
                                }
                            }
                        } else { //try to replace an existing form in the database by removing and adding
                            $id = $form->get_id();
                            $result = remove_little_application($id);
                            if (!$result) {
                                echo ('<p class="error">Unable to update ' . $email . ':' . $id . '. <br>Please report this error to the Manager.</p>');
                            } else {
                                $app = newApp($email, $id);
                                $result = add_little_application($app);
                                if (!$result) {
                                    echo ('<p class="error">Unable to update ' . $email . ':' . $id . '. <br>Please report this error to the Manager.</p>');
                                } else {
                                    echo('<p>You have successfully edited <a href="' . $path . 'littleApplicationEdit.php?id=' . $id . '"><b>' . $email . ':' . $id . ' </b></a> in the database.</p>');
                                }
                            }
                        }
            		}
            		?>
        		</div>
			</div>
			<?php include('footer.inc'); ?>
		</div>
	</body>
</html>