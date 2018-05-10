<?php
// Constants
define("TITLE", "Math Operators");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";
$lessonNum = 16;

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
				
				
				<h3>Addition <code>+</code></h3>
				<?php
					$a = 7;
					$b = 19;
				    $c = ($a + $b);
					
					echo "<p>$a + $b is equal  to $c.</p>";
				?>
				
				<h3>Subtraction <code>-</code></h3>
				<?php
					$d = 12;
					$e = 29;
				    $f = ($e - $d);
					
					echo "<p>$e - $d is equal  to $f.</p>";
				?>
				
				<h3>Multiplication <code>*</code></h3>
				<?php
					$g = 5;
					$h = 16;
				    $i = ($g * $h);
					
					echo "<p>$g &times $h is equal  to $i.</p>";
				?>
				
				<h3>Division <code>/</code></h3>
				<?php
					$j = 77;
					$k = 5;
				    $l = ($j / $k);
					
					echo "<p>$j / $k is equal  to $l.</p>";
				?>
				
				<h3>Modulus <code>%</code></h3>
				<?php
					$m = 16;
					$n = 100;
				    $o = ($m % $n);
					
					echo "<p>$m % $n is equal  to $o.</p>";
				?>
				
				<h3>Add and Multiply <code>%</code></h3>
				<?php
					$w = 16;
					$x = 100;
					$y = 10;
				    $z = (($w + $x) * $y);
					
					echo "<p>$w + $x &times $y is equal  to $z.</p>";
				?>
				
				<h3>Subtract and Divide <code>%</code></h3>
				<?php
					$q = 100;
					$r = 5;
					$s = 3;
				    $t = (($q - $r) / $s);
					
					echo "<p>$q - $r / $s is equal  to $t.</p>";
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