<?php
	declare(strict_types = 1);
	require "inlcudes/class-autoload.inc.php";
	
	class DatabaseManager extends Dbh {
		public function select(){
			return "select was selected";
		}
			
	}
	