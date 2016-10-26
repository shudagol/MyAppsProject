<?php
	class HomeController extends Controller{

		public function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$users = Artikel::all();
			return $this->view('index',['artikels' => $users]);
		}
			

		public function test($nama="", $nama2=""){
			echo $nama." ".$nama2;
		}

		public function getuser(){
			// $users = User::find(1);
			$users = User::where('nama','huda')->first();


			// die(var_dump($users));
			return $this->view('home', ['users' => $users]);
		}

		

		
	}