  
  <?php 
  	error_reporting(0);
	include("../Includes/connection.php");
      
      $id=$_GET['a'];

      
      
      $query="SELECT * FROM teacher WHERE status='A' AND (teacher_id='$id')";
      $result=mysql_query($query);																	
      if(mysql_num_rows($result))
      {
          while($row=mysql_fetch_array($result))
          {							
              $id=$row['teacher_id'];
              $name=$row['teacher_name'];
              $cnic=$row['teacher_cnic'];
              $address=$row['teacher_address'];
              $phonenumber=$row['teacher_phonenumber'];
              $email=$row['teacher_email'];
          
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
  
  <form action="teacher_salaryupdate.php" method="GET" >                           
                      <table border="0" align="center">
                          <tr>
                              <td><input type="hidden" name="" size="50" value="<?php echo $id?>" ></td>
                          </tr>
                          <tr>
                              <td><label>Teacher Id: </label></td>
                              <td><div class="form-group" ><input id="no_border" type="text" class="form-control"  name="enr" size="50" value="<?php echo $id?>" disabled></div></td>
                              <td><div class="form-group" ><input type="hidden" class="form-control" id="enr" name="enr" size="50" value="<?php echo $id?>" ></div></td>
                          </tr>
                          <tr>
                              <td><label>Name: </label></td>
                              <td><div class="form-group" ><input id="no_border1" type="text" class="form-control" name="name" size="50" value="<?php echo $name?>" disabled></div></td>
                          </tr>	
                            <tr id="email">
                              <td><label>Email </label></td>
                              <td><div class="form-group" ><input type="text" class="form-control" name="email" size="50" value="<?php echo $email?>" disabled></div></td>
                          </tr>
                           <tr id="phonenumber">
                              <td><label>Phone Number </label></td>
                              <td><div class="form-group" ><input type="text" class="form-control" name="phonenumber" size="50" value="<?php echo $phonenumber?>" disabled></div></td>
                          </tr>	
                                                    
                         
                           </table>  
                      
                             
  </form>
                                    
  </body>
  </html>

  
  