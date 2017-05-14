<?php	
		error_reporting(0);
	include("../Includes/connection.php");
	
	$month1=$_GET['c'];	
	$id=$_GET['d'];	
	$a=0;	

	
		
	$query="SELECT status, month FROM student_fee WHERE std_enr='$id'";	
	$result=mysql_query($query);	
	
	if(mysql_num_rows($result))
	{	
		while($row=mysql_fetch_array($result))
		{	
			if($row['month']==$month1){ 
				?>
               
											
<input type="radio" name="status" value="UNPAID" <?php if($row['status']=="UNPAID") { ?> checked="checked" <?php } ?> />UNPAID
		<input type="radio" name="status" value="PAID"<?php if($row['status']=="PAID") { ?> checked="checked" <?php } ?>  />PAID
										
			<?php
			$a++;
			}
			
		}	
	}
	
	?>
	<?php
	if($a==0){
		?>
		<input type="radio" name="status" value="UNPAID" />UNPAID
		<input type="radio" name="status" value="PAID"/>PAID
	<?php
	}	

	
	?>	

		








