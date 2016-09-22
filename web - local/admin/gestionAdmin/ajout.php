<?php
	include("../connexion.php");
	
	$login=$_POST['login'];
	$password=$_POST['password'];
	
	$requete= "INSERT INTO  `project`.`logsadmin` (
		`id` ,`login` ,`password`
		)
		VALUES (NULL,  '$login',  '$password');
		";


if (mysql_query ($requete))
header("location:gestionAdmin.php");
else echo"insertion KO";

?>