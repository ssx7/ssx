<?php

$controller = isset($_GET['controller']) ? trim($_GET['controller']) : '';

$action = isset($_GET['action']) ? trim($_GET['action']) : '';

if($controller == '' && $controller == '/' && $controller == 'glowna')
{
	$controller = '/';
}
include('../app/Database.php');
$new = new Database();
$new->table = 'artykuly';



switch($controller){

	case 'articles':
		include('articles.php');
	break;



	/* glowna - home */
	case '/':
		include('home.php');
	break;

	default :
		include('home.php');
	break;
}
