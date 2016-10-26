<?php 

	Class Route{

		protected $controller = 'homeController';
		protected $method     = 'index';
		protected $param      =  [];


		public function __construct(){
			if(isset($_GET['url'])){ //jika url sudah di ada ( url didapat dari htacces)
				$url = explode('/',filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));  //trim utk jika ada spasi kosong, filter hanya karakter url,url yang ditlis di browser dipecah disimpan jadi array
				$url[0] = $url[0].'Controller';
			}else{
				$url[0] = 'homeController';
			}
			

			//cek apakah controller ada atau tidak
			if( file_exists('../app/controllers/'.$url[0].'.php')){
				$this->controller = $url[0];
			}else{
				return require_once '../app/views/error/404.php';
			}

			require_once '../app/controllers/'.$this->controller.'.php';
				$this->controller = new $this->controller;

			//cek apakah method ada atau tidak	
				

			if (isset($url[1])) {
				
				if(method_exists($this->controller, $url[1])){
					$this->method = $url[1];
				}else if ($url[1] != ''){
					return require_once '../app/views/error/404.php';
				}
			}

			unset($url[0]);
			unset($url[1]);
			$this->params = $url;

			call_user_func_array([$this->controller, $this->method], $this->params);

		}
	}