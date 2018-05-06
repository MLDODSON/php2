<?php
// Constants
define("TITLE", "Multi-Dimensional Arrays");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lesson_num = 7;

// Villian Array
$spidey_foe = array(
	
	array (
		"name" => "The Green Goblin", 
		"danger_factor" => "extremely high", 
		"power_level" => 6,
		"intelligance" => 8
		),
	
	array (
		"name" => "Kraven The Hunter", 
		"danger_factor" => "moderate", 
		"power_level" => 5,
		"intelligance" => 7
		),
	
	array (
		"name" => "Dr. Octopus", 
		"danger_factor" => "high", 
		"power_level" => 4,
		"intelligance" => 9
		)
	);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="styles4.css">
</head>

<body>
	<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="logo.png" alt="PHP">
			</a>
			
		<h1><strong>Tutorial </strong><strong><?php echo $lesson_num ?></strong> <small><?php echo TITLE; ?></small></h1>
			<hr>
			
		    <h2><strong>Final Example</strong></h2>
		    <p>Make sure to view the source code in your editor!</p>
			
			<div class="sandbox">
				<h2><strong><?php echo $spidey_foe[0]["name"]; ?></strong></h2>
				<p class="bad"><span class="titan">The Green Goblin</span> (Norman Osborn) is an insane businessman obsessed with power and world domination. The Goblin has an 
				<strong><?php echo $spidey_foe[0]["danger_factor"] ?></strong> danger level, a
				<strong><?php echo $spidey_foe[0]["power_level"]; ?></strong> power level and an <strong><?php echo $spidey_foe[0]["intelligance"]; ?></strong> level of intelligence. The Goblin is smart, cunning and ruthless!
				</p>
				
				<h2><strong><?php echo $spidey_foe[1]["name"]; ?></strong></h2>
				<p class="bad"><span class="titan">Kraven</span> is a former Russian aristocrat who went on to become the world's greatest big game hunter. He is obsessed with hunting Spiderman. Kraven has a
				<strong><?php echo $spidey_foe[1]["danger_factor"] ?></strong> danger level, a
				<strong><?php echo $spidey_foe[1]["power_level"]; ?></strong> power level and a <strong><?php echo $spidey_foe[1]["intelligance"]; ?></strong> intelligence level. It disturbes Kraven deeply that the only prey that has ever elluded him is the Spider!
				</p>
				
				<h2><strong><?php echo $spidey_foe[2]["name"]; ?></strong></h2>
				<p class="bad"><span class="titan">Dr. Octopus</span> is a brilliant scientest who came to be what he is by an accident that grafted mechanical octopus like arms to his body. Doc Ock has a  
				<strong><?php echo $spidey_foe[2]["danger_factor"] ?></strong> danger level, a
				<strong><?php echo $spidey_foe[2]["power_level"]; ?></strong> power level and a <strong><?php echo $spidey_foe[2]["intelligance"]; ?></strong> genious intelligence level.
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