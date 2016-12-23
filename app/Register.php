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

$tablica = ['check_user'=> null, 'check_email'=>null, 'check_pass'=>null];
$ilosc_bledow = 0;

if($db->checkUser($array, 'users'))
{
	$ilosc_bledow += 1;
	$tablice['check_user'] = 'Użytkownik istnieje KURWA MAĆ';
}

if($pass == $pass_confirm && !$db->checkUser($array, 'users'))
{

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
	$ilosc_bledow += 1;
	//user - potrzebna baza
	//email - baza 
	//password - zle haslo
	
	$tablica['check_pass'] = 'Oba hasła nie są zgodne';
}

if($ilosc_bledow > 0)
{
	http_response_code(400);
}
header('Content-Type: application/json; charset=UTF-8');
print json_encode($tablica);


?>