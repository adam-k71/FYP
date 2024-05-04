<?php
include_once 'header.php';
if (empty($_GET['status'])) {
	session_destroy();
	header('Location:index.php?status=1');
	exit;
}
if (isConsumer()) {
	header("location: consumer_dashboard.php");
}
if (isBroker()) {
	header("location: broker_dashboard.php");
}
if (isAdmin()) {
	header("location: admin‎ dashboard♠.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Security-Policy" content="default-src 'self'">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>

	<!-- External CSS link -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Ionic icons CDN -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


	<!-- Jquery CDN link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
		integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="">
	<!-- Scroll to top starts -->
	<button id="topBtn">
		<ion-icon name="arrow-up-outline"></ion-icon>
	</button>
	<!-- Scroll to top ends -->

	<!-- Hero section starts -->
	<section class="hero">
		<div class="hero-container">
			<div class="row">
				<div class="col hero-content">
					<h2 class="hero-heading white">
						Find the best Insurance
					</h2>
					<p class="para-line white">
						Speak to one of our professionals or view our products and find what suits you best.
					</p>
					<div class="inner-row">
						<div class="inner-col">
							<button class="btn btn-full-w btn-blue">
								<a href=>Talk to a Specialist</a>
							</button>
						</div>
						<div class="inner-col">
							<button class="btn btn-full-w btn-yellow">
								<a href=>View our Services</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section ends -->


	<!-- Why us section starts -->
	<section class="why-us">
		<div class="container">
			<div class="row">
				<div class="col why-us-content">
					<h4 class="sub-heading">Why choose us</h4>

					<h2 class="heading">
						Top Security System
					</h2>

					<p class="para-line">
						Our system is built with security at its forefront, ensuring all your personal data is kept
						safe.
					</p>

					<div class="inner-row why-us-row">
						<div class="inner-col why-us-col">
							<h3 class="why-us-highlight-heading">
								24/7 Support
							</h3>
							<p class="para-line">
								Support is always avaiable 24/7.
							</p>
						</div>
						<div class="inner-col why-us-col">
							<h3 class="why-us-highlight-heading">
								We're not theives
							</h3>
							<p class="para-line">
								We won't steal, sell or use any of your data.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Why us section end  -->


	<!-- Services section starts -->
	<section class="our-services">
		<div class="container">
			<img src="img/services.png" class="service-img" alt="Our Services" title="Our Services">

			<h4 class="sub-heading">Our Services</h4>
			<h2 class="heading">
				Insurance Policies
			</h2>
			<p class="para-line head-desc">
				Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae. Lorem ipsum
				dolor sit amet consectetur adipisicing elit.
				Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
			</p>

			<div class="services">
				<div class="service">
					<ion-icon name="car-sport-outline"></ion-icon>
					<h2 class="service-heading">Vehicle</h2>
					<p class="para-line">
						Insure any type of vehicle and find what suits you.
					</p>
				</div>
				<div class="service">
					<ion-icon name="car-sport-outline"></ion-icon>
					<h2 class="service-heading">Vehicle</h2>
					<p class="para-line">
						Insure any type of vehicle and find what suits you.
					</p>
				</div>
				<div class="service">
					<ion-icon name="car-sport-outline"></ion-icon>
					<h2 class="service-heading">Vehicle</h2>
					<p class="para-line">
						Insure any type of vehicle and find what suits you.
					</p>
				</div>
				<div class="service">
					<ion-icon name="car-sport-outline"></ion-icon>
					<h2 class="service-heading">Vehicle</h2>
					<p class="para-line">
						Insure any type of vehicle and find what suits you.
					</p>
				</div>
				<div class="service">
					<ion-icon name="car-sport-outline"></ion-icon>
					<h2 class="service-heading">Vehicle</h2>
					<p class="para-line">
						Insure any type of vehicle and find what suits you.
					</p>
				</div>
				<div class="service">
					<ion-icon name="car-sport-outline"></ion-icon>
					<h2 class="service-heading">Vehicle</h2>
					<p class="para-line">
						Insure any type of vehicle and find what suits you.Ï
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section ends -->


	<!-- Overline section starts -->
	<section class="overline">
		<div class="container">
			<h4 class="sub-heading white">Best Provider</h4>

			<h2 class="heading white">
				Best Insurance Policies
			</h2>

			<img src="img/insurance-policies.jpg" alt="Insurance Policies" title="Insurance policies"
				class="insurance-policies">

			<div class="overlines">
				<div class="row">
					<div class="col">
						<ion-icon name="analytics-outline" class="white"></ion-icon>
						<h2 class="overline-heading">Service 1</h2>
						<p class="para-line white">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.

						</p>
					</div>
					<div class="col">
						<ion-icon name="briefcase-outline" class="white"></ion-icon>
						<h2 class="overline-heading">Service 2</h2>
						<p class="para-line white">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.

						</p>
					</div>
					<div class="col">
						<ion-icon name="trophy-outline" class="white"></ion-icon>
						<h2 class="overline-heading">Service 3</h2>
						<p class="para-line white">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.

						</p>
					</div>
					<div class="col">
						<ion-icon name="planet-outline" class="white"></ion-icon>
						<h2 class="overline-heading">Service 4</h2>
						<p class="para-line white">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
						</p>
					</div>
				</div>
			</div>

			<button class="btn btn-yellow">
				<a href=>All Our Policies</a>
			</button>
		</div>
	</section>
	<!-- Overline section ends -->


	<!-- About section starts  -->
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<h4 class="sub-heading">About the Company</h4>
					<h2 class="heading">Our Story</h2>
					<p class="para-line">Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
					</p>

					<div class="about-highlights">
						<div class="about-highlight-line">
							<ion-icon name="chevron-forward-outline"></ion-icon>
							<h5 class="highlight-line-heading">Attribute 1</h5>
						</div>
						<div class="about-highlight-line">
							<ion-icon name="chevron-forward-outline"></ion-icon>
							<h5 class="highlight-line-heading">Attribute 2</h5>
						</div>
						<div class="about-highlight-line">
							<ion-icon name="chevron-forward-outline"></ion-icon>
							<h5 class="highlight-line-heading">Attribute 3</h5>
						</div>
					</div>

					<button class="btn btn-blue btn-full-w">
						<a href=>Read More</a>
					</button>
				</div>
				<div class="col">
					<img src="img/about-img.jpg" alt="About Us" title="About Us" class="about-img">
				</div>
			</div>
		</div>
	</section>
	<!-- About section ends -->


	<!-- Testimonial section starts -->
	<section class="testimonial">
		<div class="container">
			<h4 class="sub-heading white">Testimonials</h4>
			<h2 class="heading white">What Our Customers Say</h2>
			<p class="para-line white">
				Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae. Lorem ipsum
				dolor sit amet consectetur adipisicing elit.
				Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
			</p>
			<div class="testimonial-profile">
				<img src="img/client.png" alt="Client" title="Client" class="profile-img">
				<span>
					<h6 class="client-name white">Customer 1</h6>
					<p class="client-location white">Location</p>
				</span>
			</div>

			<div class="stars">
				<ion-icon name="star-outline"></ion-icon>
				<ion-icon name="star-outline"></ion-icon>
				<ion-icon name="star-outline"></ion-icon>
				<ion-icon name="star-outline"></ion-icon>
				<ion-icon name="star-outline"></ion-icon>
			</div>
		</div>
	</section>
	<!-- Testimonial section ends -->


	<section class="consultancy">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="lead-form">
						<h2>Free 1 Hour Consultancy Session</h2>
						<form action="">
							<div class="input-field">
								<label for="name">Full Name</label>
								<input type="text" id="name" placeholder="Your Name">
							</div>

							<div class="input-field">
								<label for="email">Email Address</label>
								<input type="email" id="email" placeholder="Your email address">
							</div>

							<button class="btn btn-blue">
								<a href="#">Get A Quote</a>
							</button>
						</form>
					</div>
				</div>
				<div class="col">
					<div class="lead-form agent-card">
						<img src="img/client.png" alt="Agent" title="Agent" class="agent-img">
						<h3 class="agent-name">Broker 1</h3>
						<p class="para-line">Insurance Broker</p>
						<h6 class="agent-number">
							<ion-icon name="call-outline"></ion-icon> (012) 1234-567-890
						</h6>
						<h6 class="agent-email">
							<ion-icon name="mail-unread-outline"></ion-icon> email@email.com
						</h6>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!--------------- Footer ------------------>
	<footer>
		<div class="footer-container">
			<p class="para-line white">Copyright © 2023</p>
		</div>
	</footer>
	<!--------------- Footer ------------------>




	<!-------------- Importing JS file -------------->
	<script src="js/script.js"></script>


	<script>
		// ------------------------ Scroll to top button --------------------
		$(document).ready(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 40) {
					$('#topBtn').fadeIn();
				}
				else {
					$('#topBtn').fadeOut();
				}
			});

			$("#topBtn").click(function () {
				$('html, body').animate({ scrollTop: 0 }, 800);
			});
		});
		// ------------------------ Scroll to top button --------------------
	</script>
</body>

</html>