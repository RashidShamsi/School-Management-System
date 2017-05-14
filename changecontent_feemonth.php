<?php
	error_reporting(0);
    include("../Includes/connection.php");
	
  $stdate=$_GET['stdate'];
  $enddate=$_GET['enddate'];  
  $group=$_GET['a'];
  $z=0;
  $count=1;
  if($group=="000" || $group=="111")
  {
	  $query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student_fee INNER JOIN student ON student_fee.std_enr=student.std_enr WHERE month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
	  $result=mysql_query($query) or die(mysql_error());
	     if(mysql_num_rows($result)){
		$z++;
						while($row=mysql_fetch_array($result, MYSQL_BOTH)){
?>				 	
           							<tr>
                                    	<td><?php print($count);?></td>
                                        <td><?php print($row['std_enr']); ?></td>
										<td><?php print($row['std_name']); ?></td>
                                        <td><?php print($row['month']); ?></td>
                                        <td><?php print($row['monthlyfee']); ?></td>
                                        <td><?php print($row['admissionfee']); ?></td>
									</tr>
                                    
                                    <?php  $count++; 
										$mfee=$mfee+$row['monthlyfee'];
										$adfee=$adfee+$row['admissionfee'];
									}?>
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
 else{
	/* $query="SELECT std_enr FROM student WHERE group_id='$group'";
	 $result=mysql_query($query) or die(mysql_error());
	    if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result, MYSQL_BOTH)){
				$stdgroup[]=$row['std_enr'];
			}
		}
		
	$query="SELECT std_enr FROM student_fee WHERE month BETWEEN '$stdate' AND '$enddate'";
	 $result=mysql_query($query) or die(mysql_error());
	    if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result, MYSQL_BOTH)){
				$stdmonth[]=$row['std_enr'];
			}
		}

	$stddata=array_intersect($stdgroup, $stdmonth);
	 
	 */

	  $query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE group_id='$group' AND month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";
	  $result=mysql_query($query) or die(mysql_error());
	     if(mysql_num_rows($result)){			 
		$z++;
						while($row=mysql_fetch_array($result, MYSQL_BOTH)){				
?>				 	
           							<tr>
                                    	<td><?php print($count);?></td>
                                        <td><?php print($row['std_enr']); ?></td>
										<td><?php print($row['std_name']); ?></td>
                                        <td><?php print($row['month']); ?></td>
                                        <td><?php print($row['monthlyfee']); ?></td>
                                        <td><?php print($row['admissionfee']); ?></td>
									</tr>
                                    
                                    <?php  $count++; 
										$mfee=$mfee+$row['monthlyfee'];
										$adfee=$adfee+$row['admissionfee'];
									}									
		 }
	if($z!=0){
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
if($z==0)
{
	
	?>
   
    	<tr><td colspan="10" align="center"><b> NO DATA FOUND!!!</b></td></tr>
 
    <?php }
 
 
 ?>