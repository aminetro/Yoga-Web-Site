<?php
ob_start(); 
include("../connexion.php");
$idr=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$mail=$_POST['mail'];
$spec=$_POST['spec'];

$requete="UPDATE  `listeentraineur` SET  `id` =  '$idr',
`nom` =  '$nom',
`prenom` =  '$prenom',
`tel` =  '$tel',
`mail` =  '$mail',
`spec` =  '$spec' WHERE  `listeentraineur`.`id` ='$idr';";
if(mysql_query($requete))
	header("location:gestionEntraineur.php");
	ob_flush(); 
?>