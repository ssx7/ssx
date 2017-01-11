<?php
	include('Controller.php');
	//include('../app/Database.php');
				//$db = new Database();
				//$db->table = 'artykuly';
	class PlayersController extends Controller{

		public function index(){
			$new = new Database();
			$new->table='zawodnicy';
			include('players/players.php');
		}
		public function add(){
			//widok
			include('players/players-create.php');
		}
		public function store(){
			//post
			$db = new Database();
			$db->table = 'zawodnicy';

			$path = 'public/image/Zawodnicy'; //tutaj bedziesz wgrywal pliki

			$file_name = $_FILES['zdjecie']['name'];

			move_uploaded_file($_FILES['zdjecie']['tmp_name'],'../'.$path.'/'.$file_name); //funkcja sluzy do wgrania pliku, pierwszy warunek to musi byc z tmp_name a drugi warunek gdzie to ma byc wgrane z nazwa pliku huju pierdolony w diipe

			$numer = $_POST['numer'];
			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$wzrost = $_POST['wzrost'];
			$waga = $_POST['waga'];
			$zdjecie = $path.'/'.$file_name;
			
				$array = [
					'numer' => $numer,
					'imie' => $imie,
					'nazwisko' => $nazwisko,
					'wzrost' => $wzrost,
					'waga' => $waga,
					'zdjecie' => $zdjecie
				];

				$db->insert([
					'numer' =>mysqli_real_escape_string($db->link, $numer),
					'imie' =>mysqli_real_escape_string($db->link, $imie),
					'nazwisko' =>mysqli_real_escape_string($db->link, $nazwisko),
					'wzrost' =>mysqli_real_escape_string($db->link, $wzrost),
					'waga' =>mysqli_real_escape_string($db->link, $waga),
					'zdjecie' =>mysqli_real_escape_string($db->link, $zdjecie),
				]);

			return $this->redirect('http://phpszymon.dev/admin/index.php?controller=players&action=index');
				
		}
		public function edit(){
			//widok
			$db = new Database();
			$db->table = 'zawodnicy';
			$nazwa = $db->find($_GET['id']);
			include('players/players-edit.php');
		}
		public function update(){
			//post
		}
		public function delete($id){
			$db = new Database();
			$db->table = 'zawodnicy';
			$db->delete($id);

			return $this->redirect('http://phpszymon.dev/admin/index.php?controller=players&action=index');
		}
	}