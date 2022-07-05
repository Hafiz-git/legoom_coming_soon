<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang='en'>
	<!--<![endif]-->
	<head>
		<meta charset='utf-8' />
		<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
		<title>Avenir - Coming Soon</title>

		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />

		<link rel="stylesheet" href="css/maximage.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" charset="utf-8" />

		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

		<!--[if IE 6]>
			<style type="text/css" media="screen">
				.gradient {display:none;}
			</style>
		<![endif]-->
	</head>
	<body>

		<!-- Social Links -->

		<!-- Switch to full screen -->
		<button class="full-screen" onclick="$(document).toggleFullScreen()"></button>

		<!-- Site Logo -->
		<img src="images/logo2.png" width="400px">

		<!-- Main Navigation -->
		<nav class="main-nav">
			<ul>
				<li><a href="#home" class="active">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>

		<!-- Slider Controls -->
		<a href="" id="arrow_left"><img src="images/arrow-left.png" alt="Slide Left" /></a>
		<a href="" id="arrow_right"><img src="images/arrow-right.png" alt="Slide Right" /></a>

		<!-- Home Page -->
		<section class="content show" id="home">
			<h1>Welcome</h1>
			<h5>Our new site is coming soon!</h5>
		</section>

		<!-- About Page -->
		<section class="content hide" id="about">
			<h1>About</h1>
			<h5>Projek Inovasi JKM Pasir Mas dan Legoom</h5>
		</section>

		<!-- Contact Page -->
		<section class="content hide" id="contact">
			<h1>Contact</h1>
			<h5>Get in touch.</h5>
		</section>

		<!-- Background Slides -->
		<div id="maximage">
			<div>
				<img src="images/backgrounds/bg-img-1.jpg" alt="" />
				<img class="gradient" src="images/backgrounds/gradient.png" alt="" />
			</div>
			<div>
				<img src="images/backgrounds/bg-img-2.jpg" alt="" />
				<img class="gradient" src="images/backgrounds/gradient.png" alt="" />
			</div>
			<div>
				<img src="images/backgrounds/bg-img-3.jpg" alt="" />
				<img class="gradient" src="images/backgrounds/gradient.png" alt="" />
			</div>
			<div>
				<img src="images/backgrounds/bg-img-4.jpg" alt="" />
				<img class="gradient" src="images/backgrounds/gradient.png" alt="" />
			</div>
			<div>
				<img src="images/backgrounds/bg-img-5.jpg" alt="" />
				<img class="gradient" src="images/backgrounds/gradient.png" alt="" />
			</div>
		</div>

		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js'></script>
		<script src="js/jquery.easing.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.fullscreen.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.ba-hashchange.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/main.js" type="text/javascript" charset="utf-8"></script>

		<script type="text/javascript" charset="utf-8">
			$(function(){
				$('#maximage').maximage({
					cycleOptions: {
						fx: 'fade',
						speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
						timeout: 5000,
						prev: '#arrow_left',
						next: '#arrow_right',
						pause: 0,
						before: function(last,current){
							if(!$.browser.msie){
								// Start HTML5 video when you arrive
								if($(current).find('video').length > 0) $(current).find('video')[0].play();
							}
						},
						after: function(last,current){
							if(!$.browser.msie){
								// Pauses HTML5 video when you leave it
								if($(last).find('video').length > 0) $(last).find('video')[0].pause();
							}
						}
					},
					onFirstImageLoaded: function(){
						jQuery('#cycle-loader').hide();
						jQuery('#maximage').fadeIn('fast');
					}
				});

				// Helper function to Fill and Center the HTML5 Video
				jQuery('video,object').maximage('maxcover');

			});
		</script>
  </body>
</html>