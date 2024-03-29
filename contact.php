<?php
session_start();
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>


	<!-- External CSS link -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/contact.css">

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

	<!-- ------------------------- Breadcrumb ---------------------- -->
	<section class="breadcrumbs">
		<div class="breadcrumb-container">
			<h2 class="hero-heading white">
				Contact Us
			</h2>
		</div>
	</section>
	<!-- ------------------------- Breadcrumb ---------------------- -->


	<!-- ------------------------- map ------------------------------ -->
	<section class="map">
		<div class="container">
			<h4 class="sub-heading">Section Overline</h4>
			<h2 class="heading">
				Get in Touch
			</h2>

			<p class="para-line">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
			</p>

			<p class="para-line map-location">
				<ion-icon name="pin-outline"></ion-icon> Richmond Rd, Bradford, BD7 1DP, University of Bradford
			</p>

			<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.8885701573804!2d-1.7709399057485558!3d53.79147077022284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487be6b5896a3c2b%3A0x3e1c202b0be48ed2!2sUniversity%20of%20Bradford!5e0!3m2!1sen!2suk!4v1710473457458!5m2!1sen!2suk"
				width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>
	<!-- ------------------------- map ------------------------------ -->


	<!-- ------------------------------- Contact Info --------------------------- -->
	<section class="contact-info">
		<div class="container">
			<div class="row">
				<div class="col">
					<ion-icon name="call-outline"></ion-icon>
					<h4 class="info-name white">Support Hotline</h4>
					<h6 class="info-detail white">1234 - 567 - 890</h6>
				</div>
				<div class="col">
					<ion-icon name="chatbubbles-outline"></ion-icon>
					<h4 class="info-name white">Online Support</h4>
					<h6 class="info-detail white">Chat with an Agent</h6>
				</div>
			</div>
		</div>
	</section>
	<!-- ------------------------------- Contact Info --------------------------- -->



	<!-- -------------------------------- Branches ----------------------------- -->
	<section class="branches">
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="img/branch-img-1.png" alt="Branch Image" title="Branch Image" class="branch-img">
					<img src="img/branch-img-1.png" alt="Branch Image" title="Branch Image" class="branch-img">
				</div>
				<div class="col">
					<div class="branch-card">
						<h3 class="branch-name">Location 1</h3>
						<p class="branch-location">
							<ion-icon name="map-outline"></ion-icon> Address 1, Postcode 1, City 1
						</p>
						<p class="branch-number">
							<ion-icon name="call-outline"></ion-icon> (012) 3456-7890
						</p>
						<p class="branch-email">
							<ion-icon name="mail-open-outline"></ion-icon> email1@email.com
						</p>
					</div>
					<div class="branch-card">
						<h3 class="branch-name">Location 2</h3>
						<p class="branch-location">
							<ion-icon name="map-outline"></ion-icon> Address 2, Postcode 2, City 2
						</p>
						<p class="branch-number">
							<ion-icon name="call-outline"></ion-icon> (012) 3456-7890
						</p>
						<p class="branch-email">
							<ion-icon name="mail-open-outline"></ion-icon> email2@email.com
						</p>
					</div>
					<div class="branch-card">
						<h3 class="branch-name">Location 3</h3>
						<p class="branch-location">
							<ion-icon name="map-outline"></ion-icon> Address 3, Postcode 3, City 3
						</p>
						<p class="branch-number">
							<ion-icon name="call-outline"></ion-icon> (012) 3456-7890
						</p>
						<p class="branch-email">
							<ion-icon name="mail-open-outline"></ion-icon> email3@email.com
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- -------------------------------- Branches ----------------------------- -->



	<!-- ---------------------- Footer ------------------ -->
	<footer>
		<div class="footer-container">
			<p class="para-line white">Copyright © 2023</p>
		</div>
	</footer>
	<!-- ----------------------- Footer ------------------- -->


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