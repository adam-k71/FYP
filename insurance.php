<?php
session_start();
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insurance</title>

	<!-- External CSS link -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/insurance.css">


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
				Insurance Services
			</h2>
		</div>
	</section>
	<!-------------------- Breadcrumb section ------------------->


	<!-------------------- Future shape section ----------------->
	<section class="shape">
		<div class="container">
			<h4 class="sub-heading">We shape the future</h4>
			<h2 class="heading">
				How we can help you
			</h2>

			<div class="services">
				<div class="service-card">
					<div class="service-img card-auto"></div>

					<div class="service-details">
						<h2 class="service-name">Auto Insurance</h2>
						<p class="para-line">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Accusamus perspiciatis vero libero.
						</p>
						<button class="btn btn-yellow">
							<a href="insurance-details.php">More Details</a>
						</button>
					</div>
				</div>
				<div class="service-card">
					<div class="service-img card-auto"></div>

					<div class="service-details">
						<h2 class="service-name">Auto Insurance</h2>
						<p class="para-line">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Accusamus perspiciatis vero libero.
						</p>
						<button class="btn btn-yellow">
							<a href="insurance-details.php">More Details</a>
						</button>
					</div>
				</div>
				<div class="service-card">
					<div class="service-img card-auto"></div>

					<div class="service-details">
						<h2 class="service-name">Auto Insurance</h2>
						<p class="para-line">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Accusamus perspiciatis vero libero.
						</p>
						<button class="btn btn-yellow">
							<a href="insurance-details.php">More Details</a>
						</button>
					</div>
				</div>
				<div class="service-card">
					<div class="service-img card-auto"></div>

					<div class="service-details">
						<h2 class="service-name">Auto Insurance</h2>
						<p class="para-line">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Accusamus perspiciatis vero libero.
						</p>
						<button class="btn btn-yellow">
							<a href="insurance-details.php">More Details</a>
						</button>
					</div>
				</div>
				<div class="service-card">
					<div class="service-img card-auto"></div>

					<div class="service-details">
						<h2 class="service-name">Auto Insurance</h2>
						<p class="para-line">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Accusamus perspiciatis vero libero.
						</p>
						<button class="btn btn-yellow">
							<a href="insurance-details.php">More Details</a>
						</button>
					</div>
				</div>
				<div class="service-card">
					<div class="service-img card-auto"></div>

					<div class="service-details">
						<h2 class="service-name">Auto Insurance</h2>
						<p class="para-line">
							Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Accusamus perspiciatis vero libero.
						</p>
						<button class="btn btn-yellow">
							<a href="insurance-details.php">More Details</a>
						</button>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-------------------- Future shape section ----------------->



	<!-------------------- FAQ section -------------------------->
	<section class="faqs">
		<div class="container">
			<h4 class="sub-heading white">Section overline</h4>
			<h2 class="heading white">
				Most Asked Questions
			</h2>

			<div class="let-them-ask">
				<div class="row faq-row">
					<div class="col">
						<div class="faq">
							<div class="question">
								<h3>1. Question 1</h3>

								<svg width="15" height="10" viewBox="0 0 42 25">
									<path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
								</svg>
							</div>
							<div class="answer">
								<p class="para-line white">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias
									repudiandae.
								</p>
							</div>
						</div>

						<div class="faq">
							<div class="question">
								<h3>2. Question 2</h3>

								<svg width="15" height="10" viewBox="0 0 42 25">
									<path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
								</svg>
							</div>
							<div class="answer">
								<p class="para-line white">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias
									repudiandae. </p>
							</div>
						</div>

						<div class="faq">
							<div class="question">
								<h3>3. Question 3</h3>

								<svg width="15" height="10" viewBox="0 0 42 25">
									<path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
								</svg>
							</div>
							<div class="answer">
								<p class="para-line white">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias
									repudiandae. </p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="faq">
							<div class="question">
								<h3>4. Question 4</h3>

								<svg width="15" height="10" viewBox="0 0 42 25">
									<path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
								</svg>
							</div>
							<div class="answer">
								<p class="para-line white">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias
									repudiandae. </p>
							</div>
						</div>

						<div class="faq">
							<div class="question">
								<h3>5. Question 5</h3>

								<svg width="15" height="10" viewBox="0 0 42 25">
									<path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
								</svg>
							</div>
							<div class="answer">
								<p class="para-line white">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias
									repudiandae. </p>
							</div>
						</div>

						<div class="faq">
							<div class="question">
								<h3>6. Question 6</h3>

								<svg width="15" height="10" viewBox="0 0 42 25">
									<path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
								</svg>
							</div>
							<div class="answer">
								<p class="para-line white">
									Lorem ipsum dolor sit amet consectetur adipisicing elit.
									Accusamus perspiciatis vero libero, aliquam necessitatibus soluta neque, alias
									repudiandae. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-------------------- FAQ section -------------------------->



	<!-------------------- Additional services ---------------->
	<section class="additional">
		<div class="container">
			<div class="row additional-row">
				<div class="col additional-service">
					<h4 class="sub-heading">We shape the future</h4>
					<h2 class="heading">
						Additional Services
					</h2>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perspiciatis vero libero.
					</p>
				</div>
				<div class="col additional-service">
					<img src="imgadditional-service.png" title="Additional Services" alt="Additional Services"
						class="addi-service-img">
					<h4 class="addi-ser-heading">Service 1</h4>
					<hr>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perspiciatis vero libero
					</p>
				</div>
				<div class="col additional-service">
					<img src="imgadditional-service.png" title="Additional Services" alt="Additional Services"
						class="addi-service-img">
					<h4 class="addi-ser-heading">Service 2</h4>
					<hr>
					<p class="para-line">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perspiciatis vero libero
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-------------------- Additional services ---------------->


	<!-- ---------------------- Footer ------------------ -->
	<footer>
		<div class="footer-container">
			<p class="para-line white">Copyright © 2023</p>
		</div>
	</footer>
	<!-- ----------------------- Footer ------------------- -->


	<!-------------- Importing JS file -------------->
	<script src="js/script.js"></script>


	<script>
		// FAQ script
		const faqs = document.querySelectorAll(".faq");

		faqs.forEach(faq => {
			faq.addEventListener("click", () => {
				faq.classList.toggle("active");
			})
		})
	</script>

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