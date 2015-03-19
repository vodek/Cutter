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
		
		if (isset($_SESSION['proj_name'])){
			
			$idproject = $_SESSION['idproject'];
			$proj_name = $_SESSION['proj_name'];
			$proj_date = $_SESSION['proj_date'];
			$countPosts = count($_POST);
			$counter = (($countPosts-1)/8);
			
			
			//print_r($_POST);
			
		    //inserd data to DB if not exists
			
	
		 
			 for ($i = 0; $i < $counter; $i++){
				$idcarcass = $_POST['idcarcass'.($i+1)];
				$height = $_POST['height'.($i+1)];
				$width =$_POST['width'.($i+1)];
				$depth = $_POST['depth'.($i+1)];
				$thickness = $_POST['thickness'.($i+1)];
				$back_thickness = $_POST['back_thickness'.($i+1)];
				
				$width_side = $depth;
				
				$top_bot_height = ($width - (2*$thickness));
				
				$shelf_height=$width - (2*$thickness)-3;
				$shelf_width = $depth-20;
				
				$no_shelves = $_POST['no_shelves'.($i+1)];
				$colour = $_POST['colour'.($i+1)];
				
				
				$query = "SELECT idside FROM side WHERE carcass_idcarcass = $idcarcass";
				$result= mysql_query($query);
				$count = mysql_num_rows($result);
				
				
				if(!$count>0){
				
				
				
				$query0 = "INSERT INTO backboard (idbackboard, height, width, thickness, carcass_idcarcass)  
				VALUES ('',$height, $width, $back_thickness, $idcarcass)";
				
					$data1 = mysql_query ($query0) or die(mysql_error());
			
		
				 
			 for($x=-1; $x < ($no_shelves-1); $x++){
				$query3 = "INSERT INTO shelf (idshelf, height, width, thickness, carcass_idcarcass)  
				VALUES ('',$shelf_height, $shelf_width, $thickness, $idcarcass)";
				
					$data1 = mysql_query ($query3) or die(mysql_error()); 
			 }
			 
		
		
		
			for($x=0; $x<2; $x++){
				$query1 = "INSERT INTO side (idside, height, width, thickness, carcass_idcarcass)  
				VALUES ('',$height, $depth, $thickness, $idcarcass)";
				
					$data1 = mysql_query ($query1) or die(mysql_error()); 
			 }
			 for($x=0; $x<2; $x++){
				$query2 = "INSERT INTO top_bot (idtop_bot, height, width, thickness, carcass_idcarcass)  
				VALUES ('',$top_bot_height, $depth, $thickness, $idcarcass)";
				
					$data1 = mysql_query ($query2) or die(mysql_error()); 
			 }

			 
				}
			 
				
				
				 echo "<table border='0' class='table'>";
			
			
				echo "</br></br><tr>";
				
				echo "<th>Carc</br>ID</br></th>";
				echo "<th>Side</br>Qty</th>";
				echo "<th>Side</br>H</br>[mm]</th>";
				echo "<th>Side</br>W</br>[mm]</th>";
				echo "<th>Side</br>T</br>[mm]</th>";
				echo "<th>Top/Bot.</br>Qty</th>";
				echo "<th>Top/Bot.</br>H</br>[mm]</th>";
				echo "<th>Top/Bot.</br>W</br>[mm]</th>";
				echo "<th>Top/Bot.</br>T</br>[mm]</th>";
				echo "<th>Back</br>Qty</th>";
				echo "<th>Back</br>H</br>[mm]</th>";
				echo "<th>Back</br>W</br>[mm]</th>";
				echo "<th>Back</br>T</br>[mm]</th>";
				echo "<th>Shelf</br>Qty</th>";
				echo "<th>Shelf</br>H</br>[mm]</th>";
				echo "<th>Shelf</br>W</br>[mm]</th>";
				echo "<th>Shelf</br>T</br>[mm]</th>";
				
				
				
				echo "</tr>"; 
				 
				 
				 
				 
				 
			 
			 
			 
			 
			 
				
			
			
			//get data from DB
			$query = "SELECT * FROM qty_all WHERE carcassid = $idcarcass";
			$result= mysql_query($query);
		
			
			
			
				

		while($row2 = mysql_fetch_row($result))
		
		{
				
				echo "<tr>";

				echo "<td>$row2[0]</td>";
				echo "<td name = 'odd'>$row2[1]</td>";
				echo "<td name='odd'>$row2[2]</td>";
				echo "<td name='odd'>$row2[3]</td>";
				echo "<td name='odd'>$row2[4]</td>";
				echo "<td>$row2[5]</td>"; 
				echo "<td>$row2[6]</td>";
				echo "<td>$row2[7]</td>"; 
				echo "<td>$row2[8]</td>";
				echo "<td name='odd'>$row2[9]</td>";
				echo "<td name='odd'>$row2[10]</td>";
				echo "<td name='odd'>$row2[11]</td>";
				echo "<td name='odd'>$row2[12]</td>";
				echo "<td>";
				if ( $row2[13] == NULL){
					echo "0";
					
				}
				else {
					echo "$row2[13]"; 
				
				}
				echo"</td>";
				echo "<td>";
				if ( $row2[13] == NULL){
					echo "--";	
				}
				else {
					echo "$row2[14]"; 
				}
				echo"</td>";
					echo "<td>";
				if ( $row2[13] == NULL){
					echo "--";	
				}
				else {
					echo "$row2[15]"; 
				}
				echo"</td>";
					echo "<td>";
				if ( $row2[13] == NULL){
					echo "--";	
				}
				else {
					echo "$row2[16]"; 
				}
				echo"</td>";
				
				echo "</tr>";			
			
			}
		
		
		
		
			
			
			
			
			
			
			
			
			
			
			unset ($_SESSION['proj_name']);
			unset ($_SESSION['proj_date']);
			unset ($_SESSION['idproject']);
			 
			 echo "</table>";
		
		
			 }
			 echo"<a href='saved_projects.php'>Go back</a>";
			 
		}
		
			
		
		else{
			
		header("location:proj_details.php");	
			
			
			
		}
 

}



	
	
	
	
	
	
	
	
	
	
	
	
	

else{
	
	header("location:index.php");
	
	
	
}
?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>