<?php 

session_start();
session_destroy();
header('location:'.$GLOBALS['alamat'].'admin/index');


 ?>