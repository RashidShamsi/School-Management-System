<?php

	error_reporting(0);
	include("../Includes/connection.php");

$id=$_GET['enr'];
$addsalary=$_GET['addsalary'];
$month=$_GET['month'];

$a=0;

if($addsalary==""){
	header("Location:salaryreport.php?id=$id&month=$month");
}	
else{
$query="SELECT month FROM teacher_salary WHERE tsalary_voucher_id='$id'";	
$result=mysql_query($query) or die(mysql_error());	

if(mysql_num_rows($result))
	{	
		while($row=mysql_fetch_array($result))
		{	
			$month1[]=$row['month'];
		}
	}	
	
	foreach($month1 as $value){
		if($value==$month){
		$a++;
		}
	}
	
	if($a==0){
$query1="INSERT INTO `teacher_salary`(`teacher_id`, `month`, `amount`,`currentdate`) VALUES ('$id','$month','$addsalary',now())";
mysql_query($query1);

	}
	header("Location:salaryreport.php?id=$id&month=$month");
}	
	
?>