<?php
// Constants
define("TITLE", "Custom Functions");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lessonNum = 24;

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
				
				
				<h3>One Argument</h3>
				<?php
					function hangTen($location) {
	
						echo "We're surfing in $location!<br>";
						
					}
					
					hangTen("Hawaii");
					hangTen("California");
					hangTen("Newfoundland");
				?>
				
				<h3>Two Arguments</h3>
				<?php
					function multiplyTogether($val1, $val2) {
						
						$product = $val1 * $val2;
						echo "The product of the two numbers is: $product";
						
					}
					
					multiplyTogether(14, 27);
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