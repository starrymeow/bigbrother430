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
            		    $errors = validate_big($form);  //step one is validation.
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
            		    return new BigApplication($email, $id, $POST['first_name'], $POST['last_name'], $POST['languages'],
            		        $POST['primary_language'], $POST['preferred_name'], $POST['birthday'], $POST['cell_phone'],
            		        $POST['can_text_cell'], $POST['home_phone'], $POST['gender'], $POST['address'], $POST['city'],
            		        $POST['state'], $POST['zip'], $POST['race'], $POST['apply_reasons'], $POST['life_changes'],
                            $POST['secondary_email'], $POST['ssn'], $POST['relationship_status'], $POST['orientation'],
            		        $POST['faith'], $POST['DL_number'], $POST['DL_state'], $POST['emergency_contact'], $POST['EC_number'],
            		        $POST['DL_expiration'], $POST['EC_relation'], $POST['job_title'], $POST['employer'],
                            $POST['employer_address'], $POST['employer_city'], $POST['employer_state'], $POST['employer_zip'],
            		        $POST['can_contact_work'], $POST['work_length'], $POST['work_hours'], $POST['highest_education'],
            		        $POST['years_completed'], $POST['graduation_year'], $POST['ohio'], $POST['prev_add_1_date'],
            		        $POST['prev_add_1_add'], $POST['prev_add_2_date'], $POST['prev_add_2_add'], $POST['prev_add_3_date'],
            		        $POST['prev_add_3_add'], $POST['military_experience'], $POST['military_branch'], $POST['date_of_service'],
            		        $POST['military_status'], $POST['military_discharge'], $POST['significant_name'],
            		        $POST['significant_number'], $POST['significant_email'], $POST['significant_relationship'],
            		        $POST['significant_years_known'], $POST['professional_reference_name'], $POST['professional_reference_number'],
            		        $POST['professional_reference_email'], $POST['professional_reference_relationship'],
            		        $POST['professional_reference_years_known'], $POST['personal_reference_name'], $POST['personal_reference_number'],
            		        $POST['personal_reference_email'], $POST['personal_reference_relationship'], $POST['personal_reference_years_known'],
            		        $POST['worked_with_youth'], $POST['organization_1'], $POST['organization_1_manager'], $POST['organization_1_number'],
            		        $POST['organization_1_email'], $POST['organization_1_dates'], $POST['organization_1_reason'], $POST['organization_2'],
            		        $POST['organization_2_manager'], $POST['organization_2_number'], $POST['organization_2_email'],
            		        $POST['organization_2_dates'], $POST['organization_2_reason'], $POST['organization_3'],
            		        $POST['organization_3_manager'], $POST['organization_3_number'], $POST['organization_3_email'],
            		        $POST['organization_3_dates'], $POST['organization_3_reason'], $POST['organization_4'],
            		        $POST['organization_4_manager'], $POST['organization_4_number'], $POST['organization_4_email'],
            		        $POST['organization_4_dates'], $POST['organization_4_reason'], $POST['community_mentor'],
            		        $POST['community_couple'], $POST['school_mentor'], $POST['commitment_concerns'], $POST['interest_in_children'],
            		        $POST['comfortable_driving_distance'], $POST['interview_availability'], $POST['uncomfortable_traits'],
            		        $POST['big_sister_with_little_brother'], $POST['weapons_at_home'], $POST['concealed_permit'], $POST['pets'],
            		        $POST['other_people_in_house'], $POST['other_1_name'], $POST['other_1_age'], $POST['other_1_relationship'],
            		        $POST['other_2_name'], $POST['other_2_age'], $POST['other_2_relationship'], $POST['other_3_name'],
            		        $POST['other_3_age'], $POST['other_3_relationship'], $POST['other_4_name'], $POST['other_4_age'],
            		        $POST['other_4_relationship'], $POST['other_5_name'], $POST['other_5_age'], $POST['other_5_relationship'],
            		        $POST['questions_or_comments'], $POST['convicted_felon'], $POST['driving_citations'], $POST['conflicting_convictions'],
            		        $POST['fail_to_care'], $POST['charged_with_abuse'], $POST['health_limitations'], $POST['mental_help'],
            		        $POST['substance_abuse_history'], $POST['sober_two_years'], $POST['illegal_drugs'], $POST['auto_insurance'],
            		        $POST['can_submit_insurance_copy'], $POST['sports_activities'], $POST['stem_activities'],
            		        $POST['arts_crafts_activities'], $POST['outdoor_activities'], $POST['games_activities'], $POST['misc_activities'],
            		        $POST['quiet_talkitive'], $POST['outdoor_indoor'], $POST['watch_do'], $POST['other_interests']);
            		}

            		// process_form sanitizes data, concatenates needed data, and enters it all into a database
            		function process_form($form) {
            		    $email = $POST['email'];
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