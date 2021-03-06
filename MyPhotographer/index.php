<?php  
	require 'MyPhotographer_PHP/DBconnection.php'; 
	
	$status = session_status();
	$id = isset($_GET['username']) ? $_GET['username'] : 0;

	if($status == PHP_SESSION_NONE)
	    //There is no active session
	    session_start();

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MyPhotographer &mdash; </title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<!-- <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" /> -->
	<!-- <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" /> -->
	<!-- <meta name="author" content="FREEHTML5.CO" /> -->

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<?php
				if(isset($_SESSION['id'])){
					echo '
						<div class="js-fullheight fh5co-table">
							<div class="fh5co-table-cell js-fullheight">
								<ul>
									<li><a href="index.php">Home</a></li>
									<!--<li><a href="portfolio.php">Portfolio</a></li>-->
									<!-- <li><a href="services.html">Services</a></li> -->
									<li><a href="team.php">Team</a></li>
									<li><a href="signup.php">Sign in / Sign up</a></li>
									<li><a href="login.php">Log in</a></li>
								</ul>
							</div>
						</div>
					';
				} else {

					echo '
						<div class="js-fullheight fh5co-table">
							<div class="fh5co-table-cell js-fullheight">
								<ul>
									<li><a href="index.php">Home</a></li>
									<!--<li><a href="portofolio.php">Portfolio</a></li>-->
									<!-- <li><a href="services.html">Services</a></li> -->
									<li><a href="team.php">Team</a></li>
									 
								</ul>
							</div>
						</div>
					';
				}

		?>
		
	</nav>
	
	
	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<a class="fh5co-logo" href="index.php"> <i class="icon-camera"></i> <b> MyPhotographer </b></a>
				</div>
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a> <br> <br>
				<!--<a style="color: black;"> Autentificat ca: 
					<?php 
						//if(isset($_SESSION['id']))
						//	echo "{$_SESSION['username']}"; 
						//else
						//	echo 'eroare'; 
					?>
				</a> -->
			</div>
			
		</header>
		<div id="fh5co-intro-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 animate-box">
						<h2 class="intro-heading">We Capture The Moments That Matter For You.</h2>
						<p><span>Created with <i class="icon-heart3"></i> by Ralu.</a></span></p>
					</div>
				</div>
				
			</div>
		</div>
		<div id="fh5co-portfolio-section">
			<div class="container">
				<ul id="filters" class="clearfix animate-box">
					<li><span class="filter active" data-filter=".all">All</span></li>
					<!-- <li><span class="filter" data-filter=".app">App</span></li> -->
					<!--<li><span class="filter" data-filter=".gallery">Gallery</span></li>-->
					<!-- <li><span class="filter" data-filter=".contact">Contact</span></li> -->
					<!--<li><span class="filter" data-filter=".discover">Discover</span></li>-->
					<!-- <li><span class="filter" data-filter=".web">Web</span></li> -->
				</ul>

				<div id="portfoliolist" class="animate-box">
					
					<div class="portfolio all gallery" data-cat="gallery">
						<div class="portfolio-wrapper">				
							<a> 
								<?php 
									$query = "SELECT * FROM photos WHERE cale = 'images/portrait1.jpg' ";
									$res = mysqli_query($db,$query);
									$row = mysqli_fetch_assoc($res);
								?> 
								<img src="<?php echo $row['cale']; ?>" alt="" />
							</a>
							<div class="label">
								<div class="label-text">
								<!-- Sa fac o sesiune de signed in si daca e signed in sa ma directioneze spre portofolio.php, altfel sa ma directioneze spre signup.php-->
									<a href="portraits.php" class="text-title">Portraits</a>
										<!--<?php
											//if(!isset($_SESSION['username']))
											//{
											//	echo '<a href="signup.php" class="text-title">Portraits</a>';
											//} else {
											//	echo '<a href="portraits.php" class="text-title">Portraits</a>';
											//}
										?>-->
										
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>				

					<div class="portfolio all gallery " data-cat="gallery">
						<div class="portfolio-wrapper">	
							<a href="portraits.php"> 		
								<?php 
									$query = "SELECT * FROM photos WHERE cale = 'images/wedding1.jpg' ";
									$res = mysqli_query($db,$query);
									$row = mysqli_fetch_assoc($res);
								?> 
								<img src="<?php echo $row['cale']; ?>" alt="" />
							</a>
							<div class="label">
								<div class="label-text">
									<a href = "wedd.php" class="text-title">Wedding & Engagements</a>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>		
					
					<div class="portfolio all gallery" data-cat="gallery">
						<div class="portfolio-wrapper">
							<a href="portraits.php">
								<?php 
									$query = "SELECT * FROM photos WHERE cale = 'images/newborn1.jpg' ";
									$res = mysqli_query($db,$query);
									$row = mysqli_fetch_assoc($res);
								?> 
								<img src="<?php echo $row['cale']; ?>" alt="" />
							</a>
							<div class="label">
								<div class="label-text">
									<a href="newborn.php" class="text-title">New Born</a>
								<!--<span class="text-category">Expand</span> -->
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>				
					
					<div class="portfolio all gallery" data-cat="gallery">
						<div class="portfolio-wrapper">			
							<a href="portraits.php">
								<?php 
									$query = "SELECT * FROM photos WHERE cale = 'images/nature2.jpg' ";
									$res = mysqli_query($db,$query);
									$row = mysqli_fetch_assoc($res);
								?> 
								<img src="<?php echo $row['cale']; ?>" alt="" />
							</a>
							<div class="label">
								<div class="label-text">
									<a href="nature.php" class="text-title"> <b> Nature </b></a>
								<!--<span class="text-category">Expand </span> -->
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>	
								
					<div class="portfolio all gallery" data-cat="gallery">
						<div class="portfolio-wrapper">
							<a href="portraits.php">
								<?php 
									$query = "SELECT * FROM photos WHERE cale = 'images/car2.jpg' ";
									$res = mysqli_query($db,$query);
									$row = mysqli_fetch_assoc($res);
								?> 
								<img src="<?php echo $row['cale']; ?>" alt="" />
							</a>
							<div class="label">
								<div class="label-text">
									<a href="cars.php" class="text-title">Cars</a>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>			
					
					<div class="portfolio all gallery" data-cat="gallery">
						<div class="portfolio-wrapper">			
							<a href="portraits.php">
								<?php 
									$query = "SELECT * FROM photos WHERE cale = 'images/animals1.jpg' ";
									$res = mysqli_query($db,$query);
									$row = mysqli_fetch_assoc($res);
								?> 
								<img src="<?php echo $row['cale']; ?>" alt="" />
							</a>
							<div class="label">
								<div class="label-text">
									<a href="animals.php" class="text-title">Animals</a>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>	
					
					<div class="portfolio all gallery" data-cat="gallery">
						<div class="portfolio-wrapper">			
							<a href="portraits.php">
								<?php 
									$query = "SELECT * FROM photos WHERE cale = 'images/family1.jpg' ";
									$res = mysqli_query($db,$query);
									$row = mysqli_fetch_assoc($res);
								?> 
								<img src="<?php echo $row['cale']; ?>" alt="" />
							</a>
							<div class="label">
								<div class="label-text">
									<a href="signup.php" class="text-title">Family</a>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>	
					
					<div class="portfolio all gallery" data-cat="gallery">
						<div class="portfolio-wrapper">			
							<a href="portraits.php">
								<?php 
									$query = "SELECT * FROM photos WHERE cale = 'images/building2.jpg' ";
									$res = mysqli_query($db,$query);
									$row = mysqli_fetch_assoc($res);
								?> 
								<img src="<?php echo $row['cale']; ?>" alt="" />
							</a>
							<div class="label">
								<div class="label-text">
									<a href="signup.php" class="text-title">Buildings</a>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>

					<div class="portfolio all contact" data-cat="contact"> 
						<div class="portfolio-wrapper">	
							<a href="portraits.php">
								<?php 
									$query = "SELECT * FROM photos WHERE cale = 'images/birthdays1.jpg' ";
									$res = mysqli_query($db,$query);
									$row = mysqli_fetch_assoc($res);
								?> 
								<img src="<?php echo $row['cale']; ?>" alt="" />
							</a>		
						<!--<img src="images/birthdays1.jpg" alt="" /> -->
							<div class="label"> 
								<div class="label-text"> 
									<a class="text-title">Birthdays</a> 
								</div>
								<div class="label-bg"></div> 
							</div> 
						</div> 
					</div>						
				</div>
			</div>
		</div>
		<form action="../MyPhotographer/login.php" style="text-align: center;">
			<input type="submit" value="Log Out"><br>
		</form>
		<footer>
			<div id="footer" class="fh5co-border-line">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>Copyright 2016 Free Html5 <a href="#">MyPhotographer</a>. All Rights Reserved.  </p>
						</div>
						<div class="col-md-6 social-text-align">
							<p class="fh5co-social-icons">
								<a href="https://twitter.com/"><i class="icon-twitter-with-circle"></i></a>
								<a href="https://www.facebook.com/"><i class="icon-facebook-with-circle"></i></a>
								<a href="https://www.instagram.com/"><i class="icon-instagram-with-circle"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Portfolio Filter Mixitup -->
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.all'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();

		
		
	});	
	</script>

	</body>
</html>

