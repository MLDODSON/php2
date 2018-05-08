<?php
// Constants
define("TITLE", "Comparison Operators");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lessonNum = 14;

$yearsOnEarth = 50.28;
$favStringNum = "2";
$birthCountry = "United States";

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial<?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="styles7.css">
</head>

<body>
	<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="logo.png" alt="PHP">
			</a>
			
		<h1><strong>Tutorial <?php echo $lessonNum ?></strong> <small><?php echo TITLE; ?></small></h1>
			<hr>
			
		<h2><strong>Final Example</strong></h2>
		    <p>Make sure to view the source code in your editor!</p>
			
			<div class="sandbox">
				
				
				<h3>Equal <code>==</code></h3>
				<?php
					if($yearsOnEarth == 50.28) {
						echo "<p>Your age is equal to $yearsOnEarth.</p>";
					}
				?>
				
				<h3>Identical <code>===</code></h3>
				<?php
					if($favStringNum === 2) {
						echo "<p>Your favorite number is an integer.</p>";
						
					} elseif($favStringNum === "2") {
						echo "<p>Your favorite number is a string called 2!</p>";
						
					} else {
						echo "<p>I do not have a favorite integer or string.</p>";
					}
				?>
				
				<h3>Not Equal <code>!=</code></h3>
				<?php
					if($birthCountry != "Mexico") {
						echo "<p>Excuse me, se&ntilde;or. You must not be from around here.</p>";
					}
				?>
				
				<h3>Not Identical <code>!==</code></h3>
				<?php
					if($yearsOnEarth !== "50.28") {
						echo "<p>You are not exactly the string '$yearsOnEarth'.</p>";
						
					} else {
						echo "<p>You are exactly the string '$yearsOnEarth'!</p>";
					}
				?>
				
				<h3>Less Than <code>&lt;</code></h3>
				<?php
					if($lessonNum < 15) {
						echo "<p>You haven't quite made it to lesson 15, yet.</p>";
					}
				?>
				
				<h3>Greater Than <code>&gt;</code></h3>
				<?php
					if($lessonNum > 12) {
						echo "<p>You've made it past lesson 12!</p>";
					}
				?>
				
				<h3>Less Than or Equal To <code>&lt;=</code></h3>
				<?php
					if($lessonNum <= 14) {
						echo "<p>$lessonNum is less than or equal to 14.</p>";
					}
				?>
				
				<h3>Greater Than or Equal To <code>&gt;=</code></h3>
				<?php
					if($lessonNum >= 4) {
						echo "<p>$lessonNum is greater than or equal to 4.</p>";
					}
				?>
				
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