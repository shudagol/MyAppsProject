<?php
	class AdminController extends Controller{

		public function __construct()
		{
			parent::__construct();
			session_start();
			
		}

		public function index(){
			return $this->view('admin/login');
			// $users = Artikel::all();
			// return $this->view('index',['artikels' => $users]);
		}

		public function login(){
			session_start();
			$username = @$_POST['username'];
			$password = md5(@$_POST['password']);

			$users = Admin::where('username',$username)->first();
			
			if ($users) {
				
				if ($password == $users->password) {
					
					$_SESSION['userdata'] = $users;
					header('location:dashboard');
				}
			}else{
				header('location:index.php');
			}
		}

		public function logout(){
			return $this->view('admin/logout');
		}

		public function dashboard(){
			

			if (isset($_SESSION['userdata'])) {	
				$this->view('admin/master/top');
				$this->view('admin/master/menu');
				$this->view('admin/dashboard');
				$this->view('admin/master/foot');
			}else{
					header('location:index.php');

			} 
		

		}


					






}