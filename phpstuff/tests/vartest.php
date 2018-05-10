<?php
define("TITLE", "Variables");

$myName = "The Mad Earthling of St. Louis";
$testNum = 1;

$name = "Bootsy Collins";
$myGroup = "The Rubber Band";
$ourMusic = "Funk";
$myFriend = "Dr. Funkenstien";
$vehicle = "The Mothership";

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Test 1: PHP Variables <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="var.css">
</head>

<body>
	<div class="wrapper">
			
		<h1>Test <?php echo $testNum ?> <small><?php echo TITLE; ?></small></h1>
	
		<div class="box">
			<?php
			echo"<p>My name is <strong>$name</strong> baby!<br> I am the leader of <strong>$myGroup</strong>.<br> 
			We play that stanky <strong>$ourMusic Music!</strong><br> My good buddy is <strong>$myFriend</strong>!<br> We travel
			through time and space on <strong>$vehicle</strong>.</p>";
		
		
			?>
		</div>
			
			
		</div><!-- end wrapper -->
		

</body>
</html>