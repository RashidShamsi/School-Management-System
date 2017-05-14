<?php

	error_reporting(0);
	include("../Includes/connection.php");
 
  $tid=$_REQUEST['tid'];
  
  $query="SELECT subject_id from teacher_subject WHERE teacher_id='$tid'";
  $result=mysql_query($query) or die (mysql_error());
    
	if(mysql_num_rows($result))
	{
			$persubfee=0;
		
		while($row=mysql_fetch_array($result, MYSQL_BOTH))
		{
			$subid=$row['subject_id'];
			$subtotal=0;
			
		    $query1="SELECT subject_name from subject WHERE subject_id=$subid";
			$result1=mysql_query($query1) or die(mysql_error());
			
			    while($row1=mysql_fetch_array($result1)){
				?> <table class="table table-bordered table-hover" border="1" >
					<thead><tr style="background-color:#f5f5f5;"><td colspan="3"><b><?php print($row1['subject_name']); ?> </b></td></tr></thead>
                <tbody>
				<?php }
				
			 
               $query2="SELECT std_id, subject_fee from std_subj WHERE subject_id=$subid";
			   $result2=mysql_query($query2) or die(mysql_error());
			   
			      while($row2=mysql_fetch_array($result2,MYSQL_BOTH))
				  { 
				     $sid= $row2['std_id'];
				  ?> 
                 <tr>
                 
                 <?php 
				 
				 $query3="SELECT * from student WHERE std_id=$sid";
				 $result3=mysql_query($query3) or die(mysql_error());
				  while($row3=mysql_fetch_row($result3, MYSQL_BOTH))
				  {?>
					  
					<td><?php print($row3['std_enr']); ?> </td>  
					<td><?php print($row3['std_name']); ?> </td>    
					  
<?php				  }
				 ?>
                 <td><?php print($row2['subject_fee']); ?> </td>
                 </tr>
				<?php  
				
				$persubfee=$persubfee+$row2['subject_fee'];
				$subtotal=$subtotal+$row2['subject_fee'];
				
				}
				  
			?>   
        
            <tr><td><b>Total</b></td><td colspan="2"> <?php print($subtotal); ?></td></tr>
              
			     </tbody></table>
		<?php
			}
			
			$query5="SELECT * from teacher_salary WHERE teacher_id='$tid'";
				 $result5=mysql_query($query5) or die(mysql_error());
				  while($row5=mysql_fetch_array($result5, MYSQL_BOTH))
				  {
					$salary=$row5['amount'];
				  }
	?>
	
	<table class="table table-bordered table-hover" border="1">
	 <tr>
		 <td><b>Grand Total Of Fee</b></td>
		 <td><b> <?php print($persubfee); ?></b></td>
	</tr>
	 <tr>
		 <td><b>Teacher's Salary</b></td>
		 <td><b> <?php print($salary); ?></b></td>
	</tr>
	 <tr style="background-color:#f5f5f5;">
		 <td><b>Total Income From Teacher</b></td>
		 <td><b> <?php print($persubfee-$salary); ?></b></td>
	</tr>
	</table>
	<div class="col-lg-6">
							<button id="printbutton1" onclick="slip_print()" class="btn btn-primary">Print</button> 
						</div>
	
	<?php
		}
  
  
  ?>
  