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

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>MASAB EDUCATIONAL HOME</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
.form-group.has-success .control-label {
	color: #FFF;
}
</style>
</head>


	
	
	<body>
    
    
     <div id="wrapper">

        <!-- Navigation -->
     
            
            <!-- Top Menu Items -->
          
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
            <!-- /.navbar-collapse -->
      

</div>

<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
          
          <h2 class="text-center"></h2>
      </div>
     
      <div class="modal-body">
			<div align="center">
			<div class="form-group">
				<h3>Password Changed Successfully!!<h3>
            </div>
            <div class="form-group">
           
              
						 <form action="dashboard.php">
						  <button type="submit" class="btn btn-default">Go to Homepage</button>
						 </form>
				</div>
            </div>
      </div>
      
  </div>
  </div>
</div>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
<?php
 }
  else
 {
	  header("location:redirect.php");
 }
?>
