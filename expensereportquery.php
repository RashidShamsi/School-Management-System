<?php
	error_reporting(0);
	include("../Includes/connection.php");
$sum=0;
$exsum=0;
$salarysum=0;
$totslsum=0;
?>	

<div >
                    <div class="col-lg-12">
                        <h2></h2>
                        
                        <div class="table-responsive">
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr style="background-color:#f5f5f5;">
                                <th colspan="4"><b><center>Petty Cash</center></b></th>
                                </tr>
                                    <tr>
                                        <th>Voucher Id</th>
                                        <th>Issued Amount</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                      
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
                                        <td colspan="3"> <b><?php  print($sum ); ?></b></td>
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                            
                            
                            
                            
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr style="background-color:#f5f5f5;">
                                <th colspan="7"><b><center>Monthly Expense</center></b></th>
                                </tr>
                                    <tr>
                                        <th>Month</th>
                                        <th>Utility Bills</th>
                                        <th>Building Rent</th>
                                        <th>Maintenance</th>
                                        <th>Other Expenses</th>
                                        <th>Reason</th>
                                        <th>Total</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php	
										$startdate=$_GET['g'];
										$enddate=$_GET['h'];
										$query1="SELECT * FROM monthlyexpenses WHERE currentdate >= '$startdate' AND currentdate <= '$enddate'";
										$result1=mysql_query($query1) or die(mysql_error());																	
										
										if(mysql_num_rows($result1))
										{
												while($row1=mysql_fetch_array($result1))
												{
									?>	
                                    <tr>
                                        <td> <?php print($row1['month']); ?></td>
                                        <td> <?php print($row1['utilitybills']); ?></td>
                                        <td> <?php print($row1['buildingrent']); ?></td>
                                        <td> <?php print($row1['maintenance']); ?></td>
                                        <td> <?php print($row1['otherexpenses']); ?></td>
                                        <td> <?php print($row1['reason']); ?></td>
                                        <td> <b><?php print($row1['totalexpense']); ?></b></td>
                                      
                                             
                                    </form></tr>
                                    <?php
				 							   $exsum=$exsum+$row1['totalexpense'];
												}
 }
                                  
										
 ?>
 
 								 <?php	
								
										
									
									?>	
                                  <tr>
                                  		<td><b>Total</b></td>
                                        <td colspan="6"><b><?php  print($exsum ); ?></b></td>
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                            
                            
                            
                            
                            
                             <table class="table table-bordered table-hover">
                                <thead>
                                <tr style="background-color:#f5f5f5;">
                                <th colspan="7"><b><center>Teacher Salary</center></b></th>
                                </tr>
                                    <tr>
                                        <th>Salary Voucher Id</th>
                                        <th>Month</th>
                                        <th>Teacher Name</th>
                                        <th>Salaray</th>
                                      

                                      
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php	
										$startdate=$_GET['g'];
										$enddate=$_GET['h'];
										$query3="SELECT * FROM teacher_salary WHERE currentdate >= '$startdate' AND currentdate <= '$enddate'";
										$result3=mysql_query($query3) or die(mysql_error());																	
										
										if(mysql_num_rows($result3))
										{
												while($row3=mysql_fetch_array($result3))
												{
									?>	
                                    <tr>
                                        <td> <?php print($row3['tsalary_voucher_id']); ?></td>
                                        <td> <?php print($row3['month']); ?></td>
                                        
                                        
                                        <?php 
										$teacherid=$row3['teacher_id'];
										$query2="SELECT teacher_name FROM teacher WHERE teacher_id=$teacherid";
										$result2=mysql_query($query2) or die(mysql_error());
										$row2=mysql_fetch_array($result2);
										?>
                                        <td> <?php print($row2['teacher_name']); ?></td>
                                        
                                        
                                        
                                        
                                        <td> <?php print($row3['amount']); ?></td>
                                  
                                      
                                             
                                    </form></tr>
                                    <?php
				 							   $salarysum=$salarysum+$row3['amount'];
												}
 }
                                  
										
 ?>
 
 								 <?php	
								
										
									
									?>	
                                  <tr>
                                  		<td><b>Total</b></td>
                                        <td><b></b></td>
                                        <td><b></b></td>
                                        <td> <b><?php  print($salarysum ); ?></b></td>
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                            
                            
                            
                             <table class="table table-bordered table-hover">
                                <thead>
                                <tr style="background-color:#f5f5f5;">
                                <th colspan="4"><strong><center>Total Expenses between <?php print($startdate); ?> And <?php print($enddate); ?> </center></strong></th>
                                </tr>
                                    <tr>
                                        <th>Total Petty Cash</th>
                                        <th> Total Teacher Salary</th>
                                        <th> Total Monthly Expenses</th>
                                        <th> Total All Expenses</th>
                                       </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <td> <?php print($sum); ?></td>
                                        <td> <?php print($salarysum); ?></td>
                                        <td> <?php print($exsum); ?></td>
                                        <?php $totalsum=$sum+$exsum+$salarysum; ?>	
										<td> <b><?php  print($totalsum); ?></b></td>
										
									 </form></tr>
                                   
                                  
                                        
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                            
                          <div class="col-lg-6">
							<button id="printbutton1" onclick="slip_print()" class="btn btn-primary">Print</button> 
						</div>  
                        </div>
  </div>

