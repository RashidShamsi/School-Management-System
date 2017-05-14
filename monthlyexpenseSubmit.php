<?php
	error_reporting(0);
	include("../Includes/connection.php");
	session_start();
$month=$_SESSION['month'];

$buildingrent=$_POST['buildingrent'];
$utilitybills=$_POST['utilitybills'];
$maintainence=$_POST['maintainence'];
$otherexpense=$_POST['otherexpense'];
$reason=$_POST['reason'];

$total= $buildingrent+$utilitybills+$maintainence+$otherexpense;

$query="INSERT into monthlyexpenses ( month ,utilitybills, buildingrent, maintenance ,totalexpense, otherexpenses, reason, currentdate) values ('$month','$utilitybills', '$buildingrent', '$maintainence',  '$total', '$otherexpense', '$reason',now())";
$result=mysql_query($query) or die(mysql_error());

 



header("location:monthlyexpense.php");

?>
