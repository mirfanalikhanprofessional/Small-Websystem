<?php 
	require('assets/config/config.php');
	if (empty($_COOKIE['email'])){
		header("Location: login.php");
	}
	if ($_COOKIE['email'] && !empty($_COOKIE['email'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>The Small Web System</title>
	<link rel="stylesheet" type="text/css" href="assets/CSS/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="body">
	<!-- main wrapper -->
	<div class="main-wrapper">
		<header class="header">
			<div class="pc-header">
				<div class="pc-header-logo">
					<img src="assets/Img/logo.png" alt="logo-image"> 
				</div>
				<nav class="pc-nav">
					<ul class="pc-nav-item-block">
						<li class="pc-nav-item"><a href="index.php">Home</a></li>
						<li class="pc-nav-item"><a href="index.php">Contact</a></li>
						<li class="pc-nav-item"><a href="index.php">About</a></li>
					</ul>
				</nav>
				<div class="pc-header-button-group">
					<a class="pc-header-button" href="login.php">Login</a>
					<a class="pc-header-button" href="index.php">Register</a>
					<a class="pc-header-button" href="assets/php/logout.php">Logout</a>

				</div>
			</div>
			<div class="tablet-header">
				<nav class="tablet-header-nav">
					<p class="menu button" onclick="toogle()">Menu</p>
					<ul class="tablet-header-nav-block">
						<li class="tablet-header-nav-item"><a href="index.php">Home</a></li>
						<li class="tablet-header-nav-item"><a href="index.php">Contact</a></li>
						<li class="tablet-header-nav-item"><a href="index.php">About</a></li>
						<li class="tablet-header-nav-item"><a href="login.php">Login</a></li>
						<li class="tablet-header-nav-item"><a href="assets/php/logout.php">Logout</a></li>
						<li class="tablet-header-nav-item"><a href="index.php">Register</a></li>
					</ul>
				</nav>
				<div class="tablet-header-logo">
					<img src="assets/Img/tablet-logo.png" alt="logo-image"> 
				</div>	
			</div>
			<div class="mobile-header">
				<nav class="mobile-header-nav">
					<p class="menu button" onclick="mobile_toogle()">Menu</p>
					<ul class="mobile-header-nav-block">
						<li class="mobile-header-nav-item"><a href="index.php">Home</a></li>
						<li class="mobile-header-nav-item"><a href="index.php">Contact</a></li>
						<li class="mobile-header-nav-item"><a href="index.php">About</a></li>
						<li class="mobile-header-nav-item"><a href="login.php">Login</a></li>
						<li class="mobile-header-nav-item"><a href="assets/php/logout.php">Logout</a></li>
						<li class="mobile-header-nav-item"><a href="index.php">Register</a></li>
					</ul>
				</nav>
				<div class="mobile-header-logo">
					<img src="assets/Img/tablet-logo.png" alt="logo-image"> 
				</div>	
			</div>
		</header>
		<div class="iframe-container">
			<h3 style="font-family: 'Raleway', sans-serif; color: white">Welcome <?php echo $_COOKIE['name']; ?> to the Small Websystem</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14472.30128681403!2d67.07486592038319!3d24.92950384958826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srestaurants!5e0!3m2!1sen!2s!4v1627929428237!5m2!1sen!2s" loading="lazy"></iframe>
		</div>




<?php
	}
	require('footer.php');
?>