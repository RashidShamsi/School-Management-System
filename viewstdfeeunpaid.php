

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

?>
<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<head>

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
                <div class="col-lg-12 col-md-3">
    <!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  </div>

               
                <!-- /.row -->
                
                <div class="row">
                   
                        <h1 class="page-header">
                          Students' Fee
                        </h1>     
                    </div>
                
              
                

               
                <!-- /.row -->
                                <div class="row">
                    <div class="col-lg-6">
									<div>
										<ul class="nav nav-pills">
											<li role="presentation"><a href="viewstdfee.php">View Paid Students</a></li>
											<li role="presentation" class="active"><a href="viewstdfeeunpaid.php">View Unpaid Students</a></li>
										</ul>
									</div>
									  <br>
           						 <div class="form-group">
 
									<form>
									  Start Date:
									  <input type="month" name="stdate" id="stdate" onChange="enabledate()">
									   End Date:
									  <input type="month" name="endate" id="enddate" onChange="enabledate2()" disabled>
									  <button type="button" class="btn btn-default btn-primary"  onClick="viewfeemonth()">Submit</button>
									</form>
									
 
  								 <label>Select Group</label>
								 
								 
						<br>
                               
                                 	 <select class="form-control" name="group" id="group" onChange="callfee_1(this.value)" disabled>
														<option value="000">Select Any Program</option>
														<?php 
															$query="SELECT * FROM `tbl_group`";
															$result = mysql_query($query) or die(mysql_error());
															if(mysql_num_rows($result))
															{
																while($row=mysql_fetch_array($result, MYSQL_BOTH))
															   { 
														?>
															<option id="<?php echo $row['group_id'];?>"  value="<?php echo $row['group_id'];?>"><?php echo $row['group_name'];?></option>;
														<?php
														}}
														?>
                                                        <option value="111">All Programs </option>
                                                        
													</select>
                           
                                </div>
                               
                                <div class="form-group">
                                
                                 <label>Select Class</label>
                                <select class="form-control" name="class" id="class" onChange="callfee_2(this.value)" disabled>
                                   <option value="000">Select Any Class</option>
								<?php 
									$query="SELECT class_name, class_id FROM `class` GROUP BY(class_name) ORDER BY class_name";
									$result = mysql_query($query) or die(mysql_error());
									if(mysql_num_rows($result))
									{
										while($row=mysql_fetch_array($result, MYSQL_BOTH))
									   { 
								?>
									<option id="<?php echo $row['class_id'];?>"  value="<?php echo $row['class_id'];?>"><?php echo $row['class_name'];?></option>;
								<?php
								}}
								?>
                                  	
                                   <option value="111">Select All Classes</option>
                                  
                                  
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
                                        <th>Enrollment No.</th>
                                        <th>Name</th>
                                        <th>Month</th>
                                        <th>Monthly Fee</th>
                                        <th>Admission Fee</th> 
                                    </tr>
                                </thead>
                                 <tbody id="table">
 

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
   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	
	  
	  
	  <script>
		function viewfeemonth(){
			var stdate=document.getElementById("stdate").value;
			var enddate=document.getElementById("enddate").value;
				if(stdate<=enddate){
							var xmlhttp;
					  xmlhttp=new XMLHttpRequest();
					  xmlhttp.onreadystatechange = function(){
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("table").innerHTML = xmlhttp.responseText;
						}
						
						}
						xmlhttp.open("GET","stdfeemonthunpaid.php?stdate="+stdate+"&enddate="+enddate,true);
						xmlhttp.send(null);					
					
				}
				else{
					alert("Select Month Correctly");
				}
					
		}
		
		function enabledate(){
			if(document.getElementById("stdate").value!=""){
				document.getElementById("enddate").disabled= false; 
				}		
		}
		
		function enabledate2(){
			if(document.getElementById("enddate").value!=""){
				document.getElementById("group").disabled= false; 
				document.getElementById("class").disabled= false;
				}		
		}
	  
		function callfee_1(p){
				firstfee(p);
				secondfee(p);
		}
		
		
										
			function firstfee(p){
				var stdate=document.getElementById("stdate").value;
				var enddate=document.getElementById("enddate").value;
			var xmlhttp;
			  xmlhttp=new XMLHttpRequest();
			  xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("table").innerHTML = xmlhttp.responseText;
				}
				
			}	
				if(stdate!="" && enddate!=""){
					xmlhttp.open("GET","changecontent_feemonthunpaid.php?a="+p+"&stdate="+stdate+"&enddate="+enddate,true);
				}
				else{
					xmlhttp.open("GET","changecontent_feeunpaid.php?a="+p,true);
				}
				xmlhttp.send(null);
			} 
		
										
			function secondfee(p){
			var xmlhttp;
			  xmlhttp=new XMLHttpRequest();
			  xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("class").innerHTML = xmlhttp.responseText;
				}
			} 
			
			xmlhttp.open("GET","firstScriptfee.php?a="+p,true);
			xmlhttp.send(null);
			}
			
					
			/*	=============================	FUNCTIONS FOR CLASS	=================================	*/

		function callfee_2(q){
			var p=document.getElementById("group").value;
			firstclassfee(q);
			
		}
		
									
		function firstclassfee(q){
			var stdate=document.getElementById("stdate").value;
			var enddate=document.getElementById("enddate").value;
			var p=document.getElementById("group").value;
		if(!isNaN(q)){
		var xmlhttp;
		  xmlhttp=new XMLHttpRequest();
		  xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("table").innerHTML = xmlhttp.responseText;
            }
        } 
		if(stdate=="" && enddate==""){
			xmlhttp.open("GET","changecontent2_feeunpaid.php?b="+q+"&a="+p,true);
		}
		else{
			xmlhttp.open("GET","changecontent2_feemonthunpaid.php?b="+q+"&a="+p+"&stdate="+stdate+"&enddate="+enddate,true);
        }
		xmlhttp.send(null);
        }
		}
		
	  </script>
</body>

</html>
<?php }
?>
  
                                    
                                    
                

