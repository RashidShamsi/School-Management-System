<?php
 error_reporting(0);
include("../Includes/connection.php");
	$group=$_GET['a'];
	$class=$_GET['b'];
	$subject=$_GET['c'];


 if($subject=="000" || $subject=="111"){
		$c=0;
	  $query="SELECT `teacher_id` FROM `teacher_group` WHERE `group_id`='$group'";
	 $result=mysql_query($query) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$teacher_group[]=$row['teacher_id'];
			}
		}
		
		
	 $query1="SELECT `teacher_id` FROM `teacher_class` WHERE `class_id`='$class'";
	 $result=mysql_query($query1) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$teacher_class[]=$row['teacher_id'];
			}
		}
		

			$asd=array_intersect($teacher_group,$teacher_class);
	 
	 
	 foreach($asd as $values){
		$query2="SELECT * FROM teacher WHERE status='A' AND teacher_id='$values'";		
		$result=mysql_query($query2) or die(mysql_error());																	
		if(mysql_num_rows($result)){
			$c++;
			$count=1;
			while($row=mysql_fetch_array($result)){
			?> 							
										<tr>
                                    	<td><?php print($count);?></td>
                                        <td>
											<object data="profileimage/<?php echo $row['teacher_id'].".jpg";?>" width="50" height="50">
												<img src="profileimage/default.png" type="image/png" width="50" height="50">
											</object></td>
                                        
                                        <td><?php print($row['teacher_id']); ?></td>
                                        <td><?php print($row['teacher_name']); ?></td>
                                        <td><?php print($row['teacher_cnic']); ?></td>
                                        <td><?php print($row['teacher_address']); ?></td>
                                        <td><?php print($row['teacher_phonenumber']); ?></td>
										<td><?php print($row['teacher_gender']); ?></td>
										<td><?php print($row['teacher_email']); ?></td>
										<td valign="top"><a href="viewmore.php?id=<?php print($row['teacher_id']); ?>">View More</a></td>
                                    </tr>
									<?php	
									$count++;
											}
			
}	

		}
		
		if($c==0){ 
	 ?>
		<tr><td colspan="10" align="center"><b> NO DATA FOUND!!!</b></td></tr>
	 <?php
	 }	
	 
	 } 
 
 else{
	
	 $query="SELECT `teacher_id` FROM `teacher_group` WHERE `group_id`='$group'";
	 $result=mysql_query($query) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$teacher_group[]=$row['teacher_id'];
			}
		}
		
		
	 $query1="SELECT `teacher_id` FROM `teacher_class` WHERE `class_id`='$class'";
	 $result=mysql_query($query1) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$teacher_class[]=$row['teacher_id'];
			}
		}
		

			$asd=array_intersect($teacher_group,$teacher_class);
	 
	 $query3="SELECT `teacher_id` FROM `teacher_subject` WHERE `subject_id`='$subject'";
	 $result=mysql_query($query3) or die(mysql_error());
	 if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result)){
				$teacher_subject[]=$row['teacher_id'];
			}
		}
		
		$teacherid=array_intersect($asd,$teacher_subject);
	 
		$count=1;
		$z=0;
		foreach($teacherid as $value3){
		$query2="SELECT * FROM teacher WHERE status='A' AND teacher_id='$value3'";		
		$result=mysql_query($query2) or die(mysql_error());																	
		if(mysql_num_rows($result)){ $z++;
			while($row=mysql_fetch_array($result)){
			?> 							
										<tr>
                                    	<td><?php print($count);?></td>
                                        <td>
											<object data="profileimage/<?php echo $row['teacher_id'].".jpg";?>" width="50" height="50">
												<img src="profileimage/default.png" type="image/png" width="50" height="50">
											</object></td>
                                        
                                        <td><?php print($row['teacher_id']); ?></td>
                                        <td><?php print($row['teacher_name']); ?></td>
                                        <td><?php print($row['teacher_cnic']); ?></td>
                                        <td><?php print($row['teacher_address']); ?></td>
                                        <td><?php print($row['teacher_phonenumber']); ?></td>
										<td><?php print($row['teacher_gender']); ?></td>
										<td><?php print($row['teacher_email']); ?></td>
										<td valign="top"><a href="viewmore.php?id=<?php print($row['teacher_id']); ?>">View More</a></td>
                                    </tr>
									<?php	
									$count++;
											}
			
}	





		
		}

if($z==0){ 
	 ?>
		<tr><td colspan="10" align="center"><b> NO DATA FOUND!!!</b></td></tr>
	 <?php
	 }		
	
		
 }	
 
									?>
 

			