
<?php
$host="localhost"; 
$user="root"; 
$pwd=""; 
$nomdb="project";
$lien=mysql_connect ($host,$user,$pwd) or die("connection impssible");;
mysql_select_db($nomdb,$lien);
?>
