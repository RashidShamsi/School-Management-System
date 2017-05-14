<?php
	error_reporting(0);
	include("../Includes/connection.php");
	
	session_start();
	if (isset($_SESSION['state']) && $_SESSION['type']==1){
		
$user=$_POST['user'];
$curr_password=$_POST['curr_password'];
$new_password=$_POST['new_password'];


$query="SELECT * from users where user_name='$user'";
$result=mysql_query($query);																	
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_array($result)){
			$password=$row['password'];
		}
	}
if($curr_password==$password){
	$query="UPDATE users set password='$new_password' where user_name='$user'";
	mysql_query($query);
	header("location:success.php");
}
else{
	header("location:change_password.php?a=1");
}
	
	
	}
	 else
 {
	  header("location:redirect.php");
 }
?>