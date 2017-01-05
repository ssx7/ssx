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
		'email' => $email,
		
	];

$tablica = ['check_user'=> null, 'check_email'=>null, 'check_pass'=>null];
$ilosc_bledow = 0;

if($db->checkUser($array, 'users'))
{
	$ilosc_bledow += 1;
	$tablica['check_user'] = 'Użytkownik istnieje';
}
if($db->checkEmail($array, 'users'))
{
	$ilosc_bledow += 1;
	$tablica['check_email'] = 'Email istnieje';
}

if($pass == $pass_confirm && !$db->checkUser($array, 'users') && !$db->checkEmail($array, 'users'))
{

	$db->insert([
		'name' =>mysqli_real_escape_string($db->link, $name),
		'created_at' => date('Y-m-d H:i:s'),
		'email' =>mysqli_real_escape_string($db->link, $email),
		'password' => mysqli_real_escape_string($db->link, $pass_hash)
	]);
}
else
{
	$ilosc_bledow += 1;
	//user - potrzebna baza
	//email - baza 
	//password - zle haslo
	
	$tablica['check_pass'] = 'Hasła nie są zgodne';
}

if($ilosc_bledow > 0)
{
	http_response_code(400);
}
header('Content-Type: application/json; charset=UTF-8');
print json_encode($tablica);


?>