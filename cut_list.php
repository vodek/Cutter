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
			echo "<h3>Sizes of all parts for the project ".'"'.$proj_name.'"'." created on ".$proj_date."</h3>";
		    
				echo "<table border='0' class='table'>";
				 
				echo "</br><tr>";
				
				echo "<th></br></th>";
				echo "<th></th>";
				echo "<th id='odd1'>Side</th>";
				echo "<th></th>";
				echo "<th></th>";
				echo "<th></th>";
				echo "<th>Top/Bot</th>";
				echo "<th></th>";
				echo "<th></th>";
				echo "<th></th>";
				echo "<th id='odd1'>Back</th>";
				echo "<th></th>";
				echo "<th></th>";
				echo "<th></th>";
				echo "<th>Shelf</th>";
				echo "<th></th>";
				echo "<th></th>";
				
				
				
				echo "</tr>"; 
				 
				 
			
				echo "<tr>";
				
				echo "<th>Carc</br>ID</br></th>";
				echo "<th id='odd1'>Qty</th>";
				echo "<th id='odd1'>H</br>[mm]</th>";
				echo "<th id='odd1'>W</br>[mm]</th>";
				echo "<th id='odd1'>T</br>[mm]</th>";
				echo "<th>Qty</th>";
				echo "<th>H</br>[mm]</th>";
				echo "<th>W</br>[mm]</th>";
				echo "<th>T</br>[mm]</th>";
				echo "<th id='odd1'>Qty</th>";
				echo "<th id='odd1'>H</br>[mm]</th>";
				echo "<th id='odd1'>W</br>[mm]</th>";
				echo "<th id='odd1'>T</br>[mm]</th>";
				echo "<th>Qty</th>";
				echo "<th>H</br>[mm]</th>";
				echo "<th>W</br>[mm]</th>";
				echo "<th>T</br>[mm]</th>";
				
				
				
				echo "</tr>"; 	
	
		 
			 for ($i = 0; $i < $counter; $i++){
				$idcarcass = $_POST['idcarcass'.($i+1)];
					//get data from DB
			$query = "SELECT * FROM qty_all WHERE carcassid = $idcarcass";
			$result= mysql_query($query);
		
			

				 
		
				

		while($row2 = mysql_fetch_row($result))
		
		{
				
				echo "<tr>";

				echo "<td>$row2[0]</td>";
				echo "<td id = 'odd'>$row2[1]</td>";
				echo "<td id='odd'>$row2[2]</td>";
				echo "<td id='odd'>$row2[3]</td>";
				echo "<td id='odd'>$row2[4]</td>";
				echo "<td>$row2[5]</td>"; 
				echo "<td>$row2[6]</td>";
				echo "<td>$row2[7]</td>"; 
				echo "<td>$row2[8]</td>";
				echo "<td id='odd'>$row2[9]</td>";
				echo "<td id='odd'>$row2[10]</td>";
				echo "<td id='odd'>$row2[11]</td>";
				echo "<td id='odd'>$row2[12]</td>";
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
		
				}
			
			
			unset ($_SESSION['proj_name']);
			unset ($_SESSION['proj_date']);
			unset ($_SESSION['idproject']);
			 
			 echo "</table>";
		echo"<a href='saved_projects.php'>Go back to your projects</a></br>";
		
		

		
		
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