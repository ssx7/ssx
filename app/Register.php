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

$tablica = ['check_user'=>null, 'check_email'=>null, 'check_pass'=>''];

if($pass == $pass_confirm)
{
	$db->insert([
		'name' =>mysqli_real_escape_string($db->link, $name),
		'created_at' => date('Y-m-d H:i:s'),
		'email' =>mysqli_real_escape_string($db->link, $email),
		'password' => mysqli_real_escape_string($db->link, $pass_hash)
	]);

	$_SESSION['check'] = true;
	$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	header("Location: ../index.php");
}
else
{
	//user - potrzeban baza
	//email - baza 
	//password - zle haslo
	header('Content-Type: application/json; charset=UTF-8');
	$tablica['check_pass'] = 'Oba hasła nie są zgodne';
	print json_encode($tablica);

}



?>