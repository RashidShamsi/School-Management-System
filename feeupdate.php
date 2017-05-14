<?php

	error_reporting(0);
	include("../Includes/connection.php");

$enr=$_GET['enr'];
$addfee=$_GET['addfee'];
$status=$_GET['status'];
$month=$_GET['month'];

$a=0;
$query="SELECT * FROM student WHERE std_enr='$enr'";	
$result=mysql_query($query) or die(mysql_error());	
if(mysql_num_rows($result)){	
	while($row=mysql_fetch_array($result)){	
	$admission=$row['admissionfee'];
	}
}

$query="SELECT month FROM student_fee WHERE std_enr='$enr'";	
$result=mysql_query($query) or die(mysql_error());	

if(mysql_num_rows($result))
	{	
		while($row=mysql_fetch_array($result))
		{	
			$month1[]=$row['month'];
		}

	
	foreach($month1 as $value){
		if($value==$month){
		$query2="UPDATE `student_fee` SET `monthlyfee`='$addfee',`admissionfee`='$admission',`currentdate`=CURDATE(),`status`='$status' WHERE std_enr='$enr' AND month='$value'";
		$result2=mysql_query($query2) or die(mysql_error());
		}
	}
	
	}
	else{
$query1="INSERT INTO `student_fee`(`std_enr`, `month`, `monthlyfee`, `admissionfee` ,status, `currentdate`) VALUES ('$enr','$month','$addfee','$admission', '$status',now())";
mysql_query($query1);


	}
	
	if($status=="PAID"){
		header("Location:feeslip.php?enr=$enr&month=$month");
	}
	else{
		header("Location:studentfee.php");
	}

?>