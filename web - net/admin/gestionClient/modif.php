<?php
ob_start();
include("../connexion.php");
$idr=$_POST['id'];
$subject=$_POST['subject'];
$mail=$_POST['mail'];
$message=$_POST['message'];

$requete="UPDATE  `reclamation` SET  `id` =  '$idr',
`mail` =  '$mail',
`subject` =  '$subject',
`message` =  '$message' WHERE  `id` ='$idr';";
if(mysql_query($requete))
	header("location:reclamation.php");
	 ob_flush();
?>