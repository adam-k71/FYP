<?php
session_start();
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News</title>

	<!-- External CSS link -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/news.css">

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

	<!-- --------------------------- News ---------------------------- -->
	<section class="news">
		<div class="container">
			<h2 class="heading">News</h2>

			<div class="news-catalogue">
				<div class="news-card">
					<a href="news-view.php">
						<img src="imgnews-1.png" alt="Post featured image" title="Post featured image"
							class="featured-image">
						<h2 class="heading">How Your Insurance Will Be Affected</h2>
					</a>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae...<a
							href="news.php">Read More</a>
					</p>
				</div>
				<div class="news-card">
					<a href="news-view.php">
						<img src="imgnews-1.png" alt="Post featured image" title="Post featured image"
							class="featured-image">
						<h2 class="heading">How Your Insurance Will Be Affected</h2>
					</a>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae...<a
							href="news.php">Read More</a>
					</p>
				</div>
				<div class="news-card">
					<a href="news-view.php">
						<img src="imgnews-1.png" alt="Post featured image" title="Post featured image"
							class="featured-image">
						<h2 class="heading">How Your Insurance Will Be Affected</h2>
					</a>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae...<a
							href="news.php">Read More</a>
					</p>
				</div>
				<div class="news-card">
					<a href="news-view.php">
						<img src="imgnews-1.png" alt="Post featured image" title="Post featured image"
							class="featured-image">
						<h2 class="heading">How Your Insurance Will Be Affected</h2>
					</a>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias repudiandae...<a
							href="news.php">Read More</a>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- --------------------------- News ---------------------------- -->



	<!-- ---------------------------- Footer---------------------------- -->
	<footer>
		<div class="footer-container">
			<p class="para-line white">Copyright © 2023</p>
		</div>
	</footer>
	<!-- ---------------------------- Footer---------------------------- -->



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