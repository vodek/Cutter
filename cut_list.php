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
				echo "<form id = 'cutlistform' onsubmit = 'return cutlist()' method = 'post'>";
	
		 
			 for ($i = 0; $i < $counter; $i++){
				$idcarcass = $_POST['idcarcass'.($i+1)];
					//get data from DB
			$query = "SELECT * FROM qty_all WHERE carcassid = $idcarcass";
			
			$result= mysqli_query($conn, $query);
		
			

				 
		

	

		while($row2 = mysqli_fetch_row($result))
		
		{
			
				
				echo "<tr>";

				echo "<td>$row2[0]<input type='hidden' name='carcassid' id ='carcassid.$i'value = '$row2[0]'/></td>";
				echo "<td id = 'odd'>$row2[1]<input type='hidden' name='qty_s.$i' id ='qty_s.$i'value = '$row2[1]'/></td>";
				echo "<td id='odd'>$row2[2]<input type='hidden' name='side_h.$i' id ='side_h.$i'value = '$row2[2]'/></td>";
				echo "<td id='odd'>$row2[3]<input type='hidden' name='side_w.$i' id ='side_w.$i'value = '$row2[3]'/></td>";
				echo "<td id='odd'>$row2[4]<input type='hidden' name='side_t.$i' id ='side_t.$i'value = '$row2[4]'/></td>";
				echo "<td>$row2[5]<input type='hidden' name='qty_t.$i' id ='qty_t.$i' value = '$row2[5]'/></td>"; 
				echo "<td>$row2[6]<input type='hidden' name='t_h.$i' id ='t_h.$i' value = '$row2[6]'/></td>";
				echo "<td>$row2[7]<input type='hidden' name='t_w.$i' id ='t_w.$i' value = '$row2[7]'/></td>"; 
				echo "<td>$row2[8]<input type='hidden' name='t_t.$i' id ='t_t.$i' value = '$row2[8]'/></td>";
				echo "<td id='odd'>$row2[9]<input type='hidden' name='qty_b.$i' id ='qty_b.$i'value = '$row2[9]'/></td>";
				echo "<td id='odd'>$row2[10]<input type='hidden' name='b_h.$i' id ='b_h.$i'value = '$row2[10]'/></td>";
				echo "<td id='odd'>$row2[11]<input type='hidden' name='b_w.$i' id ='b_w.$i'value = '$row2[11]'/></td>";
				echo "<td id='odd'>$row2[12]<input type='hidden' name='b_t.$i' id ='b_t.$i'value = '$row2[12]'/></td>";
				echo "<td>";
				if ( $row2[13] == NULL){
					echo "0<input type='hidden' name='qty_sh.$i' id ='qty_sh.$i'value = '0'/>";
					
				}
				else {
					echo "$row2[13]<input type='hidden' name='qty_sh.$i' id ='qty_sh.$i'value = '$row2[13]'/>"; 
				
				}
				echo"</td>";
				echo "<td>";
				if ( $row2[13] == NULL){
					echo "--<input type='hidden' name='sh_h.$i' id ='sh_h.$i'value = '0'/>";	
				}
				else {
					echo "$row2[14]<input type='hidden' name='sh_h.$i' id ='sh_h.$i'value = '$row2[14]'/>"; 
				}
				echo"</td>";
					echo "<td>";
				if ( $row2[13] == NULL){
					echo "--<input type='hidden' name='sh_w.$i' id ='sh_w.$i'value = '0'/>";	
				}
				else {
					echo "$row2[15]<input type='hidden' name='sh_w.$i' id ='sh_w.$i'value = '$row2[15]'/>"; 
				}
				echo"</td>";
					echo "<td>";
				if ( $row2[13] == NULL){
					echo "--<input type='hidden' name='sh_t.$i' id ='sh_t.$i'value = '0'/>";	
				}
				else {
					echo "$row2[16]<input type='hidden' name='sh_t.$i' id ='sh_t.$i'value = '$row2[16]'/>"; 
				}
				echo"</td>";
				
				echo "</tr>";

				echo "<tr>";

				
			
			}
			$th1=$row2[4];
				$th2=$row2[12];
	
		
				}
				
		
			
		
			 
			 echo "</table>";
			 echo"</br><a href='saved_projects.php'>Go back to your projects</a> </br>OR</br>";
			 echo"<a>See drawings for optimal cutting:</a></br>";
			 
			 echo"</br><label>Board size for {".$th1."mm} elements: <select id = 'sides'>
			 <option  value='2440x1220'>2440x1220</option> 
			 <option value='3050x1220'>3050x1220</option> 
			 <option  value='2800x2100'>2800x2100</option> 
			 </select></label>";
			 
			  echo"</br><label>Board size for {".$th2."mm} elements: <select id='backs'>
			 <option  value='2440x1220'>2440x1220</option> 
			 <option  value='3050x1220'>3050x1220</option> 
			 <option value='2800x2100'>2800x2100</option> 
			 </select></label>";
			 echo"</br><label>Saw kerf: <input type='number' id ='kerf' max= '6' min = '2' required/></label>";
			 
			 
			 echo"</br><input type='submit' value='See elements optimised on your sheets '/>";
			 
			 
			 echo"</form>";
			 
			 
			 
			 
			 
			 
			 
			 
		
		
		
			unset ($_SESSION['proj_name']);
			unset ($_SESSION['proj_date']);
			unset ($_SESSION['idproject']);
		
		
			 }
			 	
		
		else{
			
		//header("location:proj_details.php");	
				
		}


}	

else{
	
	header("location:index.php");
		
}
?>
</div>


</content>
<cutlist id="cutlist">

<div id="cutlist1">



</div>
</cutlist>


<?php include_once("footer.php"); ?> 


</div>
</body>
</html>