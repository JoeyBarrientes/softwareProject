<!DOCTYPE html>
<html>
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets/css/flaticon.css"/>
	<link rel="stylesheet" href="assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="assets/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<!-- Header section -->
	<?php
		include("navigation.php");
		
	?>
	
	
	<?php
	if (isset($_GET['page'])){
		$page=$_GET['page'];
		switch($page){
			case "Hobbies":
				include("Hobbies.php");
				break;
			case "Music":
				include("Music.php");
				break;
			case "Occupation":
				include("Occupation.php");
				break;
			case "Contact":
				include("Contact.php");
				break;
			case "results":
				include("results.php");
				break;
			case "login":
				include("login.php");
				break;
			default:
				include("home.php");
				break;
		}
	}
	else
		include("home.php");
	?>

	<!-- Header section end -->
	

	
<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->
	

	



	<!--====== Javascripts & Jquery ======-->
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/circle-progress.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/add-content.js"> </script>
</body>
	 
	</html>
