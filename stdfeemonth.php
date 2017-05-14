<?php

	error_reporting(0);
	include("../Includes/connection.php");
	$stdate=$_GET['stdate'];
	$enddate=$_GET['enddate'];
	$count=1;
	$z="";
	
 
	  $query2="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE month BETWEEN '$stdate' AND '$enddate' AND student_fee.status='PAID'";		
		 $result=mysql_query($query2) or die(mysql_error());
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
		
 
 if($z==0){ 
	 ?>
		<tr><td colspan="10" align="center"><b> NO DATA FOUND!!!</b></td></tr>
	 <?php
	 }	

									?>
 

			