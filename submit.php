<?php
	error_reporting(0);
	include("../Includes/connection.php");
//print_r($_FILES);
//if($_FILES['pimg']['size']>'2000024')
//{
//		header("Location:register.php?action=1");
//}
	
$amount=$_POST['amount'];	
$desc=$_POST['desc'];	

$query="INSERT INTO pettycash (`issuedamount`, `reason`, `date`,`currentdate`) VALUES ('$amount','$desc',CURDATE(),now())";

	if(mysql_query($query)){
	
	$id=mysql_insert_id();
	echo "$id";
	
	header("Location:pettycash.php");
	}
	else{
		echo "error".mysql_error();
	}
?>
<!--<form action="addteacher.php" method="post">
	<input type="submit" value="Go Back">
</form>-->
