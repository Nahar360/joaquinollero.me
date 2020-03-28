<?php
	$email_to = "joaquinollerogarcia@gmail.com";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$email_subject = $_POST['subject'];
	$content = $_POST['content'];

	$headers = "From:".$name."\r\n".
	"Reply-To:".$email."\r\n'" .
	"X-Mailer: PHP/" . phpversion();

	mail($email_to, $email_subject, $content, $headers);

	header("Location: https://joaquinollero.herokuapp.com/?loc=contact");
	exit();
?>
