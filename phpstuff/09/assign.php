<?php
// Constants
define("TITLE", "PHP While Loops");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lessonNum = 18;

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
				
				
				<h3>Addition Assignment Operator <code>+=</code></h3>
				<?php
					$a = 40;
					$b = 50;
					$a += $b;
				
					echo "<p>$a</p>";
				?>
				
				<h3>Subtraction Assignment Operator <code>-=</code></h3>
				<?php
					$a = 40;
					$b = 50;
					$b -= $a;
				
					echo "<p>$b</p>";
				?>
				
				<h3>Multiplication Assignment Operator <code>*=</code></h3>
				<?php
					$a = 40;
					$b = 50;
					$a *= $b;
				
					echo "<p>$a</p>";
				?>
				
				<h3>Division Assignment Operator <code>/=</code></h3>
				<?php
					$c = 210;
					$d = 7;
					$c /= $d;
				
					echo "<p>$c</p>";
				?>
				
				<h3>Modulus Assignment Operator <code>%=</code></h3>
				<?php
					$a = 40;
					$b = 50;
					$a %= $b;
				
					echo "<p>$a</p>";
				?>
				
				<h3>Concatenation Assignment Operator <code>.=</code></h3>
				<?php
					$a = "Hola ";
					$b = "mi amigos!";
					$a .= $b;
				
					echo "<p>$a</p>";
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