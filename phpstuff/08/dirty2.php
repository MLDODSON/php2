<?php
// Constants
define("TITLE", "If, Else, Else If");

// Custom Variables
$my_name = "The Mad Earthling of St. Louis";

$species = "Martian";
$nativeLanguage = "English";
$yearsOnEarth = 50;

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Dirty Hands <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="styles6.css">
</head>

<body>
	<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="logo.png" alt="PHP">
			</a>
			
		<h1><strong>Get Your Hands Dirty Again</strong> <small><?php echo TITLE; ?></small></h1>
			<hr>
			
		<h2><strong>Final Example</strong></h2>
		    <p>Make sure to view the source code in your editor!</p>
			
			<div class="sandbox">
				
				
				<?php
					if($species == "Chiss") {
						echo "Welcome to Coruscant Grand Admiral Thrawn. The Emperor is waiting.";
						
					} else if($species == "Human") {
						echo "Welcome Human. I am Zancar from the planet Neptune. I come in peace!";
						
					} else if($species == "Krptonian") {
						echo "Greetings! My name is Kal-El, the last son of Krypton.";
						
					} else {
						echo "My name is Darryl Dawkins from the planet Luvtron. My friends call me Chocolate Thunder.";
					}
				
				?>
				
				<h5><strong>Another example:</strong></h5>
				
				<?php
				
					if ($yearsOnEarth == 40) {
						
						echo "<p>Congratulations for being on Earth for 50 years!</p>";
						
					} elseif ($yearsOnEarth > 40) {
						
						echo "<p>You're over 40? Damn you're getting old!</p>";
						
					} else {
						
						echo "<p>You've got a long way to go before you hit the big 50!</p>";
						
					}
				
				?>
				
				<h5><strong>A combination:</strong></h5>
				
				<?php
				
					if ($nativeLanguage == "German") {
						
						echo "<p>Willkommen</p>";
						
					} elseif ($species == "Marian") {
						
						echo "<p>Oh wow! You are a real life Martian!</p>";
						
					} else {
						
						echo "<p>You don't speak German, nor are you a Martian. That sucks!</p>";
						
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