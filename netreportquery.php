<?php
	error_reporting(0);
	include("../Includes/connection.php");
$studentfeesum=0;
$pettycashsum=0;
$sum=0;
$exsum=0;
$salarysum=0;
$totslsum=0;
$net=0;
?>	

<div >
                    <div class="col-lg-12">
                        <h2></h2>
                        
                        <div class="table-responsive">
                        
                        
                         <div class="panel">
                         <h1 class="page-header">
                           Income 
                        </h1>
                           </div>        
                    </div>
                        
                          <div class="table-responsive">
                            <table id="tab1" class="table table-bordered table-hover">
                                <thead>
									<tr style="background-color:#f5f5f5;">
										<th colspan="9" style="text-align:center;">Monthly Fee</th>
									</tr>
                                    <tr>
                                        <th>Fee Voucher Id</th>
                                        <th>Fee Submission Date</th>
                                        <th>Student Enrollment</th>
                                        <th>Student Name</th>
                                        <th>Father Name</th>
                                        <th>Group</th>
                                        <th>Class</th>
                                        <th>Fee Month</th>
                                        <th>Fee Amount</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php	
										$startdate=$_GET['g'];
										$enddate=$_GET['h'];
										//$query="SELECT * FROM student_fee WHERE currentdate >= '$startdate' AND currentdate <= '$enddate'";
										$query="SELECT student_fee.fee_voucher_id,student_fee.currentdate,student_fee.std_enr,student_fee.month,student_fee.monthlyfee,student.std_name,student.std_id,student.std_fathername,student.class_id,student.group_id
										 FROM student_fee
										 INNER JOIN student 
										 on student_fee.std_enr=student.std_enr
										 WHERE student_fee.currentdate >= '$startdate' AND student_fee.currentdate <= '$enddate'";
										$result=mysql_query($query) or die(mysql_error());																	
										
										if(mysql_num_rows($result))
										{
											
												while($row=mysql_fetch_array($result))
												{
									?>	
                                    <tr>
                                        <td> <?php print($row['fee_voucher_id']); ?></td>
                                        <td> <?php print($row['currentdate']); ?></td>
                                        <td> <?php print($row['std_enr']); ?></td>
                                        <td> <?php print($row['std_name']); ?></td>
                                        <td> <?php print($row['std_fathername']); ?></td>
                                        
                                        <?php 
										$groupname=$row['group_id'];
										$query2="SELECT group_name FROM tbl_group WHERE group_id=$groupname";
										$result2=mysql_query($query2) or die(mysql_error());
										$row2=mysql_fetch_array($result2);
										?>
                                        <td> <?php print($row2['group_name']); ?></td>
                                       
                                        <?php 
										$classname=$row['class_id'];
										$query3="SELECT class_name FROM class WHERE class_id=$classname";
										$result3=mysql_query($query3) or die(mysql_error());
										$row3=mysql_fetch_array($result3);
										?>
                                        <td> <?php print($row3['class_name']); ?></td>
                                        
                                        
                                        
                                     
                                        
                                        
                                        <td> <?php print($row['month']); ?></td>
                                        <td> <?php print($row['monthlyfee']); ?></td>
                                         
                                    </form></tr>
                                    <?php
				 							   $sum=$sum+$row['monthlyfee'];
												}
 }
                                  
									?>	
                                    
 
 								 <?php	
								
										
									
									?>	
                                  <tr>
                                  		<td colspan="8"><b>Total</b></td>
                                        <td><b> <?php  print($sum); ?></b></td>
                                       
                                        
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                        </div>
						<div class="table-responsive">
                            <table id="tab2" class="table table-bordered table-hover">
                                <thead>
									<tr style="background-color:#f5f5f5;">
										<th colspan="8" style="text-align:center;">Admission Fee</th>
									</tr>
                                    <tr>
                                       
                                        <th>Admission Date</th>
                                        <th>Student Enrollment</th>
                                        <th>Student Name</th>
                                        <th>Father Name</th>
                                        <th>Group</th>
                                        <th>Class</th>
                                        <th>Fee Month</th>
                                        <th>Fee Amount</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                 	
										
                                    <?php
									$query="SELECT * FROM student
										 WHERE currentdate >= '$startdate' AND currentdate <= '$enddate' AND status='A'";
										$result=mysql_query($query) or die(mysql_error());																	
										
										if(mysql_num_rows($result))
										{
											
												while($row=mysql_fetch_array($result))
												{
									?>	
                                    <tr>
                                       
                                        <td> <?php print($row['currentdate']); ?></td>
                                        <td> <?php print($row['std_enr']); ?></td>
                                        <td> <?php print($row['std_name']); ?></td>
                                        <td> <?php print($row['std_fathername']); ?></td>
                                        
                                        <?php 
										$groupname=$row['group_id'];
										$query2="SELECT group_name FROM tbl_group WHERE group_id=$groupname";
										$result2=mysql_query($query2) or die(mysql_error());
										$row2=mysql_fetch_array($result2);
										?>
                                        <td> <?php print($row2['group_name']); ?></td>
                                       
                                        <?php 
										$classname=$row['class_id'];
										$query3="SELECT class_name FROM class WHERE class_id=$classname";
										$result3=mysql_query($query3) or die(mysql_error());
										$row3=mysql_fetch_array($result3);
										?>
                                        <td> <?php print($row3['class_name']); ?></td>
                                        
                                    <?php    $time=strtotime($row['currentdate']);
										$month=date("m",$time);
										$year=date("Y",$time);
									?>	
                                        <td> <?php echo $year."-".$month; ?></td>
										
                                        <td> <?php print($row['admissionfee']); ?></td>
                                         
                                    </form></tr>
                                    <?php
				 							   $sum1=$sum1+$row['admissionfee'];
												}
										}												
 ?>
 
 								 <?php	
								
										
									
									?>	
                                  <tr>
                                  		<td colspan="7"><b>Total</b></td>
                                        <td><b> <?php  print($sum1 ); ?></b></td>
                                       
                                        
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                        <div class="table-responsive">
                            <table id="tab3" class="table table-bordered table-hover">
						</tbody>
						<tr style="background-color:#f5f5f5;">
                                  		<td colspan="7"><b><right> Total Income Between <?php  print($startdate ); ?> And <?php  print($enddate ); ?> Is : </right></b></td>
                                        <td><b> <?php  print($studentfeesum=$sum+$sum1 ); ?></b></td>
                                       
                                        
                                       
                        </tr>
						</tbody> 
                            </table>
							</div>
                        
                        <div class="panel">
                         <h1 class="page-header">
                           Expense
                        </h1>
                           </div>        
                    </div>
                        
                        
                        
                        
                        
                            <table id="tab4" class="table table-bordered table-hover">
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
										$query5="SELECT * FROM pettycash WHERE date >= '$startdate' AND date <= '$enddate'";
										$result5=mysql_query($query5) or die(mysql_error());																	
										
										if(mysql_num_rows($result5))
										{
												while($row5=mysql_fetch_array($result5))
												{
									?>	
                                    <tr>
                                        <td> <?php print($row5['pcash_voucher_id']); ?></td>
                                        <td> <?php print($row5['issuedamount']); ?></td>
                                        <td> <?php print($row5['reason']); ?></td>
                                        <td> <?php print($row5['date']); ?></td>
                                      
                                             
                                    </form></tr>
                                    <?php
				 							   $pettycashsum=$pettycashsum+$row5['issuedamount'];
												}
 }
                                  
										
 ?>
 
 								 <?php	
								
										
									
									?>	
                                  <tr>
                                  		<td><b>Total</b></td>
                                        <td colspan="3"> <b><?php  print($pettycashsum); ?></b></td>
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                            
                            
                            
                            
                            <table id="tab5" class="table table-bordered table-hover">
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
										$query6="SELECT * FROM monthlyexpenses WHERE currentdate >= '$startdate' AND currentdate <= '$enddate'";
										$result6=mysql_query($query6) or die(mysql_error());																	
										
										if(mysql_num_rows($result6)){
												while($row6=mysql_fetch_array($result6))
												{
									?>	
                                    <tr>
                                        <td> <?php print($row6['month']); ?></td>
                                        <td> <?php print($row6['utilitybills']); ?></td>
                                        <td> <?php print($row6['buildingrent']); ?></td>
                                        <td> <?php print($row6['maintenance']); ?></td>
                                        <td> <?php print($row6['otherexpenses']); ?></td>
                                        <td> <?php print($row6['reason']); ?></td>
                                        <td> <b><?php print($row6['totalexpense']); ?></b></td>
                                      
                                             
                                    </form></tr>
                                    <?php
				 							   $exsum=$exsum+$row6['totalexpense'];
												}
 }
                                  
										
 ?>
 
 								 <?php	
								
										
									
									?>	
                                  <tr>
                                  		<td><b>Total</b></td>
                                        <td colspan="6"> <b><?php  print($exsum ); ?></b></td>
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                            
                            
                            
                            
                            
                             <table id="tab6" class="table table-bordered table-hover">
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
										$query7="SELECT * FROM teacher_salary WHERE currentdate >= '$startdate' AND currentdate <= '$enddate'";
										$result7=mysql_query($query7) or die(mysql_error());																	
										
										if(mysql_num_rows($result7))
										{
												while($row7=mysql_fetch_array($result7))
												{
									?>	
                                    <tr>
                                        <td> <?php print($row7['tsalary_voucher_id']); ?></td>
                                        <td> <?php print($row7['month']); ?></td>
                                        
                                        
                                        <?php 
										$teacherid=$row7['teacher_id'];
										$query8="SELECT teacher_name FROM teacher WHERE teacher_id=$teacherid";
										$result8=mysql_query($query8) or die(mysql_error());
										$row8=mysql_fetch_array($result8);
										?>
                                        <td> <?php print($row8['teacher_name']); ?></td>
                                        
                                        
                                        
                                        
                                        <td> <?php print($row7['amount']); ?></td>
                                  
                                      
                                             
                                    </form></tr>
                                    <?php
				 							   $salarysum=$salarysum+$row7['amount'];
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
                            
                            
                             <?php	
								
										
									
									?>	
                                  
                                 
                                </tbody> 
                            </table>
                            
                            
                            
                            
                            
                             <table id="tab7" class="table table-bordered table-hover">
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
                                        <td> <?php print($pettycashsum); ?></td>
                                        <td> <?php print($salarysum); ?></td>
                                        <td> <?php print($exsum); ?></td>
                                        <?php $totalsum=$pettycashsum+$exsum+$salarysum; ?>	
										<td> <b><?php  print($totalsum); ?></b></td>
										
									 </form></tr>
                                   
                                  
                                        
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                            
                            
                            <div class="row">
                   
                        <div class="panel">
                         <h1 class="page-header">
                           Net Report
                        </h1>
                           </div>        
                    </div>
                            
                            <table id="tab8" class="table table-bordered table-hover">
                                <thead>
                                <tr style="background-color:#f5f5f5;">
                                <th colspan="4"><strong><center>Net Report between <?php print($startdate); ?> And <?php print($enddate); ?> </center></strong></th>
                                </tr>
                                    <tr>
                                        <th>Total Expenses</th>
                                        <th> Total Income</th>
                                        <th> Net Summary</th>
                                       </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                        <td> <?php print($totalsum); ?></td>
                                        <td> <?php print($studentfeesum); ?></td>
                                        <?php $net=$studentfeesum-$totalsum; ?>	
										<td> <b><?php  print($net); ?></b></td>
										
									 </form></tr>
                                   
                                  
                                        
                                       
                                  </tr> 
                                 
                                </tbody> 
                            </table>
                            <div class="col-lg-6">
							<button id="printbutton1" onclick="slip_print()" class="btn btn-primary">Print</button> 
						</div>
                        </div>
  </div>

