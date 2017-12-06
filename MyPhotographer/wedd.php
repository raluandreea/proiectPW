<?php
 require 'MyPhotographer_PHP/DBconnection.php'; 
 //$idd=isset($_GET['id'])? $_GET['id'] : 0;
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    



	<!-- fancybox CSS library -->
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
	<!-- JS library -->
	<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
	<!-- fancybox JS library -->
	<script src="fancybox/jquery.fancybox.js"></script>

	<script type="text/javascript">
    	$("[data-fancybox]").fancybox({ });
	</script>

	<style type="text/css"> 
		.gallery img {
		    width: 20%;
		    height: auto;
		    border-radius: 5px;
		    cursor: pointer;
		    transition: .3s;
		}
	</style> 



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
					<!--<li><a href="portfolio.php">Portfolio</a></li> -->
					<!-- <li><a href="services.html">Services</a></li> -->
					<li><a href="team.php">Team</a></li>
					<!--<li><a href="signup.php">Sign in / Sign up</a></li>
					<li><a href="login.php">Log In</a></li> -->
				</ul>
			</div>
		</div>
	</nav>

	<div id="fh5co-page">

		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<a class="fh5co-logo" href="index.php"> <i class="icon-camera"></i> <b>MyPhotographer</b> </a>
				</div>
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			</div>
		</header>

		<div id="fh5co-portfolio-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
						<h1> <b> Portraits Gallery </b> </h1>
						<h3 style="font-family: courier;"><i> "Photography is about capturing souls, not smiles."</i></h3>
						
					</div>
				</div>

				<div class = "gallery">
					<table>
						<td>
							<div class="table_images">
								
									
								<?php 
									$sql = "SELECT * FROM photos WHERE categ= 'portraits'";
									$res = mysqli_query($db,$sql);
									 
									if(mysqli_num_rows($res) > 0){
										while($row = mysqli_fetch_array($res)){
											$imageURL = $row['cale'];
								
								?> 
								<a href="<?php echo $imageURL; ?>" data-fancybox="group" >
                					<img src="<?php echo $imageURL; ?>" style="width:50%; border: 1px ridge; border-radius:10px;" >
            					</a> 
            					<?php 
            							}
     	       						}
            					?> 
								<!--<img src="<?php echo $imageURL; ?>" style="width:25%; border: 1px ridge; border-radius:10px;"> -->
							</div>
						
						</td> 
						<!--<td>
							<div class="table_images">
								<?php 
								//$sql ="SELECT * FROM photos WHERE categ = 'portraits'";
								//$res=mysqli_query($db,$sql);
								//$row=mysqli_fetch_array($res);  
							 ?><img src="<?php// echo $row['cale'];?>" style="width:98%; border: 2px ridge; border-radius:10px;">
							</div>
						</td> -->
					</table> 
					
					

				</div>

			</div>

		</div>





		<!-- END fh5co-portfolio-section -->
		<footer>
			<div id="footer" class="fh5co-border-line">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>Copyright 2017 <a href="#">MyPhotographer</a>. All Rights Reserved. <br>Made with <i class="icon-heart3 love"></i> </p>
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