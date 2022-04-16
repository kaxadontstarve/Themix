<?php
session_start();
function cleanForm($element){
$element = filter_var(trim($element),
	FILTER_SANITIZE_STRING);
return $element;
}



$login = cleanForm($_POST['login']);
$password = cleanForm($_POST['password']);
$password = md5($password."awdwd232ed");


	   
$mysql = new mysqli('localhost','root','','themix');
$relust = $mysql->query("SELECT * FROM `clients` WHERE `login` = '$login' AND `password` = '$password'");
$user = $relust->fetch_assoc();
$userLogin = $user["login"];
$userPassword = $user["passwword"];



if($userLogin==NULL && $userPassword==NULL){
  echo "Користувач не знайдений";
  exit();
}else{
	echo "Користувач знайдений";
	setcookie('user', $user['name'], time()+3600, "/");
	$mysql->close();
	$_SESSION['user']=[
		'login' => $user['login'],
		'name' => $user['name']
	];
header('Location:/../Особистий кабінет/index.php');

}
?>