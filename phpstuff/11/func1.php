<?php
// Constants
define("TITLE", "Intro to Functions");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lessonNum = 23;

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial <?php echo $lessonNum ?> <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="styles8.css">
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
				
				
				<h3><strong>Using</strong> <code>sort()</code></h3>
				
				<?php
					// sort places things in alphabetical order
					
					$teams = array("Rams", "Blues", "Cardinals", "Sixers");
					sort($teams);
				
					foreach($teams as $fan) {
						echo "<p>$fan <br></p>";
					}
					
				?>
				
				<h3><strong>Using</strong> <code>rsort()</code></h3>
				<?php
					
					// rsort places things in reverse order
				
					$fruit = array("Grapes", "Bananas", "Oranges", "Blueberries");
					rsort($fruit);
				
					foreach($fruit as $food) {
						echo "<p>$food <br></p>";
					}
					
				?>
				
				<h3><strong>Using</strong> <code>strtolower()</code></h3>
				<?php
					
					$text = "Make My Funk The P-Funk!";
					
					echo strtolower($text);
					
				?>
				
				<h3><strong>Using</strong> <code>sha1()</code></h3>
				<?php
					
					$password = "BabyCakes38!";
					echo "Before: $password <br>";
					
					$password = sha1($password);
					echo "After: $password";
					
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