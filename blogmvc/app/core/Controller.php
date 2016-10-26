<?php 

	class Controller
	{
		
		function __construct()
		{
			
		}

		public function view($file,$data = []){
			// require_once '../app/views/admin/top.php';
			require_once '../app/views/'.$file.'.php';
		}

		public function model($file){
			require_once '../app/core/models/'.$file.'.php';
			return new $file();
		}

	}