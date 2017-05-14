<?php 
	error_reporting(0);
	include("../Includes/connection.php");
	   $group=$_GET['a'];
	   $class=$_GET['b'];

	   $a="";
	   $b="";
	   if($class=="000" || $class=="111"){
		  $b=1;
	   }
	   
	   if($group=="000" || $group=="111"){
		  $a=1;
	   }
		
	 
	
		 if($a=="1" and $b==""){
			 ?>
		  
		 	<select class="form-control" name="class" id="class" onChange="callfee_2(this.value)">
			<option value="000">Select any Subjects </option>
			<?php 
									$query="SELECT `subject_id`, `subject_name` FROM `subject` WHERE `subject_id` IN (SELECT `subject_id` FROM `t_subject_class` WHERE `class_id`='$class')";
									$result = mysql_query($query) or die(mysql_error());
									if(mysql_num_rows($result))
									{	
										while($row=mysql_fetch_array($result, MYSQL_BOTH))
									   { 
								?>
									<option id="<?php echo $row['subject_id'];?>"  value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></option>;
								<?php
								}}
								?>
			<option value="111">Select All Subjects </option>
<?php
		 }

if($a=="" and $b=="1"){
			 ?>
		  
		 	<select class="form-control" name="class" id="class" onChange="callfee_2(this.value)">
			<option value="000">Select any Subjects </option>
			<?php 
									$query="SELECT `subject_id`, `subject_name` FROM `subject` WHERE `subject_id` IN (SELECT `subject_id` FROM `t_subject_class` WHERE `group_id`='$group')";
									$result = mysql_query($query) or die(mysql_error());
									if(mysql_num_rows($result))
									{	
										while($row=mysql_fetch_array($result, MYSQL_BOTH))
									   { 
								?>
									<option id="<?php echo $row['subject_id'];?>"  value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></option>;
								<?php
								}}
								?>
			<option value="111">Select All Subjects </option>
<?php
		 }		 
			
			
if($a=="" and $b==""){  
			$query="SELECT subject_name, subject_id from subject WHERE subject_id IN (SELECT subject_id from t_subject_class WHERE class_id='$class' AND group_id='$group')";	
			$result = mysql_query($query) or print(mysql_error());
			if(mysql_num_rows($result)){
				?>
			<select name="subject" id="subject" class="form-control" id="subject" onChange="callfee_3(this.value)>
			<option value="000">Select any Subject </option>
			<?php
			
				while($row=mysql_fetch_array($result, MYSQL_BOTH))
	           {
				   
			?> <option value="<?php print($row['subject_id']); ?>"/><?php print($row['subject_name']);?></option>;
			<?php 
				}
			}
			 ?>
			 <option value="111">Select All Subjects</option>
			 </select>
			 
			 <?php
		}
		

if($a=="1" and $b=="1"){  
			$query="SELECT subject_name, subject_id from subject";	
			$result = mysql_query($query) or print(mysql_error());
			if(mysql_num_rows($result)){
				?>
			<select name="subject" id="subject" class="form-control" id="subject" onChange="callfee_3(this.value)>
			<option value="000">Select any Subject </option>
			<?php
			
				while($row=mysql_fetch_array($result, MYSQL_BOTH))
	           {
				   
			?> <option value="<?php print($row['subject_id']); ?>"/><?php print($row['subject_name']);?></option>;
			<?php 
				}
			}
			 ?>
			 <option value="111">Select All Subjects</option>
			 </select>
			 
			 <?php
		}
?>		
		
            
            
                          