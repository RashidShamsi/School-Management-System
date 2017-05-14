<?php
	error_reporting(0);
	include("../Includes/connection.php");

@$primary=$_REQUEST['Primary'];
@$preengineering=$_REQUEST['Pre-Engineering'];
@$premedical=$_REQUEST['Pre-Medical'];
@$commerce=$_REQUEST['Commerce'];
@$biomedical=$_REQUEST['Bio-Medical'];
@$computer=$_REQUEST['Computer_Science'];
@$generalscience=$_REQUEST['General_Science'];
@$icom=$_REQUEST['I_Com'];

if(empty($primary)&&empty($preengineering)&&empty($premedical)&&empty($commerce)&&empty($biomedical)&&empty($computer)&&empty($generalscience)&&empty($icom)){
	header("Location:teacher.php");
}

if(!empty($primary)){
	if(!empty($group))@$group.=",";
	$group="$primary";
}

if(!empty($preengineering)){
	if(!empty($group))@$group.=",";
	@$group.=" $preengineering";
}

if(!empty($premedical)){
	if(!empty($group))@$group.=",";
	@$group.=" $premedical";
}

if(!empty($commerce)){
	if(!empty($group))@$group.=",";
	@$group.=" $commerce";
}

if(!empty($biomedical)){
	if(!empty($group))@$group.=",";
	@$group.=" $biomedical";
}

if(!empty($computer)){
	if(!empty($group))@$group.=",";
	@$group.=" $computer";
}

if(!empty($generalscience)){
	if(!empty($group))@$group.=",";
	@$group.=" $generalscience";
}

if(!empty($icom)){
	if(!empty($group))@$group.=",";
	@$group.=" $icom";
}

$query="SELECT class_name, class_id from class WHERE class_id IN (SELECT class_id from t_group_class WHERE group_id IN ($group))";
?>
<html>
	<table>
		<form action="submitsubject.php" method="get">
			<tr><th><h2>SELECT CLASS<h2></th></tr>	
			<?php 
			$result = mysql_query($query) or die(mysql_error());
			if(mysql_num_rows($result))
			{
			
					while($row=mysql_fetch_array($result, MYSQL_BOTH))

	           {?>
				<tr>
					<td>
						<input type="checkbox" name="<?php print($row['class_name']); ?>" value="<?php print($row['class_id']); ?>" id="<?php print($row['class_id']); ?>"/><?php print($row['class_name']); ?><br/>
					</td>
				</tr>
			   
			   <?php
			   }
			} ?> 
			<tr>
				<td colspan="2" align="center">
					<input type="submit">
				</td>
			</tr>
		</form>
	</table>
</html>