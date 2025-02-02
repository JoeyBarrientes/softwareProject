<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
<?php
echo'<div class="about-section">>';
echo'<div class="overlay"></div>';
echo'<br><br><br><br><br>';
echo'<div class="about-contant">';
echo'<div class="container">';
echo '<div class="section-title">
					<h2><span>lOG IN</span></h2>
				</div>';
echo'<form method="post" action="">';
echo'<form method="post" action="">';
echo'<div class="form-group">';
echo'<label class="control-label" style="color:white">Username</label>';
echo'<input name="username" type="text" class="form-control">';
echo'<div id="unFeedback"></div>';
echo'</div>';
echo'<form method="post" action="">';
echo'<div class="form-group">';
echo'<label class="control-label" style="color:white">Password:</label>';
echo'<input name="password" type="password" class="form-control">';
echo'<div id="pwFeedback"></div>';
echo'</div>';
echo'<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>';
echo'</form>';
echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';
if(isset($_POST['submit'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			include("functions.php");
			$dblink=db_connect('contact_data');
			$salt="CS4413fa24";
			$hash=hash('sha256',$username.$password.$salt);
			$sql="Select `auto_id` from `accounts` where hash='$hash'";
			$result=$dblink->query($sql) or 
				die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
			if ($result->num_rows>0){
				$data=$result->fetch_array(MYSQLI_ASSOC);
				$SIDsalt=microtime();
				$sid=hash('sha256',$hash.$SIDsalt);
				$sql="Update `accounts` set `session_id`='$sid' where `auto_id`='$data[auto_id]'";
				$dblink->query($sql) or 
					die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
				redirect("index.php?page=results&sid=$sid");
			}
			else{
				redirect("index.php?page=login&error=authError");
			}

	
	
}


?>