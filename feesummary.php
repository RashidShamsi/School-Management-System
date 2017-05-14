<?php

		error_reporting(0);
	include("../Includes/connection.php");
?>

<?php
session_start();


if (isset($_SESSION['state']) && $_SESSION['type']==1)
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
					  <li >
						  <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
					  </li>
					  
					  
					  <li>
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
					  <li>
						  <a href="studentfee.php"><i class="fa fa-fw fa-edit"></i>Student Fee</a>
					  </li>
					   <li>
						  <a href="pettycash.php"><i class="fa fa-fw fa-edit"></i>Petty Cash</a>
					  </li>
					   <li>
						  <a href="monthlyexpense.php"><i class="fa fa-fw fa-edit"></i> Monthly Expenses</a>
					  </li>
					  
					   <li class="active">
						  <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-list-alt"></i> Reports <i class="fa fa-fw fa-caret-down"></i></a>
						  <ul id="demo" class="collapse">
							  <li  class="active">
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
                
                <div id="top" class="row">
                   
                        <div id="a" class="">
                         <h1 class="page-header">
                           Fee Summary
                        </h1>
                           </div>        
                    </div>
                
             

               
                <!-- /.row -->
               
						 <form >
                         
							
                           <div id="calender">
							<div class="col-lg-6">
                            <div class="form-group">
                            <label>Enter Teacher Id Number</label>
                            <input class="form-control"  name="id" id="id" onKeyUp="teacherinfo(this.value)" required>
                                <p class="help-block"></p>
                            </div>
							</div>
                  </div> 
				  <div id="tables"> </div>
							
                                <div class="col-lg-6"> 
      <button id="view" type="button" class="btn btn-primary" onClick="feeSummaryfunction(document.getElementById('id').value)">View</button>
      						</div> 	 
                              
							 </form> 
  
						</div>
						
	   
				  <!-- /.row -->
				   <div class="col-lg-12">
                        <h2></h2>
                        <div class="table-responsive" id="feedata">
    
   
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
<?php
 
 }
 
 else
 {
	  header("location:redirect.php");
 }
 ?>
 <script>
 function feeSummaryfunction(tid){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("feedata").innerHTML = xmlhttp.responseText;
            }
        } 
		
        xmlhttp.open("GET","feesummary_data.php?tid="+tid,true);
        xmlhttp.send(null); 
		
		}
		
function slip_print(){
	var printButton1 = document.getElementById("printbutton1");
	var calender = document.getElementById("calender");

	document.getElementById("email").style.display="none";
	document.getElementById("phonenumber").style.display="none";

	document.getElementById("no_border").style.paddingTop="4%";
	document.getElementById("no_border").style.border="none";
	document.getElementById("no_border").style.boxShadow="none";
	
	document.getElementById("no_border1").style.paddingTop="4%";
	document.getElementById("no_border1").style.border="none";
	document.getElementById("no_border1").style.boxShadow="none";
	
	document.getElementById("top").style.marginTop="-120px";
	calender.style.display = 'none';
	printButton1.style.visibility = 'hidden';
	document.getElementById("view").style.display="none";
	
    window.print();
	
	window.location = "feesummary.php";
	
/*	printButton1.style.visibility = 'visible';
	calender.style.display = 'initial';
	
	document.getElementById("top").style.marginTop="initial";
	document.getElementById("email").style.display="inline-block";
	document.getElementById("phonenumber").style.display="inline-block";
	
	document.getElementById("no_border").style.paddingTop="initial";
	document.getElementById("no_border").style.border="1px solid #ccc;";
	document.getElementById("no_border").style.boxShadow="inset 0 1px 1px rgba(0,0,0,.075);";
	
	document.getElementById("no_border1").style.paddingTop="none";
	document.getElementById("no_border1").style.border="1px solid #ccc;";
	document.getElementById("no_border1").style.boxShadow="inset 0 1px 1px rgba(0,0,0,.075);";
	document.getElementById("view").style.display="block";
	*/
}

</script>
 