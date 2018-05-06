<?php
// Constants
define("TITLE", "Arrays");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lesson_num = 6;

// Sports Array
$sports = array("Football", "Basketball", "Baseball", "Hockey", "Soccer", "Tennis", "Golf");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="styles2.css">
</head>

<body>
	<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num ?> <small><?php echo TITLE; ?></small></h1>
			<hr>
			
		<h2><strong>Final Example</strong></h2>
		    <p>Make sure to view the source code in your editor!</p>
			
			<div class="sandbox">
				<h2><strong>Types of professional sports in the USA</strong></h2>
				<ul>
					<li><strong><?php echo $sports[0]; ?></strong></li>
					<li><strong><?php echo $sports[1]; ?></strong></li>
					<li><strong><?php echo $sports[2]; ?></strong></li>
					<li><strong><?php echo $sports[3]; ?></strong></li>
					<li><strong><?php echo $sports[4]; ?></strong></li>
					<li><strong><?php echo $sports[5]; ?></strong></li>
					<li><strong><?php echo $sports[6]; ?></strong></li>
				</ul>
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