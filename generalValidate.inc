<?php
/**
 * validate_little validates the data, checking all legality.
 * it returns an array of the errors with the form (string warnings)
 * this array is null (aka false) if there are no errors
 * changes some data to make it fit into the database
 */
function validate_general() {
    if ($_POST['first_name'] == NULL || $_POST['first_name'] == 'new')
        $errors[] = 'Please enter a first name';
    if ($_POST['last_name'] == null)
        $errors[] = 'Please enter a last name';
    if ($_POST['languages'] == null)
        $errors[] = 'Please enter the languages you speak';
    if ($_POST['primary_language'] == null)
        $errors[] = 'Please enter your primary language';
    if ($_POST['preferred_name'] == null)
        $errors[] = 'Please enter your preferred name';
    $_POST['birthday'] = str_replace(' ', '-', str_replace('/', '-', $_POST['birthday']));
    if (!valid_date($_POST['birthday']))
        $errors[] = 'Please enter a birthday in MM-DD-YYYY format';
    $_POST['cell_phone'] = str_replace(' ', '', str_replace('+', '', str_replace('(', '', str_replace('(', '', str_replace('-', '', $_POST['phone'])))));
    if (!valid_phone($_POST['cell_phone']))
        $errors[] = 'Please enter the account owner\'s cell phone';
    $_POST['can_text_cell'] = filter_var($_POST['can_text_cell'], FILTER_VALIDATE_BOOLEAN);
    $_POST['home_phone'] = str_replace(' ', '', str_replace('+', '', str_replace('(', '', str_replace('(', '', str_replace('-', '', $_POST['home_phone'])))));
    if (!valid_phone($_POST['home_phone']) && $_POST['home_phone'] != null)
        $errors[] = 'Please enter a valid number for your home phone';
    if ($_POST['gender'] == null)
        $errors[] = 'Please enter a gender';
    if ($_POST['adddress'] == null)  //TODO input validation for an address is apparently crazy hard     https://www.mjt.me.uk/posts/falsehoods-programmers-believe-about-addresses/
        $errors[] = 'Please enter an address';
    if ($_POST['city'] == null)
        $errors[] = 'Please enter a city';
    if ($_POST['state'] == null) //TODO could check from a set
        $errors[] = 'Please enter a state';
    if ($_POST['zip'] == null)
        $errors[] = 'Please enter a zip code';
    if ($_POST['race'] == null)
        $errors[] = 'Please enter a race';
    if ($_POST['apply_reason'] == null)
        $errors[] = 'Please enter the reason that you are applying';

    return $errors;
}

function valid_date($date) {
    if ($date == null)
        return false;
    //$date = str_replace(' ', '-', str_replace('/', '-', $date));
    $nums = explode('-', $date);
    if (!is_numeric($nums[0]) || $nums[0] > 12 || $nums[0] < 1)
        return false;
    if (!is_numeric($nums[1]) || $nums[1] > 31 || $nums[1] < 1)
        return false;
    if (!is_numeric($nums[2]) || $nums[2] > date('Y') || $nums[2] < date('Y')-100)
        return false;
    return true;
}

/**
 * valid_phone validates a phone on the following parameters:
 * 		it assumes the characters '-' ' ' '+' '(' and ')' are valid, but ignores them
 * 		every other digit must be a number
 * 		it should be between 7 and 11 digits
 * returns boolean if phone is valid
 */
function valid_phone(&$phone) {
    if ($phone == null)
        return false;
    //$phone = str_replace(' ', '', str_replace('+', '', str_replace('(', '', str_replace('(', '', str_replace('-', '', $phone)))));
    $test = str_replace('0', '', str_replace('1', '', str_replace('2', '', str_replace('3', '', str_replace('4', '', str_replace('5', '', str_replace('6', '', str_replace('7', '', str_replace('8', '', str_replace('9', '', $phone))))))))));
    if ($test != null)
        return false;
    if ((strlen($phone)) != 10)
        return false;
    return true;
}

//Function from <http://www.phpit.net/code/valid-email/>
function valid_email($email) {
    // First, we check that there's one @ symbol, and that the lengths are right
    if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
        return false;
    }
    // Split it into sections to make life easier
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++) {
        if (!preg_match("/^(([A-Za-z0-9!#$%&#038;'*+=?^_`{|}~-][A-Za-z0-9!#$%&#038;'*+=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
            return false;
        }
    }
    if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2) {
            return false; // Not enough parts to domain
        }
        for ($i = 0; $i < sizeof($domain_array); $i++) {
            if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
                return false;
            }
        }
    }
    return true;
}

function show_errors($e) {
    //this function should display all of our errors.
    echo('<div class="warning">');
    echo('<ul>');
    foreach ($e as $error) {
        echo("<li><strong><font color=\"red\">" . $error . "</font></strong></li>\n");
    }
    echo("</ul></div></p>");
}

?>