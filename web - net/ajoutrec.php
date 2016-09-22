<?php
ob_start();
include("admin/connexion.php");
$subject=$_POST['subject'];
$log=$_POST['log'];
$msg=$_POST['userMsg'];
$requete="SELECT * FROM listeClient where login='$log';";
$resultat=mysql_query($requete);
while($ligne=mysql_fetch_array($resultat)){
$mail=$ligne['mail'];
}

$requete= "INSERT INTO `reclamation` VALUES (NULL , '$mail'  , '$subject' , '$msg');";
							if (mysql_query ($requete)) 
							header("location:index.php");
							else   echo("insertion KO");
 ob_flush();
?>