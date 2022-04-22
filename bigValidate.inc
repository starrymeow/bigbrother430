<?php
include_once('generalValidate.inc');

/**
 * validate_big validates the data, checking all legality.
 * it returns an array of the errors with the form (string warnings)
 * this array is null (aka false) if there are no errors
 */
function validate_big($account) {
    //TODO
    /*if ($account->get_first_name()=="new" && ($_POST['first_name'] == NULL || $_POST['first_name'] == 'new'))
        $errors[] = 'Please enter a first name';
    if ($_POST['last_name'] == null)
        $errors[] = 'Please enter a last name';
    if ($_SESSION['access_level'] == 0 && ($_POST['status'] == null))
        $_POST['status'] = 'applicant';
    if (!valid_email($_POST['email']) && $_POST['email'] != null)
        $errors[] = "Please enter a valid email";*/
    return $errors;
}
?>