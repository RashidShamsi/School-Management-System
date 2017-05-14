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
										<td valign="top"><a href="updatedata.php?id=<?php print($row['teacher_id']); ?>">Edit</a></td>
										 <td valign="top"><button type="button" class="btn btn-primary btn-lg user-delete-button" data-toggle="modal" 
                                        data-id="<?php echo $row['teacher_id']; ?>" data-target="#myModal">
 Delete
</button></td>
                                        
                                        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmation...</h4>
      </div>
      <div class="modal-body">
        Are You sure you want to delete the record????
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onClick="toanotherpage()">Delete</button>
      </div>
    </div>
  </div>
</div>
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
										<td valign="top"><a href="updatedata.php?id=<?php print($row['teacher_id']); ?>">Edit</a></td>
										 <td valign="top"><button type="button" class="btn btn-primary btn-lg user-delete-button" data-toggle="modal" 
                                        data-id="<?php echo $row['teacher_id']; ?>" data-target="#myModal">
 Delete
</button></td>
                                        
                                        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmation...</h4>
      </div>
      <div class="modal-body">
        Are You sure you want to delete the record????
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onClick="toanotherpage()">Delete</button>
      </div>
    </div>
  </div>
</div>
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
 

			