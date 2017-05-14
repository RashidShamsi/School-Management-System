<?php

	error_reporting(0);
	include("../Includes/connection.php");

	$id=$_GET['id'];

	$query="UPDATE teacher SET status='X' WHERE teacher_id='$id'";
	$result = mysql_query($query) or die(mysql_error());
			
	$query2="delete  from teacher_class where teacher_id='$id'";
	$result = mysql_query($query2) or die(mysql_error());

	$query2="delete  from teacher_subject where teacher_id='$id'";
	$result = mysql_query($query2) or die(mysql_error());

	$query2="delete  from teacher_group where teacher_id='$id'";
	$result = mysql_query($query2) or die(mysql_error());

	$query3="delete  from teacher_student where teacher_id='$id'";
	$result = mysql_query($query3) or die(mysql_error());
			
		header("Location:manageteacher.php");
		
?>
