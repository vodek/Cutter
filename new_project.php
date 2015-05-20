<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php include_once("head.php")?>
<body>
<div id="container">
<?php include_once("header.php"); ?> 
<?php include_once('nav.php');?>
<content>
<div id="content" class="content"  >
<?php
//all code goes here



/* if(isset ($_SESSION['pname'])){
	
	echo "OK";
	writeMsg();
}
else{ */
	
echo 
"	
<h3>Please enter project detail</h3>

<form action = 'new_project1.php' id='projform' method='post'>


<label><input required type='text' id= 'pname' name= 'pname' size='30'maxlength='30' autofocus='autofocus' placeholder='Project name'></input></label></br>
<label>Qty of carcases<input required type='number' id= 'nocarc' name= 'nocarc' size='30'maxlength='30' autofocus='autofocus'min='1' max ='20' ></input></label></br>
<label><input required type='text' id= 'c_colour' name= 'c_colour' size='30'maxlength='30' autofocus='autofocus'min='1' max ='20' placeholder='Colour of carcasses'></input></label></br>
<label>Board thickness (side, top, bottom):<input required type='number' min='15' max='24' step= '3'size ='2' maxlength ='2'  placeholder = 'mm' id= 'thickness' name= 'thickness'  ></input></label></br>
<label>Board thickness (back-panel):<input required type='number' min='3' max='18' step= '3'size ='2' maxlength ='2'  placeholder = 'mm' id= 'back_thickness' name= 'back_thickness'  ></input></label></br>
<label>Check if all heights are the same<input type='checkbox' id ='height_yes' name='height_yes' value='height_yes' onclick = 'h()' ></label>
<div id='height_all'></div>
<label>Check if all widths are the same<input type='checkbox' id ='width_yes' name='width_yes' value='width_yes' onclick = ' w()'></label>
<div id='width_all'></div>
<label>Check if all depths are the same<input type='checkbox' id ='depth_yes' name='depth_yes' value='depth_yes' onclick = 'd()'></label>
<div id='depth_all'></div>


<input type='submit'  id='submit2'  name='submit'  value = 'Submit'/>
</form>	";	
echo '<div id="carcass_list_title" name="carcass_list_title" class="content"></div>';		
	
	
	
	
	











?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>