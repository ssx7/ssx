<?php
	abstract class Controller {
		public function model(){

		}
		public function view(){

		}
		public function reddirect($url){
			header("Location: ".$url);
		}
	}


?>