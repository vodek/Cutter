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
if(!empty($_POST['fname']) and !empty($_POST['lname']) and !empty($_POST['email']) and !empty($_POST['password']) ){
$fname = ucwords(strtolower($_POST['fname']));
$lname = ucwords(strtolower($_POST['lname']));
$email = $_POST['email'];
$password = $_POST['password'];
$password1 = $_POST['password1'];
$address1 = ucwords(strtolower($_POST['address1']));
$address2 = ucwords(strtolower($_POST['address2']));
$town = ucwords(strtolower($_POST['town']));
$pcode = $_POST['pcode'];
$query = mysql_query("SELECT email FROM user WHERE email ='$email'") or die(mysql_error());





if($password != $password1){
	
	echo "<a>SORRY YOUR PASSWORDS DON'T MATCH...:(<a></br>";
		echo"<a href='register.php'>Try again</a>";
		echo "</br><a href = 'login.php'>Or, log in</a>";
	
}



elseif(mysql_num_rows($query) >0){
            
		echo "<a>SORRY...THIS EMAIL IS ALREADY REGISTERED...:(<a></br>";
		echo"<a href='register.php'>Try again</a>";
		echo "</br><a href = 'login.php'>Or, log in</a>";
	}
elseif(!mysql_num_rows($query) >0){
	
	$query1 = "INSERT INTO user(iduser, fname, lname, email, password, address1, address2, town, pcode) 
	VALUES ('','$fname','$lname','$email','$password', '$address1', '$address2', '$town', '$pcode')";
		$data = mysql_query ($query1) or die(mysql_error());
		if($data){
		
		$_SESSION['email'] = $email;
		echo "<a>YOUR REGISTRATION IS COMPLETED...</a>";
		header("Refresh:3; url=index.php");
		echo'<a>You will be shortly redirected to your hompage</a></br>';
		echo'<a>If does not happen: </a>';
		echo'<a href ="index.php">Click here</a>';
		}
	
	
	
}



}

else{
echo '<a href="register.php">Go back and fill form correctly</a>';	
	
}


 
?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>