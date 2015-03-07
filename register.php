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
	echo"You are already logged in";
		echo' <form action="confirmlogout.php" id"logoutform" method="post">
			<input class ="loginfo"  type= "submit"id="sub"  onclick="" value = "LOG OUT?" />
			</form></br>';
}

else{
echo "	
<h3>Please fill registration form</h3>
<a>(fields with * are matadory)</a></br></br>
<form action = 'confirmreg.php' id='regform' method='post' enctype ='multipart/form-data' onSubmit = 'return val()' autocomplete='on'>
<label><input required type='text' id= 'fname' name= 'fname' size='30'maxlength='30' autofocus='autofocus' placeholder='First name'></input>*</label></br>
<label><input required type='text' id= 'lname' name= 'lname' size='30'maxlength='30' autofocus='autofocus' placeholder='Last name'></input>*</label></br>
<label><input required type='email' id= 'email' name= 'email' size='30'maxlength='30' autofocus='autofocus' placeholder='email'></input>*</label></br>
<label><input required type='password' id= 'password' name= 'password' size='30'maxlength='30' autofocus='autofocus' placeholder='password '></input>*</label></br>
<label><input required type='password' id= 'password1' name= 'password1' size='30'maxlength='30' autofocus='autofocus' placeholder='confirm password '></input>*</label></br>
<label><input  type='text' id= 'address1' name= 'address1' size='30'maxlength='30' autofocus='autofocus' placeholder='1st line of address'></input>&nbsp</label></br>
<label><input  type='text' id= 'address2' name= 'address2' size='30'maxlength='30' autofocus='autofocus' placeholder='2nd line of address'></input>&nbsp</label></br>
<label><input  type='text' id= 'town' name= 'town' size='30'maxlength='30' autofocus='autofocus' placeholder='town/city'></input>&nbsp</label></br>
<label><input  type='text' id= 'pcode' name= 'pcode' size='30'maxlength='30' autofocus='autofocus' placeholder='Postcode'></input>&nbsp</label></br>
<input type='submit'  id='submit'  name='submit'  value = 'Submit' />
	
	
	
</form>	
";	

}

?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>