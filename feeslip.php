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
					  <li>
						  <a href="addnewteacher.php"><i class="glyphicon glyphicon-user"></i> Add New Teacher</a>
					  </li>
					  <li>
						  <a href="manageteacher.php"><i class="glyphicon glyphicon-user"></i> Manage Teachers</a>
					  </li>
					  <li>
						  <a href="viewteacher.php"><i class="glyphicon glyphicon-user"></i> View Teachers</a>
					  </li>
					  <li  class="active">
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
$enr=$_GET['enr'];
$month=$_GET['month'];

$query="select * from student WHERE std_enr='$enr'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)){
	while($row=mysql_fetch_array($result, MYSQL_BOTH)){
		$name=$row['std_name'];
		$fname=$row['std_fathername'];
		$class=$row['class_id'];
		$group=$row['group_id'];
		$sid=$row['std_id'];
	}
}

$query="select * from std_subj WHERE std_id='$sid'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)){
	while($row=mysql_fetch_array($result, MYSQL_BOTH)){
		$subid=$row['subject_id'];
		$query1="select * from subject WHERE subject_id='$subid'";
		$result1 = mysql_query($query1) or die(mysql_error());
		if(mysql_num_rows($result1)){
			while($row1=mysql_fetch_array($result1, MYSQL_BOTH)){
				$subject1[]=$row1['subject_name'];
			}
		}
	}
}


$query="select * from tbl_group WHERE group_id='$group'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)){
	while($row=mysql_fetch_array($result, MYSQL_BOTH)){
		$group1=$row['group_name'];
	}
}

$query="select * from class WHERE class_id='$class'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)){
	while($row=mysql_fetch_array($result, MYSQL_BOTH)){
		$class1=$row['class_name'];
	}
}

$query="select * from student_fee WHERE std_enr='$enr' AND month='$month'";
$result = mysql_query($query) or die(mysql_error());
if(mysql_num_rows($result)){
	while($row=mysql_fetch_array($result, MYSQL_BOTH)){
		$month1=$row['month'];
		$monthlyfee=$row['monthlyfee'];
		$date=$row['currentdate'];
		$voucher=$row['fee_voucher_id'];
	}
}

$mydate = strtotime($month1);
?>						
                          
              
			   
			
			<div id="top" class="col-lg-12 col-md-10" align="center" >
                            <div class="panel panel-primary">
                              
			<div class="panel panel-default" align="center">
			                         <table class="table" >
									 <tr style="background-color:#f5f5f5;">
										<td colspan="8" style="text-align:center;"><b><h3>Student's Fee Slip<h3><b></td>
									</tr>
		<tr><td> <b>Enrolment Number</b></td><td> <?php echo $enr;?></td></tr>
		<tr><td> <b>Voucher ID</b></td><td> <?php echo $voucher;?></td></tr>
        <tr><td> <b> Name</b></td><td> <?php echo $name;?></td></tr>
         
         <tr>
        <td><b>Father's Name</b></td><td><?php echo $fname;?></td>  
       </tr>
        <tr>
        <td><b>Group</b></td><td><?php echo $group1;?></td>
       </tr>
        <tr>
        <td><b>Class</b></td><td><?php echo $class1;?></td>
       </tr>
         <tr>
        <td><b>Subjects</b></td><td><?php foreach($subject1 as $value) echo $value.'<br>'; ?></td>
       </tr>
         <tr>
        <td><b>Month</b></td><td><?php echo date('F Y', $mydate); ?></td>
       </tr>
		<tr>
        <td><b>Monthly Fee</b></td><td><?php echo $monthlyfee; ?></td>
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
									<button id="printbutton1" onclick="fee_print()" class="btn btn-primary">Print</button> 
								
								<form action="studentfee.php" method="" >  
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
function fee_print() {
	var printButton1 = document.getElementById("printbutton1");
	var printButton2 = document.getElementById("printbutton2");
	printButton1.style.visibility = 'hidden';
	printButton2.style.visibility = 'hidden';
	document.getElementById("top").style.marginTop="-70px";
    window.print();
	printButton1.style.visibility = 'visible';
	printButton2.style.visibility = 'visible';
	document.getElementById("top").style.marginTop="initial";
}
</script>
 
    