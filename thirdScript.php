 <?php 
 	error_reporting(0);
	include("../Includes/connection.php");
		
	   $class=$_GET['b'];
	   $group=$_GET['a'];
	 
	
		if($class=="000" || $class=="111")
		{ ?>
			<select name="subject" class="form-control" id="thirdlsit" >
				<option value="000">Select any Subject </option>
					<?php 
			$query="SELECT subject_name, subject_id FROM subject WHERE subject_id IN (SELECT subject_id from t_subject_class WHERE group_id='$group')";
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
			
			</select>
			<?php }
		else{
		
		$query="SELECT subject_name, subject_id FROM subject WHERE subject_id IN (SELECT subject_id from t_subject_class WHERE class_id='$class' AND group_id='$group')";
			
			$result = mysql_query($query) or die(mysql_error());
			if(mysql_num_rows($result))
			{ ?> 
		<select class="form-control" name="subject" id="thirdlist" required>
            <option value="000">Select any Subject </option>
            <?php
			
					while($row=mysql_fetch_array($result, MYSQL_BOTH))

	           {
			?> <option value="<?php print($row['subject_id']); ?>"/><?php print($row['subject_name']);?></option>";
			<?php } ?>
            
			
			 </select>
		<?php	}
		}
			
			 ?>