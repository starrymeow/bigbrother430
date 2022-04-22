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
            		include_once('little_validate.inc');
            		if (! array_key_exists('_submit_check', $_POST)) {
            		    include("littleApplicationForm.inc");
            		} else {
            		    //in this case, the form has been submitted, so validate it
            		    $errors = validate_little($form);  //step one is validation.
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
            		    return new LittleApplication($email, $id, $POST['first_name'], $POST['last_name'], $POST['languages'],
            		        $POST['primary_language'], $POST['preferred_name'], $POST['birthday'], $POST['cell_phone'],
            		        $POST['can_text_cell'], $POST['home_phone'], $POST['gender'], $POST['address'], $POST['city'],
            		        $POST['state'], $POST['zip'], $POST['race'], $POST['apply_reasons'], $POST['life_changes'],
            		        $POST['middle_name'], $POST['can_text_child'], $POST['adult_name'], $POST['relation'], $POST['legal_custody'],
            		        $POST['share_custody'], $POST['other_supports_enrollment'], $POST['living_situation'], $POST['child_cell'],
            		        $POST['child_email'], $POST['school'], $POST['grade_level'], $POST['studentID'], $POST['nationality'],
            		        $POST['how_did_you_hear'], $POST['parent_employer'], $POST['parent_work_num'], $POST['can_contact_work'],
            		        $POST['best_num'], $POST['best_contact_time'], $POST['alt_contact_name'], $POST['alt_contact_num'],
            		        $POST['does_child_know_enrolling'], $POST['does_child_want_to_join'], $POST['BBBS_family_names'],
            		        $POST['will_meet_monthly'], $POST['medical_conditions'], $POST['household_size'], $POST['income_assist'],
            		        $POST['house_assist'], $POST['development'], $POST['lunch_assist'], $POST['annual_income'],
            		        $POST['military'], $POST['service_branch'], $POST['deployment_date'], $POST['retired_military'],
            		        $POST['discharged_military'], $POST['wounded_veteran'], $POST['incarcerated'],
            		        $POST['juvenile_record'], $POST['schoold_record']);
            		}

            		// process_form sanitizes data, concatenates needed data, and enters it all into a database
            		function process_form($form) {
                        $email = $POST['email'];
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