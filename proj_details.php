<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php include_once("head.php")?>
<body>
<div id="container">
<?php include_once("header.php"); ?> 
<?php include_once('nav.php');?>
<content>
<div id="content" class="content" >
<?php
//all code goes here
if (  (isset($_POST['view'])) or (isset($_POST['delete']))   )
{
	$idproject = $_POST['idproject'];
	$proj_name = $_POST['proj_name'];
	$proj_date = $_POST['proj_date'];
	
	
	
	
	
	
	if (isset($_POST['view'])) {
		//update action
		echo'Details for project "'.$proj_name.'" created on '.$proj_date;
		$query = mysql_query("SELECT idcarcass, height, width, depth, no_shelves, colour 
		FROM carcass
		WHERE project_idproject = $idproject") or die(mysql_error());
		
		echo "<table border='1' class='table'>";
		echo "</br></br><tr>";
		
				echo "<th>ID</th>";
				echo "<th>Carcass height</br>[mm]</th>";
				echo "<th>Carcass width</br>[mm]</th>";
				echo "<th>Carcass depth</br>[mm]</th>";
				echo "<th>Number of shelves</th>";
				echo "<th>Colour</th>";
				echo "</tr>";

		while($row2 = mysql_fetch_row($query))
		{
				echo "<tr>";

				echo "<td>$row2[0]</td>";
				echo "<td>$row2[1]</td>";
				echo "<td>$row2[2]</td>";
				echo "<td>$row2[3]</td>";
				echo "<td>$row2[4]</td>";
				echo "<td>$row2[5]</td>";
				

				echo "</tr>";
			}
		
		echo "</table>";
		echo"<a href='saved_projects.php'>Go back</a>";
		
		
		
		
		
	} 
	else if (isset($_POST['delete'])) 
	{
		//delete action
		$query = mysql_query("DELETE 
		FROM project
		WHERE idproject = $idproject") or die(mysql_error());
		
		header("Refresh:0; url=saved_projects.php");
		
		
		
		
		
		
	}	
	
} 
else {
    //no button pressed
	//go back link
	
	
	
}










?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>