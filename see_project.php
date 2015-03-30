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
//print_r($_POST);


//declare variables from posted values:
$allPosts = $_POST;
//count number of elements in POST array
$countPosts = count($allPosts);
//number of elements in POST array -1(project name) divided by 8 (8 elements in each carcass table) = qty of carcasses
$counter = (($countPosts-1)/8);
$proj_name = $_POST['prTitle'];
$proj_date = date('Y/m/d');
$email = $_SESSION['email'];
//get logged user ID from DB
$query = mysql_query("SELECT iduser FROM user WHERE email ='$email'") or die(mysql_error());
$row = mysql_fetch_array($query);
//declare user ID as variable
$iduser = $row[0]; 

//insert data into "project" table
$query1 = "INSERT INTO project(idproject, proj_name, proj_date, user_iduser) 
	VALUES ('','$proj_name', '$proj_date', $iduser)";
		$data = mysql_query ($query1) or die(mysql_error());
		if($data){
			//query the project ID (auto incremented) from project table (just inserted)
			$query2 = mysql_query("SELECT idproject FROM project WHERE user_iduser =$iduser AND proj_name = '$proj_name' AND proj_date = '$proj_date'") or die(mysql_error());
			$row1 = mysql_fetch_array($query2);
			//declare variable project ID
			$idproject = $row1[0];
			//set session "idproject"
			$_SESION['idproject'] = $idproject;
			/*  $query3 = mysql_query("SELECT MAX(idcarcass) FROM carcass");
			$row2 = mysql_fetch_row($query3);
			$hcarcass_id = $row2[0]; */
			
			//for loop to insert into carcass table as many carcasses as user set in the form
		 	for ($i = 0; $i < $counter; $i++){
				$height = $_POST['height'.($i+1)];
				$width = $_POST['width'.($i+1)];
				$depth = $_POST['depth'.($i+1)];
				$thickness = $_POST['thickness'.($i+1)];
				$backthickness = $_POST['back_thickness'.($i+1)];
				$noShelves = $_POST['noShelves'.($i+1)];
				$colour = $_POST['c_colour'.($i+1)];
				$shelf_height = $width - (2*$thickness)-3;
				$shelf_width = $depth-20;
				$top_bot_height = ($width - (2*$thickness));
				
				
				
		
				//insert data to DB table
				$query4 = "INSERT INTO carcass (idcarcass, height, width, depth, thickness, back_thickness, no_shelves, colour, project_idproject)  
				VALUES ('',$height, $width, $depth, $thickness, $backthickness, $noShelves, '$colour', $idproject)";
				
					$data1 = mysql_query ($query4) or die(mysql_error());
					
				if ($data1){
					
					$result = mysql_query("SELECT max(idcarcass) FROM carcass ");
					$row = mysql_fetch_array($result);
					$idcarcass = $row[0];
					
					$query5 = "INSERT INTO backboard (idbackboard, height, width, thickness, carcass_idcarcass)  
					VALUES ('',$height, $width, $backthickness, $idcarcass)";
				
					$data2 = mysql_query ($query5) or die(mysql_error());
					
					for($x=0; $x < ($noShelves); $x++){
					$query6 = "INSERT INTO shelf (idshelf, height, width, thickness, carcass_idcarcass)  
					VALUES ('',$shelf_height, $shelf_width, $thickness, $idcarcass)";
				
					$data3 = mysql_query ($query6) or die(mysql_error()); 
					}
					
					for($x=0; $x<2; $x++){
					$query7 = "INSERT INTO side (idside, height, width, thickness, carcass_idcarcass)  
					VALUES ('',$height, $depth, $thickness, $idcarcass)";
				
					$data4 = mysql_query ($query7) or die(mysql_error());
					}
					for($x=0; $x<2; $x++){
					$query8 = "INSERT INTO top_bot (idtop_bot, height, width, thickness, carcass_idcarcass)  
					VALUES ('',$top_bot_height, $depth, $thickness, $idcarcass)";
					
					$data5 = mysql_query ($query8) or die(mysql_error()); 
					}
					
					
					
					
					
					
					
					
				
					




				}
					
					
					
					
					
					
					
					
					
					
					
					
				
			}
			if ($data1){	
			header("location:saved_projects.php");
		
			} 
		
		
	
			
			
			
		
		
		
	
		}
		






?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>