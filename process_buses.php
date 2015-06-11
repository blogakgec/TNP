<?php include 'includes/header.php'; ?>

<style type="text/css">
  body {
    background-image: url('images/bus_background.jpg');
    background-repeat: none;
    background-size: cover;
  }
  </style>
<div >
		<ul class="nav nav-tabs" >
  			<li role="presentation"  style="width:150px; text-align:center;"><a href="main.php">Home</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="profile.php">Profile</a></li>
  			<li role="presentation" style="width:150px; text-align:center;" ><a href="events.php">Events</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="jobs.php">Jobs</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="workshops.php">Workshops</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="notifications.php">Notifications</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="help.php">Help</a></li>
  			<li role="presentation" style="width:150px; text-align:center;" class="active"><a href="buses.php">Buses</a></li>


		</ul>
		<?php
			include 'includes/connection.php';
			$route_no=$_POST['route_no'];
			session_start();
			$_SESSION['route_no']=$route_no;
		?>
		<form style="margin-left:450px;  width:500px;" id="buses_form" method="POST" action="process_via.php">
				<br>
				<span style="font:20px; font-family:verdana; color:White;"> Find you Ride<br></span>
				<span style="font:20px; font-family:verdana; color:White;"> Source selected: <?php echo $_SESSION['source']; ?> <br></span>
				<span style="font:20px; font-family:verdana; color:White;"> Source selected: <?php echo $_SESSION['route_no']; ?> <br></span>
				
				<select class="form-control" style=" margin-top:15px;" name="des">
					<option value="">Select your Destination</option>
					<?php
					include 'includes/connection.php';
					$query="SELECT stop_name FROM routes WHERE route_no='{$route_no}' ";
					$query_select=mysqli_query($con,$query);
				while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
				{
					
					echo "<option value='{$query_result['stop_name']}'>".$query_result['stop_name']."</option>";
				}
				?>
				<input type="submit" class="form-control" value="Find!!" style="margin-top:20px;" />
				<div style="margin-top:20px;">
				<a href="all_buses.php" style="margin-top:20px; color:white; text-decoration:none;">Find all bus stops</a>
			</div>



			</select>
		</form>

