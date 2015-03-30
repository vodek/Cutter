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
if (isset($_POST['email']) and isset($_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];

$email = htmlentities($email, ENT_QUOTES, "UTF-8");
$password = htmlentities($password, ENT_QUOTES, "UTF-8");


$sql = "SELECT email, fname FROM user WHERE email = '$email' AND password = '$password' "; 
$result = mysql_query($sql);

$count= mysql_num_rows($result);
if(!$count > 0){
        echo "<a>problem with your email or password </a></br><a href = login.php> Try again</a>";
       
        exit;
    }

else{
	
    while($row = mysql_fetch_assoc($result)) {
		$_SESSION['email'] = $row['email'];
        echo "<a>Welcome ".$row['fname'].", you are now logged in. </a></br>";
		
        	/* echo' <form action="confirmlogout.php" id"logoutform" method="post">
			</br><a>If you are not '.$row["fname"]. ' then </a>
			<input type="submit"id="sub"  onclick="" value = "LOG OUT" />
			</form></br>'; */
    }
	
	
	header("location:index.php");
	echo'<a>You will be shortly redirected to your hompage</a></br>';
	echo'<a>If does not happen: </a>';
	echo'<a href ="index.php">Click here</a>';
}
    mysql_free_result($result);
	

}
else{
	//if no posted variables, go to index.php
	header("location:index.php");
	
}








?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>