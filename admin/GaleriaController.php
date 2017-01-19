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

			$path = 'public/image/Galeria'; // wgrywane plików

			$file_name = $_FILES['zdjecie']['name'];

			move_uploaded_file($_FILES['zdjecie']['tmp_name'],'../'.$path.'/'.$file_name); //funkcja do wgrania pliku

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
			$db = new Database();
			$db->table = 'galeria';
			$nazwa = $db->find($_POST['id']);
			$id = $_POST['id'];
			$check_file = false;
			$opis = $_POST['opis'];
			//post
			if($_FILES['zdjecie']['name'] != '')
			{
				unlink('../'.$nazwa['zdjecie']);
				$path = 'public/image/Galeria'; //wgrywanie plików

				$file_name = $_FILES['zdjecie']['name'];

				move_uploaded_file($_FILES['zdjecie']['tmp_name'],'../'.$path.'/'.$file_name); 
				$zdjecie = $path.'/'.$file_name; //baza

				$check_file= true;
			}
			else
			{
				echo 'nie ma';
			}

			if($check_file)
			{
				$db->zapytanie("UPDATE galeria SET opis='".$opis."' , zdjecie='".$zdjecie."' WHERE id=".$id.";");
			}
			else{
				$db->zapytanie("UPDATE galeria SET opis='".$opis."' WHERE id=".$id.";");
			}
			return $this->redirect('http://phpszymon.dev/admin/index.php?controller=galeria&action=index');

		}
		public function delete($id){
			$db = new Database();
			$db->table = 'galeria';
			$db->delete($id);

			return $this->redirect('http://phpszymon.dev/admin/index.php?controller=galeria&action=index');
		}
	}