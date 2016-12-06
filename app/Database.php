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
			return 'Użytkownik juz istnieje';
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

	public function delete(){

	}

	public function charset($table){
		$sql = "ALTER TABLE ".$table." charset = 'utf8';";
		mysqli_query($this->link, $sql);
	}

	public function setTable($table){
		$this->table = $table;
		return $this->table;
	}

}


?>