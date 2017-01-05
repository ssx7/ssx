<?php
	include('Controller.php');

	class CalendarController extends Controller{

		public function index(){
			include('calendar/calendar.php');
		}
		public function add(){
			//widok
			include('calendar/calendar-create.php');
		}
		public function store(){
			//post
		}
		public function edit(){
			//widok
		}
		public function update(){
			//post
		}
		public function delete(){
			
		}
	}