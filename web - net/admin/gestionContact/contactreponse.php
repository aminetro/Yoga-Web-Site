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
		<h1><a href="../../index.php"><img title="exercising-postures"src="../../images/logo.png" alt=""></a></h1>
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
			<li class="active"><a href="../gestionContact/contactreponse.php">Contact</a></li>
			<li><a href="../gestionEmploi/gestionEmploi.php">Emploi</a></li>
			<li><a href="../logout.php">Logout</a></li>
		<div class="clear"></div>
		</ul>
</div>
</div>
</div>
<div class="nav2_bg">
<div class="wrap2">
<div class="menu2">
		<ul class="nav2">
		<!-- police changer par med amine trabelsi / med anes mazouni -->
			<li><a href="../gestionContact/ajoutContact.php">Ajout Message</a></li>
			<li class="active"><a href="../gestionContact/contactreponse.php">Liste Message</a></li>
			
		<div class="clear"></div>
		</ul>
</div>
</div>
</div>
<div class="main_bg1">
<div class="wrap">
<div class="main">
<div class="content">
<div class="titregestion">Liste Des Messages </div>
		<?php
			include("../connexion.php");
		?>


<center>

<div class="tableau">
		<br/>
		<?php 
			$requete= "SELECT * FROM messages ;";


			$resultat=mysql_query ($requete);
		?>

		<table  >
		
		<tr> <td> ID </td>  <td>NOM</td>  <td>PRENOM</td>  <td>TEL</td>  <td>MAIL</td> <td>MESSAGE</td> <td> SUPPRIMER </td> <td> MODIFIER </td> <td> REPONDRE </td>  </tr>
		<?php while ($ligne=mysql_fetch_array($resultat)) { ?>

			<tr> 
				<td><?php echo $ligne['id']; ?></td>  
				<td><?php echo $ligne['nom'] ;?></td>  
				<td><?php echo $ligne['prenom'] ;?></td> 
				<td><?php echo $ligne['tel']; ?></td> 
				<td><?php echo $ligne['mail'] ;?></td> 
				<td><?php echo $ligne['message']; ?></td>  
				<td> <a href="contactreponse.php?choix=supprim&idr=<?php echo $ligne['id']; ?>"><img title="emotionnel"src="../../images/bouton-supprim.png"></a></td>
				<td> <a href="contactreponse.php?choix=modif&idr=<?php echo $ligne['id']; ?>"><button class="btn btn-3 btn-3e icon-arrow-right">modifier</button></a></td>
				<td> <a href="contactreponse.php?choix=repond&idr=<?php echo $ligne['id']; ?>"><button class="btn btn-3 btn-3e icon-arrow-right">repondre</button></a></td>
			</tr>
			
		<?php } ?>
		</table><br/>
		<?php 
		if (isset ($_GET['choix']))
		{
			$x=$_GET['choix'];
			$idr=$_GET['idr'];
		if($x=="supprim"){
		$requete="DELETE  FROM messages where id='$idr'";
		if(mysql_query($requete))
		header("location:contactreponse.php");
		
		
		}
		elseif($x=="modif"){

		$requete1="select * from messages where id='$idr';";
		$resultat1=mysql_query($requete1);
		while ($ligne1=mysql_fetch_array($resultat1)) { 
		?>
		<div width="60%">
		<div class="contact-form" >
		<form method="post" action="modif.php">
			<input type="hidden" name="id" value="<?php echo $ligne1['id']; ?>"/>
			<div><label><span>NOM <input type="text" name="nom" value="<?php echo $ligne1['nom']; ?>"class="textbox"/> </span></label></div>
			<div><label><span>PRENOM <input type="text" name="prenom" value="<?php echo $ligne1['prenom']; ?>"class="textbox"/></span></label></div>
			<div><label><span>TEL <input type="text" name="tel" value="<?php echo $ligne1['tel']; ?>"class="textbox"/></span></label></div>
			<div><label><span>MAIL <input type="text" name="mail" value="<?php echo $ligne1['mail']; ?>"class="textbox"/></span></label></div>
			<div><label><span>MESSAGE<span><textarea name="message"><?php echo $ligne1['message']; ?></textarea></span></label></div>
			
			

			<button  onclick=""class="btn btn-3 btn-3e icon-arrow-right">valider</button>
		</form>
		<?php }}
		elseif($x=="repond"){

		$requete2="select * from messages where id='$idr';";
		$resultat2=mysql_query($requete2);
		while ($ligne2=mysql_fetch_array($resultat2)) { 
		?>
		<div width="60%">
		<div class="contact-form" >
		<form method="post" action="sendmail.php">
			<div><label><span>Mail : <input type="text" name="mail" value="<?php echo $ligne2['mail']; ?>"/></span></label></div>
			<div><label><span>Sujet : <input type="text" name="subject"/></span></label></div>
			<div><label><span>Reponse : <TEXTAREA name="msg" ROWS="2" COLS="60" ></TEXTAREA></span></label></div>



			<button  onclick=""class="btn btn-3 btn-3e icon-arrow-right">valider</button>
		</form>
		<?php } }}?>
		</div>
		</div>
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
<?php }else header('location:../../404.php');ob_flush();?>