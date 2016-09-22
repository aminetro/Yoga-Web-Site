<?php
ob_start();
include("../connexion.php");
	
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$tel=$_POST['tel'];
	$mail=$_POST['mail'];
	$login=$_POST['login'];
	$password=$_POST['password'];
	$token=$_POST['token'];
	
	$requete= "INSERT INTO  `listeclient` (
		`nom` ,`prenom` ,`tel` ,`mail` ,`login`,`password` ,`token`
		)
		VALUES ('$nom',  '$prenom',  '$tel',  '$mail',  '$login',  '$password',  '$token');
		";


if (mysql_query ($requete))
header("location:gestionClient.php");
else echo"insertion KO";
ob_flush();
?>