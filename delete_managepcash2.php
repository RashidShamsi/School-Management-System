<?php

	error_reporting(0);
	include("../Includes/connection.php");

$voucherid= $_REQUEST['voucherid'];


$query="DELETE FROM `pettycash` WHERE `pcash_voucher_id`='$voucherid'";	

//$query="INSERT INTO `pettycash`(`issuedamount`, `reason`) VALUES (`$amount`,`$reason`)";


if(mysql_query($query))
    {
	header("Location:pettycash.php");
	  
	}

	
?>