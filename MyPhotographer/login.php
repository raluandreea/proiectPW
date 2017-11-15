<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MyPhotographer &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

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
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<!-- <li><a href="services.html">Services</a></li> -->
					<li><a href="team.php">Team</a></li>
					<li><a href="signup.php">Sign in / Sign up</a></li>
					<li><a href="login.php">Log In</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<a class="fh5co-logo" href="index.php"> <i class="icon-camera"></i> <b> MyPhotographer </b> </a>
				</div>
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			</div>
		</header>
		<div id="fh5co-contact-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h2><b>Welcome!</b></h2>
					</div>
				</div>
				<div class="row">
					<!-- <div class="col-md-4 col-md-push-8 animate-box"> -->
						<!-- <h3>Our Address</h3> -->
						<!-- <ul class="contact-info"> -->
							<!-- <li><i class="icon-location-pin"></i>198 West 21th Street, Suite 721 New York NY 10016</li> -->
							<!-- <li><i class="icon-phone2"></i>+ 1235 2355 98</li> -->
							<!-- <li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li> -->
							<!-- <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li> -->
						<!-- </ul> -->
					<!-- </div> -->
					
						
							<!--partea de signup-->
								<div class="col-xs-6 text-center">
								<!--	<h3> <b> Create an account.  </b>  </h3> -->
								
								<div class="form-group">
							<!--	<form method = "POST" action = "Myphotographer_PHP/signup.inc.php">
									<input type="text" class="form-control" name ="nume" placeholder="First Name"> <br>
									<input type="text" class="form-control" name ="prenume" placeholder="Last Name"> <br>
									<input type="text" class="form-control" name ="username" placeholder="username"> <br>
									<input type="text" class="form-control" name ="email" placeholder="Email"> <br>
									<input type="password" class="form-control" name ="password" placeholder="Password"> <br>
									<!--Gender-->
								<!--	//<input type="radio" name="gender" <?php //if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
 									 <input type="radio" name="gender" <?php //if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
 									<!--<span class="error">* <?php// echo $genderErr;?></span> -->
 								<!--	 <br><br> 

 									 <div class="col-md-12">
 									 	<div class="form-group">
 									 		<input type="submit" value="Register" class="btn btn-primary" name="submit">
 									 	</div>
 									 	
 									 </div>

 								</form> -->

								</div>
							</div>
							
							<div class="col-md-6 col-md-offset-4">
							<form method="POST" action = "Myphotographer_PHP/login.inc.php">
							<!--partea de login-->
								<div class="col-xs-8 text-center">
								
								<div class="form-group text-center"> 
									
									<input type="text" class="form-control" name = "username" placeholder="Username"> <br>
									<input type="password" class="form-control" name = "password" placeholder="Password">
								</div> 
								<div class="form-group">
									<input type="submit" value="Login" class="btn btn-primary" name="submit">
								</div>
							 </div>
							</form>
							
							<?php
								if(isset($_GET['info']) && $_GET['info'] == 'gresit'){
									echo '<p> Parola este gresita! </p>' ;
								}
							?>

							<!-- /form -->
							<?php
								if(isset($_GET['info']) && $_GET['info'] == 'exista'){
									echo '<p> Usernameul exista deja!</p>' ;
								}
							?>
</div>



							<!-- <div class="col-md-12"> -->
								<!-- <div class="form-group"> -->
									<!-- <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea> -->
								<!-- </div> -->
							<!-- </div> -->
							
							
						
					
				
			</div>
		</div>
		<!-- End: fh5co-contact-section -->
		<div id="map" class="fh5co-map animate-box"></div>
			<!-- END map -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>Copyright  <a href="#">MyPhotographer</a>. All Rights Reserved.  </p>
						</div>
						<div class="col-md-6 social-text-align">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
