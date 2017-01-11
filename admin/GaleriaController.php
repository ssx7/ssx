<?php
	include('Controller.php');

	class GaleriaController extends Controller{

		public function index(){
			$new = new Database();
			$new->table='galeria';
			include('galeria/galeria.php');
		}
		public function add(){
			//widok
		}
		public function store(){
			//post
			$db = new Database();
			$db->table = 'galeria';

			$path = 'public/image/Galeria'; //tutaj bedziesz wgrywal pliki

			$file_name = $_FILES['zdjecie']['name'];

			move_uploaded_file($_FILES['zdjecie']['tmp_name'],'../'.$path.'/'.$file_name); //funkcja sluzy do wgrania pliku, pierwszy warunek to musi byc z tmp_name a drugi warunek gdzie to ma byc wgrane z nazwa pliku huju pierdolony w diipe

			$zdjecie = $path.'/'.$file_name;
				$opis = $_POST['opis'];

				$array = [
					'zdjecie' => $zdjecie,
					'opis' => $opis
				];

				$db->insert([
					'zdjecie' =>mysqli_real_escape_string($db->link, $zdjecie),
					'opis' =>mysqli_real_escape_string($db->link, $opis),
				]);

				return $this->redirect('http://phpszymon.dev/admin/index.php?controller=galeria&action=index');
		}
		public function edit(){
			//widok
			$db = new Database();
			$db->table = 'galeria';
			$nazwa = $db->find($_GET['id']);
			include('galeria/galeria-edit.php');
		}
		public function update(){
			//post
		}
		public function delete($id){
			$db = new Database();
			$db->table = 'galeria';
			$db->delete($id);

			return $this->redirect('http://phpszymon.dev/admin/index.php?controller=galeria&action=index');
		}
	}