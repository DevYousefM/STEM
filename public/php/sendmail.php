<?php

$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$subject = filter_var($_POST["subject"]);
$message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);


if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "contact@stemzone.online"; 
      $mailFrom = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $mailFrom)){
			$output = json_encode(
				array(
					'type' => 'message',
					'text' => '<div class="alert alert-success" role="alert">
		Hi ' . $name . ', Thank you very much for your message, we will contact you soon.</div>'
				)
			);
			die($output);


		} else {
			$output = json_encode(array('type' => 'error', 'text' => '<p>Could not send mail! Please check your PHP mail configuration.</p>'));
			die($output);
		}
	} else {
		$output = json_encode(array('type' => 'error', 'text' => '<p>Enter a valid email address!</p>'));
		die($output);
	}
} else {
	$output = json_encode(array('type' => 'error', 'text' => '<p>Email and message field is required!</p>'));
	die($output);
}
?>