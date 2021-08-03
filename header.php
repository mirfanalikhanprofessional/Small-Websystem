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
    <!-- Header start -->
		<header class="header">
			<div class="pc-header">
				<div class="pc-header-logo">
					<a href="index.php"><img src="assets/Img/logo.png" alt="logo-image"></a> 
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
						<li class="tablet-header-nav-item"><a href="index.php">Register</a></li>
					</ul>
				</nav>
				<div class="tablet-header-logo">
					<a href="index.php"><img src="assets/Img/tablet-logo.png" alt="logo-image"></a> 
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
						<li class="mobile-header-nav-item"><a href="index.php">Register</a></li>
					</ul>
				</nav>
				<div class="mobile-header-logo">
					<a href="index.php"><img src="assets/Img/tablet-logo.png" alt="logo-image"></a> 
				</div>	
			</div>
		</header>
        <!-- Header end -->