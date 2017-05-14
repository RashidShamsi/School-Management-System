<?php
	error_reporting(0);
	include("../Includes/connection.php");

session_start();
$id=$_SESSION['id'];

$a=0;
if(isset($_REQUEST['subject'])){
		$a++;
    }
	
	if($a>0){
		$query1="DELETE FROM `teacher_subject` WHERE `teacher_id`='$id'";	
		mysql_query($query1) or die(mysql_error());
		foreach($_REQUEST['subject'] as $val){
			
		
       $query1="INSERT INTO `teacher_subject`(`teacher_id`, `subject_id`) VALUES ('$id', '$val')"; 
	   mysql_query($query1) or die(mysql_error());
      }
	  header("Location:thanks.php");
	}
	
	else{
		header("Location:subjectupdate.php");
	}
 

?>