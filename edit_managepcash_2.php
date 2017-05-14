<?php

	error_reporting(0);
	include("../Includes/connection.php");

$voucherid=$_POST['voucherid'];
$amount=$_POST['amount'];
$reason=$_POST['reason'];


$query= "UPDATE `pettycash` SET `issuedamount`='$amount',`reason`='$reason' WHERE pcash_voucher_id='$voucherid'";	
//$query="INSERT INTO `pettycash`(`issuedamount`, `reason`) VALUES (`$amount`,`$reason`)";


if(mysql_query($query))
    {
	header("Location:pettycash.php");
	  
	}
	
	
?>