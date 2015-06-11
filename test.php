<?php
	include 'includes/connection.php';
	$source=$_POST['source'];
	$destination=$_POST['destination'];
	$start=0;
	$end=0;
	$query="SELECT * FROM routes WHERE stop_name='{$source}'";
	$query_select= mysqli_query($con,$query);
	while($query_result=mysqli_fetch_array($query_select,MYSQLI_ASSOC))
	{
		echo $query_result['stop_no'];
		echo $query_result['stop_name'];
		echo '<br>';
		$start=$query_result['stop_no'];
		$s= "SELECT * FROM routes WHERE stop_name='{$destination}' AND route_no='{$query_result['route_no']}'";
		$query_s= mysqli_query($con,$s);
			while($query_r=mysqli_fetch_array($query_s,MYSQLI_ASSOC))
				{
					echo $query_r['stop_no'];
					echo $query_r['stop_name'];
					$end=$query_r['stop_no'];
		

				}	
		// echo $query_result['stop_name'];
		// echo $query_result['route_no'];


	}
	echo $start."and".$end;
	$h="SELECT * FROM routes 
		WHERE stop_no >='{$start}' AND stop_no <= '{$end}' AND route_no=2
		ORDER BY stop_no
	";
	echo "<br>via";
	$h_s= mysqli_query($con,$h);
			while($h_r=mysqli_fetch_array($h_s,MYSQLI_ASSOC))
				{
					echo $h_r['stop_name'];
					echo '->';
		

				}	



?>