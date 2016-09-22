<?php
include("../connexion.php");
$idr=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$mail=$_POST['mail'];
$message=$_POST['message'];

$requete="UPDATE  `project`.`messages` SET  `id` =  '$idr',
`nom` =  '$nom',
`prenom` =  '$prenom',
`tel` =  '$tel',
`mail` =  '$mail',
`message` =  '$message' WHERE  `messages`.`id` ='$idr';";
if(mysql_query($requete))
	header("location:contactreponse.php");
?>