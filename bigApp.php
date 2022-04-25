<?php
session_start();
session_cache_expire(30);
//include_once('database/dbAccounts.php');
include_once('domain/Account.php');
include_once('database/dbBigApplications.php');
include_once('domain/BigApplication.php');
include_once('database/dbinfo.php');

// Tests if user can access page
if ($_SESSION['access_level'] < 1) {
    header("Location: index.php");
    die();
}

$id = $_GET["id"];
if ($id == 'new') {
    $form = new BigApplication('new', 'new', null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null);
} else {
    $form = retrieve_big_application($id);
    if (!$form) {
        echo('<p id="error">Error: there are no big applications with this id in the database</p>' . $id);
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
					echo('<h1>Big Application</h1>');
            		include_once('big_validate.inc');
            		if (! array_key_exists('_submit_check', $_POST)) {
            		    include("bigApplicationForm.inc");
            		} else {
            		    //in this case, the form has been submitted, so validate it
            		    $errors = validate_big();  //step one is validation.
            		    // errors array lists problems on the form submitted
            		    if ($errors) {
            		        show_errors($errors);
            		        include('bigApplicationForm.inc');
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
            		    return new BigApplication($email, $id, $_POST['first_name'], $_POST['last_name'], $_POST['languages'],
            		        $_POST['primary_language'], $_POST['preferred_name'], $_POST['birthday'], $_POST['cell_phone'],
            		        $_POST['can_text_cell'], $_POST['home_phone'], $_POST['gender'], $_POST['address'], $_POST['city'],
            		        $_POST['state'], $_POST['zip'], $_POST['race'], $_POST['apply_reasons'], $_POST['life_changes'],
                            $_POST['secondary_email'], $_POST['ssn'], $_POST['relationship_status'], $_POST['orientation'],
            		        $_POST['faith'], $_POST['DL_number'], $_POST['DL_state'], $_POST['emergency_contact'], $_POST['EC_number'],
            		        $_POST['DL_expiration'], $_POST['EC_relation'], $_POST['job_title'], $_POST['employer'],
                            $_POST['employer_address'], $_POST['employer_city'], $_POST['employer_state'], $_POST['employer_zip'],
            		        $_POST['can_contact_work'], $_POST['work_length'], $_POST['work_hours'], $_POST['highest_education'],
            		        $_POST['years_completed'], $_POST['graduation_year'], $_POST['ohio'], $_POST['prev_add_1_date'],
            		        $_POST['prev_add_1_add'], $_POST['prev_add_2_date'], $_POST['prev_add_2_add'], $_POST['prev_add_3_date'],
            		        $_POST['prev_add_3_add'], $_POST['military_experience'], $_POST['military_branch'], $_POST['date_of_service'],
            		        $_POST['military_status'], $_POST['military_discharge'], $_POST['significant_name'],
            		        $_POST['significant_number'], $_POST['significant_email'], $_POST['significant_relationship'],
            		        $_POST['significant_years_known'], $_POST['professional_reference_name'], $_POST['professional_reference_number'],
            		        $_POST['professional_reference_email'], $_POST['professional_reference_relationship'],
            		        $_POST['professional_reference_years_known'], $_POST['personal_reference_name'], $_POST['personal_reference_number'],
            		        $_POST['personal_reference_email'], $_POST['personal_reference_relationship'], $_POST['personal_reference_years_known'],
            		        $_POST['worked_with_youth'], $_POST['organization_1'], $_POST['organization_1_manager'], $_POST['organization_1_number'],
            		        $_POST['organization_1_email'], $_POST['organization_1_dates'], $_POST['organization_1_reason'], $_POST['organization_2'],
            		        $_POST['organization_2_manager'], $_POST['organization_2_number'], $_POST['organization_2_email'],
            		        $_POST['organization_2_dates'], $_POST['organization_2_reason'], $_POST['organization_3'],
            		        $_POST['organization_3_manager'], $_POST['organization_3_number'], $_POST['organization_3_email'],
            		        $_POST['organization_3_dates'], $_POST['organization_3_reason'], $_POST['organization_4'],
            		        $_POST['organization_4_manager'], $_POST['organization_4_number'], $_POST['organization_4_email'],
            		        $_POST['organization_4_dates'], $_POST['organization_4_reason'], $_POST['community_mentor'],
            		        $_POST['community_couple'], $_POST['school_mentor'], $_POST['commitment_concerns'], $_POST['interest_in_children'],
            		        $_POST['comfortable_driving_distance'], $_POST['interview_availability'], $_POST['uncomfortable_traits'],
            		        $_POST['big_sister_with_little_brother'], $_POST['weapons_at_home'], $_POST['concealed_permit'], $_POST['pets'],
            		        $_POST['other_people_in_house'], $_POST['other_1_name'], $_POST['other_1_age'], $_POST['other_1_relationship'],
            		        $_POST['other_2_name'], $_POST['other_2_age'], $_POST['other_2_relationship'], $_POST['other_3_name'],
            		        $_POST['other_3_age'], $_POST['other_3_relationship'], $_POST['other_4_name'], $_POST['other_4_age'],
            		        $_POST['other_4_relationship'], $_POST['other_5_name'], $_POST['other_5_age'], $_POST['other_5_relationship'],
            		        $_POST['questions_or_comments'], $_POST['convicted_felon'], $_POST['driving_citations'], $_POST['conflicting_convictions'],
            		        $_POST['fail_to_care'], $_POST['charged_with_abuse'], $_POST['health_limitations'], $_POST['mental_help'],
            		        $_POST['substance_abuse_history'], $_POST['sober_two_years'], $_POST['illegal_drugs'], $_POST['auto_insurance'],
            		        $_POST['can_submit_insurance_copy'], $_POST['sports_activities'], $_POST['stem_activities'],
            		        $_POST['arts_crafts_activities'], $_POST['outdoor_activities'], $_POST['games_activities'], $_POST['misc_activities'],
            		        $_POST['quiet_talkitive'], $_POST['outdoor_indoor'], $_POST['watch_do'], $_POST['other_interests']);
            		}

            		// process_form sanitizes data, concatenates needed data, and enters it all into a database
            		function process_form($form) {
            		    $email = $_POST['email'];
            		    $id = generate_id();
            		    //step two: try to make the deletion, password change, addition, or change
            		    if (array_key_exists('delete', $_POST)) {
            		        $result = retrieve_big_application($id);
            		        if (!$result) {
            		            echo('<p>Unable to delete. ' . $email . ':' . $id . ' is not in the database. <br>Please report this error to the Manager.</p>');
            		        } else {
            		            $result = remove_big_application($id);
            		            if (!$result) {
            		                echo("<p>You have successfully removed the form (" . $email . ":" . $id . ") from the database.</p>");
            		            } else {
            		                echo('<p>Unable to delete. ' . $email . ':' . $id . ' is not in the database. <br>Please report this error to the Manager.</p>');
            		            }
            		        }
            		    } else if ($form->get_id() == 'new') { //try to add a new form to the database
            		        //check if there's already an entry
            		        $dup = retrieve_big_application($id);
            		        if ($dup) {
            		            echo('<p class="error">Unable to add ' . $email . ':' . $id . ' to the database. <br>A form with the same id already exists. <br>Please report this error to the Manager.</p>');
            		        } else {
            		            $app = newApp($email, $id);
            		            $result = add_big_application($app);
            		            if (!$result) {
            		                echo ('<p class="error">Unable to add ' . $email . ':' . $id . ' in the database. <br>Please report this error to the Manager.</p>');
            		            } else {
            		                echo('<p>You have successfully added <a href="' . $path . 'bigApplicationEdit.php?id=' . $id . '"><b>' . $email . ':' . $id . ' </b></a> to the database.</p>');
            		            }
            		        }
            		    } else { //try to replace an existing form in the database by removing and adding
            		        $id = $form->get_id();
            		        $result = remove_big_application($id);
            		        if (!$result) {
            		            echo ('<p class="error">Unable to update ' . $email . ':' . $id . '. <br>Please report this error to the Manager.</p>');
            		        } else {
            		            $app = newApp($email, $id);
            		            $result = add_big_application($app);
            		            if (!$result) {
            		                echo ('<p class="error">Unable to update ' . $email . ':' . $id . '. <br>Please report this error to the Manager.</p>');
            		            } else {
            		                echo('<p>You have successfully edited <a href="' . $path . 'bigApplicationEdit.php?id=' . $id . '"><b>' . $email . ':' . $id . ' </b></a> in the database.</p>');
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