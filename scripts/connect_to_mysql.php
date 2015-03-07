<?php  
 
//db host name 

$db_host = "localhost"; 
//username for the MySQL database
$db_username = "root";  
//password for the MySQL database
$db_pass = "";  
//name for the MySQL database
$db_name = "cutter"; 

 
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");              
?>