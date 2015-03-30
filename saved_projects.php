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
if (isset ($_SESSION['email'])){
	//declare local variable to match session
	$email = $_SESSION['email'];
	//query logged user id from DB
	$result = mysql_query("SELECT iduser FROM user WHERE email = '$email' ");
	//number of rows as query result
	$count = mysql_num_rows($result);
	//fetching rows from DB table matching query
	$row = mysql_fetch_row($result);
	
	//greeting user with first and second name from DB
	//echo"Welcome ".$row[0]." ".$row[1]."</br>";
	//query number of saved projects matching logged user ID
	$result1 = mysql_query("SELECT COUNT(idproject) FROM project WHERE user_iduser = '$row[0]'");
	$count1 = mysql_num_rows($result1);
	$row1 = mysql_fetch_row($result1);
	$gramatyka = "";
	$iduser = $row[0];
	//little bit of grama ;) (to use string "project" as singular or plural noun when appropriate)
	if($row1[0]==1){
		$gramatyka = "project";
	}
	else{$gramatyka = "projects";
	}
	//output to user telling about number of saved projects
	echo "<h3>You have ".$row1[0]. " saved ".$gramatyka." in our database</h3> ";
	//if number of saved projects is grater than 0
	if ($row1[0]>0){
		//query projects details matching user id
		$query = mysql_query("SELECT idproject,proj_name, proj_date,COUNT(carcass.idcarcass) 
		FROM project
		LEFT JOIN carcass ON carcass.project_idproject = project.idproject
		WHERE project.user_iduser = $iduser
		GROUP BY carcass.project_idproject") or die(mysql_error());
		
		//display table with brief details to user 
		echo "<table border='1' class='table'>";
		echo "</br></br><tr>";
		
				echo "<th>ID</th>";
				echo "<th>Project name</th>";
				echo "<th>Date created</th>";
				echo "<th>Qty of carcass</th>";
				echo "</tr>";

		while($row2 = mysql_fetch_row($query))
		{
				echo "<form action = 'proj_details.php' id='regform' method='post' enctype ='multipart/form-data' >";
				echo "<tr>";
				

				echo "<td>$row2[0]<input type='hidden' name = 'idproject' value ='$row2[0]'></input></td>";
				echo "<td>$row2[1]<input type='hidden' name = 'proj_name' id = 'proj_name'value ='$row2[1]'></input></td>";
				echo "<td>$row2[2]<input type='hidden' name = 'proj_date' value ='$row2[2]'></input></td>";
				echo "<td>$row2[3]<input type='hidden' name = 'no_carcasses' value ='$row2[0]'></input></td>"; 
				echo "<td><input type='submit' name = 'view' value ='View details'></input></td>";
				echo "<td><input type='submit' name = 'delete' value ='Delete' onclick = 'return conf()' ></input></td>";
				

				echo "</tr>";
				echo"</form>";
			}
		
		echo "</table>";	
		
	}
		
}
else
{ 
header("location:index.php");    

}











?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>