<!DOCTYPE html>
<html>
	<head>
		<title>PHP Variables</title>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	</head>
	<body>
		<h1> There are 4 basic php variable types: <br>
		
				<br><li>Boolean: True or false.</li>
				<li>Integer: Any whole number.</li>
				<li>Floating Point: A fractional number with a decimal.</li>
				<li>String: Simple text enclosed in quatation marks.</li>
			
		</h1>
		
		<h2>
		<?php
		//This is a string variable.
		    $name = "Dr. Funkenstien";
			
			$age = 1000;
			
			$energy = 5000.5;
			
			$foe = "Sir Nose";
		?>
		
		
		
		<?php print("My name is $name. <br>
		I am over $age years old. <br>
		My bop gun shoots out over $energy watts of p-funk power. <br>
		$foe is my greatest enemy.");
		?>
		</h2>
		
		
		<script src="php.js"></script>
		
	</body>
</html>