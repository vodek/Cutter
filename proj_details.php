<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php include_once("head.php")?>
<body>
<div id="container">
<?php include_once("header.php"); ?> 
<?php require_once('nav.php');?>
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
		echo'<h3>List of carcasses for project "'.$proj_name.'" created on '.$proj_date.'</h3>';
		$query = mysql_query("SELECT idcarcass, height, width, depth, no_shelves, thickness, back_thickness, colour 
		FROM carcass
		WHERE project_idproject = $idproject
		GROUP BY idcarcass") or die(mysql_error());
		
		$count = 0;
		//$row2 = mysql_fetch_row($query);
		$_SESSION['proj_name'] = $proj_name;
		$_SESSION['proj_date'] = $proj_date;
		$_SESSION['idproject'] = $idproject;
		//echo $count;
		
		echo "<table border='1' class='table'>";
		echo "</br></br><tr>";
				echo"<form action = 'cut_list.php' id='carcassfrorm' method='post' enctype ='multipart/form-data' >";
				echo "<th>ID</th>";
				echo "<th>Carcass height</br>[mm]</th>";
				echo "<th>Carcass width</br>[mm]</th>";
				echo "<th>Carcass depth</br>[mm]</th>";
				echo "<th>Number of</br>shelves</th>";
				echo "<th>Thickness</br>(side, top, bot, shelf)</br>[mm]</th>";
				echo "<th>Back thickness</br>[mm]</th>";
				echo "<th>Colour</th>";
				echo "</tr>";
				

		while($row2 = mysql_fetch_row($query))
		
		{//for ($i=0; $i< count($row2); ++$i){
				
				
				
				
				
				
				
		
				echo "<tr>";
				//echo "<p>".$row2[$i]."<input type='hidden' name = 'colour' value ='$row2[$i]'></input></p>";
				//foreach($row2 as $value){
				//echo "<td>".$value."</td>";
				

				echo "<td>$row2[0]<input type='hidden' name = 'idcarcass".++$count."' value ='$row2[0]'></input></td>";
				echo "<td>$row2[1]<input type='hidden' name = 'height".$count."' value ='$row2[1]'></input></td>";
				echo "<td>$row2[2]<input type='hidden' name = 'width".$count."' value ='$row2[2]'></input></td>";
				echo "<td>$row2[3]<input type='hidden' name = 'depth".$count."' value ='$row2[3]'></input></td>";
				echo "<td>$row2[4]<input type='hidden' name = 'no_shelves".$count."' value ='$row2[4]'></input></td>";
				echo "<td>$row2[5]<input type='hidden' name = 'thickness".$count."' value ='$row2[5]'></input></td>"; 
				echo "<td>$row2[6]<input type='hidden' name = 'back_thickness".$count."' value ='$row2[6]'></input></td>";
				echo "<td>$row2[7]<input type='hidden' name = 'colour".$count."' value ='$row2[7]'></input></td>"; 
				
				
				echo "</tr>";
				
				
				
				
				
				//}
			
			}
		
		echo "</table>";
		echo"<a href='saved_projects.php'>Go back</a>";
		echo"</br><input type='submit' name = 'cut_list' value='Calculate elements to be cut'/>";
		echo"</form>";
		
		
		
	} 
	else if (isset($_POST['delete'])) 
	{
		//delete action
		$query = mysql_query("DELETE 
		FROM project
		WHERE idproject = $idproject") or die(mysql_error());
		
		unset($_SESSION['proj_name']);
		
		header("location:saved_projects.php");
		
		
		
		
		
		
	}	
	
} 
else {
    //no button pressed
	header("location:index.php");
	
	
	
}










?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>