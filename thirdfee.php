     <?php 
	   	error_reporting(0);
	include("../Includes/connection.php");
	   
	   $a=$_GET['a'];


	 if($a=="000" || $a=="111"){?>
		  
		 	<select class="form-control" name="class" id="class" onChange="callfee_2(this.value)">
			<option value="000">Select any Subject </option>
			<?php 
									$query="SELECT * FROM `subject`";
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
		 
 else{	
	 
			$query="SELECT subject_name, subject_id from subject WHERE subject_id IN (SELECT subject_id from t_subject_class WHERE group_id='$a')";
			$result = mysql_query($query) or print(mysql_error());
			if(mysql_num_rows($result)){
			?>
			<select class="form-control" name="class" id="class" onChange="callfee_2(this.value)">
			<option value="000">Select any Subject </option>
			<?php
			while($row=mysql_fetch_array($result, MYSQL_BOTH)){
			?> 
			<option id="<?php echo $row['subject_id'];?>"  value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></option>;
			<?php } 
			}
			
			 ?>
			 <option value="111">Select All Subjects </option>
			 </select>
			 
<?php 
 }
 ?>
            
            
                          