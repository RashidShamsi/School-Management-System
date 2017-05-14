<?php
	error_reporting(0);
	include("../Includes/connection.php");
$sum=0;
?>	

 <div >
                    <div class="col-lg-12">
                        <h2></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Voucher Id</th>
                                        <th>Issued Amount</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th colspan="2">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php	
										$startdate=$_GET['g'];
										$enddate=$_GET['h'];
										$query="SELECT * FROM pettycash WHERE date >= '$startdate' AND date <= '$enddate'";
										$result=mysql_query($query) or die(mysql_error());																	
										
										if(mysql_num_rows($result))
										{
												while($row=mysql_fetch_array($result))
												{
									?>	
                                    <tr>
                                        <td> <?php print($row['pcash_voucher_id']); ?></td>
                                        <td> <?php print($row['issuedamount']); ?></td>
                                        <td> <?php print($row['reason']); ?></td>
                                        <td> <?php print($row['date']); ?></td>
                                         <td valign="top"><a href="delete_managepcash.php?v_id=<?php print($row['pcash_voucher_id']); ?>">Delete</a></td>
										<td valign="top"><a href="edit_managepcash.php?vid=<?php print($row['pcash_voucher_id']); ?>">Edit</a></td>
                                             
                                    </form></tr>
                                    <?php
				 							   $sum=$sum+$row['issuedamount'];
												}
 }
                                  
										
 ?>
 
 								 <?php	
								
										
									
									?>	
                                  <tr>
                                  		<td><b>Total</b></td>
                                        <td> <b><?php  print($sum ); ?></b></td>
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                        </div>
  </div>

 
 