<?php
include('Database.php');
session_start();
$db = new Database();
$db->table = 'users';

$name = isset($_POST['login1']) ? $_POST['login1'] : false;

$pass = isset($_POST['pass']) ? $_POST['pass'] : false;
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
$pass_confirm = isset($_POST['pass2']) ? $_POST['pass2'] : false;

$email = isset($_POST['email']) ? $_POST['email'] : false;


if($pass == $pass_confirm)
{
	$db->insert([
		'name' => $name,
		'created_at' => date('Y-m-d H:i:s'),
		'email' => $email,
		'password' => $pass_hash
	]);

	$_SESSION['check'] = true;
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	header("Location: ../index.php");
}
else
{
	echo 'hasla nie sa zblizone';
}


?>