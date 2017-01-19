<?php
session_start();

	class MainController{
		
		public function addArticle(){
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
					'active' => 0,
					'created_at' => date('Y-m-d H:i:s'),
				]);

				return header('Location: http://phpszymon.dev/');
		}
		
	}