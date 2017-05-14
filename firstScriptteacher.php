     <?php 
			error_reporting(0);
	include("../Includes/connection.php");
	   
	   $a=$_GET['a'];


	 if($a=="000" || $a=="111"){?>
		  
		 	<select class="form-control" name="class" id="class" onChange="callfunctions2_teacher(this.value)">
			<option value="000">Select any Class </option>
<?php
		 }
		 
 else{	
	 
			$query="SELECT class_name, class_id from class WHERE class_id IN (SELECT class_id from t_group_class WHERE group_id='$a')";
			$result = mysql_query($query) or print(mysql_error());
			if(mysql_num_rows($result)){
			?>
			<select class="form-control" name="class" id="class" onChange="callfunctions2_teacher(this.value)">
			<option value="000">Select any Class </option>
			<?php
			while($row=mysql_fetch_array($result, MYSQL_BOTH)){
			?> <option value="<?php print($row['class_id']); ?>"/><?php print($row['class_name']);?></option>";
			<?php } 
			}
			
			 ?>
			 <option value="111">All Classes </option>
			 </select>
			 
<?php 
 }
 
            
            
                          