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

//check if seesion email is set (user logged in)
if (isset ($_SESSION['email'])){
	//declare local variable to match session
	$email = $_SESSION['email'];
	//query logged user details from DB
	$result = mysqli_query($conn, "SELECT fname, lname, iduser FROM user WHERE email = '$email' ");
	//number of rows as query result
	$count = $result->num_rows;
	//fetching rows from DB table matching query
	$row = mysqli_fetch_row($result);
	
	//greeting user with first and second name from DB
	echo"Welcome ".$row[0]." ".$row[1]."</br>";
	//query number of saved projects matching logged user ID
	$result1 = mysqli_query($conn, "SELECT COUNT(idproject) FROM project WHERE user_iduser = '$row[2]'");
	$count1 = $result1->num_rows;
	$row1 = mysqli_fetch_row($result1);
	$gramatyka = "";
	$iduser = $row[2];
	//little bit of grama ;) (to use string "project" as singular or plural noun when appropriate)
	if($row1[0]==1){
		$gramatyka = "project";
	}
	else{$gramatyka = "projects";
	}
	//output to user telling about number of saved projects
	echo "you have ".$row1[0]. " saved ".$gramatyka." in our database ";
	//if number of saved projects is grater than 0
	if ($row1[0]>0){
		//query projects details matching user id
		$query = mysqli_query($conn, "SELECT proj_name, proj_date
		FROM project
		WHERE project.user_iduser = $iduser") or die(mysql_error());
		
		//display table with brief details to user 
		echo "<table border='1' class='table'>";
		echo "</br></br><tr>";
		
				//echo "<th>ID</th>";
				echo "<th>Project name</th>";
				echo "<th>Date created</th>";
				//echo "<th>Qty of carcass</th>";
				echo "</tr>";

		while($row2 = mysqli_fetch_row($query))
		{
				echo "<tr>";

				//echo "<td>$row2[0]</td>";
				echo "<td>$row2[0]</td>";
				echo "<td>$row2[1]</td>";
				//echo "<td>$row2[3]</td>";
				

				echo "</tr>";
			}
		
		echo "</table>";	
		
	}
		
}
//if there is no session email(user not logged in), display general info
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