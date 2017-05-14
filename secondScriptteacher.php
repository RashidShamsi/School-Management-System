<?php 
	error_reporting(0);
	include("../Includes/connection.php");
 
	   $group=$_GET['a'];
	   $class=$_GET['b'];

	 
	
		if($class=="000" || $class=="111")
		{ ?>
			<select name="subject" id="subject" class="form-control" id="subject" onChange="callfunctions3_teacher(this.value)>
				<option value="000">Select any Subject </option>
<?php
		}	
			
			
		else{ 
	 
			$query="SELECT subject_name, subject_id from subject WHERE subject_id IN (SELECT subject_id from t_subject_class WHERE class_id='$class' AND group_id='$group')";	
			$result = mysql_query($query) or print(mysql_error());
			if(mysql_num_rows($result)){
				?>
			<select name="subject" id="subject" class="form-control" id="subject" onChange="callfunctions3_teacher(this.value)>
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
                          