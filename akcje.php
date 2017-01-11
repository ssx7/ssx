<?php
$action = isset($_GET['action']) ? trim($_GET['action']) : '';

switch($action){
	case 'addArticle':
		include('MainController.php');
		$article = new MainController();
		$article->addArticle();
	break;
}




?>