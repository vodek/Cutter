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
<h3>Log in</h3>

<form action = 'confirmlogin.php' id='logform' method='post' encrypt ='multipart/form-data'>

<label><input required type='email' id= 'email' name= 'email' size='30'maxlength='30' autofocus='autofocus' placeholder='email'></input>*</label></br>
<label><input required type='password' id= 'password' name= 'password' size='30'maxlength='30' autofocus='autofocus' placeholder='password '></input>*</label></br>
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