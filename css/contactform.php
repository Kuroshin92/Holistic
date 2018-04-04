<?php


if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailfrom = $_POST['mail'];
	$message = $_POST['message'];
	$subject = $_POST['subject']
	
	$mailTo = "seedsofmelanin@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an e-mail from". $name."\n\n".$message;
	mail($mailTo, $headers, $txt,$subject9);
	
	header("Location: contact.html?mailsend");
}