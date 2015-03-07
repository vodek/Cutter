
 
 
 <?php
 echo'<content>
<div id="content" class="content" >';
?>
<?php
  if(isset($_SESSION['stnum'])){//prevent to log in if seesion id exist
	echo"<h2>You are logged in as ".$_SESSION['stnum']. "</h2></br> "; 
	echo' <form action="s_confirmlogout.php" id"logoutform" method="post">
			<a>If you are not '.$_SESSION["stnum"]. ' then </a>
			<input type="submit"id="sub"  onclick="" value = "LOG OUT" />
			</form></br>';
	  
  }

else{
echo "<h3>You are not logged in, please log in here:</h3></br>";
echo '<form onSubmit = "return val()" action="s_confirmlogin.php" id="logform" method="POST">
<table class="table1" id="table1" border="0">
<tr>
<td>Enter your student number</td>

<td><input class= "stnum" type="text" id= "stnum" name= "stnum"size="10"maxlength="8" autofocus="autofocus"></input></td>
<td><div class ="error" id="stnumerror"></div></td>

</tr>
</table>
</br><input type="submit"   id="submit"  name="submit"  value = "Submit" />
</br></br><a href="register.php"> Or register here</a>
</form>';
}
?>

<?php
echo '</div>
</content>';
?>