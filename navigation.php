<?php
echo '<header class="header-section">';
		echo '<div class="logo">';
			echo '<img src="assets/img/logo.png" alt=""><!-- Logo -->';
		echo '</div>';
		echo'<!-- Navigation -->';
		echo'<nav>';
			echo '<ul class="menu-list">';
		$page=$_GET['page'];
		switch($page){
			case "Hobbies":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li class="active"><a href="index.php?page=Hobbies">Hobbies</a></li>';
				echo'<li><a href="index.php?page=Music">Music</a></li>';
				echo'<li><a href="index.php?page=Occupation">Occupation</a></li>';
				echo'<li><a href="index.php?page=Contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
			case "Music":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=Hobbies">Hobbies</a></li>';
				echo'<li class="active"><a href="index.php?page=Music">Music</a></li>';
				echo'<li><a href="index.php?page=Occupation">Occupation</a></li>';
				echo'<li><a href="index.php?page=Contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
			case "Occupation":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=Hobbies">Hobbies</a></li>';
				echo'<li><a href="index.php?page=Music">Music</a></li>';
				echo'<li class="active"><a href="index.php?page=Occupation">Occupation</a></li>';
				echo'<li><a href="index.php?page=Contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
			case "Contact":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=Hobbies">Hobbies</a></li>';
				echo'<li><a href="index.php?page=Music">Music</a></li>';
				echo'<li><a href="index.php?page=Occupation">Occupation</a></li>';
				echo'<li class="active"><a href="index.php?page=Contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
			case "Login":
				echo'<li><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=Hobbies">Hobbies</a></li>';
				echo'<li><a href="index.php?page=Music">Music</a></li>';
				echo'<li><a href="index.php?page=Occupation">Occupation</a></li>';
				echo'<li><a href="index.php?page=Contact">Contact</a></li>';
				echo'<li class="active"><a href="index.php?page=login">Login</a></li>';
				break;
			default:
				echo'<li class="active"><a href="index.php">Home</a></li>';
				echo'<li><a href="index.php?page=Hobbies">Hobbies</a></li>';
				echo'<li><a href="index.php?page=Music">Music</a></li>';
				echo'<li><a href="index.php?page=Occupation">Occupation</a></li>';
				echo'<li><a href="index.php?page=Contact">Contact</a></li>';
				echo'<li><a href="index.php?page=login">Login</a></li>';
				break;
		}
		
		
			echo '</ul>';
		echo '</nav>';
	echo'</header>';
	
?>