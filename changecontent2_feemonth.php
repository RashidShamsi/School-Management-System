<?php
	error_reporting(0);
   include("../Includes/connection.php");
  
  $stdate=$_GET['stdate'];
  $enddate=$_GET['enddate'];  
  $group=$_GET['a'];
  $class=$_GET['b'];
  
	$z=0;
	$count=1;
  
  $a="";
  $b="";
  
  if($class== "000" || $class=="111"){
	  $b=1;
  }
  
  if($group== "000" || $group=="111"){
	  $a=1;
  }
	  
 
if($a=="1" and $b==""){
		if($class=="509"){
			$query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE student.class_id LIKE '%9' AND month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
		}
		else if($class=="510"){
			$query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE student.class_id LIKE '%10' AND month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
		}
		else if($class=="211"){
			$query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE student.class_id LIKE '%11' AND month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
		}
		else if($class=="212"){
			$query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE student.class_id LIKE '%12' AND month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
		}
		else{
			$query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE class_id='$class' AND month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
		}
	
	$result=mysql_query($query) or die(mysql_error());
	  if(mysql_num_rows($result)){$z++;
		while($row=mysql_fetch_array($result, MYSQL_BOTH)){	?>
						<tr>
                                    	<td><?php print($count);?></td>
                                        <td><?php print($row['std_enr']); ?></td>
										<td><?php print($row['std_name']); ?></td>
                                        <td><?php print($row['month']); ?></td>
                                        <td><?php print($row['monthlyfee']); ?></td>
                                        <td><?php print($row['admissionfee']); ?></td>
									</tr>
 <?php  
										$count++;
										$mfee=$mfee+$row['monthlyfee'];
										$adfee=$adfee+$row['admissionfee'];
		}	  
?>	  
									<tr>
                                  		<td><b>Total</b></td>
                                        <td></td>
										<td></td>
										<td></td>
										<td><b><?php echo $mfee ?></b></td>
										<td><b><?php echo $adfee ?></b></td>
                                    </tr> 
<?php	  
	  }
}
  
  
if($a=="" and $b=="1"){
	  $query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE group_id='$group' AND month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
	  $result=mysql_query($query) or die(mysql_error());
	  if(mysql_num_rows($result)){$z++;
		while($row=mysql_fetch_array($result, MYSQL_BOTH)){	?>
						<tr>
                                    	<td><?php print($count);?></td>
                                        <td><?php print($row['std_enr']); ?></td>
										<td><?php print($row['std_name']); ?></td>
                                        <td><?php print($row['month']); ?></td>
                                        <td><?php print($row['monthlyfee']); ?></td>
                                        <td><?php print($row['admissionfee']); ?></td>
									</tr>
 <?php  
										$count++;
										$mfee=$mfee+$row['monthlyfee'];
										$adfee=$adfee+$row['admissionfee'];
		}	  
?>	  
									<tr>
                                  		<td><b>Total</b></td>
                                        <td></td>
										<td></td>
										<td></td>
										<td><b><?php echo $mfee ?></b></td>
										<td><b><?php echo $adfee ?></b></td>
                                    </tr> 
<?php	  
	  }
}

  
    
if($a=="1" and $b=="1"){
	  $query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
	  $result=mysql_query($query) or die(mysql_error());
	  if(mysql_num_rows($result)){$z++;
		while($row=mysql_fetch_array($result, MYSQL_BOTH)){	?>
						<tr>
                                    	<td><?php print($count);?></td>
                                        <td><?php print($row['std_enr']); ?></td>
										<td><?php print($row['std_name']); ?></td>
                                        <td><?php print($row['month']); ?></td>
                                        <td><?php print($row['monthlyfee']); ?></td>
                                        <td><?php print($row['admissionfee']); ?></td>
									</tr>
 <?php  
										$count++;
										$mfee=$mfee+$row['monthlyfee'];
										$adfee=$adfee+$row['admissionfee'];
		}	  
?>	  
									<tr>
                                  		<td><b>Total</b></td>
                                        <td></td>
										<td></td>
										<td></td>
										<td><b><?php echo $mfee ?></b></td>
										<td><b><?php echo $adfee ?></b></td>
                                    </tr> 
<?php	  
	  }
}  

	 
if($a=="" and $b==""){
	  $query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE group_id='$group' AND class_id='$class' AND month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
	  $result=mysql_query($query) or die(mysql_error());
	  if(mysql_num_rows($result)){$z++;
		while($row=mysql_fetch_array($result, MYSQL_BOTH)){	?>
						<tr>
                                    	<td><?php print($count);?></td>
                                        <td><?php print($row['std_enr']); ?></td>
										<td><?php print($row['std_name']); ?></td>
                                        <td><?php print($row['month']); ?></td>
                                        <td><?php print($row['monthlyfee']); ?></td>
                                        <td><?php print($row['admissionfee']); ?></td>
									</tr>
 <?php  
										$count++;
										$mfee=$mfee+$row['monthlyfee'];
										$adfee=$adfee+$row['admissionfee'];
		}	  
?>	  
									<tr>
                                  		<td><b>Total</b></td>
                                        <td></td>
										<td></td>
										<td></td>
										<td><b><?php echo $mfee ?></b></td>
										<td><b><?php echo $adfee ?></b></td>
                                    </tr> 
<?php	  
	  }
}

if($z==0){
	 ?>
		<tr><td colspan="10" align="center"><b> NO DATA FOUND!!!</b></td></tr> 
	 <?php
	 } 
?>

