<?php
ob_start();
include("../connexion.php");

$id=$_POST['id'];
$login=$_POST['login'];
$password=$_POST['password'];

$requete="UPDATE  `logsadmin` SET  `id` =  '$id',
`login` =  '$login',
`password` =  '$password' WHERE  `logsadmin`.`id` ='$id';";
if(mysql_query($requete))
	header("location:gestionAdmin.php");
ob_flush();
?>