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

$allPosts = $_POST;
$countPosts = count($allPosts);
$counter = (($countPosts-1)/8);
$proj_name = $_POST['prTitle'];
$proj_date = date('Y/m/d');
$email = $_SESSION['email'];
$query = mysql_query("SELECT iduser FROM user WHERE email ='$email'") or die(mysql_error());
$row = mysql_fetch_array($query);

$iduser = $row[0]; 

$query1 = "INSERT INTO project(idproject, proj_name, proj_date, user_iduser) 
	VALUES ('','$proj_name', '$proj_date', $iduser)";
		$data = mysql_query ($query1) or die(mysql_error());
		if($data){
			$query2 = mysql_query("SELECT idproject FROM project WHERE user_iduser =$iduser AND proj_name = '$proj_name' AND proj_date = '$proj_date'") or die(mysql_error());
			$row1 = mysql_fetch_array($query2);
			$idproject = $row1[0];
			$_SESION['idproject'] = $idproject;
			/*  $query3 = mysql_query("SELECT MAX(idcarcass) FROM carcass");
			$row2 = mysql_fetch_row($query3);
			$hcarcass_id = $row2[0]; */
			
			
		 	for ($i = 0; $i < $counter; $i++){
				$height = $_POST['height'.($i+1)];
				$width = $_POST['width'.($i+1)];
				$depth = $_POST['depth'.($i+1)];
				$thickness = $_POST['thickness'.($i+1)];
				$backthickness = $_POST['back_thickness'.($i+1)];
				$noShelves = $_POST['noShelves'.($i+1)];
				$colour = $_POST['c_colour'.($i+1)];
		
				
				$query4 = "INSERT INTO carcass (idcarcass, height, width, depth, thickness, back_thickness, no_shelves, colour, project_idproject)  
				VALUES ('',$height, $width, $depth, $thickness, $backthickness, $noShelves, '$colour', $idproject)";
				
					$data1 = mysql_query ($query4) or die(mysql_error());
				
				
			if ($data1){	
			
			//echo "dupa</br>";
			}
		
		
	
			}
			
			
		
		
		//echo $hcarcass_id;
	
		}
		


/* echo "</br>".$countPosts." elements posted";
for ($i = 0; $i < $counter; $i++){
	echo "dupa";
width, depth, no_shelves, colour, 	
	
}
 */





?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>