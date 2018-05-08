<?php
// Constants
define("TITLE", "Logical Operators");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lessonNum = 15;

$username = "madmike";
$password = "milkshake";

$cartTotal = 20.99;
$couponCode = "GiveItUp";

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial <?php echo $lessonNum ?> <?php echo TITLE; ?></title>
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
				
				
				<h3>And <code>and</code></h3>
				<?php
					if($username == "madmike" and $password == "milkshake") {
						echo "<p>Login info is correct!</p>";
					}
				?>
				
				<h3>Or <code>or</code></h3>
				<?php
					if($cartTotal > 15 or $couponCode == "GiveItUp") {
						echo "<p>Congratulations! You get a discount!</p>";
						
					} else {
						echo "<p>Sorry. You don't qualify for a discount.</p>";
					}
				?>
				
				<h3>Not <code>!</code></h3>
				<?php
					$ownDog = true;
					
					if(!$ownDog) {
						echo "<p>I do not own a dog.</p>";
						
					} else {
						echo "<p>I own a dog named Pete.</p>";
					}
				?>
				
				<h3>And <code>&amp;&amp;</code></h3>
				<?php
					$cash = 100;
					$money = 4000;
				
					if($cash < $money && $money >= $cash) {
						echo "<p>We are going on a vacation!</p>";
						
					} else {
						echo "<p>I'm broke. No vacation right now.</p>";
					}
				?>
				
				<h3>Or <code>||</code></h3>
				<?php
					$food = "Burger King";
					$drink = "Vodka";
				
				
					if($food == "Burger King" || $drink == "Rum") {
						echo "<p>We're going to have fun tonight!</p>";
						
					} else {
						echo "<p>No party for you!</p>";
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