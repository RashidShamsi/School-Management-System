  <?php
	  include("../Includes/connection.php");
  ?>
  
  <?php
  session_start();
  				   date_default_timezone_set("Asia/Karachi");
  
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
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $user; ?> <b class="caret"></b></a>
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
				  
				  <div class="row">
					 
						  <div class="panel">
							 </div>
							  
							   
					  </div>
				  
				  
  
				  <div class="row">
					  <div class="col-lg-6 col-md-8">
						  <div class="panel panel-primary">
							  <div class="panel-heading">
								  <div class="row">
									  <div class="col-xs-3">
										  <i class="glyphicon glyphicon-education fa-5x"></i>
									  </div>
									  <div class="col-xs-9 text-right">
										  <div class="huge">Students     </div>
										  <div>Add Manage & View!</div>
									  </div>
								  </div>
							   </div>
							  
								<div class="panel-footer">
									 <a href="addstudent.php">  <span class="pull-left">Add Students</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
								  
								   <div class="panel-footer">
									  <a href="managestudent.php"><span class="pull-left">Manage Students</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
								   <div class="panel-footer">
									  <a href="viewstudent.php"><span class="pull-left">View Students</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
							  
						  </div>
					  </div>
					  <div class="col-lg-6 col-md-8">
						  <div class="panel panel-green">
							  <div class="panel-heading">
								  <div class="row">
									  <div class="col-xs-3">
										  <i class="glyphicon glyphicon-user fa-5x"></i>
									  </div>
									  <div class="col-xs-9 text-right">
										  <div class="huge">Teachers</div>
										  <div>Add Manage & View!</div>
									  </div>
								  </div>
							  </div>
							  
								  <div class="panel-footer">
									  <a href="addnewteacher.php"><span class="pull-left">Add New Teacher</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
									<div class="panel-footer">
									  <a href="manageteacher.php"><span class="pull-left">Manage Teachers</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
									<div class="panel-footer">
									  <a href="viewteacher.php"><span class="pull-left">View Teachers</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
							  
						  </div>
					  </div>
					  <div class="col-lg-6 col-md-8">
						  <div class="panel panel-yellow">
							  <div class="panel-heading">
								  <div class="row">
									  <div class="col-xs-3">
										  <i class="fa fa-fw fa-edit fa-5x"></i>
									  </div>
									  <div class="col-xs-9 text-right">
										  <div class="huge">Accounts</div>
										  <div>Manage Update & View!</div>
									  </div>
								  </div>
							  </div>
							 
								  <div class="panel-footer">
									   <a href="studentfee.php"><span class="pull-left">Student Fee</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
								  <div class="panel-footer">
									   <a href="pettycash.php"><span class="pull-left">Petty Cash</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
								  <div class="panel-footer">
									   <a href="monthlyexpense.php"><span class="pull-left">Monthly Expense</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
							  
						  </div>
					  </div>
					  <div class="col-lg-6 col-md-8">
						  <div class="panel panel-red">
							  <div class="panel-heading">
								  <div class="row">
									  <div class="col-xs-3">
										  <i class="glyphicon glyphicon-list-alt fa-5x"></i>
									  </div>
									  <div class="col-xs-9 text-right">
										  <div class="huge">Reports & Summaries</div>
										  <div>Fee Income & Expense</div>
									  </div>
								  </div>
							  </div>
								  <div class="panel-footer">
									   <a href="feesummary.php"><span class="pull-left">Fee Summary</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
								  <div class="panel-footer">
									   <a href="incomereport.php"><span class="pull-left">Income Report</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
								  <div class="panel-footer">
									   <a href="expensereport.php"><span class="pull-left">Expense Report</span>
									  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									  <div class="clearfix"></div></a>
								  </div>
								  
							  
						  </div>
						  
							  
						  </div>
					  </div>
				  </div>
				  <div class="row">
					 
						  <div class="panel panel-green"></div>
						  <div class="panel panel-red"></div>
						  <div class="panel panel-yellow"></div>
							
							  
							   
					  </div>
				  <!-- /.row -->
  
				 
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
