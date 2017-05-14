

<?php
 
	error_reporting(0);
	include("../Includes/connection.php");
session_start();

 if(!isset($_SESSION['state']))
 {
	  header("location:index.php");
 }
 else
 {
	$user=$_SESSION['user']; 
	 
	 $count=1;


$query="select * from student where status='A'";
$result = mysql_query($query) or die(mysql_error());

?>
<!DOCTYPE html>
<html lang="en">

<head>

<link rel="icon" href="favicon.ico" type="image/x-icon" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MASAB EDUCATIONAL HOME</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">MASAB EDUCATIONAL HOME</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $user; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
						
						  <li class="divider"></li>
						  
						  <li>
							  <a href="change_password.php"><span class="glyphicon glyphicon-pencil"></span> Change Password</a>
						  </li>
						  <li>
							  <a href="logout.php"><i class="fa fa-fw fa-power-off" style="text-align:left;"></i> Log Out</a>
						  </li>
					  </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
				  <ul class="nav navbar-nav side-nav">
					  <li >
						  <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
					  </li>
					  
					  
					  <li>
						  <a href="addstudent.php"><i class="glyphicon glyphicon-education"></i>Add New Student</a>
					  </li>
					  <li class="active">
						  <a href="managestudent.php"><i class="glyphicon glyphicon-education"></i>Manage Student</a>
					  </li>
					  <li>
						  <a href="viewstudent.php"><i class="glyphicon glyphicon-education"></i>View Students</a>
					  </li>
					  <li>
						  <a href="addnewteacher.php"><i class="glyphicon glyphicon-user"></i> Add New Teacher</a>
					  </li>
					  <li>
						  <a href="manageteacher.php"><i class="glyphicon glyphicon-user"></i> Manage Teachers</a>
					  </li>
					  <li>
						  <a href="viewteacher.php"><i class="glyphicon glyphicon-user"></i> View Teachers</a>
					  </li>
					  <li>
						  <a href="studentfee.php"><i class="fa fa-fw fa-edit"></i>Student Fee</a>
					  </li>
					   <li>
						  <a href="pettycash.php"><i class="fa fa-fw fa-edit"></i>Petty Cash</a>
					  </li>
					   <li>
						  <a href="monthlyexpense.php"><i class="fa fa-fw fa-edit"></i> Monthly Expenses</a>
					  </li>
					  
					   <li>
						  <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-list-alt"></i> Reports <i class="fa fa-fw fa-caret-down"></i></a>
						  <ul id="demo" class="collapse">
							  <li>
								  <a href="feesummary.php">Fee Summary of Teacher</a>
							  </li>
                               <li >
								  <a href="viewstdfee.php">Fee Summary of Student</a>
							  </li>
							  <li>
								  <a href="incomereport.php">Income Report</a>
							  </li>
							   <li>
								  <a href="expensereport.php">Expense Report</a>
							  </li>
                              <li>
								  <a href="netprofitreport.php">Net Report</a>
							  </li>
							  
						  </ul>
					  </li>
				  </ul>
			  </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                       
                        <ol class="breadcrumb">
                           
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
              
               
                <!-- /.row -->
                
                <div class="row">
                   
                        <h1 class="page-header">
                          Student Management Panel
                        </h1>     
                    </div>
                
              
                

               
                <!-- /.row -->
                                <div class="row">
                    <div class="col-lg-6">
 
           						 <div class="form-group">
 
  								 <label>Group</label>
                               
                                 	 <select class="form-control" name="group" id="group" onChange="callfunctions1(this.value)">
														<option value="000">Select Any Program</option>
														<option value="001">Junior</option>
														<option value="006">Matric(Computer-Science)</option>
														<option value="005">Matric(Bio-Science)</option>
														<option value="002">Inter(Pre-Engineering)</option>
                                                        <option value="003">Inter(Pre-Medical)</option>
														<option value="007">Inter(General Science)</option>
                                                        <option value="004">Inter(Commerce)</option>
                                                       
                                                      
                                                        
													</select>
                           
                                </div>
                               
                                <div class="form-group">
                                
                                 <label>Select Class</label>
                                <select class="form-control" name="secondlist" id="secondlist" onChange="callfunctions2(this.value)" >
                                  <option value="">Select any Class </option>
                                  	
                                  
                                </select>  
                                 
                            </div>
                            	<div class="form-group">
                                 <label>Subjects</label>
                                <select class="form-control" name="subject" id="thirdlist" onChange="callfunctions3(this.value)">
                                 	<option>Select any Subject</option>
                                    
                                </select>
                                </div>
                               
                            </div>
                                                    
                     </div>
                     
                     
                      <div class="col-lg-12">
                        <h2></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" border="1" >
                                <thead>
                                    <tr>
                                   		<th>Serial No.</th>
                                        <th>Profile Image</th>
                                        <th>Enrollment No.</th>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Phone No.</th>
                                        <th>Email</th> 
                                        <th colspan="3"></th> 
                                    </tr>
                                </thead>
                                 <tbody id="data">
                                <?php
								
								
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
								
?>


</tbody>

</table>
</div>

</div>
</div>

               
                <!-- /.row -->

               
                               
                <!-- /.row -->

            
            <!-- /.container-fluid -->
            </div>

      
        <!-- /#page-wrapper -->

 
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
     <script src="js/student.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
<?php }
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