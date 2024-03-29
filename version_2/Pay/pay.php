<?php
	include("../config.php");
	session_start();

	
?>


<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title> Confirm your Booking </title>
</head>
<body>
<header>
	<h1>Amount needed to pay : <?php echo $price ?></h1>
</header>

<a href="#0" class="cd-popup-trigger">Book</a>

<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
		<p> Confirm Booking ?</p>
		<ul class="cd-buttons">
			<li><a href="#0">Yes</a></li>
			<li><a href="#0">No</a></li>
		</ul>
		<a href="#0" class="cd-popup-close img-replace">Close</a>
	</div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->

<a href="../booking.html" class="cd-popup-cancel"> Cancel Booking </a>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
