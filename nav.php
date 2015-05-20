
<menu>
<?php
session_start();
require_once("scripts/connect_to_mysql.php");
?>
<?php



if (isset ($_SESSION['email'])){
$email = $_SESSION['email'];	
$result = mysqli_query($conn, "SELECT fname FROM user WHERE email = '$email' ");
$count = mysqli_num_rows($result);

	$row = mysqli_fetch_row($result);
	echo"<div class = 'loginfo' >";
	echo"You are logged in as ".$row[0]."</br><a href ='confirmlogout.php'>[Log out]</a>";

echo "</div>";
echo"<div>";	
echo'</br><ol>';		
echo '</br><li><a href="index.php">Home</a></li></br>
<li><a href="new_project.php">New Project</a></li></br>
<li><a href="saved_projects.php">View saved projects</a></li></br>';


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
