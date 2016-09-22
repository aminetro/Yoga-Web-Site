<?php
ob_start(); 
include("connexion.php");


$login=$_POST['login'];
$pwd=$_POST['pwd'];

if(($login=="trabelsi")&&($pwd=="amine")){
session_start();
		$_SESSION['logadmin']=$login;
		$_SESSION['pwdadmin']=$pwd;
		header("location:gestionEmploi/gestionEmploi.php"); 
}else{

$requete="SELECT * FROM  `logsadmin` WHERE  `login` =  '$login' AND  `password` =  '$pwd'";
$resultat=mysql_query ($requete);
$ligne=mysql_fetch_array($resultat);

if ($ligne['login']=="")
	 header("location:index.html"); 
else {

		session_start();
		$_SESSION['logadmin']=$login;
		$_SESSION['pwdadmin']=$pwd;
		header("location:gestionEmploi/gestionEmploi.php"); 		
		
	}
	} 
	ob_flush(); 
?>