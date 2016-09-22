<?php
ob_start(); 
include("../connexion.php");

	$jour=$_POST['jour'];
	$heure=$_POST['heure'];
	$idE=$_POST['idEn'];
	$placeRes=$_POST['placeRes'];
	$placeTotal=$_POST['placeTotal'];
	
	echo $placeRes."<br/>".$placeTotal."<br/>".$idE."<br/>".$jour."<br/>".$heure."<br/>";

$requete="UPDATE `listeseance` SET  `heure` =  '$heure',
`jour` =  '$jour',
`id_entraineur` =  '$idE',
`nbr_places_res` =  '$placeRes',
`nbr_places_total` =  '$placeTotal' WHERE  `listeseance`.`heure` ='$heure' AND  `listeseance`.`jour` =  '$jour';";
if(mysql_query($requete))
	header("location:gestionEmploi.php");
else echo"modification KO";
ob_flush(); 
?>