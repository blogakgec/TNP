<?php

	$username=$_POST['username'];
	$password=$_POST['password'];

	if($username=='admin')
	{
		echo "username is correct";
		if($password=='12345')
		{
			echo "password is correct";
			$_SESSION['admin']="alive";
			header("location:admin_page.php");

		}
	}
?>