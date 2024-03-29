<!-- admin panel page only admin can access -->

<?php
session_start();
if (!$_SESSION['UserLevel'] == USER_LEVEL_ADMIN) {
	header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/insurance.css">
	<script src="https://kit.fontawesome.com/46894f4043.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="icon" href="assets/images/logo.png">
</head>

<body>
	<nav>
		<div class="menu-container nav-wrapper">


			<div class="hamberger">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<ul class="nav-list">
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
					</form>'
			</ul>
		</div>
	</nav>
	<section class="shape">
		<div class="container">
			<h4 class="sub-heading">Admin Panel</h4>
			<h2 class="heading">
				Update Users and Policies
			</h2>

			<div class="services">
				<div class="service-card">
					<div class="service-img card-home"></div>

					<div class="service-details">
						<h2 class="service-name">Update Users</h2>
						<p class="para-line">
							Tousled lettpre tote bag bicycle rights cliche twee hashtg pokpo demos tanero lamina sime
							voti.
						</p>
						<button class="btn btn-yellow">
							<a href="edituser.php">View and Edit Users</a>
						</button>
					</div>
				</div>
				<div class="service-card">
					<div class="service-img card-auto"></div>

					<div class="service-details">
						<h2 class="service-name">Update Policies</h2>
						<p class="para-line">
							Tousled lettpre tote bag bicycle rights cliche twee hashtg pokpo demos tanero lamina sime
							voti.
						</p>
						<button class="btn btn-yellow">
							<a href="">More Details</a>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>