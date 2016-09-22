<?php
include("../connexion.php");
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$tel=$_POST['tel'];
	$mail=$_POST['mail'];
	$spec=$_POST['spec'];
	
	$requete= "INSERT INTO  `project`.`listeentraineur` (
		`id` ,`nom` ,`prenom` ,`tel` ,`mail` ,`spec`
		)
		VALUES (NULL ,  '$nom',  '$prenom',  '$tel',  '$mail',  '$spec');
		";


if (mysql_query ($requete))
header("location:gestionEntraineur.php");
else echo"insertion KO";

?>