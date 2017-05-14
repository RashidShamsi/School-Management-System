<?php

	error_reporting(0);
	include("../Includes/connection.php");
$sum;
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
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php	
										$startdate=$_GET['e'];
										$enddate=$_GET['f'];
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
                                        
                                    </tr>
                                    <?php
									$sum=$sum+$row['issuedamount'];
				 								}
 }

										
 ?>
 
 								 <?php	
										
										
									?>	
                                  <tr>
                                  		<td><b>Total</b></td>
                                        <td> <b><?php echo $sum ?></b></td>
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                        </div>
  </div>

 
 