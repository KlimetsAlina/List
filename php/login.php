<?php
include('db.php');
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$password'");
 //exit("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$password'");

if( mysqli_num_rows($count)){
	$_SESSION['login'] = $login;
	$query = mysqli_query($connection, "SELECT `id` AS `id_user` FROM `users` WHERE `login` = '$login'");
	$array_query = mysqli_fetch_assoc($query);
	$_SESSION['user_id'] = $array_query['id_user'];
	header('Location: ../index.php'); 
} else {
	echo 'Вы не зарегистрированы';
}

?>
