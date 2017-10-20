<?php

ini_set('display_errors', '0');         # don't show any errors...
error_reporting(E_ALL | E_STRICT);      # ...but do log them

?>


<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.themesurf.com/consulting/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Oct 2017 20:40:03 GMT -->
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="image/favicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/vendor.bundle.css">
	<link id="style-css" rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body class="site-body style-v1">
	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
		<!-- Topbar -->
		<div class="topbar bg-light">
			<div class="container">
				<div class="row">
					<div class="top-aside top-left clearfix">
						<ul class="top-contact clearfix">
							<li class="t-email t-email1">
								<em class="fa fa-envelope-o" aria-hidden="true"></em>
								<span><a href="#">care@consulting.com</a></span>
							</li>
							<li class="t-phone t-phone1">
								<em class="fa fa-phone" aria-hidden="true"></em>
								<span>+123-456-789</span>
							</li>
						</ul>
					</div>
					<div class="top-aside top-right clearfix">
						<ul class="social clearfix">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
							<li><a href="#" class="fa fa-linkedin"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- #end Topbar -->
		<!-- Navbar -->
		<div class="navbar navbar-primary">
			<div class="container">
				<!-- Logo -->
				<a class="navbar-brand" href="index.php">
					<img class="logo logo-dark" alt="" src="image/logo.png" srcset="image/logo2x.png 2x">
					<img class="logo logo-light" alt="" src="image/logo_white.png" srcset="image/logo_white2x.png 2x">
				</a>
				<!-- #end Logo -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Q-Button for Mobile -->
					<div class="quote-btn"><a class="btn" href="get-a-quote.html">Free Consultant</a></div>
				</div>
				<!-- MainNav -->
				<nav class="navbar-collapse collapse" id="mainnav">
					<ul class="nav navbar-nav">
						<li class="<?php if ($navigation == "home") { echo "active"; } ?>"><a href="index.php" class="dropdown-toggle">Home</a>
							
						</li>
						<li class="<?php if ($navigation == "about") { echo "active"; } ?>"><a href="about.php">About</a></li>
						<li>
						<li class="<?php if ($navigation == "service") { echo "current"; } ?>"><a href="services.php">Services</a></li>

						
						<li class="<?php if ($navigation == "contact") { echo "current"; } ?>"><a href="contact.php">Contact</a></li>
						<li class="quote-btn"><a class="btn" href="get-a-quote.php">Free Consultant</a></li>
					</ul>
				</nav>
				<!-- #end MainNav -->
			</div>
		</div>
		<!-- #end Navbar -->
		