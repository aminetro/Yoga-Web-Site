<?php
ob_start();
include("../connexion.php");
$log=$_POST['log'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$mail=$_POST['mail'];
$login=$_POST['login'];
$password=$_POST['password'];
$token=$_POST['token'];
$requete="UPDATE  `listeclient` SET  `nom` =  '$nom',
`prenom` =  '$prenom',
`tel` =  '$tel',
`mail` =  '$mail',
`login` =  '$login',
`password` =  '$password',
`token` =  '$token' WHERE  `listeclient`.`login` =  '$log';";
if(mysql_query($requete))
	header("location:gestionClient.php");
	ob_flush();
?>