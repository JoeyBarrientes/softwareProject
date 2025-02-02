<!DOCTYPE html>
<html>
<head>
	


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<!-- Header section -->
	
	<!-- Header section end -->
	<br> <br> <br> <br> <br> <br>
	
	
	
	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<?php 
				session_start();
				ini_set('display_errors', 1);
				ini_set('display_startup_errors', 1);
				error_reporting(E_ALL);
				if (!isset($_POST['submit'])){
					
				echo '<div class="section-title">
					<h2><span>Contact</span></h2>
				</div>';
				echo '<form action ="" method="post">';
				if(isset($_GET['fnameErr']))
					echo '<div class="form-group has-error" id="firstNameGroup">
						<label class="control-label" style="color:white" >First Name:</label>
						<input type="text" class="form-control" id="firstName" name="firstName">
						<span class="help-block" id="firstStatus">First Name cannot be blank!</span>
					</div>';
				else{
					if(isset($_SESSION['firstName'])){
						echo '<div class="form-group has-success" id="firstNameGroup">';
						echo '<label class="control-label" style="color:white" >First Name:</label>';
						echo	'<input type="text" class="form-control" id="firstName" name="firstName" value="'.$_SESSION['firstName'].'">';
						echo	'<span class="help-block" id="firstStatus"></span>';
						echo '</div>';
					}
					else{
						echo '<div class="form-group" id="firstNameGroup">
						<label class="control-label" style="color:white" >First Name:</label>
						<input type="text" class="form-control" id="firstName" name="firstName">
						<span class="help-block" id="firstStatus"></span>
					</div>';
					}
				}
				if(isset($_GET['lnameErr']))
					echo '<div class="form-group has-error" id="lastNameGroup">
						<label class="control-label" style="color:white">Last Name:</label>
						<input type="text" class="form-control" id="lastName" name="lastName">
						<span class="help-block" id="lastStatus">Last Name cannot be blank</span>
					</div>';
				else{
					if(isset($_SESSION['lastName'])){
						
					
						echo '<div class="form-group has-success" id="lastNameGroup">';
						echo	'<label class="control-label" style="color:white">Last Name:</label>';
						echo	'<input type="text" class="form-control" id="lastName" name="lastName" value="'.$_SESSION['lastName'].'" >';
						echo '<span class="help-block" id="lastStatus"></span>';
						echo '</div>';
					}
				else{
						echo '<div class="form-group" id="lastNameGroup">
						<label class="control-label" style="color:white">Last Name:</label>
						<input type="text" class="form-control" id="lastName" name="lastName">
						<span class="help-block" id="lastStatus"></span>
						</div>';
				}
				}
				if(isset($_GET['emailErr']))
						echo '<div class="form-group has-error" id="emailGroup">
							<label class="control-label" style="color:white">Email:</label>
							<input type="text" class="form-control" id="email" name="email">
							<span class="help-block" id="emailStatus">Email cannot be blank</span>
						</div>';
				else{
					if(isset($_SESSION['email'])){
						echo '<div class="form-group has-success" id="emailGroup">';
						echo	'<label class="control-label" style="color:white">Email:</label>';
						echo	'<input type="text" class="form-control" id="email" name="email" value="'.$_SESSION['email'].'">';
						echo	'<span class="help-block" id="emailStatus"></span>';
						echo '</div>';
					}
					else{
						echo '<div class="form-group" id="emailGroup">
						<label class="control-label" style="color:white">Email:</label>
						<input type="text" class="form-control" id="email" name="email" >
						<span class="help-block" id="emailStatus"></span>
					</div>';
					}
				}
				if(isset($_GET['phoneNumberErr']))
					echo '<div class="form-group has-error" id="phoneNumberGroup">
						<label class="control-label" style="color:white">Phone Number:</label>
						<input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
						<span class="help-block" id="phoneNumberStatus">Phone Number cannot be blank</span>
					</div>';
				else{
					if(isset($_SESSION['phoneNumber'])){
					echo '<div class="form-group has-success" id="phoneNumberGroup">';
					echo	'<label class="control-label" style="color:white">Phone Number:</label>';
					echo	'<input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="'.$_SESSION['phoneNumber'].'">';
					echo	'<span class="help-block" id="phoneNumberStatus"></span>';
					echo	'</div>';
					}
					else{
						echo '<div class="form-group" id="phoneNumberGroup">
						<label class="control-label" style="color:white">Phone Number:</label>
						<input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
						<span class="help-block" id="phoneNumberStatus"></span>
					</div>';
						
					}
				}
					   
				if(isset($_GET['usernameErr']))	
					echo '<div class="form-group has-error" id="usernameGroup">
						<label class="control-label" style="color:white">Username:</label>
						<input type="text" class="form-control" id="username" name="username">
						<span class="help-block" id="usernameStatus">Username cannot be blank</span>
					</div>';
				else{
					if(isset($_SESSION['username'])){
					echo '<div class="form-group has-success" id="usernameGroup">';
					echo	'<label class="control-label" style="color:white">Username:</label>';
					echo	'<input type="text" class="form-control" id="username" name="username" value="'.$_SESSION['username'].'">';
					echo	'<span class="help-block" id="usernameStatus"></span>';
					echo '</div>';
					}
					else{
						echo '<div class="form-group" id="usernameGroup">
						<label class="control-label" style="color:white">Username:</label>
						<input type="text" class="form-control" id="username" name="username">
						<span class="help-block" id="usernameStatus"></span>
					</div>';
					}
				}
				if(isset($_GET['passwordErr']))
					echo '<div class="form-group has-error" id="passwordGroup">
						<label class="control-label" style="color:white">Password:</label>
						<input type="text" class="form-control" id="password" name="password">
						<span class="help-block" id="passwordStatus">Password cannot be blank</span>
					</div>';
				else
					if(isset($_SESSION['password'])){
						echo '<div class="form-group has-success" id="passwordGroup">';
						echo '<label class="control-label" style="color:white">Password:</label>';
						echo '<input type="text" class="form-control" id="password" name="password" value="'.$_SESSION['password'].'">';
						echo '<span class="help-block" id="passwordStatus"></span>';
					echo '</div>';
					}
					else{
						echo '<div class="form-group" id="passwordGroup">
						<label class="control-label" style="color:white">Password:</label>
						<input type="text" class="form-control" id="password" name="password">
						<span class="help-block" id="passwordStatus"></span>
					</div>';
					}
				if(isset($_GET['commentErr']))
					echo '<div class="form-group has-error" id="commentsGroup">
						<label class="control-label" style="color:white">Comments:</label>
						<input type="text" class="form-control" id="comments" name="comment">
						<span class="help-block" id="commentsStatus">Comments cannot be blank</span>
					</div>'; 
				else
					if(isset($_SESSION['comment'])){
					echo '<div class="form-group has-success" id="commentsGroup">';
					echo	'<label class="control-label" style="color:white">Comments:</label>';
					echo	'<input type="text" class="form-control" id="comments" name="comment" value="'.$_SESSION['comment'].'">';
					echo	'<span class="help-block" id="commentsStatus"></span>';
					echo '</div>'; 
					}
					else{
						echo '<div class="form-group" id="commentsGroup">
						<label class="control-label" style="color:white">Comments:</label>
						<input type="text" class="form-control" id="comments" name="comment">
						<span class="help-block" id="commentsStatus"></span>
					</div>'; 
					}
					echo '<button class="btn btn-defualt" type="submit" name="submit" value="submit">Submit</button>
				</form>
				<hr>';
				
				 
				} 
				else{
					$errors=array();
					$firstName=$_POST['firstName'];
					if ($firstName == NULL)
						$errors[]="fnameErr=null";
					else
						$_SESSION['firstName']=$firstName;
					$lastName=$_POST['lastName'];
					if ($firstName == NULL)
						$errors[]="lnameErr=null";
					else
						$_SESSION['lastName']=$lastName;
					$email=$_POST['email'];
					if ($email==NULL)
						$errors[]="emailErr=null";
					else
						$_SESSION['email']=$email;
					$phoneNumber=$_POST['phoneNumber'];
					if ($phoneNumber==NULL)
						$errors[]="phoneNumberErr=null";
					else
						$_SESSION['phoneNumber']=$phoneNumber;
					$username=$_POST['username'];
					if ($username==NULL)
						$errors[]="usernameErr=null";
					else
						$_SESSION['username']=$firstName;
					$password=$_POST['password'];
					if ($password==NULL)
						$errors[]="passwordErr=null";
					else
						$_SESSION['firstName']=$firstName;
					$comment=addslashes($_POST['comment']);
					if ($comment==NULL)
						$errors[]="commentErr=null";
					else
						$_SESSION['comment']=$comment;
					$submit=$_POST['submit'];
					if (count($errors)>0){
						$errorString=implode("&",$errors);
						//header("Location: Contact.php?$errorString");
						redirect("Contact.php?$errorString");
					}
					else{
					include("functions.php");
					$dblink = db_connect("contact_data");	
					$sql="Insert into `contact_info` (`first_name`, `last_name`, `email`, `phone_number`, `username`, `password`, `comments`) values ('$firstName', '$lastName', '$email', '$phoneNumber','$username', '$password', '$comment' )";
					$dblink->query($sql) or
						die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
					echo"<h2>Data sent to database!</h2>";
					//echo "<h1>Form Results</h1>";
					//echo "<h2>First Name: $firstName</h2>";
					//echo "<h2>Last Name: $lastName</h2>";
					//echo "<h2>Email: $email</h2>";
					//echo "<h2>Phone Number: $phoneNumber</h2>";
					//echo "<h2>Username: $username</h2>";
					//echo "<h2>Password: $password</h2>";
					//echo "<h2>Comment: $comment</h2>";
					}
				}
				
				
				?>
				
				
				</div>
			<div class="hero-center">
					<div class="col-md-12 text-center">
						<p>If you need to reach me please refer to the link right <a href="https://www.google.com/imgres?q=Kiss%20me%20thru%20the%20phone&imgurl=https%3A%2F%2Fcdns-images.dzcdn.net%2Fimages%2Fcover%2F65aa844bb82a67272629b58dbc38a8b9%2F1900x1900-000000-80-0-0.jpg&imgrefurl=https%3A%2F%2Fwww.deezer.com%2Fus%2Ftrack%2F2675175&docid=XKn0METVGnX3OM&tbnid=d-yXojhWZ-W-_M&vet=12ahUKEwiP_IOSsdqIAxVMLEQIHZeoB98QM3oECBwQAA..i&w=1200&h=1200&hcb=2&ved=2ahUKEwiP_IOSsdqIAxVMLEQIHZeoB98QM3oECBwQAA">here.<br></a></p>
					</div>
					
				</div>
			</div>
	<!-- About section end -->

<!-- Footer section -->
	
	<!-- Footer section end -->
	

	



	<!--====== Javascripts & Jquery ======-->
	<script src="assets/js/jquery-2.1.4.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/circle-progress.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
	
	</html>