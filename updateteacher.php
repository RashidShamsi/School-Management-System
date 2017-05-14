<?php
	error_reporting(0);
	include("../Includes/connection.php");
	
session_start();

	
	$id=$_REQUEST['id']; 	
	$name=$_REQUEST['name'];	
	$cnic=$_REQUEST['cnic'];	
	$address=$_REQUEST['address'];
	$gender=$_REQUEST['gender'];	
	$email=$_REQUEST['email'];		
	$phonenumber=$_REQUEST['phonenumber'];		
	
	$_SESSION['id'] = $id;
	
	$a=0;
	if(isset($_REQUEST['group'])){
		$a++;
    }
	
	if($a<1){
		header("Location:updatedata.php?id=$id");
	}
	
	else{
	
			$query="UPDATE teacher SET teacher_name='$name', teacher_CNIC='$cnic', teacher_address='$address', teacher_gender='$gender', teacher_email='$email', teacher_phonenumber='$phonenumber' WHERE teacher_id='$id'" ;
			mysql_query($query) or die(mysql_error());
			
			move_uploaded_file($_FILES['pimg']['tmp_name'],"e:/xampp/htdocs/masab/profileimages/".$id.".jpg");
			
			
			$query="DELETE FROM `teacher_group` WHERE `teacher_id`='$id'" ;
			mysql_query($query) or die(mysql_error());
			
	foreach($_REQUEST['group'] as $val){
       $query1="INSERT INTO `teacher_group`(`teacher_id`, `group_id`) VALUES ('$id', '$val')"; 
	    mysql_query($query1) or die(mysql_error());
	  
      }	
	  
	  header("Location:classupdate.php");
	  
	}
?>
