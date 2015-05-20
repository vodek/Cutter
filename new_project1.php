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
if(isset($_SESSION['email'])){
	
	$nocarc = $_POST["nocarc"];//number of carcass
	$prTitle = ucfirst(strtolower($_POST["pname"]));//capitalise project name from the form
	
	$c_colour = ucfirst(strtolower($_POST["c_colour"]));//capitalise carcass colour string
	if (isset ($_POST["height"])){
	$height = $_POST["height"];}
	else{$height=''; }
	if (isset ($_POST["width"])){
	$width = $_POST["width"];}
	else{$width=''; }
	if (isset ($_POST["depth"])){
	$depth = $_POST["depth"];}
	else{$depth=''; }
	
	$thickness = $_POST["thickness"];
	$back_thickness = $_POST["back_thickness"];
	
	
	
	echo'<h2>Now enter/review carcass details for your project '.$prTitle.' </h2>';
	
	echo '<form action ="see_project.php" method="post" name="project1" > ';
	
	echo'<table class="table" border="1"><tr><th>Carcass</br>number</th>&nbsp<th>Height</br>(mm)</th>&nbsp<th>Width</br>(mm)</th>&nbsp<th>Internal Depth</br>(mm)</th>&nbsp<th>Sides/Top/Shelves</br> Thickness</th>&nbsp<th>Back </br>Thickness</th>&nbsp<th>Number of</br>Shelves</th></tr>';
	
	
	for($i=0; $i<$nocarc; $i++){
		
		echo "<tr><td><input name='no'id='no' type='hidden'>".($i+1)."</input></td>&nbsp";
		
		echo"<td><input required name='height".($i+1)."'" ."id='height".($i+1)."'" ."type='number'  min='200' max='3000'  value ='".$height."'></input></td>&nbsp";
		
		echo"<td><input required name='width".($i+1)."'" ."id='width".($i+1)."'" ."type='number'  min='100' max='1400' size ='4' value ='".$width."'></input></td>";
		echo"<td><input required name='depth".($i+1)."'" ."id='depth".($i+1)."'" ."type='number'  min='100' max='800' value ='".$depth."'></input>";
		echo"</td>&nbsp<td><input required readonly size ='2' name='thickness".($i+1)."'" ."id='thickness".($i+1)."'" ."type='text'  value='".$thickness."'></input></td>&nbsp";
		echo"<td><input required name='back_thickness".($i+1)."'" ."id='back_thickness".($i+1)."'" ."type='text' readonly size ='2'  value='".$back_thickness."'></input></td>&nbsp";
		echo"<td><input required name='noShelves".($i+1)."'" ."id='noShelves".($i+1)."'" ."type='number' size ='2' maxlength ='2' min='0' max='12' placeholder = '0' value='0'></input>";
		echo"<input readonly name = 'c_colour".($i+1)."'"." type ='hidden' value = "."'".$c_colour. "'"."></input></td>&nbsp</tr>";
		
		
		
	}
	
	echo'</table>';
	echo"<input readonly name = 'prTitle' type ='hidden' value = "."'".$prTitle. "'"."></input>";
	echo"</br><input type ='submit' value ='Save project'/>";

	
	echo"</form>";
	
	
	
	
	
	
	
	
	
	
	
	
	
}


else{ header("location:index.php");}


?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>