<?php
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\PHPMailer;

  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('uk', 'phpmailer/language/');
  $mail->IsHTML(true);
  //От кого письмо
  $mail->setFrom('kaxa@gmail.com', 'The mix mail');
  //Кому отправить
  $mail->addAddress('kaxa0308super@gmail.com');
  //Тема письма
  $mail->Subject = 'Відгук';

  //Тело письма
$body = '<h1>Зустрічай супер письмо!</h1>';
  
  if(trim(!empty($_POST['text']))){
    $body.='<p><strong>Им`я:</strong> '.$_POST['text'].'</p>';

  $mail->Body = $body;

  //Отправляем
  if (!$mail->send()) {
    $message = 'Помилка';
  } else {
    $message = 'Дані відправлені!';
  }

  $response = ['message' => $message];

  header('Content-type: application/json');
  echo json_encode($response);
?>