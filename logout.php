<?php
	session_start();
	if($_SESSION['email'] !='')
	{
		$_SESSION['email']='';
		header('location:index.php');
	}

			
		
header('location:index.php');
?>
	
