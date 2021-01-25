<?php
	declare(strict_types = 1);
	require "class-autoload.inc.php";
	
	$operator = $_POST["operation"];
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
		
	$calculator = new Calculator($operator, (int)$num1, (int)$num2);
	$result = $calculator->calculate();
	
	header("Location: ../index.php?result=".$result."&operation=".$operator);
	exit();
