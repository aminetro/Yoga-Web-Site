<?php 
ob_start();
include("admin/connexion.php");
$jour=$_GET['jour'];
$heure=$_GET['heure'];
$log=$_GET['logg'];

$requete1="SELECT * FROM listeClient where login='$log';";
$resultat1=mysql_query($requete1);
while ($ligne1=mysql_fetch_array($resultat1)) { $tok=$ligne1['token'];}

$requete2="SELECT * FROM  `listeseance` WHERE  (`heure` ='$heure' AND  `jour` LIKE  '$jour');";
$resultat2=mysql_query($requete2);
while ($ligne2=mysql_fetch_array($resultat2)) { $pRes=$ligne2['nbr_places_res'];$pTot=$ligne2['nbr_places_total'];}
$msg="";

if($tok<3){
	$msg=$msg."Sorry , But You Dont Have Enough Tokens To Participate In This Session <br/>";
	echo "<body onload=\"alert('Sorry , But You Dont Have Enough Tokens To Participate In This Session')\">";
	echo "<meta http-equiv=\"refresh\"content=\"0,URL=emploi.php\" />";
}
elseif($pRes>=$pTot){
	$msg=$msg."Sorry , But This Session Is Full <br/>";
	echo "<body onload=\"alert('Sorry , But This Session Is Full')\">";
	echo "<meta http-equiv=\"refresh\"content=\"0,URL=emploi.php\" />";
}
if($msg==""){
	$requete1="UPDATE  `project`.`listeseance` SET  
		`nbr_places_res` =  `nbr_places_res`+1 WHERE  `listeseance`.`heure` ='$heure' AND  `listeseance`.`jour` =  '$jour';";
	$requete2="UPDATE  `project`.`listeclient` SET  
		`token` =  `token`-3 WHERE  `listeclient`.`login` =  '$log';";
	$requete3="INSERT INTO  `project`.`reservation` (`heure` ,`jour` ,`login`)VALUES ('$heure',  '$jour',  '$log');";

	if(mysql_query($requete3)){
		if((mysql_query($requete1)) && (mysql_query($requete2))){
			header("location:emploi.php");
		}else{echo"insertion KO";}
	}else {
		echo "<body onload=\"alert('Sorry , But You Have Already Subscribed To This Session')\">";
		echo "<meta http-equiv=\"refresh\"content=\"0,URL=emploi.php\" />";
	}
}
?>
<?php ob_flush(); ?>