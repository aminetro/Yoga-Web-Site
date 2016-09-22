<?php
include("../connexion.php");
	
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$tel=$_POST['tel'];
	$mail=$_POST['mail'];
	$message=$_POST['message'];
	
	$requete= "INSERT INTO  `project`.`messages` (
		`id` , `nom` ,`prenom` ,`tel` ,`mail` ,`message` 
		)
		VALUES (NULL   ,'$nom',  '$prenom',  '$tel',  '$mail',  '$message');
		";


if (mysql_query ($requete))
header("location:contactreponse.php");
else echo"insertion KO";

?>