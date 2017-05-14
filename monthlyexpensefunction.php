<?php	
		error_reporting(0);
	include("../Includes/connection.php");
	
	 $month1=$_GET['c'];	

session_start();
 
  $_SESSION['month']=$month1;
		
	$query="SELECT * FROM monthlyexpenses WHERE month='$month1'";	
	$result=mysql_query($query);	
	
	if(mysql_num_rows($result))
	{	
		while($row=mysql_fetch_array($result))
		
		{	?>
        
         <form role="form" action="monthlyexpense_update.php" method="post" >
                        
                            <div class="form-group">
                                <label>Building Rent</label>
                                <input class="form-control"   id="buildingrent" name="buildingrent" value="<?php print($row['buildingrent']);?>" >
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Utility Bills</label>
                                <input class="form-control"   id="bills" name="utilitybills" value ="<?php print($row['utilitybills']);?>" >
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Maintainence</label>
                                <input class="form-control"   id="maintainence" name="maintainence" value="<?php print($row['maintenance']);?>" >
                                <p class="help-block"></p>
                            </div>
                           
                            <div class="form-group">
                                <label>Other Expenses</label>
                                <input class="form-control"  id="otherexpense" name="otherexpense"  value="<?php print($row['otherexpenses']);?>">
                                <p class="help-block"></p>
                            </div>
                             
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control"  id="desc" name="reason" value="<?php print($row['reason']);?>" >
                                <p class="help-block"></p>
                            </div>
                            
                          
                            


                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                           </form>
                           				
                           
   <?php
		
	
			
		}	
	}
	
	else { ?>
		
		 <form role="form" action="monthlyexpenseSubmit.php" method="post" >
                        
                            <div class="form-group">
                                <label>Building Rent</label>
                                <input class="form-control"   id="buildingrent" name="buildingrent"  required>
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Utility Bills</label>
                                <input class="form-control"   id="bills" name="utilitybills"  required>
                                <p class="help-block"></p>
                            </div>
                            <div class="form-group">
                                <label>Maintainence</label>
                                <input class="form-control"   id="maintainence" name="maintainence"  required>
                                <p class="help-block"></p>
                            </div>
                           
                            <div class="form-group">
                                <label>Other Expenses</label>
                                <input class="form-control"  id="otherexpense" name="otherexpense"  required>
                                <p class="help-block"></p>
                            </div>
                             
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control"  id="desc" name="reason"  required>
                                <p class="help-block"></p>
                            </div>
                            
                          
                            


                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                           </form>
	
	
    <?php 	}
	
	
	?>	

		









