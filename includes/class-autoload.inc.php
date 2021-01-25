<?php
	spl_autoload_register("myAutoLoader");
	
	function myAutoLoader($className){
		$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$path = "classes/";
		
		if(strpos($url, "includes")){
			$path = "../classes/";
		}
		
		$extention = ".class.php";
		
		require_once $path.$className.$extention;
	}
