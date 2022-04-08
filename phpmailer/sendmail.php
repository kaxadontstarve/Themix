<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$sendmessage = new PHPMailer(true);
	$sendmessage->CharSet = 'UTF-8';
	$sendmessage->setLanguage('uk', 'phpmailer/language/');
	$sendmessage->IsHTML(true);

	//От кого письмо
	$sendmessage->setFrom('themix@gmail.com', 'Фрилансер по жизни');
	//Кому отправить
	$sendmessage->addAddress('kaxa0308super@gmail.com!');
	//Тема письма
	$sendmessage->Subject = 'Привет! Это "Фрилансер по жизни"';

	//Тело письма
	$body = '<h1>Встречайте супер письмо!</h1>';
	
	if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	}
	
	if(trim(!empty($_POST['login']))){
		$body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
	}
		if(trim(!empty($_POST['password']))){
		$body.='<p><strong>Сообщение:</strong> '.$_POST['password'].'</p>';
	}

	$sendmessage->Body = $body;

	//Отправляем
	if (!$sendmessage->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>