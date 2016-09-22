<?php
include("../connexion.php");

	
	$jour=$_GET[jour];
	$heure=$_GET[heure];
	$requete="DELETE  FROM listeSeance where (jour='$jour' AND heure='$heure')";
	$requete2="DELETE  FROM reservation where (jour='$jour' AND heure='$heure')";
	if((mysql_query($requete))&&(mysql_query($requete2)))
		header("location:gestionEmploi.php");
	else echo"suppression KO";
?>