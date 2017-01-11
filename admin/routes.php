<?php

$controller = isset($_GET['controller']) ? trim($_GET['controller']) : '';

$action = isset($_GET['action']) ? trim($_GET['action']) : '';

if($controller == '' && $controller == '/' && $controller == 'glowna')
{
	$controller = '/';
}
include('../app/Database.php');
switch($controller){

	case 'articles':
		include('ArticlesController.php');

		$art = new ArticlesController(); //pobranie klasy

		switch($action){
			case 'index':
				$art->index(); //wywolanie funkcji
			break;

			case 'add':
				$art->add();
			break;

			case 'store':
				$art->store();
			break;

			case 'edit':
				$art->edit();
			break;

			case 'active':
				$id = $_GET['id'];
				$active = $_GET['active'];
				$art->active($id, $active);
			break;
			case 'delete':
				$id = $_GET['id'];	
				$art->delete($id);
			break;

			default :
				echo 'nie ma takiej strony';
			break;
		}
	break;



	case 'galeria':
		include('GaleriaController.php');

		$art = new GaleriaController(); //pobranie klasy

		switch($action){
			case 'index':
				$art->index(); //wywolanie funkcji
			break;

			case 'add':
				$art->add();
			break;

			case 'store':
				$art->store();
			break;

			case 'edit':
				$art->edit();
			break;

			case 'delete':
				$id = $_GET['id'];	
				$art->delete($id);
			break;

			default :
				echo 'nie ma takiej strony';
			break;
		}
	break;



	case 'calendar':
		include('CalendarController.php');

		$art = new CalendarController(); //pobranie klasy

		switch($action){
			case 'index':
				$art->index(); //wywolanie funkcji
			break;

			case 'add':
				$art->add();
			break;

			case 'store':
				$art->store();
			break;

			case 'edit':
				$art->edit();
			break;

			case 'delete':
				$id = $_GET['id'];	
				$art->delete($id);
			break;

			default :
				echo 'nie ma takiej strony';
			break;
		}
	break;



	case 'players':
		include('PlayersController.php');

		$art = new PlayersController(); //pobranie klasy

		switch($action){
			case 'index':
				$art->index(); //wywolanie funkcji
			break;

			case 'add':
				$art->add();
			break;

			case 'store':
				$art->store();
			break;

			case 'edit':
				$art->edit();
			break;

			case 'delete':
				$id = $_GET['id'];	
				$art->delete($id);
			break;

			default :
				echo 'nie ma takiej strony';
			break;
		}
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
