<!DOCTYPE html>
<html>
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="../HW11/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../HW11/assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../HW11/assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../HW11/assets/css/flaticon.css"/>
	<link rel="stylesheet" href="../HW11/assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="../HW11/assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="../HW11/assets/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="../HW11/assets/img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<nav>
			<ul class="menu-list">
				<li><a href="../HW11/index.html">Home</a></li>
				<li><a href="../HW11/Hobbies.html">Hobbies</a></li>
				<li><a href="../HW11/Occupation.html">Occupation</a></li>
				<li><a href="../HW11/Music.html">Music</a></li>
				<li class="active"><a href="../HW11/Contact.html">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->
	<br> <br> <br> <br> <br> <br>
	
	
	
	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2><span>Contact Form Results</span></h2>
				<div>
					<?php
					$firstName=$_GET['firstName'];
					$lastName=$_GET['lastName'];
					$email=$_GET['email'];
					$phoneNumber=$_GET['phoneNumber'];
					$username=$_GET['username'];
					$password=$_GET['password'];
					$comment=$_GET['comment'];
					$submit=$_GET['submit'];
					if(isset($submit)){
					echo "<h2>First Name: $firstName</h2>";
					echo "<h2>Last Name: $lastName</h2>";
					echo "<h2>Email: $email</h2>";
					echo "<h2>Phone Number: $phoneNumber</h2>";
					echo "<h2>Username: $username</h2>";
					echo "<h2>Password: $password</h2>";
					echo "<h2>Comment: $comment</h2>";
					}
					else {
						echo "<h2>ERROR NO SUBMISSION</h2";
					}
					?>
				</div> 
				
			</div>
				
				
				</div>
			</div>
	<!-- About section end -->

<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->
	

	



	<!--====== Javascripts & Jquery ======-->
	<script src="../HW11/assets/js/jquery-2.1.4.min.js"></script>
	<script src="../HW11/assets/js/bootstrap.min.js"></script>
	<script src="../HW11/assets/js/magnific-popup.min.js"></script>
	<script src="../HW11/assets/js/owl.carousel.min.js"></script>
	<script src="../HW11/assets/js/circle-progress.min.js"></script>
	<script src="../HW11/assets/js/main.js"></script>
	<script src="../HW11/assets/js/formValidation.js"></script>
</body>
	
	</html>