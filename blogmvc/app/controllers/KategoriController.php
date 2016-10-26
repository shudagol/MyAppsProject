<?php

	class KategoriController extends Controller{

		public function __construct()
		{
			parent::__construct();
		}

		public function index(){
			session_start();

			if (isset($_SESSION['userdata'])) {

			$this->view('admin/master/top');
			$this->view('admin/master/menu');
			$this->view('admin/kategori');
			$this->view('admin/master/foot');
		}else{
				header('location:index.php');

			} 
		}

		public function tambah(){
			$input = $_POST['kategori'];
			$data = new Kategori;
			$data->id = '';
			$data->nama = $input;
			$data->save();
			header('location:'.$GLOBALS['alamat'].'kategori');
	}

}