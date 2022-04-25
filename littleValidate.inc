<?php
include_once('generalValidate.inc');

/**
 * validate_little validates the data, checking all legality.
 * it returns an array of the errors with the form (string warnings)
 * this array is null (aka false) if there are no errors
 */
function validate_little() {
    if ($_POST['adult_name'] == null)
        $errors[] = 'Please enter the parent guardian name';
    if ($_POST['relation'] == null)
        $errors[] = 'Please enter your relation to the child';
    if ($_POST['legal_custody'] == null)
        $errors[] = 'Please answer if you have legal custody';
    if ($_POST['share_custody'] == null)
        $errors[] = 'Please answer if you share custody';
    else if (filter_var($_POST['share_custody'], FILTER_VALIDATE_BOOLEAN) == true) {
        $_POST['share_custody'] = filter_var($_POST['share_custody'], FILTER_VALIDATE_BOOLEAN);
        if ($_POST['other_supports_enrollment'] == null)
            $errors[] = 'Please answer if your significant other supports the enrollment';
        //TODO
    }
    return merge_array($errors, validate_general());
}
?>