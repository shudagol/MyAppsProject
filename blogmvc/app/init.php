<?php 

require_once '../vendor/autoload.php';

spl_autoload_register(function($class){ //melakukan load secara otomaris
	if ($class == 'Route' || $class == 'Controller' ) {
		require_once 'Core/'.$class.'.php'; //meload file berdasar nama class yang ada di folder core
	} else {
		require_once 'Core/Models/'.$class.'.php'; //meload file berdasar nama class yang ada di folder core
	}
});

require_once 'Database.php';


$GLOBALS['alamat'] = 'http://localhost/blogmvc/public/';