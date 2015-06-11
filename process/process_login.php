<?php
	include('includes/connection.php');
	$username=$_POST['username'];
	$password=$_POST['password'];

	echo "hi dere";
	$query="SELECT * FROM users";
	$query_select=mysqli_query($con,$query);
	var_dump($query_select);
	while($query_result= mysqli_fetch_array($query_select,MYSQLI_ASSOC))
	{
		if($query_result['username'] == $username)
		{
			echo "username found";
			if($query_result['password'] == $password)
			{
				echo("successfully logged in");
				//header();
			}
		}
	}

?>