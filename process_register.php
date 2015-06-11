<?php
	include('includes/connection.php');
	session_start();
	$name=$_REQUEST['name'];
	$password=$_REQUEST['password'];
	$quali=$_REQUEST['quali'];
	$phone_no=$_REQUEST['phone_no'];
	$email=$_REQUEST['email'];
	$place=$_REQUEST['place'];
	$tenth=$_REQUEST['tenth'];
	$twelth=$_REQUEST['twelth'];
	$grad=$_REQUEST['grad'];
	echo $grad;
	echo $name;

	$query="INSERT INTO profile
			VALUES ('{$name}','{$email}','{$place}','{$quali}','{$phone_no}','{$tenth}','{$twelth}','{$grad}') ";
				var_dump($query);
	$query2="INSERT INTO users 
			 VALUES ('{$email}','{$password}') ";
	if($query_select=mysqli_query($con,$query))
	{
		if($query_select=mysqli_query($con,$query2))
		echo "successful";
		$_SESSION['email']=$email;
		header('location:main.php');
	}
	else
	{
		echo "failed";
	}
?>