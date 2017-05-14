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

$std_id=$_GET['SID'];


$_SESSION['std_id']=$std_id;

$query="select * from student where std_id=$std_id";
$result = mysql_query($query) or die(mysql_error());

$row=mysql_fetch_array($result, MYSQL_BOTH)
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
               
                
                <div class="row">
                   
                        <h1 class="page-header">
                         Edit Student Data
                        </h1>     
                    </div>
                
              
                

               
                <!-- /.row -->
                                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="stdupdate.php" method="post">
 							<input type="hidden" name="sid" value="<?php print($std_id); ?>" />
                            <div class="form-group">
                                <label>STUDENT Enrollment No</label>
                                <input  class="form-control"   name="enr" id="enr"  value="<?php print($row['std_enr']); ?>" disabled>
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control"   name="name" id="name"  value="<?php print($row['std_name']); ?>" required>
                                <p class="help-block"></p>
                            </div>
                            
                             <div class="form-group">
                                <label>Father Name</label>
                                <input class="form-control" name="fname" id="fname" size="50" value="<?php print($row['std_fathername']); ?>"required >
                                <p class="help-block"></p>
                            </div>
                            
                            <div class="form-group">
                                <label>Gender</label>
                                <label class="radio-inline">
                       <input type="radio" name="gender" id="male" value="male" <?php if($row['std_gender']=="male") { ?>
												 checked="checked" <?php } ?>>Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="female" value="female" <?php if($row['std_gender']=="female") { ?>
												 checked="checked" <?php } ?>>Female
                                </label>
                             
                            </div>
							
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control"  name="address" id="address" size="50" value="<?php print($row['std_address']); ?>" required>
                                <p class="help-block"></p>
                            </div>
                            
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input class="form-control"  name="phonenumber" id="phonenumber" size="50" value="<?php print($row['std_phonenumber']); ?>">
                                <p class="help-block"></p>
                            </div>
              

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" id="email" size="50" value="<?php print($row['std_email']); ?>">
                            </div>
                            
                             <div class="form-group">
                                <label>Group</label>
                                <select class="form-control" name="group" id="group" onChange="changeSecond(this.value)" required>
														<option value="">Select Any Program</option>
														<option <?php if($row['group_id']=="001" ) { ?> selected="selected"<?php } ?>value="001">Primary</option>
														<option <?php if($row['group_id']=="006" ) { ?> selected="selected"<?php } ?> value="006">Matric(Computer-Science)</option>
														<option <?php if($row['group_id']=="005" ) { ?> selected="selected"<?php } ?> value="005">Matric(Bio-Science)</option>
														<option <?php if($row['group_id']=="002" ) { ?> selected="selected"<?php } ?> value="002">Inter(Pre-Engineering)</option>
                                                        <option <?php if($row['group_id']=="003" ) { ?> selected="selected"<?php } ?> value="003">Inter(Pre-Medical)</option>
														<option <?php if($row['group_id']=="007" ) { ?> selected="selected"<?php } ?> value="007">Inter(General Science)</option>
                                                        <option <?php if($row['group_id']=="008" ) { ?> selected="selected"<?php } ?> value="004">Inter(Commerce)</option>
                                                        
													</select>
                               
                            </div>
                            
                            
                              <div class="form-group">
                                <label>Class</label>
                                <select class="form-control"  name="class" id="secondlist" required>
                                 	
                            <?php 
							$class=$row['class_id'];
							$group= $row['group_id'];
							$query1= "SELECT class_name, class_id from class WHERE class_id IN (SELECT class_id from t_group_class WHERE group_id=$group)";
							$result1=mysql_query($query1) or die(mysql_error());
							while($row1=mysql_fetch_array($result1,MYSQL_BOTH))
							{
						
							?>
                          
                                    
                     <option <?php if($class== $row1['class_name'] || $class==$row1['class_id']) { ?>selected="selected" <?php } ?> value="<?php print($row1['class_id']); ?>"> <?php print($row1['class_name']); ?> </option>
                                    
                                    
                                   <?php } ?>
                                </select>
                            </div>




                            <button type="submit" class="btn btn-default">Next</button>
                            

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
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
<?php
 
 }
 ?>
<script>
        function changeSecond(first){
       
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("secondlist").innerHTML = xmlhttp.responseText;
            }
        } 
		
	
        
        xmlhttp.open("GET","secondScript.php?first="+first,true);
        xmlhttp.send(null);
        }
		
		
	
        </script>
        
        