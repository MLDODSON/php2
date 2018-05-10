<?php
// Constants
define("TITLE", "String Operators");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lessonNum = 17;

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
				
				
				<h3>Concatenation Operator <code>.</code></h3>
				<?php
					$a = "Hola ";
					$b = $a . "Mi amigos!";
				
					echo $b;
				?>
				
				<h3>Concatenating Assignment Operator <code>.=</code></h3>
				<?php
					$c = "Amo a ";
					$c .= "mi esposa!";
				
					echo $c;
				?>
				
				<h3>More Concatenation Operators <code>.</code></h3>
				<?php
					$d = "Buenas noches ";
					$e = $d . "mi amor!";
				
					echo $e;
				?>
				
				<h3>More Concatenating Assignment Operator <code>.=</code></h3>
				<?php
					$f = "Mamá ";
					$f .= "quiero cantar!";
				
					echo $f;
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