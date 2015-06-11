<?php
	include('includes/connection.php');

	$email=$_REQUEST['email'];
	$data=$_REQUEST['data'];
	echo $email;
	echo $data;
	

	$query="INSERT INTO query(email,query_text)
			VALUES('{$email}','{$data}') ";
	if($query_select=mysqli_query($con,$query))
	{
		echo "successful";
		header('location:main.php');
	}
	else
	{
		echo "feed unsuccessful";
	}
?>