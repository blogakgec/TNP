<title>Profile</title>


<?php
// checking for session 
session_start();
if($_SESSION['email']== '')
	 {
	 	header('location:index.php');
	 }

?>


<?php
	include('includes/connection.php');
	$name;
	$email=$_SESSION['email'];
	$query="SELECT * FROM profile
			WHERE email='{$email}' ";
	if($query_select=mysqli_query($con,$query))
	{
	}
	else
	{
		echo "failed";
	}
	while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
	{
		$name= $query_result['name'];
		$email= $query_result['email'];
		$place= $query_result['place'];
		$Qualifications= $query_result['qualifications'];
		$phone_no= $query_result['phone_no'];
		$tenth=$query_result['tenth'];
		$twelth=$query_result['twelth'];
	}
?>

<!doctype html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	</head>
	<body>
		<div class="page-header" >
  			<h1 id="page-header">Training and Placement Portal</h1>
		</div>

		<div >
			<ul class="nav nav-tabs" >
	  			<li role="presentation"  style="width:150px; text-align:center;"><a href="main.php">Home</a></li>
	  			<li role="presentation" style="width:150px; text-align:center;" class="active"><a href="profile.php">Profile</a></li>
	  			<li role="presentation" style="width:150px; text-align:center;" ><a href="events.php">Events</a></li>
	  			<li role="presentation" style="width:150px; text-align:center;"><a href="jobs.php">Jobs</a></li>
	  			<li role="presentation" style="width:150px; text-align:center;"><a href="workshops.php">Workshops</a></li>
	  			<li role="presentation" style="width:150px; text-align:center;"><a href="notifications.php">Notifications</a></li>
	  			<li role="presentation" style="width:150px; text-align:center;"><a href="help.php">Help</a></li>
	  			<li role="presentation" style="width:150px; text-align:center;"><a href="buses.php">Buses</a></li>


			</ul>
		</div>
	<!--
	<div id="profile">
		<br>
		<span  id="profile_data" class="glyphicon glyphicon-user" aria-hidden="true">  Name  </span>      <?php echo $name; ?> <br><br>
		<span id="profile_data" class="glyphicon glyphicon-education" aria-hidden="true">  10th percentage </span> <?php echo $tenth; ?><br><br>
		<span id="profile_data" class="glyphicon glyphicon-education" aria-hidden="true">  12th percentage </span> <?php echo $twelth; ?><br><br>
		<span  id="profile_data" class="glyphicon glyphicon-bullhorn" aria-hidden="true">  Qualifications </span>   <?php echo $Qualifications; ?> <br><br>
		<span id="profile_data" class="glyphicon glyphicon-modal-window" aria-hidden="true">  Place  </span>   <?php echo $place; ?><br><br>
		<span id="profile_data" class="glyphicon glyphicon-phone-alt" aria-hidden="true">  Phone number  </span>   <?php echo $phone_no; ?><br><br>
		<span id="profile_data" class="glyphicon glyphicon-envelope" aria-hidden="true">  Email Address  </span> <?php echo $email; ?><br><br>


		<br>  
		

	</div>
-->
	<div id="profile">
		<div id="profile_pic">
			<img src="images/user_pic.png" hieght="200px" width="200px" />
		</div>
		<div id="profile_data">
			<span  id="profile_header" class="glyphicon glyphicon-user" aria-hidden="true">  Name : </span>      <?php echo $name; ?> <br><br>
			<span id="profile_header" class="glyphicon glyphicon-envelope" aria-hidden="true">  Email Address : </span> <?php echo $email; ?><br><br>
			<span id="profile_header" class="glyphicon glyphicon-modal-window" aria-hidden="true">  Place : </span>   <?php echo $place; ?><br><br>
			<span id="profile_header" class="glyphicon glyphicon-phone-alt" aria-hidden="true">  Phone number : </span>   <?php echo $phone_no; ?><br><br>
			<span id="profile_header" class="glyphicon glyphicon-education" aria-hidden="true">  10th percentage : </span> <?php echo $tenth; ?><br><br>
			<span id="profile_header" class="glyphicon glyphicon-education" aria-hidden="true">  12th percentage : </span> <?php echo $twelth; ?><br><br>
			<span  id="profile_header" class="glyphicon glyphicon-bullhorn" aria-hidden="true">  Qualifications : </span>   <?php echo $Qualifications; ?><br> <br>



		</div>

	</div>

	</body>

</html>
