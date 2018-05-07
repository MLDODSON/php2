<?php
// Constants
define("TITLE", "Else If");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lesson_num = 12;

$native_language = "French";

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="styles6.css">
</head>

<body>
	<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="logo.png" alt="PHP">
			</a>
			
		<h1><strong>Tutorial <?php echo $lesson_num ?></strong> <small><?php echo TITLE; ?></small></h1>
			<hr>
			
		<h2><strong>Final Example</strong></h2>
		    <p>Make sure to view the source code in your editor!</p>
			
			<div class="sandbox">
				
				
				<?php
					if($native_language == "German") {
						echo "Guten Tag mein Freund!";
						
					} else if($native_language == "Spanish") {
						echo "Buenas tardes. Gracias mi amor!";
						
					} else if($native_language == "French") {
						echo "Bon après-midi monsieur!";
						
					} else {
						echo "I guess you only speak English huh?";
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