<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="student/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Quiz me.</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="student/css/linearicons.css">
		<link rel="stylesheet" href="student/css/owl.carousel.css">
		<link rel="stylesheet" href="student/css/font-awesome.min.css">
		<link rel="stylesheet" href="student/css/nice-select.css">
		<link rel="stylesheet" href="student/css/magnific-popup.css">
		<link rel="stylesheet" href="student/css/bootstrap.css">
		<link rel="stylesheet" href="student/css/main.css">
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

	</head>
	<body>
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<h1 style="color: white;font-family: 'Playfair Display', serif;">Quiz me.</h1>
							<!-- <a href="index.html"><img src="img/logo.png" alt=""></a> -->
						</div>
						<div class="main-menubar d-flex align-items-center">
							<nav class="hide">
								<!-- <a href="index.html">Home</a> -->
								<a href="forgotpass.php">Change Password</a>
								<a href="logout.php">Log out</a>
							</nav>
							<span class="lnr lnr-user" style="color: white;"></span>&nbsp;&nbsp;&nbsp;
							<h4><?php echo $_SESSION["name"]; ?></h4>&nbsp;&nbsp;&nbsp;
							<div class="menu-bar"><span class="lnr lnr-menu"></span></div>

						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
		<!-- Start Banner Area -->
		<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-center">
					<div class="col-lg-10">
						<div class="banner-content text-center">
							<h1 class="text-white">To earn more, <br>
							You must learn more</h1><br>
							<!-- <p class="text-white">Living in today’s metropolitan world of cellular phones, mobile computers and other high-tech <br> gadgets is not just hectic but very impersonal.</p> -->
							<a href="quiz.php" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Take Quiz</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->
		<!-- Start History Area -->
		<!-- <section class="section-gap history-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8">
						<div class="section-title text-center">
							<h2>Glorious History</h2>
							<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game,</p>
						</div>
					</div>
				</div>
				<div class="history-tab-wrapper">
					<div class="row justify-content-between">
						<div class="col-lg-4">
							<div class="tab-thumb text-center">
								<img src="img/tab-thumb.jpg" class="img-fluid" alt="">
							</div>
						</div>
						<div class="col-lg-6 ml-auto">
							<div class="tab-total-content">
								<div class="nav ilene-tabs" id="myTab" role="tablist">
									<a class="nav-item active" id="nav-home-tab" data-toggle="tab" href="#nav-history" role="tab" aria-controls="nav-history" aria-selected="true"><span class="lnr lnr-map"></span>History</a>
									<a class="nav-item" id="nav-profile-tab" data-toggle="tab" href="#nav-mission" role="tab" aria-controls="nav-mission" aria-selected="false"><span class="lnr lnr-bullhorn"></span>Mission</a>
									<a class="nav-item" id="nav-contact-tab" data-toggle="tab" href="#nav-vission" role="tab" aria-controls="nav-vission" aria-selected="false"><span class="lnr lnr-sun"></span>Vision</a>
								</div>
								<div class="tab-content mt-40" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-history" role="tabpanel" aria-labelledby="nav-home-tab">
										<div class="single-content">
											<h3>History</h3>
											<p>Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.Small Towns and Big StatesFor evidence of the double standard, we need look no farther than Arlington.</p>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-profile-tab">
										<div class="single-content">
											<h3>Mission</h3>
											<p>Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.Small Towns and Big StatesFor evidence of the double standard, we need look no farther than Arlington.</p>
										</div>
									</div>
									<div class="tab-pane fade" id="nav-vission" role="tabpanel" aria-labelledby="nav-contact-tab">
										<div class="single-content">
											<h3>Vision</h3>
											<p>Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.Small Towns and Big StatesFor evidence of the double standard, we need look no farther than Arlington.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-1"></div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End History Area -->
		<!-- Start Service Area -->
		<!-- <section class="service-area">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3 col-sm-6">
						<div class="single-service">
							<div class="top">
								<div class="content text-center">
									<span class="lnr lnr-magic-wand"></span>
									<h3>Software</h3>
								</div>
							</div>
							<div class="bottom">
								<p>Few would argue that, despite the advancements of feminism over the past three decades.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-service d-flex flex-column">
							<div class="bottom order-2 order-sm-1">
								<p>Few would argue that, despite the advancements of feminism over the past three decades.</p>
							</div>
							<div class="top order-1 order-sm-2">
								<div class="content text-center">
									<span class="lnr lnr-book"></span>
									<h3>Wordpress</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-service">
							<div class="top">
								<div class="content text-center">
									<span class="lnr lnr-select"></span>
									<h3>Front End</h3>
								</div>
							</div>
							<div class="bottom">
								<p>Few would argue that, despite the advancements of feminism over the past three decades.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="single-service d-flex flex-column">
							<div class="bottom order-2 order-sm-1">
								<p>Few would argue that, despite the advancements of feminism over the past three decades.</p>
							</div>
							<div class="top order-1 order-sm-2">
								<div class="content text-center">
									<span class="lnr lnr-diamond"></span>
									<h3>UX Design</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End Service Area -->
		<!-- Start Exprience Area -->
		<!-- <section class="section-gap exprience-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8">
						<div class="section-title text-center">
							<h2>Beautiful Experiences</h2>
							<p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity.</p>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-6">
						<div class="vector-thumb">
							<img src="img/v1.jpg" class="img-fluid" alt="">
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="vector-thumb">
							<img src="img/v2.jpg" class="img-fluid" alt="">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="vector-content mt-30">
							<h3 class="h2">Vector Illustration</h3>
							<h4>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed.</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor.</p>
							<a href="#" class="primary-btn white-bg">View Details</a>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- Start Exprience Area -->
		<!-- Start Projects Area -->
		<!-- <section class="section-gap projects-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8">
						<div class="section-title text-center">
							<h2 class="text-white">Some Projects</h2>
							<p class="text-white">LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity.</p>
						</div>
					</div>
				</div>
				<div class="active-project-carousel">
					<div class="item">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-6">
								<div class="carousel-thumb" style="background: url(img/c1.jpg);"></div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="carousel-content">
									<h3>Vector Illustration</h3>
									<p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer, more portable technology than we’ve ever had</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-6">
								<div class="carousel-thumb" style="background: url(img/c1.jpg);"></div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="carousel-content">
									<h3>Vector Illustration</h3>
									<p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer, more portable technology than we’ve ever had</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-6">
								<div class="carousel-thumb" style="background: url(img/c1.jpg);"></div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="carousel-content">
									<h3>Vector Illustration</h3>
									<p>LCD screens are uniquely modern in style, and the liquid crystals that make them work have allowed humanity to create slimmer, more portable technology than we’ve ever had</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- Start Projects Area -->
		<!-- Start Exprience Area -->
		<!-- <section class="section-gap">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-8">
						<div class="section-title text-center">
							<h2>Keep in Touch</h2>
							<p>Most people who work in an office environment, buy computer products, or have a computer at home have</p>
						</div>
					</div>
				</div>
				<form id="myForm" action="mail.php" method="post" class="contact-form">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<input type="text" name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-20" required>
						</div>
						<div class="col-lg-5">
							<input type="email" name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-20" required>
						</div>
						<div class="col-lg-10">
							<textarea class="common-textarea mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></textarea>
						</div>
						<div class="col-lg-10 d-flex justify-content-end">
							<button class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span class="mr-10">Send Message</span><span class="lnr lnr-arrow-right"></span></button> <br>
							<div class="alert-msg"></div>
						</div>
					</div>
				</form>
			</div>
		</section> -->
		<!-- Start Exprience Area -->
		<!-- Start Subscription Area -->
		<!-- <section class="subscription-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="section-title text-center">
							<h2 class="text-white">Together, <br>Let’s Make this happen</h2>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div id="mc_embed_signup">
							<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative">
								<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
								<div style="position: absolute; left: -5000px;">
									<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
								</div>
								<button class="primary-btn white-bg d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></button>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End Subscription Area -->

		<!-- Strat Footer Area -->
		<!-- <footer class="section-gap">
			<div class="container"> -->
				<!-- <div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">About Agency</h6>
							<ul class="footer-nav">
								<li><a href="#">Managed Website</a></li>
								<li><a href="#">Manage Reputation</a></li>
								<li><a href="#">Power Tools</a></li>
								<li><a href="#">Marketing Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Navigation Links</h6>
							<ul class="footer-nav">
								<li><a href="#">Home</a></li>
								<li><a href="#">Main Features</a></li>
								<li><a href="#">Offered Services</a></li>
								<li><a href="#">Latest Portfolio</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Navigation Links</h6>
							<ul class="footer-nav">
								<li><a href="#">Works & Builders</a></li>
								<li><a href="#">Works & Wordpress</a></li>
								<li><a href="#">Works & Templates</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-white text-uppercase mb-20">Instafeed</h6>
							<ul class="instafeed d-flex flex-wrap">
								<li><img src="img/i1.jpg" alt=""></li>
								<li><img src="img/i2.jpg" alt=""></li>
								<li><img src="img/i3.jpg" alt=""></li>
								<li><img src="img/i4.jpg" alt=""></li>
								<li><img src="img/i5.jpg" alt=""></li>
								<li><img src="img/i6.jpg" alt=""></li>
								<li><img src="img/i7.jpg" alt=""></li>
								<li><img src="img/i8.jpg" alt=""></li>
							</ul>
						</div>
					</div>
				</div> -->
				<!-- <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-text m-0">Copyright &copy; 2017 All rights reserved   |   This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></p>
					<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer> -->
		<!-- End Footer Area -->

		<script src="student/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="student/js/vendor/bootstrap.min.js"></script>
		<script src="student/js/jquery.ajaxchimp.min.js"></script>
		<script src="student/js/owl.carousel.min.js"></script>
		<script src="student/js/jquery.nice-select.min.js"></script>
		<script src="student/js/jquery.magnific-popup.min.js"></script>
		<script src="student/js/main.js"></script>
	</body>
</html>
