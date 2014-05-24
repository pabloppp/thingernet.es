<?php
$ajax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

//we do not allow direct script access
if (!$ajax) {
	//redirect to contact form
	$form = '../09contact.html';
	header("Location: " . $form);
	exit;
}
require_once "config.php";

/**
 * MAIL CONFIG
 */


$mail->Subject = "Newsletter";

//setup proper validation errors. If you change required=false, please make
//sure your contact form does not have "required" tag in input fields
//also keys of array (name, message, email) are the names used in contact form
$formFields = array(
	'email' => array('required' => true, 'required_error' => "Field is required", 'email_error' => "Email invalid"),
);

$errorMessage = "Unfortunately we couldn't deliver your message. Please try again later.";
//element inside span (long) will not be displayed in footer widget
$successMessage = "Thank you.";

//NO NEED TO EDIT ANYTHING BELOW

//let's validate and return errors if required
if ($errors = $mail->validate($formFields, $_REQUEST)) {
	echo json_encode(array('errors' => $errors));
	exit;
}

$mail->setup(dirname(__FILE__) . '/newsletter.html', $_REQUEST, $formFields);

if (!$mail->Send()) {
	$message = '<div class="form-message error"><h3>' . $errorMessage . '</h3></div>';
} else {
	$message = '<div class="form-message notice"><h3 class="special">' . $successMessage . '</h3></div>';
}

echo json_encode(array('msg' => $message));
exit;