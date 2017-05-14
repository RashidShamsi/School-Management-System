<?php
	error_reporting(0);
    include("../Includes/connection.php");
	 
  $group=$_GET['a'];
  
  if($group=="000" || $group=="111")
  {
	   $count=1;
	  $query="SELECT * from teacher WHERE status='A'";
	  $result=mysql_query($query) or die(mysql_error());
	     if(mysql_num_rows($result))
{

						while($row=mysql_fetch_array($result, MYSQL_BOTH))
	           {
?>				 	
           							<tr>
                                    	<td><?php print($count);?></td>
                                        <td><object data="profileimage/<?php echo $row['teacher_id'].".jpg";?>" width="50" height="50">
												<img src="profileimage/default.png" type="image/png" width="50" height="50">
											</object></td>
                                        
                                        <td><?php print($row['teacher_id']); ?></td>
                                        <td><?php print($row['teacher_name']); ?></td>
                                        <td><?php print($row['teacher_cnic']); ?></td>
                                        <td><?php print($row['teacher_address']); ?></td>
                                        <td><?php print($row['teacher_phonenumber']); ?></td>
										<td><?php print($row['teacher_gender']); ?></td>
										<td><?php print($row['teacher_email']); ?></td>
										<td valign="top"><a href="viewmore.php?id=<?php print($row['teacher_id']); ?>">View More</a></td>
                                    </tr>
                                    
                                    
                                    <?php  $count++; }
									
									
}

	  }
  
 else { 
  
  $query="SELECT * FROM teacher where status='A' AND teacher_id IN (SELECT teacher_id FROM teacher_group where group_id='$group')";
  $result= mysql_query($query) or die(mysql_error());
                             
  $count=1;
   if(mysql_num_rows($result))
{
	while($row=mysql_fetch_array($result, MYSQL_BOTH))
	           {
?>                     
           							<tr>
                                    	<td><?php print($count);?></td>
                                        <td><object data="profileimage/<?php echo $row['teacher_id'].".jpg";?>" width="50" height="50">
												<img src="profileimage/default.png" type="image/png" width="50" height="50">
											</object></td>
                                        
                                         <td><?php print($row['teacher_id']); ?></td>
                                        <td><?php print($row['teacher_name']); ?></td>
                                        <td><?php print($row['teacher_cnic']); ?></td>
                                        <td><?php print($row['teacher_address']); ?></td>
                                        <td><?php print($row['teacher_phonenumber']); ?></td>
										<td><?php print($row['teacher_gender']); ?></td>
										<td><?php print($row['teacher_email']); ?></td>
                                       <td valign="top"><a href="viewmore.php?id=<?php print($row['teacher_id']); ?>">View More</a></td>
                                    </tr>
                                    
                                    
                                    
                                    <?php  $count++; }
									
									
}

else 
{
	
	?>
   
    	<tr><td colspan="10" align="center"><b> NO DATA FOUND!!!</b></td></tr>
 
    <?php }
	
	
	
 }
 
 
 
 ?>