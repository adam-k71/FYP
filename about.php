<?php
session_start();
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About</title>

	<!-- External CSS link -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/about.css">

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
				About Us
			</h2>
		</div>
	</section>
	<!-------------------- Breadcrumb section ------------------->



	<!-------------------- Future protection -------------------->
	<section class="future">
		<div class="container">
			<h4 class="sub-heading">Section overline</h4>
			<h2 class="heading">
				Your Future is Protected
			</h2>
			<p class="para-line">
				Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae.
			</p>

			<div class="future-protection-imgs">
				<img src="img/hero-bg.jpg" alt="Future protection" title="Future protection"
					class="future-protection-img">

			</div>
		</div>
	</section>
	<!-------------------- Future protection -------------------->


	<!-- ----------------- Company Values --------------------------- -->
	<section class="values">
		<div class="container">
			<h4 class="sub-heading">Section overline</h4>
			<h2 class="heading">
				Company Values
			</h2>

			<div class="company-values">
				<div class="value">
					<ion-icon name="beer-outline"></ion-icon>
					<h4 class="value-heading">Value 1</h4>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
				</div>
				<div class="value">
					<ion-icon name="golf-outline"></ion-icon>
					<h4 class="value-heading">Value 2</h4>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
				</div>
				<div class="value">
					<ion-icon name="library-outline"></ion-icon>
					<h4 class="value-heading">Value 3</h4>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
				</div>
			</div>
		</div>
	</section>
	<!-- ----------------- Company Values --------------------------- -->


	<!-- -------------------------- Highlights ------------------------------ -->
	<section class="company-highlights">
		<div class="container">
			<div class="highlight">
				<ion-icon name="prism-outline"></ion-icon>
				<h3 class="highlight-heading">Service 1</h3>
				<p class="para-line">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</p>
			</div>
			<div class="highlight">
				<ion-icon name="radio-outline"></ion-icon>
				<h3 class="highlight-heading">Service 2</h3>
				<p class="para-line">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</p>
			</div>
			<div class="highlight">
				<ion-icon name="thumbs-up-outline"></ion-icon>
				<h3 class="highlight-heading">Service 3</h3>
				<p class="para-line">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</p>
			</div>
			<div class="highlight">
				<ion-icon name="wallet-outline"></ion-icon>
				<h3 class="highlight-heading">Service 4</h3>
				<p class="para-line">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</p>
			</div>
			<div class="highlight">
				<ion-icon name="shield-checkmark-outline"></ion-icon>
				<h3 class="highlight-heading">Service 5</h3>
				<p class="para-line">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</p>
			</div>
			<div class="highlight">
				<ion-icon name="people-outline"></ion-icon>
				<h3 class="highlight-heading">Service 6</h3>
				<p class="para-line">
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</p>
			</div>
		</div>
	</section>
	<!-- -------------------------- Highlights ------------------------------ -->



	<!-- --------------------------- Our team -------------------------------- -->
	<section class="our-team">
		<div class="container">
			<h4 class="sub-heading">Agency Pillars</h4>
			<h2 class="heading">
				Our Team
			</h2>

			<div class="team-members">
				<div class="team-member">
					<img src="img/member-1.png" title="Team Member" alt="Team Member" class="member-img">
					<div class="member-content">
						<p class="member-designation">Member 1</p>
						<h3 class="member-name">Name 1</h3>
						<p class="para-line">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
						</p>
					</div>
				</div>
				<div class="team-member">
					<img src="img/member-1.png" title="Team Member" alt="Team Member" class="member-img">
					<div class="member-content">
						<p class="member-designation">Member 2</p>
						<h3 class="member-name">Name 2</h3>
						<p class="para-line">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
						</p>
					</div>
				</div>
				<div class="team-member">
					<img src="img/member-1.png" title="Team Member" alt="Team Member" class="member-img">
					<div class="member-content">
						<p class="member-designation">Member 3</p>
						<h3 class="member-name">Name 3</h3>
						<p class="para-line">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- --------------------------- Our team -------------------------------- -->



	<!-- ---------------------------- About CTA --------------------------- -->
	<section class="about-cta">
		<div class="container">
			<div class="row">
				<div class="col cta-content-col">
					<h2 class="heading white">
						Talk to an Insurance Agent
					</h2>
					<p class="para-line white">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
					</p>
				</div>
				<div class="col cta-btn-col">
					<button class="btn btn-yellow">
						<a href="contact.php">
							Call Now
						</a>
					</button>
				</div>
			</div>
		</div>
	</section>
	<!-- ---------------------------- About CTA --------------------------- -->


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