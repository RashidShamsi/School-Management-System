
<?php 
		error_reporting(0);
	include("../Includes/connection.php");
	
	$id=$_GET['a'];

	
	
	$query="SELECT * FROM student WHERE status='A' AND (std_enr='$id')";
	$result=mysql_query($query);																	
	if(mysql_num_rows($result))
	{
		while($row=mysql_fetch_array($result))
		{							
			$enr=$row['std_enr'];
			$name=$row['std_name'];
			$fname=$row['std_fathername'];
			$address=$row['std_address'];
			$phonenumber=$row['std_phonenumber'];
			$gender=$row['std_gender'];
			$email=$row['std_email'];
			$monthlyfee=$row['monthlyfee'];
		}
	}
	
	else
	{
			header("location:empty.php");
	}
	
	
?>
<html>
<head>
	<script src="js/student.js"></script>
</head>
<body> 

<form action="feeupdate.php" method="GET" >                           
					<table border="0" align="center">
						<tr>
							<td><input type="hidden" name="" size="50" value="<?php echo $id?>" ></td>
						</tr>
						<tr>
							<td><label>Enrolment: </label></td>
							<td><div class="form-group" ><input type="text" class="form-control"  name="enr" size="50" value="<?php echo $id?>" disabled></div></td>
                            <td><div class="form-group" ><input type="hidden" class="form-control" id="enr" name="enr" size="50" value="<?php echo $id?>" ></div></td>
						</tr>
						<tr>
							<td><label>Name: </label></td>
							<td><div class="form-group" ><input type="text" class="form-control" name="name" size="50" value="<?php echo $name?>" disabled></div></td>
						</tr>	
						<tr>	
							<td><label>Father Name: </label></td>
							<td><div class="form-group" ><input type="text" class="form-control" name="fname" size="13" value="<?php echo $fname; ?>" disabled></div></td>
						</tr>
						<tr>
							<td><label>Address: </label></td>
							<td><div class="form-group" ><input type="text" class="form-control" name="address" size="50" value="<?php echo $address; ?>" disabled></div></td>
						</tr>
						<tr>
							<td><label>Contact No.: </label></td>
							<td><div class="form-group" ><input type="text" class="form-control" name="phonenumber" size="50" value="<?php echo $phonenumber ?>"  disabled></div></td>
						</tr>
					    <tr>	
							<td><label>Email: </label></td>
							<td><div class="form-group" ><input type="email" class="form-control" name="email" size="50" value="<?php echo $email ?>"  disabled></div></td>
                        </tr>
                      
						<tr>
							<td ><label>Monthly Fee: </label></td>
							<td> <div class="form-group" id="addfee"><input type="text" class="form-control" value="<?php echo $monthlyfee ?>" disabled></div></td>
							<td><input type="hidden" class="form-control" name="addfee" value="<?php echo $monthlyfee ?>"/></td>
						</tr>
                         	<tr>
							<td><label>Select Fee Month: </label></td>
							<td> <div class="form-group" ><input type="month" onChange="ali(this.value,document.getElementById('enr').value)" name="month" class="form-control" required></div></td>
						</tr>
                        <td>
                         <div class="form-group" id="status">
                         </div>
                        </td>
                        <tr>
                        </tr>
                        
                         </table>  
					
                              <div class="col-lg-6"> <button type="submit" class="btn btn-primary">Submit</button> </div>  
</form>
                                  
</body>
</html>
