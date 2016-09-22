<?php session_start();  if(isset($_SESSION['logc']) && isset($_SESSION['pwdc'])){ $logg=$_SESSION['logc'];?>
<html>
<head>
<!-- titre par med amine trabelsi -->
<title>Yoga Center Tunisie | About</title>
<!-- changement de couleur de page mise en forme taille de letter des paragraphe par med anes mazouni / med amine trabelsi / med amine yahyaoui-->
<!-- balises meta et lien canonic par med amine trabelsi -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta HTTP-EQUIV="Content-language" CONTENT="en">
<meta name="language" content="en-GB">
<meta name="description" content="Refresh Yoga Center in Ariana, is a peaceful retreat from the hectic outside world, focusing on teaching Vinyasa Flow Yoga to all ability levels."/>
<meta name="keywords" content="yoga instructor, yoga lessons, yoga programs online, online class, classes online, yoga teachers, yoga class online, yoga classes online,  yoga centers, online classes, yoga instruction, yoga classes, boot camp, prenatal yoga,"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="canonical" href="http://yoga-tunisie.com/about/" />
</head>
<body>
<!--contenue changer par rania hamouda  et khaled ben hafsia -->
<div class="h_bg">
<div class="wrap">
	<div class="logo">
	<!-- logo par med anes mazouni-->
		<h1><a href="index.php"><img title="yoga"src="images/logo.png" alt="yoga-attitude"></a></h1>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
<div class="menu">
		<ul class="nav">
		<!-- police changer par med amine trabelsi / med anes mazouni -->
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="connect.php">Account</a></li>
			<li><a href="service.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li class="active"><a href="emploi.php">Emploi</a></li>
			<li><a href="logout.php">Logout</a></li>
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
			include("admin/connexion.php");
		?>


<center>

<div class="tableau2">
		<br/>


		<table  >
		
		<tr>  <td> </td> <td>8 - 10 </td><td>10 - 12</td> <td> 12 - 14</td> <td> 14 - 16</td><td> 16 - 18</td> </tr>
	<tr>  <td>Lundi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) {
			
			}else{
			while ($ligne=mysql_fetch_array($resultat)) { 
				$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";
				$resultat2=mysql_query($requete2);
				while($ligne2=mysql_fetch_array($resultat2)){
					echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";
				}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=lundi&heure=8&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=lundi&heure=10&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=lundi&heure=12&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=lundi&heure=14&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'lundi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
				</form>
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=lundi&heure=16&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>
	</tr>
<tr>  <td>Mardi </td>
		<td><?php 	"SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=mardi&heure=8&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 		
				<br/><a href="participate.php?jour=mardi&heure=10&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=mardi&heure=12&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=mardi&heure=14&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'mardi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=mardi&heure=16&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>
	</tr>
<tr>  <td>Mercredi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=mercredi&heure=8&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=mercredi&heure=10&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=mercredi&heure=12&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=mercredi&heure=14&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'mercredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=mercredi&heure=16&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>
	</tr>
<tr>  <td>Jeudi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=jeudi&heure=8&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=jeudi&heure=10&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=jeudi&heure=12&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=jeudi&heure=14&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'jeudi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=jeudi&heure=16&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>
	</tr>
<tr>  <td>Vendredi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=vendredi&heure=8&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=vendredi&heure=10&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=vendredi&heure=12&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=vendredi&heure=14&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'vendredi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=vendredi&heure=16&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>
	</tr>
<tr>  <td>Samedi </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=samedi&heure=8&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=samedi&heure=10&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 		
				<br/><a href="participate.php?jour=samedi&heure=12&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 		
				<br/><a href="participate.php?jour=samedi&heure=14&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'samedi')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=samedi&heure=16&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>
	</tr>
<tr>  <td>Dimanche </td>
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =8 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=dimanche&heure=8&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td>  
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =10 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=dimanche&heure=10&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =12 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) {
			$idd=$ligne['id_entraineur'];			
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 	
				<br/><a href="participate.php?jour=dimanche&heure=12&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td> <?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =14 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=dimanche&heure=14&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
		</td> 
		<td><?php 	$requete= "SELECT * FROM  `listeseance` WHERE  (`heure` =16 AND  `jour` LIKE  'dimanche')";
			$resultat=mysql_query ($requete);
			if(mysql_num_rows($resultat)==0) { ?>
				
			<?php }else{
			while ($ligne=mysql_fetch_array($resultat)) { 
			$idd=$ligne['id_entraineur'];
				$requete2="select nom,prenom from listeEntraineur where id='$idd'";$resultat2=mysql_query($requete2);while($ligne2=mysql_fetch_array($resultat2)){echo $ligne2['nom']." ".$ligne2['prenom']."<br/>";}
				echo $ligne['nbr_places_res']."  /  ".$ligne['nbr_places_total'];
			}?> 
				<br/><a href="participate.php?jour=dimanche&heure=16&logg=<?php echo($logg); ?>"><button class="btn btn-3 btn-3e icon-arrow-right">Participate</button></a><?php }?>
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






<?php }else header('location:404.php');?>