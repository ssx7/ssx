<?php
class Database {
	public $host = 'localhost';
	public $user = 'root';
	public $pass = '';
	public $db = 'szymon';
	public $link;
	public $table;

	public function __construct(){
		$this->link = new mysqli($this->host, $this->user, $this->pass, $this->db) or die('brak polaczenia');
		$this->link->set_charset('utf8');
	}

	public function __destruct(){
		mysqli_close($this->link);
	}
	/*
	public function createTable($table, $rows=null){
		$sql = 'CREATE TABLE MyGuests (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				firstname VARCHAR(30) NOT NULL,
				lastname VARCHAR(30) NOT NULL,
				email VARCHAR(50)
				)';
		$this->charset($table);
		mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		
	}
	*/
	public function checkPass($array, $table){
		$select = "SELECT * FROM ".$table." WHERE name='".$array['login']."'  ";

		$tablica = mysqli_query($this->link, $select)or die(mysqli_error($this->link));

		$wyniki = [];
		while($row = mysqli_fetch_array($tablica))
		{
			$wyniki[] = $row;
		}

		foreach($wyniki as $wynik)
		{
			if(password_verify($array['password'], $wynik['password']))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		
	}

	public function checkUser($array, $table){
		$select = "SELECT COUNT(*) FROM ".$table." WHERE name='".$array['login']."'  ";

		$tablica = mysqli_query($this->link, $select)or die(mysqli_error($this->link));

		if((int)$tablica->fetch_row()[0] == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function checkEmail($array, $table){
		$select = "SELECT COUNT(*) FROM ".$table." WHERE email='".$array['email']."'  ";

		$tablica = mysqli_query($this->link, $select)or die(mysqli_error($this->link));

		if((int)$tablica->fetch_row()[0] == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}



	/*
	* Add record 
	* Dodawanie rekordu, $rows przyjmuje tylko array
	*/
	public function insert($rows){
		$sql = "INSERT INTO ".$this->table."(";
		
		$klucze = array_keys($rows);
		$data = '';
		foreach($klucze as $key=>$klucz)
		{
			$sql .= "`".$klucze[$key]."`";
			if($key != count($klucze)-1) // 0 != 1
			{
				$sql .= ',';
			}
			else{
				$sql .= ")VALUES(";
				for($i=0; $i<count($rows); $i++)
				{
					$sql .= "'".$rows[$klucze[$i]]."'";
					if($i != count($rows)-1)
					{
						$sql .=',';
					}
				}
			}
		}
		
	 	$sql .= ");";
	 	
		mysqli_query($this->link, $sql)or die(mysqli_error($this->link));
	}

	public function update($table){
		$sql = 'UPDATE '.$table.' SET firstname="Michał" WHERE id=1;';
		mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
	}

	public function delete($id){
		$zapytanie = "DELETE FROM ".$this->table." WHERE id=".$id.";";
		mysqli_query($this->link, $zapytanie)or die(mysqli_error($this->link));
	}
 	/*
 	* Wyswietlenie rekordow w adminie zeby nie pierdolilo sie wszedzie bo nie ma czasu na debugowanie
 	*/
	public function get(){
		$zapytanie = "SELECT * FROM ".$this->table. ";";
		$tablica = mysqli_query($this->link, $zapytanie)or die(mysqli_error($this->link));

		$wyniki = [];
		while($row = mysqli_fetch_array($tablica))
		{
			$wyniki[] = $row;
		}
		return $wyniki;
	}
	/*
 	* Wyswielnie konkrentego id
 	*/
	public function find($id){
		$zapytanie = "SELECT * FROM ".$this->table. " WHERE id=".$id." ;";
		$tablica = mysqli_query($this->link, $zapytanie)or die(mysqli_error($this->link));

		$row = mysqli_fetch_array($tablica);
		return $row;
	}

	public function charset($table){
		$sql = "ALTER TABLE ".$table." charset = 'utf8';";
		mysqli_query($this->link, $sql);
	}

	public function setTable($table){
		$this->table = $table;
		return $this->table;
	}

	/*
 	* Wyswietlenie rekordow w glownym
 	* zmienna $table -> to jest tabela z bazy danych 
 	*/
	public function getMain($table){
		if($table == 'artykuly')
		{
			$zapytanie = "SELECT * FROM ".$table. " WHERE active=1 ;";
		}
		else
		{
			$zapytanie = "SELECT * FROM ".$table. ";";
		}
		$tablica = mysqli_query($this->link, $zapytanie)or die(mysqli_error($this->link));

		$wyniki = [];
		while($row = mysqli_fetch_array($tablica))
		{
			$wyniki[] = $row;
		}
		return $wyniki;
	}

	/*
	* uniwersalne zapytanie do dodawania i aktualizowania
	*/
	public function zapytanie($zap){
		mysqli_query($this->link, $zap)or die(mysqli_error($this->link));
		return true;
	}

}


?>