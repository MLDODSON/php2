<?php
// Constants
define("TITLE", "If Statements");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lesson_num = 10;

$a = 20;
$b = 50;
$c = 125;
$d = 10;

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
					if($a < $b) {
						echo "Yep! $a is less than $b.";
					} 
				
				?>
				
			</div><!-- end sandbox -->
		
			<div class="sandbox">
				
				
				<?php
					if($c > $d) {
						echo "$c is worth a lot more than $d."; 
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