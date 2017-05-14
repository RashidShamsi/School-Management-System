<?php	
		error_reporting(0);
	include("../Includes/connection.php");
	
	$month1=$_GET['c'];	
	$id=$_GET['d'];	
	$a=0;		
		
	$query="SELECT month, amount FROM teacher_salary WHERE teacher_id='$id'";	
	$result=mysql_query($query);	
	
	if(mysql_num_rows($result))
	{	
		while($row=mysql_fetch_array($result))
		{	
			if($row['month']==$month1){ 
				?>
				<input type="text" id="addsalary" class="form-control" name="addsalary" value="<?php echo $row['amount'] ?>" disabled>
			<?php
			$a++;
			}
			
		}	
	}
	?>
	<?php
	if($a==0){
		?>
		<input type="text" id="addsalary" class="form-control" name="addsalary" required>
	<?php
	}	
	?>	

		








