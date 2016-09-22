<?php session_start(); ob_start();  if(isset($_SESSION['logadmin']) && isset($_SESSION['pwdadmin'])){ ?>
<!DOCTYPE HTML>
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
</head>
<body>
<!--contenue changer par rania hamouda  et khaled ben hafsia -->
<div class="h_bg">
<div class="wrap">
	<div class="logo">
	<!-- logo par med anes mazouni-->
		<h1><a href="../../index.php"><img title="yoga"src="../../images/logo.png" alt=""></a></h1>
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
			<li><a href="../logout.php">Logout</a></li>
		<div class="clear"></div>
		</ul>
</div>
</div>
</div>
<div class="main_bg1">
<div class="wrap">
<div class="main">
<div class="content">
<div class="titregestion">Emploi Des Seances </div>
		<?php
			include("../connexion.php");
		?>


<center>

<div class="tableau2">
		<br/>
		<?php 
			$requete= "SELECT * FROM logsadmin ;";


			$resultat=mysql_query ($requete);
		?>

		<table  >
		
		<tr>  <td> </td> <td>8 - 10 </td><td>10 - 12</td> <td> 12 - 14</td> <td> 14 - 16</td><td> 16 - 18</td> </tr>
	<tr>  <td>Lundi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="8"/>
					<input type="hidden" name="jours" value="lundi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
				$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";
				$resultat2=mysql_query($requete2);
				while($ligne2=mysql_fetch_array($resultat2)){
					echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";
				}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=lundi&heure=8"><img title="yoga-therapie"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=lundi&heure=8"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="10"/>
					<input type="hidden" name="jours" value="lundi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=lundi&heure=10"><img title="teachers-hatha"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=lundi&heure=10"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="12"/>
					<input type="hidden" name="jours" value="lundi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=lundi&heure=12"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=lundi&heure=12"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="14"/>
					<input type="hidden" name="jours" value="lundi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=lundi&heure=14"><img title="therapie"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=lundi&heure=14"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="16"/>
					<input type="hidden" name="jours" value="lundi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=lundi&heure=16"><img title="spirituel"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=lundi&heure=16"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td>
	</tr>
<tr>  <td>Mardi </td>
		<td><?php 	"SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="8"/>
					<input type="hidden" name="jours" value="mardi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=mardi&heure=8"><img title="yoga-attitude"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mardi&heure=8"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="10"/>
					<input type="hidden" name="jours" value="mardi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 		
				<br/><a href="supprim.php?jour=mardi&heure=10"><img title="relaxation"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mardi&heure=10"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="12"/>
					<input type="hidden" name="jours" value="mardi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=mardi&heure=12"><img title="calm"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mardi&heure=12"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="14"/>
					<input type="hidden" name="jours" value="mardi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=mardi&heure=14"><img title="balance"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mardi&heure=14"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="16"/>
					<input type="hidden" name="jours" value="mardi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=mardi&heure=16"><img title="breathing-techniques"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mardi&heure=16"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td>
	</tr>
<tr>  <td>Mercredi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="8"/>
					<input type="hidden" name="jours" value="mercredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=mercredi&heure=8"><img title="positive-rules"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mercredi&heure=8"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="10"/>
					<input type="hidden" name="jours" value="mercredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=mercredi&heure=10"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mercredi&heure=10"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>		
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="12"/>
					<input type="hidden" name="jours" value="mercredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=mercredi&heure=12"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mercredi&heure=12"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="14"/>
					<input type="hidden" name="jours" value="mercredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=mercredi&heure=14"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mercredi&heure=14"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="16"/>
					<input type="hidden" name="jours" value="mercredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=mercredi&heure=16"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=mercredi&heure=16"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td>
	</tr>
<tr>  <td>Jeudi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="8"/>
					<input type="hidden" name="jours" value="jeudi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=jeudi&heure=8"><img title="physical-movements"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=jeudi&heure=8"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="10"/>
					<input type="hidden" name="jours" value="jeudi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=jeudi&heure=10"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=jeudi&heure=10"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="12"/>
					<input type="hidden" name="jours" value="jeudi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=jeudi&heure=12"><img title="spirituel"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=jeudi&heure=12"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="14"/>
					<input type="hidden" name="jours" value="jeudi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=jeudi&heure=14"><img title="controlling-the-mind"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=jeudi&heure=14"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="16"/>
					<input type="hidden" name="jours" value="jeudi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=jeudi&heure=16"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=jeudi&heure=16"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>	
		</td>
	</tr>
<tr>  <td>Vendredi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="8"/>
					<input type="hidden" name="jours" value="vendredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=vendredi&heure=8"><img title="feeling"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=vendredi&heure=8"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="10"/>
					<input type="hidden" name="jours" value="vendredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=vendredi&heure=10"><img title="listen-sound-life"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=vendredi&heure=10"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="12"/>
					<input type="hidden" name="jours" value="vendredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=vendredi&heure=12"><img title="practise-bare-attention"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=vendredi&heure=12"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>	
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="14"/>
					<input type="hidden" name="jours" value="vendredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=vendredi&heure=14"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=vendredi&heure=14"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>	
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="16"/>
					<input type="hidden" name="jours" value="vendredi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=vendredi&heure=16"><img title="yoga-attitude"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=vendredi&heure=16"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>	
		</td>
	</tr>
<tr>  <td>Samedi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="8"/>
					<input type="hidden" name="jours" value="samedi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=samedi&heure=8"><img title="attitude-yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=samedi&heure=8"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>	
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="10"/>
					<input type="hidden" name="jours" value="samedi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=samedi&heure=10"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=samedi&heure=10"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="12"/>
					<input type="hidden" name="jours" value="samedi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 		
				<br/><a href="supprim.php?jour=samedi&heure=12"><img title="your-attitude"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=samedi&heure=12"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="14"/>
					<input type="hidden" name="jours" value="samedi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 		
				<br/><a href="supprim.php?jour=samedi&heure=14"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=samedi&heure=14"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="16"/>
					<input type="hidden" name="jours" value="samedi"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=samedi&heure=16"><img title="attitude"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=samedi&heure=16"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a>	<?php }?>
		</td>
	</tr>
<tr>  <td>Dimanche </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="8"/>
					<input type="hidden" name="jours" value="dimanche"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=dimanche&heure=8"><img title="yoga-attitude"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=dimanche&heure=8"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>	
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="10"/>
					<input type="hidden" name="jours" value="dimanche"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=dimanche&heure=10"><img title="inspire"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=dimanche&heure=10"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="12"/>
					<input type="hidden" name="jours" value="dimanche"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) {
			$idd=$ligne['id_entraineur'];			
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="supprim.php?jour=dimanche&heure=12"><img title="yoga"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=dimanche&heure=12"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="14"/>
					<input type="hidden" name="jours" value="dimanche"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=dimanche&heure=14"><img title="yoga-attitude"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=dimanche&heure=14"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				<form method="post" action="ajoutSeance.php">		
					<input type="hidden" name="heure" value="16"/>
					<input type="hidden" name="jours" value="dimanche"/>
					<button class="btn btn-3 btn-3e icon-arrow-right">Ajouter</button>
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from `listeEntraineur` where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="supprim.php?jour=dimanche&heure=16"><img title="inspiring"src="../../images/bouton-supprim.png"></a><a href="modifier.php?jour=dimanche&heure=16"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a><?php }?>
		</td>
	</tr>
		</table>
		</div>
		</center><br/>

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
<?php }else header('location:../../404.html');ob_flush(); ?>