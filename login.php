<?php
	session_start();
		error_reporting(0);
	include("../Includes/connection.php");
	
	if(!isset($_POST['username']) && !isset($_POST['password']))
	{
		header("location:index.php");
	}
	
	
	//$_SESSION['username'] = $_POST['username'];
//	$_SESSION['password'] = $_POST['password'];
	
	
	$user=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT user_type FROM users WHERE user_name = '$user' AND password = '$password'";
	$result=mysql_query($query) or die(mysql_error());																	
	 
	
	
	if(mysql_num_rows($result))
	
	 {
		 	while($row=mysql_fetch_array($result))
			
			{
				$type=$row['user_type'];
		 
			 if($type=='superadmin')
			 {
		$_SESSION['type'] = 1;		 
		$_SESSION['state'] = 'true';
		header("location:dashboard.php");
		$_SESSION['user'] = 'superadmin';
			}
			else if($type=='operator')
			 {
		 
		$_SESSION['state'] = 'true';
		header("location:dashboard.php");
		$_SESSION['user'] = 'operator';
			}
			
			else
	{
		header("location:index.php");

	}

			
	 		}
	 }
		 
	 
												
	
	//if($_SESSION['username'] == 'masab' && $_SESSION['password'] == 'masab')
//	{
//		$_SESSION['state'] = 'true';	
//		header("location:dashboard.php");
//	}
	else
	{
		header("location:index.php");

	}

	
?>