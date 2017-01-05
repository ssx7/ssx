<?php
	include('Controller.php');
	//include('../app/Database.php');
				//$db = new Database();
				//$db->table = 'artykuly';
	class PlayersController extends Controller{

		public function index(){
			include('players/players.php');
		}
		public function add(){
			//widok
			include('players/players-create.php');
		}
		public function store(){
			//post
		}
		public function edit(){
			//widok
		}
		public function update(){
			//post
		}
		public function delete(){
			
		}
	}