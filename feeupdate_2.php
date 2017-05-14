<?php

	error_reporting(0);
	include("../Includes/connection.php");

$enr=$_GET['enr'];
$addfee=$_GET['addfee'];
$month=$_GET['month'];


if(isset($_GET['update'])){

$query= "UPDATE `student_fee` SET `monthlyfee`='$addfee' WHERE std_enr='$enr' AND month='$month'";	

if(mysql_query($query))
    {
	   header("Location:studentfee.php");
	}
}



else{

$query1= "DELETE FROM `student_fee` WHERE std_enr='$enr' AND month='$month'";	

if(mysql_query($query1))
    {
	   header("Location:studentfee.php");
	}
}
	
?>