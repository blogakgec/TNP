<!doctype html>
<html>
	<head>
		<title>Events</title>
		<style type="text/css">
  		body {
			    background-image: url('images/ev.jpg');
			    background-repeat: none;
			    background-size: cover;
			  }


		</style>

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
  			<li role="presentation"  style="width:150px; text-align:center;"><a href="main.php">Home</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="profile.php">Profile</a></li>
  			<li role="presentation" style="width:150px; text-align:center;" class="active"><a href="events.php">Events</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="jobs.php">Jobs</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="workshops.php">Workshops</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="notifications.php">Notifications</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="help.php">Help</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="buses.php">Buses</a></li>


		</ul>
	</div>
	<?php
		include 'includes/connection.php';
		$query= "SELECT * FROM events";
		if($query_select=mysqli_query($con,$query))
		{
			
		}
		else
		{
			echo "failed";
		}
		while($query_result= mysqli_fetch_array($query_select,MYSQLI_ASSOC))
		{
			
			echo "<div class=\"panel panel-default\" id=\"events-pannel\">";
  			echo  "<div class=\"panel-body\">";
  			echo $query_result['event_name'];
  			echo '<br>';
			echo $query_result['event_description'];

  			// put your data here
    		echo "</div></div>";
		}

	?>


		>
	<div>
		<!-- Events bar-->
	</div>

	<?php include 'includes/footer.php'; ?>

	


