       <?php 
	   	error_reporting(0);
	include("../Includes/connection.php");
	   
	   $a=$_GET['first'];
	
	 
	 if($a=="000" || $a=="111")
	 {?>
		  
		 	<select class="form-control"   name="class" id="secondlist" onChange="callfunctions2(this.value)" required>
			<option value="000">Select any Class </option>
            </select>
	<?php
		 }
		 
 else{			
 			$query="SELECT class_name, class_id from class WHERE class_id IN (SELECT class_id from t_group_class WHERE group_id='$a')";
			$result = mysql_query($query) or die(mysql_error());
			if(mysql_num_rows($result)){
			     ?>
			<select class="form-control"   name="class" id="secondlist" onChange="callfunctions2(this.value)" required>
			<option value="000">Select any Class </option>
			<?php
					while($row=mysql_fetch_array($result, MYSQL_BOTH))

	           {
			?> <option value="<?php print($row['class_id']); ?>"/><?php print($row['class_name']);?></option>";
			<?php } ?>
			
			</select>
            <?php }
		 
 }
			 ?>
			 
            
            
            
                          