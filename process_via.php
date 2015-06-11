
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


<?php
	include 'includes/connection.php';
	session_start();
	$source=$_SESSION['source'];
	$destination=$_POST['des'];
	$route_no=$_SESSION['route_no'];
	// echo $source;
	// echo $destination;

	$start=0;
	$end=0;
	$query="SELECT stop_no FROM routes WHERE stop_name='{$source}' AND route_no='{$route_no}'";
	$query_select= mysqli_query($con,$query);
	while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
	{
		
		$start=$query_result['stop_no'];
		//echo $query_result['stop_no'];
	}


	$s= "SELECT * FROM routes WHERE stop_name='{$destination}' AND route_no='$route_no'";
		$query_s= mysqli_query($con,$s);
			while($query_r=mysqli_fetch_array($query_s,MYSQLI_ASSOC))
				{
					// echo "ending stop no";
					// echo $query_r['stop_no'];
					$end=$query_r['stop_no'];
		

				}	


	$exchange;
	if($start==$end)
	{
		echo "source and destination cant be same";
	}
	if($start>$end)
	{
		$exchange=$start;
		$start=$end;
		$end=$exchange;
	}			
	//echo $start."and".$end;
		



?>





		<div id="table">
			<table id="table_design">
							<tr>
								<td><?php echo "source" ?> </td>
								<td><?php echo $source; ?></td>
							</tr>
							<?php
							$i=1;
							$h="SELECT * FROM routes 
								WHERE stop_no >='{$start}' AND stop_no <= '{$end}' AND route_no='2'
								ORDER BY stop_no
								";
							$h_s= mysqli_query($con,$h);
							while($h_r=mysqli_fetch_array($h_s,MYSQLI_ASSOC))
							{
							echo "<tr>";
								echo "<td>";
								echo $i;
								echo "</td>";

								echo "<td>";
								echo $h_r['stop_name'];
								echo "</td>";
							echo "</tr>";
							$i=$i+1;

							}
							$i=0;
							?>
							<tr>
								<td><?php echo "Destination" ?> </td>
								<td><?php echo $destination; ?></td>
							</tr>
			</table>


























