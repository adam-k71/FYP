<?php
session_start();
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Details</title>

	<!-- External CSS link -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/insurance-detail.css">

	<!-- Ionic icons CDN -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	<!-- Jquery CDN link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
		integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
	<!-- Scroll to top starts -->
	<button id="topBtn">
		<ion-icon name="arrow-up-outline"></ion-icon>
	</button>
	<!-- Scroll to top ends -->

	<!-- Navigation starts -->
	<nav>
		<div class="menu-container nav-wrapper">


			<div class="hamberger">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<ul class="nav-list">
				<?php
				// admin navbar
				if (isset($_SESSION['userId'])) {
					if ($_SESSION['UserLevel'] == USER_LEVEL_ADMIN) {
						echo '
                        <li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li>
					<a href="insurance.php">Insurance</a>
					<ul class="dropdown-list">
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
					</ul>
				</li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contacts</a></li>
				<li><a href="admin.php" class="navbar__links"> Admin </a></li>
				<li>
                        <form action="includes/logout.inc.php" method="post" class="navbar__btn">
                        <button type="submit" name="logout-submit" class="btn btn-blue">Logout</button>
                        </form>';
					}
					// logged in
					else {
						echo '
                        <li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li>
					<a href="insurance.php">Insurance</a>
					<ul class="dropdown-list">
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
					</ul>
				</li>
				<li><a href="news.php">News</a></li>
				<li><a href="contact.php">Contacts</a></li>
				<li>
                        <form action="includes/logout.inc.php" method="post" class="navbar__btn">
                        <button type="submit" name="logout-submit" class="btn btn-blue">Logout</button>
                        </form>';
					}
				}
				// logged out 
				else {
					echo '
                    <li class="navbar__item">
                    <a href="index.php" class="navbar__links"> Home </a>
                    </li>
					<li><a href="about.php">About Us</a></li>
                    <li>
					<a href="insurance.php">Insurance</a>
					<ul class="dropdown-list">
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
						<li><a href="insurance-details.php">Auto Policy</a></li>
					</ul>
				</li>
				<li><a href="news.php">News</a></li>

                    <li class="navbar__item">
                    <a href="contact.php" class="navbar__links" target="_blank"> Contact </a>
                    </li>
                    <li class="navbar__btn">
                    <a href="login.php" class="button"> Login </a>
                    </li>
                        ';
				}
				?>
			</ul>
		</div>
	</nav>
	<!-- Navigation ends -->

	<!-------------------- Breadcrumb section ------------------->
	<section class="breadcrumbs">
		<div class="breadcrumb-container">
			<h2 class="hero-heading white">
				Auto Insurance
			</h2>
		</div>
	</section>
	<!-------------------- Breadcrumb section ------------------->


	<!-------------------- Insurance description ----------------->
	<section class="description">
		<div class="container">
			<div class="row">
				<div class="col desc-content">
					<h4 class="sub-heading">Insurance Description</h4>
					<h2 class="heading">
						Perfect Insurance for Your Vehicle
					</h2>

					<p class="insurance-features">
						<ion-icon name="shield-half-outline"></ion-icon> Feature 1
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 2
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 3
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 4
					</p>

					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
					</p>

					<button class="btn btn-blue">
						<a href="#">Buy Now</a>
					</button>
				</div>
				<div class="col desc-img-content">
					<img src="imgdetail-car.jpg" alt="Insurance Details Image" title="Insurance Details Image"
						class="insurance-detail-img">
				</div>
			</div>
		</div>
	</section>
	<!-------------------- Insurance description ----------------->



	<!-------------------- Policy section ---------------------->
	<section class="policy">
		<div class="container">
			<h4 class="sub-heading">Section overline</h4>
			<h2 class="heading">
				Package policies
			</h2>

			<div class="policies">
				<div class="single-policy">
					<ion-icon name="shield-half-outline"></ion-icon>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
					</p>
				</div>
				<div class="single-policy">
					<ion-icon name="shield-half-outline"></ion-icon>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
					</p>
				</div>
				<div class="single-policy">
					<ion-icon name="shield-half-outline"></ion-icon>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
					</p>
				</div>
				<div class="single-policy">
					<ion-icon name="shield-half-outline"></ion-icon>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-------------------- Policy section ---------------------->



	<!------------------------ Agent CTA -------------------------->
	<section class="agent-cta">
		<div class="container">
			<h2 class="heading white">Need an advice? Talk to an Agent</h2>

			<div class="row agents">
				<div class="col agent">
					<p class="para-line white">Package 1</p>
					<hr>
					<h3 class="agent-name white">Agent 1</h3>
					<p class="agent-email white">
						<ion-icon name="call-outline"></ion-icon>
						(+012) 123 456 789
					</p>
					<p class="agent-email white">
						<ion-icon name="mail-outline"></ion-icon>
						email@email.com
					</p>
				</div>
				<div class="col agent">
					<p class="para-line white">Package 2</p>
					<hr>
					<h3 class="agent-name white">Agent 2</h3>
					<p class="agent-email white">
						<ion-icon name="call-outline"></ion-icon>
						(+012) 123 456 789
					</p>
					<p class="agent-email white">
						<ion-icon name="mail-outline"></ion-icon>
						email@email.com
					</p>
				</div>
			</div>
		</div>
	</section>
	<!------------------------ Agent CTA -------------------------->


	<!------------------------ Available Insurance pack ---------------->
	<section class="insurance-packs">
		<div class="container">
			<img src="imgpackage.jpg" alt="Available package" title="Available package" class="insurance-pack-img">

			<h4 class="sub-heading">Section overline</h4>
			<h2 class="heading">
				Available Packages
			</h2>

			<div class="row ins-pack-row">
				<div class="col ins-pack-col">
					<h3 class="ins-pack-name">Personal Vehicle Insurance</h3>
					<p class="ins-pack-price">Starting from $60 / Year</p>
				</div>
				<div class="col ins-pack-col">
				<p class="insurance-features">
						<ion-icon name="shield-half-outline"></ion-icon> Feature 1
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 2
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 3
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 4
					</p>

					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
					</p>

					<button class="pack-cta">
						<a href="#">
							Get a Quote <ion-icon name="chevron-forward-outline"></ion-icon>
						</a>
					</button>
				</div>
			</div>

			<hr>

			<div class="row ins-pack-row">
				<div class="col ins-pack-col">
					<h3 class="ins-pack-name">Business Vehicle Insurance</h3>
					<p class="ins-pack-price">Starting from $60 / Year</p>
				</div>
				<div class="col ins-pack-col">
				<p class="insurance-features">
						<ion-icon name="shield-half-outline"></ion-icon> Feature 1
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 2
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 3
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 4
					</p>

					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
					</p>

					<button class="pack-cta">
						<a href="#">
							Get a Quote <ion-icon name="chevron-forward-outline"></ion-icon>
						</a>
					</button>
				</div>
			</div>

			<hr>

			<div class="row ins-pack-row">
				<div class="col ins-pack-col">
					<h3 class="ins-pack-name">Motorbike Insurance</h3>
					<p class="ins-pack-price">Starting from $60 / Year</p>
				</div>
				<div class="col ins-pack-col">
				<p class="insurance-features">
						<ion-icon name="shield-half-outline"></ion-icon> Feature 1
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 2
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 3
						&nbsp;
						<ion-icon name="shield-half-outline"></ion-icon> Feature 4
					</p>

					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
					</p>

					<button class="pack-cta">
						<a href="#">
							Get a Quote <ion-icon name="chevron-forward-outline"></ion-icon>
						</a>
					</button>
				</div>
			</div>
		</div>
	</section>
	<!------------------------ Available Insurance pack ---------------->



	<!------------------------ Quotation form ------------------------>
	<section class="quoatation">
		<div class="container">
			<div class="row">
				<div class="col quot-img-col">
					<div class="spacer"></div>
				</div>
				<div class="col">
					<div class="lead-form">
						<h class="heading">Get a Quote Now</h>

						<form action="">
							<div class="input-field">
								<label for="name">Full Name</label>
								<input type="text" id="name" placeholder="Your name" required>
							</div>

							<div class="input-field">
								<label for="number">Phone No.</label>
								<input type="text" id="number" placeholder="Your phone number" required>
							</div>

							<div class="input-field">
								<label for="email">Email Address</label>
								<input type="email" id="email" placeholder="Your email address" required>
							</div>

							<button class="btn btn-blue">
								<a href="#">Get A Quote</a>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!------------------------ Quotation form ------------------------>




	<!--------------- Footer ------------------>
	<footer>
		<div class="footer-container">
			<p class="para-line white">Copyright © 2023</p>
		</div>
	</footer>
	<!--------------- Footer ------------------>


	<!-------------- Importing JS file -------------->
	<script src="js/script.js"></script>

	<!------------------------ Scroll to top button -------------------->
	<script>
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
	</script>
</body>

</html>