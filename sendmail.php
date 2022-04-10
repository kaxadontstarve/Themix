<?php
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);
$mysql = new mysqli('localhost','root','','themix');
$mysql->query("INSERT INTO `clients` (`name`,`login`,`password`) VALUES('$name','$login','$password')");

	/*use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require "PHPMailer/src/Exception.php";
	require "PHPMailer/src/PHPMailer.php";

	$sendMessage = new PHPMailer(true);
	$sendMessage->CharSet = 'UTF-8';
	$sendMessage->setLanguage('uk', 'PHPMailer/language/');
	$sendMessage->IsHTML(true);

	//От кого письмо
	$sendMessage->setFrom('themix@gmail.com', 'Фрилансер по жизни');
	//Кому отправить
	$sendMessage->addAddress('kaxa0308super@gmail.com');
	//Тема письма
	$sendMessage->Subject = 'Привет! Это "Фрилансер по жизни"';

	//Тело письма
	$body = '<h1>Встречайте супер письмо!</h1>';
	
	if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	}
	if(trim(!empty($_POST['login']))){
		$body.='<p><strong>Сообщение:</strong> '.$_POST['login'].'</p>';
	}
		if(trim(!empty($_POST['password1']))){
		$body.='<p><strong>Пароль:</strong> '.$_POST['password1'].'</p>';
	}
			if(trim(!empty($_POST['password2']))){
		$body.='<p><strong>Пароль:</strong> '.$_POST['password2'].'</p>';
	}

	$sendMessage->Body = $body;
	$sendMessage->send();
	//Отправляем
	if (!$sendMessage->send()) {
		
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
	*/

?>