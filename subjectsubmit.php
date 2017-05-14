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
		foreach($_REQUEST['subject'] as $val){
       $query1="INSERT INTO `teacher_subject`(`teacher_id`, `subject_id`) VALUES ('$id', '$val')"; 
	   mysql_query($query1) or die(mysql_error());
	   
	   
	    $query2="SELECT std_id from std_subj WHERE subject_id='$val'";
		$result2= mysql_query($query2) or die (mysql_error());
		
		while($row=mysql_fetch_array($result2,MYSQL_BOTH))
		{     $sid=$row['std_id'];
			 
			$query3="INSERT into teacher_student(teacher_id, std_id) VALUES ('$id','$sid' )";
			mysql_query($query3) or die(mysql_error());			
			
			
			}
      }
	  header("Location:teacherslip.php?id=$id");
	}
	
	else{
		header("Location:subject.php");
	}
 
 

 
 
 

?>