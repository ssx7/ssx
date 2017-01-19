<?php
	include('Controller.php');

	class DruzynyController extends Controller{

		public function index(){
			$new = new Database();
			$new->table='druzyny';
			include('druzyny/druzyny.php');
		}
	}