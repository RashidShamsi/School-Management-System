<?php
	error_reporting(0);
	include("../Includes/connection.php");
?>
<?php
session_start();

if(isset($_SESSION['state']))
	{
		header("location:dashboard.php");
	}
else
{
	?>
<!DOCTYPE html>
<html lang="en">
<head>


<link rel="icon" href="favicon.ico" type="image/x-icon" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
body {
	background-image: url(images/open_book_green_background_1157228291.jpg);
	background-repeat: no-repeat;
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
          
          <h1 class="text-center">Masab Educational Home</h1>
      </div>
     
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="login.php" method="post">
            <div class="form-group">
            <label for="login-username"><i class="icon-user"></i> <b>Username</b></label>
              <input type="text"  name="username" id="login-username"class="form-control input-lg" placeholder="">
            </div>
            <div class="form-group">
            <label for="login-password"><i class="icon-lock"></i> <b>Password</b></label>
		 
              <input type="password" name="password" id="login-password" class="form-control input-lg" placeholder="">
            </div>
            <div class="form-group">
           
              <button type="submit" class="btn btn-primary btn-lg btn-block" value="Login">Sign In</button>
           
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
         
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
	?>