<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

	require "PHPMailer/Exception.php";
	require "PHPMailer/PHPMailer.php";



$mail = new PHPMailer(TRUE);

try {
   
   $mail->setFrom('darth@empire.com', 'Darth Vader');
   
   $mail->addAddress('palpatine@empire.com', 'Emperor');
   
   $mail->Subject = 'Force';
   
   $mail->Body = 'There is a great disturbance in the Force.';
   
   $mail->send();
}
catch (Exception $e)
{
   
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   
   echo $e->getMessage();
}
