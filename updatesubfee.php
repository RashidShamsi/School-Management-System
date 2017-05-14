
  <?php 
  include("../Includes/connection.php");
 session_start();
 
      $admfee= $_POST['admfee'];
      $std_id= $_SESSION['std_id'];
	  $subjects=$_SESSION['sub'];
	  $subfee=$_POST['subfee'];
	  $monthlyfee=0;
 
 /*
 print("student id: ".$std_id."<br/>");
 print("Admission fee: ".$admfee."<br/>");
 print_r($fee);
 print("subject: <br>");
 print_r($subjects);
 
 

  
*/  
  
   $query1="DELETE from std_subj WHERE std_id='$std_id'";
  $result1=mysql_query($query1);
  
   for ($i=0; $i<sizeof($subjects); $i++)
        {
	 
	 
            $query="INSERT INTO std_subj (subject_id, std_id, subject_fee) VALUES ('$subjects[$i]', '$std_id','$subfee[$i]')";     

            $result=mysql_query($query) or die (mysql_error());
	 	  $monthlyfee=$monthlyfee+$subfee[$i];

		}

	
	 
	 
	 
  $query2="UPDATE student SET admissionfee='$admfee', monthlyfee='$monthlyfee' WHERE std_id=$std_id";
  mysql_query($query2) or die(mysql_error());
   $user=$_SESSION['user'];
   header("location:managestudent.php");
  
exit();
	
 
           



?>
	