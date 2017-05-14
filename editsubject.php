 
 
 <?php
 	error_reporting(0);
	include("../Includes/connection.php");
 session_start();
 
 


 if(!isset($_SESSION['state']))
 {
	  header("location:index.php");
 }
 else
 { 	 $std_id= $_SESSION['std_id'];
	 $subjects=$_POST['sub'];
	 $_SESSION['std_id']=$std_id; 
     $_SESSION['sub']=$subjects  ; 
 
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
					  <li>
						  <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
					  </li>
					  
					  
					  <li  class="active">
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
               
                <!-- /.row -->
               
               
                <!-- /.row -->



 <form action="updatesubfee.php" method="POST">
 <?php 
 
 $query4="SELECT admissionfee from student WHERE std_id=$std_id";
 $result4=mysql_query($query4) or die(mysql_error());
 
 while($row4=mysql_fetch_array($result4, MYSQL_BOTH))
 { $adfee=$row4['admissionfee'];
	 }
  
 
 ?>

  <div class="form-group">
             <label>Enter admission fee</label>
             <input class="form-control"  placeholder="Enter fee..." name="admfee" id="admfee" value="<?php print($adfee); ?>" required>
                                <p class="help-block"></p>
                            </div>
        
    
                
 <?php

 
	

 for ($i=0; $i<sizeof($subjects); $i++)
        {
		 $a="";
        $query3="SELECT subject_name from subject Where subject_id='$subjects[$i]'";
		$result3= mysql_query($query3) or die(mysql_error());
         $row3=mysql_fetch_row($result3,MYSQL_BOTH);
        
		 $query5="SELECT * FROM std_subj WHERE std_id=$std_id";
	 $result5=mysql_query($query5) or die(mysql_error());
	 while($row5=mysql_fetch_array($result5,MYSQL_BOTH))
	 {
		
			
			if($row5['subject_id']==$subjects[$i]) 
			{				$a=$row5['subject_fee'];
			}
		
		 }
?>

               <div class="form-group">
                <label><?php print($row3['subject_name']);?></label>
    <input class="form-control"  placeholder="Enter fee..." name="subfee[]" id="subfee" value="<?php print($a); ?>" required>
                                <p class="help-block"></p>
                            </div>
        
        
        
        
        
        <?php
		
		}
			
			
			
         
       
   ?>
  <button type="submit" class="btn btn-default">Submit</button>
	
 </form>
<?php  

      
 }


?>
				
				
				
			


			
				
				
			


