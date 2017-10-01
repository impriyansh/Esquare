<?php 
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];

	$to      = 'hrshtvaish743@gmail.com';
$subject = 'the subject';
$headers = "From: ".$email.'"' . "\r\n";

mail($to, $subject, $message, $headers)

 ?>