<?php

    	error_reporting(0);
	include("../Includes/connection.php");
	 
  $group=$_GET['a'];
  
  if($group=="000" || $group=="111")
  {
	   $count=0;
	  $query="SELECT * from student";
	  $result=mysql_query($query) or die(mysql_error());
	     if(mysql_num_rows($result))
{

						while($row=mysql_fetch_array($result, MYSQL_BOTH))
	           {
?>				 	
           							<tr>
                                    	<td><?php print($count);?></td>
                                        <td><object data="profileimage/<?php echo $row['std_id'].".jpg";?>" width="50" height="50">
												<img src="profileimage/default.png" type="image/png" width="50" height="50">
											</object></td>
                                        
                                        <td><?php print($row['std_enr']); ?></td>
                                        <td><?php print($row['std_name']); ?></td>
                                        <td><?php print($row['std_fathername']); ?></td>
                                        <td><?php print($row['std_phonenumber']); ?></td>
                                        <td><?php print($row['std_email']); ?></td>
                                         <td valign="top"><button type="button" class="btn btn-primary user-delete-button" data-toggle="modal" 
                                        data-id="<?php echo $row['std_id']; ?>" data-target="#myModal">
 Delete
</button></td>
                                        
                                        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmation...</h4>
      </div>
      <div class="modal-body">
        Are You sure you want to delete the record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onClick="toanotherpage()">Delete</button>
      </div>
    </div>
  </div>
</div>
										<td valign="top"><a href="edit.php?SID=<?php print($row['std_id']); ?>">Edit</a></td>
                                        <td valign="top"><a href="stdData.php?SID=<?php print($row['std_id']); ?>">View More</a></td>
                                    </tr>
                                    
                                    
                                    <?php  $count++; }
									
									
}
								
	  
	  
	  
	  
	  
	  }
  
 else { 
  
  $query="SELECT * FROM student where group_id='$group'";
  $result= mysql_query($query) or die(mysql_error());
                             
  $count=1;
   if(mysql_num_rows($result))
{
	while($row=mysql_fetch_array($result, MYSQL_BOTH))
	           {
?>                     
           							<tr>
                                    	<td><?php print($count);?></td>
                                        <td><object data="profileimage/<?php echo $row['std_id'].".jpg";?>" width="50" height="50">
												<img src="profileimage/default.png" type="image/png" width="50" height="50">
											</object></td>
                                        
                                        <td><?php print($row['std_enr']); ?></td>
                                        <td><?php print($row['std_name']); ?></td>
                                        <td><?php print($row['std_fathername']); ?></td>
                                        <td><?php print($row['std_phonenumber']); ?></td>
                                        <td><?php print($row['std_email']); ?></td>
                                                       <td valign="top"><button type="button" class="btn btn-primary user-delete-button" data-toggle="modal" 
                                        data-id="<?php echo $row['std_id']; ?>" data-target="#myModal">
 Delete
</button></td>
                                        
                                        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Confirmation...</h4>
      </div>
      <div class="modal-body">
        Are You sure you want to delete the record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onClick="toanotherpage()">Delete</button>
      </div>
    </div>
  </div>
</div>
										<td valign="top"><a href="edit.php?SID=<?php print($row['std_id']); ?>">Edit</a></td>
                                        <td valign="top"><a href="stdData.php?SID=<?php print($row['std_id']); ?>">View More</a></td>
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
 <script>


                        
             
				var userId = '';
				$(document).on("click", ".user-delete-button", function () {
     				userId = $(this).data('id');
				});
				function toanotherpage(){
					//console.log(userId);
					window.location.href = "delete.php?SID="+userId;
					
					}
				
</script>