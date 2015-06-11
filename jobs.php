<!doctype html>
<html>
	<head>
		<title>Jobs</title>
		<style type="text/css">
  body {
    background-image: url('images/jb.jpg');
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
  			<li role="presentation" style="width:150px; text-align:center;" ><a href="events.php">Events</a></li>
  			<li role="presentation" style="width:150px; text-align:center;" class="active"><a href="jobs.php">Jobs</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="workshops.php">Workshops</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="notifications.php">Notifications</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="help.php">Help</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="buses.php">Buses</a></li>


		</ul>
	</div>
	<div class="panel panel-default" id="events-pannel">
	<?php
		include('includes/connection.php');
		$query="SELECT * FROM jobs";
		$query_select=mysqli_query($con,$query);
		while ($query_result= mysqli_fetch_array($query_select,MYSQLI_ASSOC)) 
		{
			
   			echo '<div class=\"panel-body\">';
      		echo 'Compant name:   '.$query_result['company']; 
      		echo '<br>';
      		echo 'Designation:  '.$query_result['post'];
      		echo '<br>';
      		echo 'Place of work:  '.$query_result['place'];
      		echo '<br>';
      		echo 'Salary offered:  '.$query_result['salary'];
      		echo '<br>';
   			echo "</div>";
			echo '<br><hr>';
		}
	?>
	</div>
	</body>

</html>


