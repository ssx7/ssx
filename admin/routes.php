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

	case 'galeria':
		include('galeria.php');
	break;

	case 'calendar':
		include('calendar.php');
	break;

	case 'players':
		include('players.php');
	break;

	case 'KonfWs':
		include('KonfWs.php');
	break;

	case 'KonfZach':
		include('KonfZach.php');
	break;
	case 'statystyki':
		include('statystyki.php');
	break;




	/* glowna - home */
	case '/':
		include('home.php');
	break;

	default :
		include('home.php');
	break;
}
