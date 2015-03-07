
<menu>
<?php
session_start();
include_once("scripts/connect_to_mysql.php");
?>
<?php



if (isset ($_SESSION['email'])){
$email = $_SESSION['email'];	
$result = mysql_query("SELECT fname FROM user WHERE email = '$email' ");
$count = mysql_num_rows($result);

	$row = mysql_fetch_row($result);
	echo"<div class = 'loginfo' >";
	echo"You are logged in as ".$row[0]."";
	echo' <form class = "loginfo" action="confirmlogout.php" id"menuform" method="post">
			<input class = "loginfo1" type= "submit"id="sub"  onclick="" value = "LOG OUT" />
			</form></br>';
echo "</div>";
echo"<div>";	
echo'<ol>';		
echo '<li><a href="index.php">Home</a></li></br>
<li><a href="new_project.php">New Project</a></li></br>
<li><a href="saved_projects.php">View saved projects</a></li></br>

</br><li><a href="seeall.php">Cheet test</a></li></br>';
echo'</ol>';
echo "</div>";

}
else{
echo"<div class = 'loginfo' >";	
echo"You need to log in, to see full content";
echo "</div></br>";
echo"<div>";		
echo'<ol>';	
echo '<li><a href="index.php">Home</a></li></br>
<li><a href="login.php">Log in</a></li></br>
<li><a href="register.php">Register to system</a></li></br>	';	
echo'</ol>';
echo "</div>";

}


?>


</menu>
