<script src="assets/js/jquery-3.5.1.js"></script>
<?php
if(isset($_GET['sid'])){
include("functions.php");
$dblink=db_connect('contact_data');
$sid=$_GET['sid'];
$sql="Select `auto_id` from `accounts` where `session_id`='$sid'";
$result=$dblink->query($sql) or 
				die("<h2>Something went wrong with $sql<br>".$dblink->error."</h2>");
if($result->num_rows<=0)
	redirect("index.php?page=login&error=invalidSID");
echo'<div class="about-section">>';
echo'<div class="overlay"></div>';
echo'<h2>Database Enteries</h2>';
	echo'<div class="about-contant">';
	echo'<div class="container">';
	echo'<div class="section-title">';
	echo'<h2><span>Database Enteries</span></h2>';
	echo'<table class="table table-stripped">';
	echo'<thead>';
	echo'<tr>';
	echo'<th>Auto ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Username</th><th>Password</th><th>Comments</th>';
	echo'</thead>';
	echo'<tbody id="results">';
	echo'</tbody>';
echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';
//echo'</section>';
}
else{
	redirect("index.php?page=login&error=invalidSID");
}
?>

<script>
	function refresh_data(){
		$.ajax({
			type:'post',
			url: 'https://ec2-18-191-48-34.us-east-2.compute.amazonaws.com/HW20/query_contacts.php',
			success: function(data){
				$('#results').html(data);
			}
		});
	}
	setInterval(function(){ refresh_data();},500);

</script>

	
