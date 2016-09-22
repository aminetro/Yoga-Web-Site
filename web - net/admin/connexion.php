
<?php
ob_start(); 
$host="localhost"; 
$user="espritwe_user"; 
$pwd="Azerty123"; 
$nomdb="espritwe_yogattitude";
$lien=mysql_connect ($host,$user,$pwd) or die("connection impssible");;
mysql_select_db($nomdb,$lien);
ob_flush(); 
?>
