<?php	
		error_reporting(0);
	include("../Includes/connection.php");
	
	
	$month1=$_GET['e'];	
	$id=$_GET['f'];	
	$a=0;	
	
		
	$query="SELECT month, monthlyfee FROM student_fee WHERE std_enr='$id'";	
	$result=mysql_query($query);	
	
	if(mysql_num_rows($result))
	{	
		while($row=mysql_fetch_array($result))
		{	
			if($row['month']==$month1){ 
				?>
				<input type="text" id="add_fee" class="form-control" name="addfee" value="<?php echo $row['monthlyfee'] ?>" required>
			<?php
			$a++;
			}
			
		}	
	}
	
	if($a==0){
		?>
		<input type="text" id="add_fee" class="form-control" name="addfee" required>
	<?php
	}	
	?>	

		








