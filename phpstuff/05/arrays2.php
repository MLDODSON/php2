<?php
// Constants
define("TITLE", "Associative Arrays");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lesson_num = 7;

// Villian Array
$bad_ass = array(
	"name" => "Thanos of Titan", 
	"danger_factor" => "extremely high", 
	"power_level" => 10,
	"intelligance" => 10
	);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="styles3.css">
</head>

<body>
	<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="logo.png" alt="PHP">
			</a>
			
		<h1><strong>Tutorial:</strong> <?php echo $lesson_num ?> <small><?php echo TITLE; ?></small></h1>
			<hr>
			
		    <h2><strong>Final Example</strong></h2>
		    <p>Make sure to view the source code in your editor!</p>
			
			<div class="sandbox">
				<h2><strong><?php echo $bad_ass["name"]; ?> is one evil muthusucker!</strong></h2>
				<p class="bad"><span class="titan">Thanos</span> is not someone to mess with! This insane, murderous individual has an  
					<strong><?php echo $bad_ass["danger_factor"] ?></strong> danger level! Making this nut even more dangerous
					is his <strong><?php echo $bad_ass["power_level"]; ?></strong> power level and his <strong><?php echo $bad_ass["intelligance"]; ?></strong> genious level intelligance. This dude
					is just bad news! Someone needs to stop this guy!
				</p>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y"); ?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
</body>
</html>