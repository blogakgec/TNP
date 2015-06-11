<?php
	include('includes/connection.php');
	$salary=$_POST['salary'];
	$company=$_POST['c_name'];
	echo $company;
	$post=$_POST['post'];
	$place=$_POST['place'];
	$min_per_10=$_POST['min_per_10'];
	$min_per_12=$_POST['min_per_12'];
	$min_per_grad=$_POST['min_per_grad'];
	$query="INSERT INTO jobs
			VALUES('{$company}','{$post}','{$salary}','{$place}','{$min_per_10}','{$min_per_12}','{$min_per_grad}')";
	if($query_select=mysqli_query($con,$query))
	{
		echo "susseccfull";
		header('location:admin_page.php');
	}


?>