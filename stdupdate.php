<?php
	error_reporting(0);
	include("../Includes/connection.php");
?>

<?php
session_start();

 if(!isset($_SESSION['state']))
 {
	  header("location:index.php");
 }
 else
 {
	 $user=$_SESSION['user'];
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
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    
                    <li>
                        <a href="addstudent.php"><i class="glyphicon glyphicon-education"></i>Add New Student</a>
                    </li>
                    <li>
                        <a href="mansgestudent.php"><i class="glyphicon glyphicon-education"></i>Manage Student</a>
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
                    <div class="col-lg-6">



<?php 


//exit;

$std_id=$_SESSION['std_id'];

$name = $_POST['name'];
$fname = $_POST['fname'];
$address=$_POST['address'];
$gender=$_POST['gender'];

$email=$_POST['email'];
$phoneNo =$_POST['phonenumber'];
$std_enr;
$group=$_POST['group'];
$class=$_POST['class'];


if($group=="001")
				{
					$std_enr="PRI-".$class."-";
					
					
					}
				else if($group=="006")
				{
					$std_enr="CS-".$class."-";
					
					
					}
					
					else if($group=="005")
				{
					$std_enr="BM-".$class."-";
					
					
					}
				
				else if($group=="002")
				{
					$std_enr="PE-".$class."-";
					
					
					}
					
				else if($group=="003")
				{
					$std_enr="PM-".$class."-";
					
					
					}
					
				else if($group=="007")
				{
					$std_enr="GS-".$class."-";
						
					}
					
				else if($group=="008")
				{
					$std_enr="COM-".$class."-";
					
					
					}

		
	$std_enr=$std_enr.$std_id;
	
$query2="UPDATE student SET std_enr='$std_enr', std_name='$name', std_fathername='$fname',std_address='$address', std_gender='$gender', std_email='$email',std_phonenumber = '$phoneNo',class_id='$class', group_id='$group' WHERE std_id=$std_id";

			$result2 = mysql_query($query2) or die(mysql_error());


			$query="SELECT `subject_id`, `subject_name` FROM `subject` WHERE `subject_id` IN(SELECT `subject_id` FROM std_subj WHERE std_id='$std_id')"; 
        	
			$result = mysql_query($query) or die(mysql_error());
					if(mysql_num_rows($result)){		
						while($row=mysql_fetch_array($result, MYSQL_BOTH)){
							$studentsubject[]=$row['subject_id'];
						}
					}
					?>
					<form role="form" action="editsubject.php" method="post" >	
						
						<label>Select Subjects</label>	
                                <br/> <br/>
							
														<?php
	$query="SELECT subject_id, subject_name FROM subject WHERE subject_id IN (SELECT subject_id from t_subject_class WHERE class_id='$class' AND group_id='$group')";
															$result = mysql_query($query) or die(mysql_error());
															if(mysql_num_rows($result)){
																while($row=mysql_fetch_array($result, MYSQL_BOTH)){
																					
															
																foreach($studentsubject as $value){
																	if($row['subject_id']==$value){
																		$b="checked";
																	}
																}	
																
														?>
													<tr>
														<td>
	<input type="checkbox"  name="sub[]" value="<?php print($row['subject_id']);?>" id="subject" <?php echo @$b?> /><?php print($row['subject_name']); ?><br/>
														</td>
													</tr>
													<?php 
																$b=""; 		
																 }
																 
															}
															
					$_SESSION['std_id']= $std_id;
					

?>
					
                              
                   <br/>
                     <br/>
							<button type="submit" class="btn btn-default">Submit</button>
                            </form>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
   
                            

                            
                            


               
                <!-- /.row -->

               
                               
                <!-- /.row -->

            
            <!-- /.container-fluid -->
            </div>

      
        <!-- /#page-wrapper -->

 
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

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

</body>

</html>


 