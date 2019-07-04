<?php
	require 'database.php';
	
	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));
	$subject = @trim(stripslashes($_POST['subject']));
	
	$message = @trim(stripslashes($_POST['message'])); 

	// $email_from = $email;
	// $email_to = 'sparkyglobe@gmail.com';//replace with your email

	// $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Website: ' . $website . "\n\n" . 'Message: ' . $message;

	// $success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Website: ' . $website . "\n\n" . 'Message: ' . $message);
	// 
	
	$qle = mysqli_query($conn,"INSERT into report(name,email,subject,message) values('$name','$email','$subject','$message')");
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script>alert("Thank you for contact us. We will contact you as soon as possible");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=index.php"> 
</head>