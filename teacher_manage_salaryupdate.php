<?php
	error_reporting(0);
	include("../Includes/connection.php");

$id=$_GET['enr'];
$addsalary=$_GET['addsalary'];
$month=$_GET['month'];



if(isset($_GET['update'])){

$query= "UPDATE `teacher_salary` SET `amount`='$addsalary' WHERE teacher_id='$id' AND month='$month'";	

if(mysql_query($query))
    {
	   header("Location:monthlyexpense.php");
	}
}


else{

$query1= "DELETE FROM `teacher_salary` WHERE teacher_id='$id' AND month='$month'";	

if(mysql_query($query1))
    {
	   header("Location:monthlyexpense.php");
	}
}
	
?>