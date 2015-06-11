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
  			<li role="presentation" class="active" style="width:150px; text-align:center;"><a href="main.php">Home</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="profile.php">Profile</a></li>
  			<li role="presentation" style="width:150px; text-align:center;" ><a href="events.php">Events</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="jobs.php">Jobs</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="workshops.php">Workshops</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="notifications.php">Notifications</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="help.php">Help</a></li>
  			<li role="presentation" style="width:150px; text-align:center;"><a href="buses.php">Buses</a></li>


		</ul>
		<div id="table">
			<table id="table_design">
				
							<?php

								include 'includes/connection.php';
								$query="SELECT * FROM routes_info";
								$query_select=mysqli_query($con,$query);
								while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
								{
									echo "<tr>";
											echo "<td>";
											echo $query_result['sno'];
											echo "</td>";
											

											echo "<td>";
											echo $query_result['stop_name'];
											echo "</td>";
									echo "</tr>";

								}



							?>
			</table>
