<?php
session_start();
function cleanForm($element){
$element = trim($element);
$element = stripslashes($element);
$element = strip_tags($element);
$element = htmlspecialchars($element);
return $element;
}



$name = cleanForm($_POST['name']);
$login = cleanForm($_POST['login']);
$password1 = cleanForm($_POST['password1']);
$password2 = cleanForm($_POST['password2']);



$mysql = new mysqli('localhost','root','','themix');
$idUser = $mysql->query("SELECT MAX(`id`) FROM `clients`");
$idUser = $idUser->fetch_assoc();
$id = (int)$idUser["MAX(`id`)"];
for($index = 0; $index < $id; $index++){
	$userById = $mysql->query("SELECT `login` FROM `clients` WHERE `id` = '$index'");
	$loginTest = $userById->fetch_assoc();
	if($login != $loginTest["login"]){
		$resp = 0;
	}else{
		$resp = 1;
	}
}


$freeWay = 0;


if($resp == 1){
	echo "Такий Користувач уже є";echo ".<br>.";
	$freeWay = 1;
}
if(strlen($password2) > '32' || strlen($password2) < '4'){
	echo "Пароль повинен бути не менше 4 символів і не більше 32";echo ".<br>.";
	$freeWay = 1;
}
if(strlen($login) > '32' || strlen($login) < '4'){
	echo "Логін повинен бути не менше 4 символів і не більше 32";echo ".<br>.";
	$freeWay = 1;
}
if(strlen($name) > '50' || strlen($name) < '4'){
	echo "ПІБ повинен бути не менше 4 символів і не більше 50";echo ".<br>.";
	$freeWay = 1;
}
if($password1 =! $password2){
	echo "Паролі не співпадають";echo ".<br>.";
	$freeWay = 1;
}

if($freeWay==0){
	$password2 = md5($password2."awdwd232ed"); 
	$mysql->query("INSERT INTO `clients` (`name`,`login`,`password`) VALUES('$name','$login','$password2')"); 
	$relust = $mysql->query("SELECT * FROM `clients` WHERE `login` = '$login' AND `name` = '$name' ");
	$user = $relust->fetch_assoc();
	$_SESSION['user']=[
		'login' => $login,
		'name' => $name
	];
	$mysql->close();
    header('Location:/../Особистий кабінет/index.php');
}
 
 






?>