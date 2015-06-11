<!doctype html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	</head>
	<body>
		<div class="page-header" >
  			<h1 id="page-header">Training and Placement Portal</h1>
		</div>

		<div >
		<ul class="nav nav-tabs" >
  			<li role="presentation" class="active" style="width:150px; text-align:center;"><a href="main.php">Home</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="profile.php">Profile</a></li>
  			<li role="presentation" style="width:150px; text-align:center;" ><a href="events.php">Events</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="jobs.php">Jobs</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="workshops.php">Workshops</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="notifications.php">Notifications</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="help.php">Help</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="buses.php">Buses</a></li>


		</ul>
	</div>

	<div id="left-block">
		<img src="images/notifications.png" />
	</div>
	<div id="right-block">
<?php
	include 'includes/connection.php';
	$min_10=0;
	$min_12=0;
	$min_grad=0;
	$query="SELECT * FROM profile";
	$query_select=mysqli_query($con,$query);
	while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
	{
		$min_10=$query_result['tenth'];
		$min_12=$query_result['twelth'];
		$min_grad=$query_result['grad'];
		$query2="SELECT * FROM jobs
		 WHERE min_per_10 <='{$min_10}'
		 AND min_per_12 <= '{$min_12}'
		 AND min_per_grad <= '{$min_grad}'   ";
		if($query_select2=mysqli_query($con,$query2))
		while($query_result2=mysqli_fetch_array($query_select2,MYSQLI_ASSOC))
		{
			echo '<div id="not_pannel">';
			echo "<h4>You are eligible for placement in:<br></h4>";
			echo "Company name:".$query_result2['company'].'<br>';
			echo "Designation:".$query_result2['post'].'<br>';
			echo "Salary:".$query_result2['salary'].'<br>';
			echo "Place:".$query_result2['place'].'<br>';


		echo "</div>";

		}


	}
	?>
	</div>

	</body>

</html>