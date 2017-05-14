<?php
	error_reporting(0);
	include("../Includes/connection.php");


$sid= $_GET['SID'];

$query="delete  from student where std_id=".$sid;
$result = mysql_query($query) or die(mysql_error());


$query2="delete  from std_subj where std_id=".$sid;
$result = mysql_query($query2) or die(mysql_error());

$query3="delete  from teacher_student where std_id=".$sid;
$result = mysql_query($query3) or die(mysql_error());
header("location:managestudent.php")
?>