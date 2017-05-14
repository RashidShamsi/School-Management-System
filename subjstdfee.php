 
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
 {	 $std_id= $_SESSION['std_id'];
 	 $admfee=$_POST['admfee'];
	 
	 
	 
	 $subjects=$_SESSION['sub'];
	 $subfee=$_POST['subfee'];
	 $monthlyfee=0;
	 
 for ($i=0; $i<sizeof($subjects); $i++)
        {
	 
	 
            $query="INSERT INTO std_subj (subject_id, std_id, subject_fee) VALUES ('$subjects[$i]', '$std_id','$subfee[$i]')";     

            $result=mysql_query($query) or die (mysql_error());
	 	    $monthlyfee=$monthlyfee+$subfee[$i];
	        

	 
	
	 
		}
     $query2="UPDATE student SET admissionfee='$admfee', monthlyfee='$monthlyfee' WHERE std_id='$std_id' ";
	 mysql_query($query2) or die(mysql_error());
	 
	 
	  header("location:stdslip.php?std_id=$std_id");
 exit;
 
     
	 
	 }