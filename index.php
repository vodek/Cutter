<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php include_once("head.php");?>
<body>
<div id="container">
<?php include_once("header.php");?> 
<?php include_once('nav.php');?>
<content>
<div id="content" class="content" >
<?php
//all code goes here
if (isset ($_SESSION['email'])){
	$email = $_SESSION['email'];	
	$result = mysql_query("SELECT fname, lname, iduser FROM user WHERE email = '$email' ");
	$result1 = mysql_query("SELECT COUNT(idproject) FROM project WHERE user_iduser = ");
	$count = mysql_num_rows($result);
	$row = mysql_fetch_row($result);
	
	
	echo"Welcome ".$row[0]." ".$row[1]."</br>";
	$result1 = mysql_query("SELECT COUNT(idproject) FROM project WHERE user_iduser = '$row[2]'");
	$count = mysql_num_rows($result1);
	$row = mysql_fetch_row($result1);
	$gramatyka = "";
	if($row[0]==1){
		$gramatyka = "project";
	}
	else{$gramatyka = "projects";
	}
	echo "you have ".$row[0]. " saved ".$gramatyka." in our database ";
	
}

else{

echo"

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat enim metus, eu porttitor odio mollis et. Vivamus ac eleifend mi. Donec et pretium enim. In laoreet nulla ac dui ultricies pretium. Curabitur lobortis ac libero vel maximus. Suspendisse id dui nec ipsum semper pulvinar non eu leo. Curabitur rhoncus nisi in laoreet congue.

Mauris eros nisi, maximus eu dui ac, mollis porttitor lacus. Ut mollis condimentum arcu. Cras vehicula eu elit ut pulvinar. Morbi aliquet ipsum eu libero posuere, eu vulputate sem mattis. Vestibulum metus libero, ullamcorper tempus lorem ac, faucibus pellentesque magna. Mauris condimentum et ligula id mattis. In fermentum malesuada dui, cursus finibus eros. Ut sit amet felis ac ante tincidunt laoreet. Nullam ultrices libero vel pulvinar dignissim. Aenean elementum ex in nunc lobortis blandit. Sed quis varius ante. Nunc ut erat elementum ligula ultricies condimentum.

Curabitur sed cursus magna, sit amet pellentesque quam. Maecenas cursus ante ut iaculis gravida. Nunc ac facilisis nunc. Nullam quis nisl ac dui consequat tincidunt. In mollis egestas erat eget pretium. Curabitur semper vulputate mi, et mollis urna convallis vel. In dolor nulla, interdum quis fermentum vitae, hendrerit sed sem. In eget orci dapibus, euismod sapien ut, sollicitudin odio. Sed accumsan ultrices sapien, non pulvinar arcu cursus elementum.

Maecenas condimentum purus id rutrum vulputate. Nullam in feugiat neque. Aliquam blandit laoreet lectus, quis scelerisque nisi tristique at. Etiam non purus ut metus feugiat suscipit quis et justo. In vitae magna lorem. Fusce sed magna eget est faucibus lacinia id at leo. Curabitur efficitur consectetur placerat.

Phasellus aliquet tellus nec auctor aliquam. Etiam et ullamcorper urna, nec tristique tortor. Integer ut neque eu ante luctus maximus eget eu enim. Morbi quis mattis dolor, at scelerisque odio. Duis at venenatis ligula, posuere vehicula odio. Fusce mi tortor, lacinia quis tempor id, mattis eget quam. Maecenas vitae dolor cursus, convallis ex quis, pellentesque augue. Ut quis enim cursus, laoreet velit in, cursus eros. Sed fringilla ullamcorper lorem, eu aliquam lacus tincidunt eget. In rhoncus at quam vitae lobortis. Nulla tempus accumsan est, nec vehicula risus vestibulum at. Morbi et consectetur diam. Praesent non massa finibus, efficitur tortor luctus, dictum lacus. ";


	
	
}










?>
</div>
</content>
<?php include_once("footer.php"); ?> 


</div>
</body>
</html>