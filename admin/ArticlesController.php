<?php
	include('Controller.php');

	class ArticlesController extends Controller{

		public function index(){
			$new = new Database();
			$new->table='artykuly';
			include('articles/articles.php');
		}
		public function add(){
			//widok
		}
		public function store(){
			//post
			$db = new Database();
			$db->table = 'artykuly';


			$subject = $_POST['subject'];
				$opis = $_POST['opis'];

				$array = [
					'tytul' => $subject,
					'opis' => $opis
				];

				$db->insert([
					'tytul' =>mysqli_real_escape_string($db->link, $subject),
					'opis' =>mysqli_real_escape_string($db->link, $opis),
					'user_id' => 1,
					'active' => 1,
					'created_at' => date('Y-m-d H:i:s'),
				]);

				echo '123';
		}
		public function edit(){
			//widok
		}
		public function update(){
			//post
		}
		public function delete($id){
			$db = new Database();
			$db->table = 'artykuly';
			$db->delete($id);

			header('Location: ../articles/articles.php');
		}
	}