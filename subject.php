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

$id=$_SESSION['id'];
		$query5="SELECT class_id FROM teacher_class WHERE `teacher_id`='$id'";
			$result5 = mysql_query($query5) or die(mysql_error());
				if(mysql_num_rows($result5)){
					while($row5=mysql_fetch_array($result5, MYSQL_BOTH)){
						$classteacher[]=$row5['class_id'];
						
					}
				}
			
			?>
			 <table class="table table-bordered table-hover" border="1" >
			
				<form action="subjectsubmit.php" method="get">
					<tr><th><h2>SELECT SUBJECTS<h2></th></tr>
			
<?php
	$query="SELECT teacher_group.group_id, tbl_group.group_name FROM teacher_group INNER JOIN tbl_group ON teacher_group.group_id=tbl_group.group_id WHERE `teacher_id`='$id'";
	$result = mysql_query($query) or die(mysql_error());
		if(mysql_num_rows($result)){
			while($row=mysql_fetch_array($result, MYSQL_BOTH)){
				unset($groupid);
				unset($groupname);
				$groupid=$row['group_id'];
				$groupname=$row['group_name'];
				
	
		
				unset($classgroup);
			$query2="SELECT `class_id` FROM `t_group_class` WHERE `group_id`='$groupid'";
			$result2 = mysql_query($query2) or die(mysql_error());
				if(mysql_num_rows($result2)){
					while($row1=mysql_fetch_array($result2, MYSQL_BOTH)){
						$classgroup[]=$row1['class_id'];
					}
			}
					
						$class=array_intersect($classteacher, $classgroup);
						
				foreach($class as $value){
					
				
				$query3="SELECT `class_id`, `class_name` FROM `class` WHERE `class_id`='$value'";
				$result3 = mysql_query($query3) or die(mysql_error());
				if(mysql_num_rows($result3)){
					while($row3=mysql_fetch_array($result3, MYSQL_BOTH)){
						$classid=$row3['class_id'];
						$classname=$row3['class_name'];
				?>
						
					<?php
				$query4="SELECT `subject_name`, `subject_id` FROM `subject` 
				WHERE subject_id IN (SELECT subject_id from t_subject_class WHERE group_id='$groupid' AND class_id='$classid')";
				$result4 = mysql_query($query4) or die(mysql_error());
				if(mysql_num_rows($result4)){
				?>
					<tr>
						<td> &nbsp </td>
					</tr>
					<tr style="background-color:#f5f5f5;">
						<td><?php echo "GROUP : ".$groupname. '<br>'."CLASS : ".$classname;?></td>
					</tr>
					
					<?php
				while($row4=mysql_fetch_array($result4, MYSQL_BOTH)){?>
					<tr>
						<td>
							<input type="checkbox" name="subject[]" value="<?php print($row4['subject_id']); ?>" id="<?php print($row4['subject_name']); ?>"/><?php print($row4['subject_name']); ?><br/>
						</td>
					</tr>
					
				
					<?php
				}
				}
				}
				}
				}
					
				}
 }		
?>
					<tr>
						<td>
							<input type="submit" value="submit" />
						</td>
					</tr>
					</form>
				</table>
                      

                               
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

    





























































		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

