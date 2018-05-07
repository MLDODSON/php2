<?php
// Constants
define("TITLE", "Arrays");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";

// Arrays
$age_group = array("child", "teenager", "adult");
	
$handlebar = array(
				name => "Handlebar",
				color => "black"
			 );

$fu_manchu = array(
				name => "Fu Manchu",
				color => "brown"
			 );

$salvador_dali = array(
				name => "Salvador Dali",
				color => "blonde"
			 );

$gentlemen = array(
	
				array(
					first_name => "Tony",
					country => "United States"
				),
				array(
					first_name => "Julio",
					country => "The Dominican Republic"
				),
				array(
					first_name => "Sal",
					country => "Italy"
				)

			 );

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Get Your Hands Dirty <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="styles5.css">
	<link rel="stylesheet" type="text/css" href="shCoreDefault.css">
</head>

<body>
	<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="logo.png" alt="PHP">
			</a>
			
		<h1><strong>Get Your Hands Dirty</strong> <small><?php echo TITLE; ?></small></h1>
			<hr>
			
		    <h2><strong>Final Example</strong></h2>
		    <p>Make sure to view the source code in your editor!</p>
			
			<div class="sandbox">
				
				<h3><strong><?php echo $gentlemen[0][first_name]; ?> from the <?php echo $gentlemen[0][country]; ?></strong></h3>
				<p><strong><?php echo $gentlemen[0][first_name]; ?></strong> is quite the <strong><?php echo $age_group[2]; ?></strong>! 
					He sports a <strong><?php echo $handlebar[color] ?></strong> <strong><?php echo $handlebar[name]; ?> Moustache.</strong></p>
				
				<h3><strong><?php echo $gentlemen[1][first_name]; ?> from the <?php echo $gentlemen[1][country]; ?></strong></h3>
				<p><strong><?php echo $gentlemen[1][first_name]; ?></strong> is one dapper <strong><?php echo $age_group[1]; ?></strong>! 
					He proudly wears his <strong><?php echo $fu_manchu[color] ?></strong> <strong><?php echo $fu_manchu[name]; ?> Moustache.</strong></p>
				
				<h3><strong><?php echo $gentlemen[2][first_name]; ?> from the <?php echo $gentlemen[2][country]; ?></strong></h3>
				<p><strong><?php echo $gentlemen[2][first_name]; ?></strong> is a <strong><?php echo $age_group[0]; ?></strong>. He's  a bit too young for a moustache. No matter. He proudly shows off his <strong><?php echo $salvador_dali[color] ?></strong> <strong><?php echo $salvador_dali[name]; ?></strong> at school. The girls love it!</p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<hr>
			
			<small>&copy;<?php echo date("Y"); ?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	
	<script src="shCore.js"></script>
	<script src="shBrushPhp.js"></script>
</body>
</html>