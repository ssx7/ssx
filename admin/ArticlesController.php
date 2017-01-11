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

				return $this->redirect('http://phpszymon.dev/admin/index.php?controller=articles&action=index');
		}
		public function edit(){
			//widok
			$db = new Database();
			$db->table = 'artykuly';
			$nazwa = $db->find($_GET['id']);
			include('articles/articles-edit.php');
		}
		public function update(){
			//post
		}
		public function active($id, $active){
			$db = new Database();
			$db->zapytanie("UPDATE artykuly SET active=".$active." WHERE id=".$id.";");

			return $this->redirect('http://phpszymon.dev/admin/index.php?controller=articles&action=index');
		}
		public function delete($id){
			$db = new Database();
			$db->table = 'artykuly';
			$db->delete($id);

			return $this->redirect('http://phpszymon.dev/admin/index.php?controller=articles&action=index');
		}
	}