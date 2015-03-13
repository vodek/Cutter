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
	
	session_unset();

		
	
	echo "<a>You have been logged out successfully</a>";
	
	header("Refresh:2; url=index.php");
	echo'<a>You will be shortly redirected to your hompage</a></br>';
	/* echo'<a>If does not happen: </a>';
	echo'<a href ="index.php">Click here</a>';  */
}
	
	
	
	else{ echo"<a>You can't be logged out, becouse you haven't been logged in ;)</a>";




	}






?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>