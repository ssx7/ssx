<?php 
include('../app/Database.php');
$db = new Database();
$db->table = 'artykuly';

$subject = isset($_POST['subject']) ? $_POST['subject'] : false;

$opis = isset($_POST['opis']) ? $_POST['opis'] : false;

$array = [
	'tytul' => $subject,
	'opis' => $opis,
];

$db->insert([
	'tytul' =>$subject,
	'opis' => $opis,
	'user_id' => 1,
	'active' => 1,
	'created_at' => date('Y-m-d H:i:s'),
]);

header("Location: http://localhost/phpszymon/admin/index.php?controller=articles");