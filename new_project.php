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



/* if(isset ($_SESSION['pname'])){
	
	echo "OK";
	writeMsg();
}
else{ */
	
echo 
"	
<h3>Please enter project detail</h3>

<form action = '' id='projform' method='post'  onSubmit = 'return calc()' >
<label><input required type='text' id= 'pname' name= 'pname' size='30'maxlength='30' autofocus='autofocus' placeholder='Project name'></input></label></br>
<label>Qty of carcases<input required type='number' id= 'nocarc' name= 'nocarc' size='30'maxlength='30' autofocus='autofocus'min='1' max ='20' ></input></label></br>
<label><input required type='text' id= 'c_colour' name= 'c_colour' size='30'maxlength='30' autofocus='autofocus'min='1' max ='20' placeholder='Colour of carcasses'></input></label></br>
<input type='submit'  id='submit2'  name='submit'  value = 'Submit' />
</form>	
";	
echo '<div id="carcass_list_title" name="carcass_list_title" class="content"></div>';		
echo '<form action ="see_project.php" method="post" name="project1" > <div id="carcass_list" name="carcass_list" class="content">      </form></div> ';	
	
	
	
	











?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>