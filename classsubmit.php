<?php
	error_reporting(0);
	include("../Includes/connection.php");

session_start();
$id=$_SESSION['id'];

$a=0;
if(isset($_REQUEST['class'])){
	$a++;
      foreach($_REQUEST['class'] as $val){
       $query1="INSERT INTO `teacher_class`(`teacher_id`, `class_id`) VALUES ('$id', '$val')"; 
	   mysql_query($query1) or die(mysql_error());
      }
    }
	
	if($a>0){
 header("Location:subject.php");
	}
	
	else{
		header("Location:class.php");
	}
?>
