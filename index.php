<?php
	declare(strict_types = 1);
	require "includes/class-autoload.inc.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Calculator</title>
	</head>
	
	<body>
		<form action="includes/calculator.inc.php" method="POST">
			<p>My First PHP Calculator</p>
			<input placeholder="Enter your First number:" type="number" name="num1">
			<select name="operation">
				<option value="add">Addition</option>
				<option value="subtract">Subtraction</option>
				<option value="multiply">Multiplication</option>
				<option value="divide">Division</option>
			</select>
			<input placeholder="Enter your Second number:" type="number" name="num2">
			<button type="submit" name="submit">Submit</button>
		</form>
		
		<?php
			if(isset($_GET["result"])){
				$result = $_GET["result"];
				echo $result;
			}
		?>
	</body>
	
</html>