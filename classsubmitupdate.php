<?php
	error_reporting(0);
	include("../Includes/connection.php");

session_start();
$id=$_SESSION['id'];

$a=0;
if(isset($_REQUEST['class'])){
	$a++;
		$query1="DELETE FROM `teacher_class` WHERE `teacher_id`='$id'"; 
	   mysql_query($query1) or die(mysql_error());
	
      foreach($_REQUEST['class'] as $val){
       $query1="INSERT INTO `teacher_class`(`teacher_id`, `class_id`) VALUES ('$id', '$val')"; 
	   mysql_query($query1) or die(mysql_error());
      }
    }
	
	if($a>0){
 header("Location:subjectupdate.php");
	}
	
	else{
		header("Location:classupdate.php");
	}
?>
