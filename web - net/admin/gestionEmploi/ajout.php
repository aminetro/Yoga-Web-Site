<?php	
ob_start(); 
include("../connexion.php");
	
	$jour=$_POST['jour'];
	$heure=$_POST['heure'];
	$id=$_POST['idE'];
	$placeRes=$_POST['placeRes'];
	$placeTotal=$_POST['placeTotal'];
	

$requete= "INSERT INTO  `listeseance` (`heure` ,`jour` ,`id_entraineur` ,`nbr_places_res` ,`nbr_places_total`)
VALUES ('$heure', '$jour', '$id', '$placeRes', '$placeTotal');";


if (mysql_query ($requete))
header("location:gestionEmploi.php");
else 
{
echo"insertion KO";
}
ob_flush(); 
?>