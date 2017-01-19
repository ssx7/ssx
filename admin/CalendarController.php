<?php
	include('Controller.php');

	class CalendarController extends Controller{

		public function index(){
			$new = new Database();
			$new->table='kalendarz';

			
			include('calendar/calendar.php');
		}
		public function add(){
			$new = new Database();
			$new->table='druzyny';
			//widok
			include('calendar/calendar-create.php');
		}
		public function store(){
			//post
			$db = new Database();
			$db->table = 'kalendarz';


			$gospodarze = $_POST['gospodarze'];
			$goscie = $_POST['goscie'];
			$wynik = $_POST['wynik'];
			$dat = $_POST['dat'];
			$lid = $_POST['lid'];
			$opis = $_POST['opis'];

				$array = [
					'gospodarze' => $gospodarze,
					'goscie' => $goscie,
					'wynik' => $wynik,
					'dat' => $dat,
					'lid' => $lid,
					'opis' => $opis
				];

				$db->insert([
					'gospodarze' =>mysqli_real_escape_string($db->link, $gospodarze),
					'goscie' =>mysqli_real_escape_string($db->link, $goscie),
					'wynik' =>mysqli_real_escape_string($db->link, $wynik),
					'dat' =>mysqli_real_escape_string($db->link, $dat),
					'lid' =>mysqli_real_escape_string($db->link, $lid),
					'opis' =>mysqli_real_escape_string($db->link, $opis),
				]);

				return $this->redirect('http://phpszymon.dev/admin/index.php?controller=calendar&action=index');
		}
		public function edit(){
			//widok
			$db = new Database();
			$db->table = 'kalendarz';
			$nazwa = $db->find($_GET['id']);

			$new = new Database();
			$new->table='druzyny';

			include('calendar/calendar-edit.php');
		}
		public function update(){
			//post
			$db = new Database();
			$gospodarze = $_POST['gospodarze'];
			$goscie = $_POST['goscie'];
			$wynik = $_POST['wynik'];
			$dat = $_POST['dat'];
			$lid = $_POST['lid'];
			$opis = $_POST['opis'];
			$id = $_POST['id'];
				
			$db->zapytanie("UPDATE kalendarz SET gospodarze='".$gospodarze."' , goscie='".$goscie."' , wynik='".$wynik."' , dat='".$dat."' , lid='".$lid."' , opis='".$opis."' WHERE id=".$id.";");

				return $this->redirect('http://phpszymon.dev/admin/index.php?controller=calendar&action=index');
		}
		public function delete($id){
			$db = new Database();
			$db->table = 'kalendarz';
			$db->delete($id);

			return $this->redirect('http://phpszymon.dev/admin/index.php?controller=calendar&action=index');
		}
	}