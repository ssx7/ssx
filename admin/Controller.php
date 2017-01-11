<?php
	abstract class Controller {
		public function model(){

		}
		public function view(){

		} 
		public function redirect($url){
			header("Location: ".$url);
		}
	}


?>