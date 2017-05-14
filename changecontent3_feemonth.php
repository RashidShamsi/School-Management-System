<?php

error_reporting(0);
include("../Includes/connection.php");

	$stdate=$_GET['stdate'];
	$enddate=$_GET['enddate']; 
	$group=$_GET['a'];
	$class=$_GET['b'];
	$subject=$_GET['c']; 

	$a="";
	$b="";
	$c="";
	$z=0;
	$count=1;
	
 if($group=="000" || $group=="111"){
	$a="1";
 } 
 
 if($class=="000" || $class=="111"){
	$b="1";
 }
 
 if($subject=="000" || $subject=="111"){
	$c="1";
 }
 
 
 
  if($a=="1" and $b=="1" and $c=="1"){
	 $query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE month BETWEEN '$stdate' AND '$enddate'";
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
	

  if($a=="" and $b=="1" and $c=="1"){
		$query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE group_id='$group' AND month BETWEEN '$stdate' AND '$enddate'";
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


  if($a=="1" and $b=="" and $c=="1"){
	$query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE class_id='$class' AND month BETWEEN '$stdate' AND '$enddate'";
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

  if($a=="1" and $b=="1" and $c==""){
		 $query2="SELECT * FROM student WHERE std_id IN (SELECT `std_id` FROM `std_subj` WHERE subject_id='$subject')";		
		$result=mysql_query($query2) or die(mysql_error());																	
		if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$std[]=$row['std_enr'];
			}
		}
		
		foreach($std as $values){
		$query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE student.std_enr='$values' AND month BETWEEN '$stdate' AND '$enddate'";
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
	  }
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


  if($a=="" and $b=="" and $c=="1"){
  $query="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE group_id='$group' AND class_id='$class' AND month BETWEEN '$stdate' AND '$enddate'";
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

	
	
  if($a=="1" and $b=="" and $c==""){
		  $query1="SELECT `std_id` FROM `student` WHERE `class_id`='$class'";
	 $result=mysql_query($query1) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$student_class[]=$row['std_id'];
			}
		}
		
		 $query1="SELECT `std_id` FROM `student` WHERE `std_id` IN(SELECT `std_id` FROM `std_subj` WHERE `subject_id`='$subject')";
	 $result=mysql_query($query1) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$student_subject[]=$row['std_id'];
			}
		}
	  
	  $asd=array_intersect($student_class, $student_subject);
	  
	  
	  	 foreach($asd as $values){
		$query2="SELECT * FROM student WHERE std_id='$values'";		
		$result=mysql_query($query2) or die(mysql_error());																	
		if(mysql_num_rows($result)){			
			while($row=mysql_fetch_array($result)){
				$student[]=$row['std_enr'];
			}
		}
		 }
		
		foreach($asd as $values){
		$query2="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE std_id='$values' AND month BETWEEN '$stdate' AND '$enddate'";		
		$result=mysql_query($query2) or die(mysql_error());																	
		if(mysql_num_rows($result)){	$z++;			
			while($row=mysql_fetch_array($result)){
			?> 							
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
		}
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
	


	
  if($a=="" and $b=="1" and $c==""){
		  $query1="SELECT `std_id` FROM `student` WHERE `group_id`='$group'";
	 $result=mysql_query($query1) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$student_class[]=$row['std_id'];
				
			}
		}
		
		 $query1="SELECT `std_id` FROM `student` WHERE `std_id` IN(SELECT `std_id` FROM `std_subj` WHERE `subject_id`='$subject')";
	 $result=mysql_query($query1) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$student_subject[]=$row['std_id'];
				
			}
		}
	  
	  $asd=array_intersect($student_class, $student_subject);
	  
	  
	  
	  	 foreach($asd as $values){
		$query2="SELECT * FROM student WHERE std_id='$values'";		
		$result=mysql_query($query2) or die(mysql_error());																	
		if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$student[]=$row['std_enr'];
			}
		}
		}
		
		foreach($student as $value1){
		$query2="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE student.std_enr='$value1' AND month BETWEEN '$stdate' AND '$enddate'";		
		$result=mysql_query($query2) or die(mysql_error());																	
		if(mysql_num_rows($result)){	$z++;			
			while($row=mysql_fetch_array($result)){
			?> 							
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
		}
											
			
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

	
  if($a=="" and $b=="" and $c==""){
	 $query="SELECT `std_id` FROM `student` WHERE `group_id`='$group'";
	 $result=mysql_query($query) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$student_group[]=$row['std_id'];
				
			}
		}
		
		
	 $query1="SELECT `std_id` FROM `student` WHERE `class_id`='$class'";
	 $result=mysql_query($query1) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$student_class[]=$row['std_id'];
			}
		}
		

			$asd=array_intersect($student_group,$student_class);
	 
	 $query3="SELECT `std_id` FROM `std_subj` WHERE `subject_id`='$subject'";
	 $result=mysql_query($query3) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$student_subject[]=$row['std_id'];
				
			}
		}
		
		$studentid=array_intersect($asd,$student_subject);
	 
		
		foreach($studentid as $value3){
		$query2="SELECT * FROM student WHERE std_id='$value3'";		
		$result=mysql_query($query2) or die(mysql_error());																	
		if(mysql_num_rows($result)){ $z++;
			while($row=mysql_fetch_array($result)){
				$student[]=$row['std_enr']; 
				
			}
		}
		}
		
		foreach($student as $value){
		$query2="SELECT student_fee.std_enr, student_fee.month, student_fee.monthlyfee, student_fee.admissionfee, student.std_name FROM student INNER JOIN student_fee ON student_fee.std_enr=student.std_enr WHERE student.std_enr='$value' AND month BETWEEN '$stdate' AND '$enddate'";		
		$result=mysql_query($query2) or die(mysql_error());																	
		if(mysql_num_rows($result)){	$z++;			
			while($row=mysql_fetch_array($result)){
				
			?> 							
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
		}
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
 

			