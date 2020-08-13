<?php 

	$to = "sandesh.bhattarai79@gmail.com";
	$sub = "Test message";
	
	$message = "<!DOCTYPE html>";
	$message .= "<html>";
	
	$message .= "</html>";

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	$headers .= "From: sandesh.bhattarai79@gmail.com";

	$bool = mail($to, $sub, $message, $headers);	// bool

	if($bool){
		echo "mail sent successfully.";
	} else {
		echo "Error sending mail";
	}