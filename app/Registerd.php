<?php
include('Database.php');
$db = new Database();
$db->table = 'users';

$name = isset($_POST['login1']) ? $_POST['login1'] : false;

$pass = isset($_POST['pass']) ? $_POST['pass'] : false;
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
$pass_confirm = isset($_POST['pass2']) ? $_POST['pass2'] : false;

$email = isset($_POST['email']) ? $_POST['email'] : false;
$array = [
		'login' => $name,
	];

$tablica = ['check_user'=>$db->checkUser($array, 'users'), 'check_email'=>null, 'check_pass'=>null];

if($pass == $pass_confirm)
{
	http_response_code(404);
	$db->insert([
		'name' =>mysqli_real_escape_string($db->link, $name),
		'created_at' => date('Y-m-d H:i:s'),
		'email' =>mysqli_real_escape_string($db->link, $email),
		'password' => mysqli_real_escape_string($db->link, $pass_hash)
	]);

	header("Location: ../index.php");
}
else
{
	//user - potrzeban baza
	//email - baza 
	//password - zle haslo
	
	$tablica['check_pass'] = 'Oba hasła nie są zgodne';
	
}
header('HTTP/1.0 401 Unauthorized');
header('Content-Type: application/json; charset=UTF-8');
print json_encode($tablica);


?>