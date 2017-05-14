<?php
	error_reporting(0);
	include("../Includes/connection.php");
$sum=0;
?>	
            <div class="col-lg-12">
                        <h2></h2>
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
                            <table class="table table-bordered table-hover">
						</tbody>
						<tr style="background-color:#f5f5f5;">
                                  		<td colspan="7"><b><right> Total Income Between <?php  print($startdate ); ?> And <?php  print($enddate ); ?> Is : </right></b></td>
                                        <td><b> <?php  print($sum+$sum1 ); ?></b></td>
                                       
                                        
                                       
                        </tr>
						</tbody> 
                            </table>
							</div>
						<div class="col-lg-6">
							<button id="printbutton1" onclick="slip_print()" class="btn btn-primary">Print</button> 
						</div>		
  </div>

