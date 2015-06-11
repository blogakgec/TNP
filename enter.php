<?php
	include 'includes/connection.php';
	$purpose=$_POST['purpose']; 
	$data=$_POST['data'];
	$name=$_POST['name'];

	echo $purpose;
	echo $data;


	if($purpose == 'workshop')
	{
		echo "workshop selected";
		$query="INSERT INTO workshops VALUES('{$name}','{$data}')";

	}
	else if($purpose== 'events')
	{
		echo "events selected";
		$query="INSERT INTO events VALUES('{$name}','{$data}')";

	}
	if($mysqli_select=mysqli_query($con,$query))
	{
		echo "successful";
		header('location:admin_page.php');
	}

	else
		echo "failed";

?>