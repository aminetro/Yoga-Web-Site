<?php
include("../connexion.php");

$id=$_POST['id'];
$login=$_POST['login'];
$password=$_POST['password'];
echo $id." ".$login." ".$password;
$requete="UPDATE  `project`.`logsadmin` SET  `id` =  '$id',
`login` =  '$login',
`password` =  '$password' WHERE  `logsadmin`.`id` ='$id';";
if(mysql_query($requete))
	header("location:gestionAdmin.php");
?>