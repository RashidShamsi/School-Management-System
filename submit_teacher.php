<?php
	error_reporting(0);
	include("../Includes/connection.php");

session_start();


$name=$_POST['name'];	
$cnic=$_POST['cnic'];	
$address=$_POST['address'];	
$gender=$_POST['gender'];	
$email=$_POST['email'];	
$phonenumber=$_POST['phonenumber'];	




		$query="INSERT INTO teacher(`teacher_name`, `teacher_CNIC`, `teacher_address`, `teacher_phonenumber`, `teacher_gender`, `teacher_email`, `currentdate`) VALUES ('$name','$cnic','$address','$phonenumber','$gender','$email',now())";

	mysql_query($query) or die(mysql_error());
	
	$id=mysql_insert_id();
	
	move_uploaded_file($_FILES['a']['tmp_name'] , "profileimage/".$id.".jpg");

	$_SESSION['id'] = $id;
	
	foreach($_POST['group'] as $val){
       $query1="INSERT INTO `teacher_group`(`teacher_id`, `group_id`) VALUES ('$id', '$val')"; 
	   mysql_query($query1) or die(mysql_error());
      }
	
	
		 header('Location:class.php');
	
	
?>
