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
<style>
	input[type="text"]:disabled{
		background-color:#ffffff;
		border: none;
		box-shadow: none;
		padding-top:4%;
	}
	
</style>
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
					  <li>
						  <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
					  </li>
					  
					  
					  <li >
						  <a href="addstudent.php"><i class="glyphicon glyphicon-education"></i>Add New Student</a>
					  </li>
					  <li>
						  <a href="managestudent.php"><i class="glyphicon glyphicon-education"></i>Manage Student</a>
					  </li>
					  <li>
						  <a href="viewstudent.php"><i class="glyphicon glyphicon-education"></i>View Students</a>
					  </li>
					  <li class="active">
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
                                <li>
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
               <div class="row" id="printdiv"  style="padding-bottom:5px">
                
                         
                
                        
<?php
$id=$_GET['id'];

$query="select * from teacher WHERE teacher_id='$id'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)){
	while($row=mysql_fetch_array($result, MYSQL_BOTH)){
		$name=$row['teacher_name'];
		$cnic=$row['teacher_cnic'];
		$address=$row['teacher_address'];
		$email=$row['teacher_email'];
		$phonenumber=$row['teacher_phonenumber'];
		$gender=$row['teacher_gender'];
		$date=$row['currentdate'];
	}
}


$query1="SELECT `group_id`, `group_name` FROM `tbl_group` WHERE group_id IN (SELECT `group_id` FROM `teacher_group` WHERE teacher_id='$id')";
$result=mysql_query($query1) or die(mysql_error());																	
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_array($result)){
			$group[]=$row['group_name'];
		}
	}
	
$query2="SELECT `class_id`, `class_name` FROM `class` WHERE class_id IN (SELECT `class_id` FROM `teacher_class` WHERE teacher_id='$id') GROUP BY(class_name)";
$result=mysql_query($query2) or die(mysql_error());																	
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_array($result)){
			$class[]=$row['class_name'];
		}
	}
	
$query3="SELECT `subject_id`, `subject_name` FROM `subject` WHERE subject_id IN (SELECT `subject_id` FROM `teacher_subject` WHERE teacher_id='$id') GROUP BY(subject_name)";
$result=mysql_query($query3) or die(mysql_error());																	
	if(mysql_num_rows($result)){
		while($row=mysql_fetch_array($result)){
			$subject[]=$row['subject_name'];
		}
	}
?>						
			
			<div id="top" class="col-lg-12 col-md-10" align="center" >
                            <div class="panel panel-primary">
                              
			<div class="panel panel-default" align="center">
			                         <table class="table" >
									 <tr style="background-color:#f5f5f5;">
										<td colspan="8" style="text-align:center;"><b><h3>Teacher Registration Slip<h3><b></td>
									</tr>
		<tr><td> <b>Teacher ID</b></td><td> <?php echo $id;?></td></tr>
        <tr><td> <b> Name</b></td><td> <?php echo $name;?></td></tr>
         
         <tr>
        <td><b>CNIC</b></td><td><?php echo $cnic;?></td>  
       </tr>
	   <tr>
        <td><b>Gender</b></td><td><?php echo $gender;?></td>  
       </tr>
	   <tr>
        <td><b>Adddress</b></td><td><?php echo $address;?></td>
       </tr>
	   <tr>
        <td><b>Phone Number</b></td><td><?php echo $phonenumber;?></td>
       </tr>
	   <tr>
        <td><b>Email</b></td><td><?php echo $email;?></td>
       </tr>
        <tr>
        <td><b>Group</b></td><td><?php foreach($group as $value) echo $value.'<br>'; ?></td>
       </tr>
        <tr>
        <td><b>Class</b></td><td><?php foreach($class as $value) echo $value.'<br>'; ?></td>
       </tr>
         <tr>
        <td><b>Subjects</b></td><td><?php foreach($subject as $value) echo $value.'<br>'; ?></td>
       </tr>
	   <tr>
        <td><b>Date</b></td><td><?php echo $date; ?></td>
       </tr>
			</table>
			</div>
			</div>
			</div>
	                    </div>  

                      <div class="col-lg-6">				
									<button id="printbutton1" onclick="salary_print()" class="btn btn-primary">Print</button> 
								<form action="dashboard.php" method="" >  
									<br><button id="printbutton2" type="submit" class="btn btn-primary">Go Back</button>
								</form>	
                           </div>         
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
<script src="js/student.js"></script>

</body>

</html>
<?php
 
 }
 ?>
<script>
function salary_print() {
	var printButton1 = document.getElementById("printbutton1");
	var printButton2 = document.getElementById("printbutton2");
	document.getElementById("top").style.marginTop="-70px";
	printButton1.style.visibility = 'hidden';
	printButton2.style.visibility = 'hidden';
	
//	document.getElementById("top").style.background= "url('masab.jpg') no-repeat";
    window.print();
	printButton1.style.visibility = 'visible';
	printButton2.style.visibility = 'visible';
	document.getElementById("top").style.marginTop="initial";
//	document.getElementById("top").style.backgroundImage = "none";
}
</script>
 
    