<?php session_start();  if(isset($_SESSION['logadmin']) && isset($_SESSION['pwdadmin'])){ ?>
<script type='text/javascript' src="../controle.js"></script>
<html>
<head>
<!-- titre par med amine trabelsi -->
<title>Yoga Center Tunisie | Staff</title>
<!-- changement de couleur de page mise en forme taille de letter des paragraphe par med anes mazouni / med amine trabelsi / med amine yahyaoui-->
<!-- balises meta et lien canonic par med amine trabelsi -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta HTTP-EQUIV="Content-language" CONTENT="en">
<meta name="language" content="en-GB">
<meta name="description" content="Refresh Yoga Center in Ariana, is a peaceful retreat from the hectic outside world, focusing on teaching Vinyasa Flow Yoga to all ability levels."/>
<meta name="keywords" content="yoga instructor, yoga lessons, yoga programs online, online class, classes online, yoga teachers, yoga class online, yoga classes online,  yoga centers, online classes, yoga instruction, yoga classes, boot camp, prenatal yoga,"/>
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="canonical" href="http://yoga-tunisie.com/staff/" />
<script type='text/javascript' src="../controle.js"></script>
</head>
<body>
<!--contenue changer par rania hamouda  et khaled ben hafsia -->
<div class="h_bg">
<div class="wrap">
	<div class="logo">
	<!-- logo par med anes mazouni-->
		<h1><a href="index.php"><img title="physicalexercise"src="../../images/logo.png" alt=""></a></h1>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
<div class="menu">
		<ul class="nav">
		<!-- police changer par med amine trabelsi / med anes mazouni -->
			<li><a href="../gestionAdmin/gestionAdmin.php">Admin</a></li>
			<li><a href="../gestionClient/gestionClient.php">Client</a></li>
			<li><a href="../gestionEntraineur/gestionEntraineur.php">Entraineur</a></li>
			<li><a href="../gestionContact/contactreponse.php">Contact</a></li>
			<li class="active"><a href="../gestionEmploi/gestionEmploi.php">Emploi</a></li>
		<div class="clear"></div>
		</ul>
</div>
</div>
</div>
<div class="main_bg1">
<div class="wrap">
<div class="main">
<div class="content">
<div class="titregestion">Modification </div>
<div width="60%">
		<div class="contact-form" ><center>
<?php
include("../connexion.php");
	
$jour=$_GET['jour'];
$heure=$_GET['heure'];
$requete="SELECT * from listeSeance where (jour='$jour' AND heure='$heure')";
$resultat=mysql_query($requete);
while($ligne=mysql_fetch_array($resultat)){
	$idE=$ligne['id_entraineur'];
	$pRes=$ligne['nbr_places_res'];
	$pTot=$ligne['nbr_places_total'];
}
?>
<form method="post" action="modif.php" name="formSeance">
	<div><label><span>JOUR &nbsp;&nbsp;&nbsp;<?php echo $jour; ?><input type="hidden" name="jour" id="jour" value="<?php echo $jour; ?>"class="textbox"/></span></label></div>
	<div><label><span>HEURE &nbsp;&nbsp;&nbsp;<?php echo $heure; ?><input type="hidden" name="heure" id="heure" value="<?php echo $heure; ?>"class="textbox"/></span></label></div>
	<div><label><span>ENTRAINEUR <SELECT NAME="idEn" id="idEn">
						<?php   
							$requete2= "SELECT * FROM listeEntraineur ;";
							$resultat2=mysql_query ($requete2);		
							while ($ligne2=mysql_fetch_array($resultat2)) {?>
						<OPTION VALUE="<?php echo($ligne2['id']);?>" <?php if($idE==$ligne2['id']){?>selected="selected"<?php }?>><?php echo($ligne2['nom']." ".$ligne2['prenom']); }?>
						
				</SELECT><br/>
	<div><label><span>Places Reservees : <input type="text" name="placeRes" id="placeRes"value="<?php echo $pRes; ?>"class="textbox"/></span></label></div>
	<div><label><span>Places Totales : <input type="text" name="placeTotal" id="placeTotal"value="<?php echo $pTot; ?>"class="textbox"/></span></label></div>
<input type="button" value="modifier" onclick="verifierSeance()"class="btn btn-3 btn-3e icon-arrow-right"> <input type="reset" value="Annuler"class="btn btn-3 btn-3e icon-arrow-right">
</form>
</center>
		</div>
	</div>

</div>
</div>
</div>

<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class='social-wrap'><!-- animation & changement do lien sociaux par med amine trabelsi / changement do couleur par med amine yahyaoui -->
<ul>
<li><a class='facebook' href='https://www.facebook.com/pages/Feeling-Better/615946091821390?fref=ts' target='_blaank'>Facebook</a></li>
<li><a class='twitter' href='https://twitter.com/Yoga_attitude' target='_blaank'>Twitter</a></li>
<li><a class='google-p' href='https://plus.google.com/u/0/113000555210618047208/posts' target='_blaank'>Google Plus</a></li>
<li><a class='rss' href='#' target='_blaank'>Rss</a></li>
</ul>
</div>
<!-- suppression de lien de referencement par med amine yahyaoui -->
		<div class="clear"></div>
	</div>
</div>
</div>
</body>
</html>
<?php }else header('location:../../404.html');?>