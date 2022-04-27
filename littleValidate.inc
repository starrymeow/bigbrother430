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
        if ($_POST['other_supports_enrollment'] == null) {
            $errors[] = 'Please answer if your significant other supports the enrollment';
            //TODO other_name
            //TODO other_phone
        }
    }
    if ($_POST['grade'] == null)
        $errors[] = 'Please select a grade level';
    if ($_POST['origin'] == null)
        $errors[] = 'Please enter the child\'s nationality/origin';
    if ($_POST['best_place'] == null)
        $errors[] = 'Please select a best place to contact';
    if ($_POST['best_time'] == null)
        $errors[] = 'Please select a best time to contact';
    if ($_POST['unable_name'] == null)
        $errors[] = 'Please provide the name of someone who always knows how to reach you';
    if ($_POST['unable_phone'] == null)
        $errors[] = 'Please provide the number of someone who always knows how to reach you';
    if ($_POST['participate'] == null)
        $errors[] = 'Please provide if the child wants to participate';
    if ($_POST['hear_school'] == null && $_POST['hear_relative'] == null && $_POST['hear_faith'] == null
        && $_POST['hear_service'] == null && $_POST['hear_website'] == null && $_POST['hear_tv'] == null
        && $_POST['hear_event'] == null && $_POST['hear_other'] == null)
        $errors[] = 'Please select at least one way of how you hear of the organization';
    if ($_POST['siblings'] == null)
        $errors[] = 'Please provide if there are siblings in the program';
    if ($_POST['participate'] == null)
        $errors[] = 'Please provide if the child wants to participate';
    if ($_POST['meet'] == null)
        $errors[] = 'Please provide if the child can meet with their big';
    if ($_POST['medical'] == null)
        $errors[] = 'Please provide if the child has any medical conditions';
    if ($_POST['household'] == null)
        $errors[] = 'Please provide how many live in the household';
    if ($_POST['income_assist'] == null)
        $errors[] = 'Please provide if the adult is recieving income assistance';
    if ($_POST['housing_assist'] == null)
        $errors[] = 'Please provide if the adult is recieving housing assistance';
    if ($_POST['lunch'] == null)
        $errors[] = 'Please provide if the child is eligible for free/reduced lunch';
    if ($_POST['income_assist'] == null)
        $errors[] = 'Please provide the household annual income';

    if ($errors != null)
        return array_merge($errors[], validate_general());
    else
        return validate_general();
}
?>