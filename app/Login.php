<?php
	include('Database.php');
	session_start();
	$login = isset($_POST['login']) ? $_POST['login'] : false; 
	$password = isset($_POST['pass'])  ? $_POST['pass'] : false ;
	$db = new Database();
	$array = [
		'login' => $login,
		'password' => $password
	];


	$tablica = ['check_user'=> null, 'check_pass'=>null];
	$blad = false;

	if($db->checkUser($array, 'users') != true )
	{
		$blad = true;

	}
	if( $db->checkPass($array, 'users') != true)
	{
		$blad = true;
	}
	if(!$blad) //jesli nie ma bledu
	{
		$_SESSION['check'] = true;
		$_SESSION['name'] = $login;
	}
	else
	{
		$tablica['check_user'] = 'Login lub hasło są nieprawidłowe';
		http_response_code(400);
	}
	header('Content-Type: application/json; charset=UTF-8');
	print json_encode($tablica);
?>

