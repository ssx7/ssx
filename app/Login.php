<?php
	include('Database.php');
	session_start();
	$login = isset($_POST['login']) ? $_POST['login'] : false; 
	$password = isset($_POST['pass'])  ? $_POST['pass'] : false ;
	echo $login.'dddd ==='.$password.' =====';
	$db = new Database();
	$array = [
		'login' => $login,
		'password' => $password
	];

	if($db->checkPass($array, 'users')==true) 
	{
		$_SESSION['check'] = true;
		$_SESSION['name'] = $login;
		header("Location: ../index.php");
	}
	else
	{
		echo "złe dane";
	}

