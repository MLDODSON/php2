<?php
// Constants
define("TITLE", "PHP While Loops");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lessonNum = 19;

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
				
				
				<?php
				 
				    // Set a variable with your starting number
				    $startingNum = 1;
				     
				    // While $startingNum is less than or equal to 20
				    while ($startingNum <= 25) {
				         
				        // Echo the variable on the screen
				        echo $startingNum . "<br>";
				         
				        // Then increment the value by 1
				        $startingNum++;
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