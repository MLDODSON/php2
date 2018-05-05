<?php
//Define a Constant
define("TITLE", "Variables and Constants");

//Variables
$my_name = "Mad Mike";
$fav_sport = "Football";
$fav_fruit = "Grapes";
$birth_year = 1968;

/*
When using the date() method, PHP has to know the timezone where the server resides,
in order to output the correct hour and date for that geographical location.
The date_default_timezone_set() method takes a string that locates the server.
The list of supported timezones can be found at http://php.net/manual/en/timezones.php
*/

date_default_timezone_set("America/Chicago");

$today = date("F j, Y");
$this_year = date("Y");

/*
Use PHP to calculate the difference
between your birth year and this year
to show your age dynamically
*/

$my_age = ($this_year - $birth_year);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Get Your Hands Dirty: <?php echo TITLE; ?></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h3>Today's Date:</h3>
				<p><?php echo $today ?></p>
				
				<h3>My Name:</h3>
				<p><?php echo $my_name ?></p>
				
				<h3>My Favorite Sport:</h3>
				<p><?php echo $fav_sport ?></p>
				
				<h3>My Favorite Fruit:</h3>
				<p><?php echo $fav_fruit ?></p>
				
				<h3>My Age:</h3>
				<p><?php echo $my_age ?></p>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<hr>
			
			<small>&copy;<?php echo $this_year ?> - <?php echo $my_name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
</body>
</html>