<?php
	include("../Includes/connection.php");
	error_reporting(0);


$month=$_POST['month'];

$a=1;



if(isset($_POST['month'])){
	/*
$query="SELECT std_enr from student_fee WHERE month='$month'";
	$result=mysql_query($query) or die(mysql_error());
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_array($result, MYSQL_BOTH)){	
			$stdenr[]=$row['std_enr'];
		}
	}

	$query="SELECT std_enr, monthlyfee from student";
	$result=mysql_query($query) or die(mysql_error());
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_array($result, MYSQL_BOTH)){	
			foreach($stdenr as $value){
				if($row['std_enr']!=$value){
					echo "ok  ";
				}
			}
			
			
			$enr=$row['std_enr'];
			$monthlyfee=$row['monthlyfee'];
			echo $row['std_enr']."<br>";
			echo $row['monthlyfee']."<br>";
			*/
		
	
	
	
	
$query="SELECT std_enr, month from student_fee";
$result=mysql_query($query) or die(mysql_error());
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_array($result, MYSQL_BOTH)){	
			if($row['month']==$month){
				$a="";
			}
			
		}
	}

	

if($a!=""){
$query="SELECT std_enr from student WHERE status='A'";
$result=mysql_query($query) or die(mysql_error());
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_array($result, MYSQL_BOTH)){	
			$query="INSERT INTO `student_fee`(`std_enr`,`month`) VALUES ('$row[0]','$month')";
			mysql_query($query) or die(mysql_error());
		}
	}
	}
else{ ?>
	<script>
		var m=document.getElementById("month").value;
		alert("Already data submited for the month of "+m);
	</script>
	<?php
}	

header("location:dashboard.php");
exit;
}
	           				   
?>