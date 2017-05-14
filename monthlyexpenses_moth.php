<?php
	error_reporting(0);
	include("../Includes/connection.php");
?>	

 <div >
                    <div class="col-lg-12">
                        <h2></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Month</th>
                                        <th>Utility Bills</th>
                                        <th>Building Rent</th>
                                        <th>Maintenance</th>
                                        <th>Other Expenses</th>
                                        <th>Reason</th>
                                        <th><b>Total</b></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php	
										$startdate=$_GET['e'];
										$enddate=$_GET['f'];
										$query="SELECT * FROM monthlyexpenses WHERE month >= '$startdate' AND month <= '$enddate'";
										$result=mysql_query($query) or die(mysql_error());																	
										
										if(mysql_num_rows($result))
										{
												while($row=mysql_fetch_array($result))
												{
									?>	
                                    <tr>
                                    	<td> <?php print($row['month']); ?></td>
                                        <td> <?php print($row['utilitybills']); ?></td>
                                        <td> <?php print($row['buildingrent']); ?></td>
                                        <td> <?php print($row['maintenance']); ?></td>
                                        <td> <?php print($row['otherexpenses']); ?></td>
                                        <td> <?php print($row['reason']); ?></td>
                                        <td><b> <?php print($row['totalexpense']); ?><b></td>
                                       
                                        
                                    </tr>
                                    <?php
				 								}
 }

										
 ?>
 
 								
                                 
                                </tbody> 
                            </table>
                        </div>
  </div>

 
 