<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>स्मार्टफार्मी | Contact Us </title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Germinate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
           Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="http://fonts.googleapis.com/css?family=Bree+Serif&amp;subset=latin-ext" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
	<script src='../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src="../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
	<script>
		(function() {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
			}
		})();
	</script>
	<script>
		(function() {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
			}
		})();
	</script>
	<script>
		(function() {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
			}
		})();
	</script>
	<script>
		(function(v, d, o, ai) {
			ai = d.createElement("script");
			ai.defer = true;
			ai.async = true;
			ai.src = v.location.protocol + o;
			d.head.appendChild(ai);
		})(window, document, "../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script>
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '../../../../../../www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-30027142-1', 'w3layouts.com');
		ga('send', 'pageview');
	</script>

	<body>
		<?php

		include "conn.php";


		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];

			$sql = "INSERT INTO bca2 (name, email , subject , message)
     VALUES ('$name', '$email', '$subject','$message')";

			if (mysqli_query($conn, $sql)) {
				echo '<script>alert("तुम्ही दिलेल्या अनमोल वेळेविषयी धन्यवाद ....स्मार्ट  फर्मी चा हिस्सा होण्यासाठी लगेच खाते उघडा  ")</script>';
			} else {

				echo "error..." . $sql . mysqli_error($conn, $sql);
			}
		}
		mysqli_close($conn);

		?>
		<!-- banner -->
		<div class="banner1">
			<div class="container">
				<div class="w3_agileits_banner_main_grid">
					<div class="w3_agile_logo">
						<h1><a href="index.html"><span>Sf</span>स्मार्टफार्मी<i>निरोगी उत्पादने वाढवा</i></a></h1>
					</div>
					<div class="agile_social_icons_banner">
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="agileits_w3layouts_menu">
						<div class="shy-menu">
							<a class="shy-menu-hamburger">
								<span class="layer top"></span>
								<span class="layer mid"></span>
								<span class="layer btm"></span>
							</a>
							<div class="shy-menu-panel">
								<nav class="menu menu--horatio link-effect-8" id="link-effect-8">
									<ul class="w3layouts_menu__list">
										<li><a href="index.html">Home</a></li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="services.html">Services</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li class="active"><a href="contact.html">Contact Us</a></li>
									</ul>
								</nav>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- banner -->
		<!---728x90--->

		<!-- bootstrap-pop-up -->
		<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						अंकुर वाढवणे
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<section>
						<div class="modal-body">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
							<p>Ut enim ad minima veniam, quis nostrum
								exercitationem ullam corporis suscipit laboriosam,
								nisi ut aliquid ex ea commodi consequatur? Quis autem
								vel eum iure reprehenderit qui in ea voluptate velit
								esse quam nihil molestiae consequatur, vel illum qui
								dolorem eum fugiat quo voluptas nulla pariatur.
								<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
									esse quam nihil molestiae consequatur.</i>
							</p>
						</div>
					</section>
				</div>
			</div>
		</div>
		<!-- //bootstrap-pop-up -->
		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="w3layouts_breadcrumbs_left">
					<ul>
						<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>/</span></li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</li>
					</ul>
				</div>
				<div class="w3layouts_breadcrumbs_right">
					<h2>Contact Us</h2>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //breadcrumbs -->
		<!---728x90--->

		<!-- contact -->
		<div class="welcome">
			<div class="container">
				<h3 class="agileits_w3layouts_head">आमच्याशी<span>संपर्क </span> साधा </h3>
				<div class="w3_agile_image">
					<img src="images/1.png" alt=" " class="img-responsive" />
				</div>
				<p class="agile_para">आमच्याशी जोडण्यासाठी आत्ताच खाते उघडून .... स्मार्ट फर्मी बना </p>
				<!---728x90--->

				<div class="w3ls_news_grids">
					<div class="col-md-8 w3_agile_mail_left">
						<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
							<form action="#" method="post">
								<span>
									<i>Name</i>
									<input type="text" name="name" placeholder=" " required="">
								</span>
								<span>
									<i>Email</i>
									<input type="email" name="email" placeholder=" " required="">
								</span>
								<span>
									<i>Subject</i>
									<input type="text" name="subject" placeholder=" " required="">
								</span>
								<span>
									<i>Message</i>
									<textarea name="message" placeholder=" " required=""></textarea>
								</span>
								<div class="w3_submit">
									<input type="submit" name="submit" value="Submit Now">
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-4 w3_agile_mail_right">
						<div class="w3_agileits_mail_right_grid">
							<h4>स्मार्टफर्मी </h4>
							<p>भेट दिल्याबद्दल धन्यवाद </p>
							<h5>आमचे अनुसरण करा</h5>
							<ul class="agileits_social_list">
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
							</ul>
							<div class="w3_agileits_mail_right_grid_pos">
								<img src="images/50.PNG" alt=" " class="img-responsive" />
							</div>
						</div>
						<div class="w3_agileits_mail_right_grid_main">
							<div class="w3layouts_mail_grid_left">
								<div class="w3layouts_mail_grid_left1 hvr-radial-out">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</div>
								<div class="w3layouts_mail_grid_left2">
									<h3>Mail Us</h3>
									<a href="mailto:info@example.com">tejasvmore2017@gmail.com</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="w3layouts_mail_grid_left">
								<div class="w3layouts_mail_grid_left1 hvr-radial-out">
									<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
								</div>
								<div class="w3layouts_mail_grid_left2">
									<h3>Address</h3>
									<p>my company satara</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="w3layouts_mail_grid_left">
								<div class="w3layouts_mail_grid_left1 hvr-radial-out">
									<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								</div>
								<div class="w3layouts_mail_grid_left2">
									<h3>Phone</h3>
									<p>91 7558641371</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div id="map"></div>
		<!-- //contact -->
		<script type="text/javascript">
			// When the window has finished loading create our google map below
			google.maps.event.addDomListener(window, 'load', init);

			function init() {
				// Basic options for a simple Google Map
				// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
				var mapOptions = {
					// How zoomed in you want the map to start at (always required)
					zoom: 11,

					// The latitude and longitude to center the map (always required)
					center: new google.maps.LatLng(33.6, 49.966667), // New York

					// How you would like to style the map. 
					// This is where you would paste any style found on Snazzy Maps.
					styles: [{
						"featureType": "landscape",
						"stylers": [{
							"hue": "#FFA800"
						}, {
							"saturation": 0
						}, {
							"lightness": 0
						}, {
							"gamma": 1
						}]
					}, {
						"featureType": "road.highway",
						"stylers": [{
							"hue": "#53FF00"
						}, {
							"saturation": -73
						}, {
							"lightness": 40
						}, {
							"gamma": 1
						}]
					}, {
						"featureType": "road.arterial",
						"stylers": [{
							"hue": "#FBFF00"
						}, {
							"saturation": 0
						}, {
							"lightness": 0
						}, {
							"gamma": 1
						}]
					}, {
						"featureType": "road.local",
						"stylers": [{
							"hue": "#00FFFD"
						}, {
							"saturation": 0
						}, {
							"lightness": 30
						}, {
							"gamma": 1
						}]
					}, {
						"featureType": "water",
						"stylers": [{
							"hue": "#00BFFF"
						}, {
							"saturation": 6
						}, {
							"lightness": 8
						}, {
							"gamma": 1
						}]
					}, {
						"featureType": "poi",
						"stylers": [{
							"hue": "#679714"
						}, {
							"saturation": 33.4
						}, {
							"lightness": -25.4
						}, {
							"gamma": 1
						}]
					}]
				};

				// Get the HTML DOM element that will contain your map 
				// We are using a div with id="map" seen below in the <body>
				var mapElement = document.getElementById('map');

				// Create the Google Map using our element and options defined above
				var map = new google.maps.Map(mapElement, mapOptions);

				// Let's also add a marker while we're at it
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(33.6, 49.966667),
					map: map,
					title: 'Snazzy!'
				});
			}
		</script>
		<!-- footer -->
		<div class="footer">
			<div class="container">
				<div class="w3agile_footer_grids">
					<div class="col-md-3 agileinfo_footer_grid">
						<div class="agileits_w3layouts_footer_logo">
							<h2><a href="index.html"><span>SF</span><i></i></a></h2>
						</div>
					</div>
					<div class="col-md-4 agileinfo_footer_grid">
						<h3>Contact Info</h3>
						<h4>Call Us <span>+91 7558641371</span></h4>
						<p>My Company satara<span>#SATARA</span></p>
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-md-2 agileinfo_footer_grid agileinfo_footer_grid1">
						<h3>Navigation</h3>
						<ul class="w3layouts_footer_nav">
							<li><a href="index.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
							<li><a href="icons.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Web Icons</a></li>
							<li><a href="typography.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Typography</a></li>
							<li><a href="contact.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Contact Us</a></li>
						</ul>
					</div>
					<div class="col-md-3 agileinfo_footer_grid">
						<h3>Blog Posts</h3>
						<div class="agileinfo_footer_grid_left">
							<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="agileinfo_footer_grid_left">
							<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/2.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="agileinfo_footer_grid_left">
							<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="agileinfo_footer_grid_left">
							<a href="#" data-toggle="modal" data-target="#myModal"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3_agileits_footer_copy">
				<div class="container">
					<p><a target="_blank" href="">Smart Farm PVT.LTD</a></p>
				</div>
			</div>
		</div>
		<!-- //footer -->
		<!-- menu -->
		<script>
			$(function() {

				initDropDowns($("div.shy-menu"));

			});

			function initDropDowns(allMenus) {

				allMenus.children(".shy-menu-hamburger").on("click", function() {

					var thisTrigger = jQuery(this),
						thisMenu = thisTrigger.parent(),
						thisPanel = thisTrigger.next();

					if (thisMenu.hasClass("is-open")) {

						thisMenu.removeClass("is-open");

					} else {

						allMenus.removeClass("is-open");
						thisMenu.addClass("is-open");
						thisPanel.on("click", function(e) {
							e.stopPropagation();
						});
					}

					return false;
				});
			}
		</script>
		<!-- //menu -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
		<!-- //for bootstrap working -->
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/

				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>
		<!-- //here ends scrolling icon -->
	</body>

</html>