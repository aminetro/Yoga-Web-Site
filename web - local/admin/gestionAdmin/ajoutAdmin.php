<?php session_start();  if(isset($_SESSION['logadmin']) && isset($_SESSION['pwdadmin'])){ ?>
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
		<h1><a href="../../index.php"><img title="calm"src="../../images/logo.png" alt=""></a></h1>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
<div class="menu">
		<ul class="nav">
		<!-- police changer par med amine trabelsi / med anes mazouni -->
			<li class="active"><a href="../gestionAdmin/gestionAdmin.php">Admin</a></li>
			<li><a href="../gestionClient/gestionClient.php">Client</a></li>
			<li><a href="../gestionEntraineur/gestionEntraineur.php">Entraineur</a></li>
			<li><a href="../gestionContact/contactreponse.php">Contact</a></li>
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
			<li class="active"><a href="../gestionAdmin/ajoutAdmin.php">Ajout Admin</a></li>
			<li><a href="../gestionAdmin/gestionAdmin.php">Liste Admin</a></li>
			
		<div class="clear"></div>
		</ul>
</div>
</div>
</div>
<div class="main_bg1">
<div class="wrap">
<div class="main">
<div class="content">
<div class="titregestion">Ajout Des Admins </div>
<div width="60%">
		<div class="contact-form" ><center>
			<form method="post" action="ajout.php" name="formAdmin">
				<div><label><span>lOGIN <input type="text" name="login" id="login"class="textbox"/></span></label></div>
				<div><label><span>PASSWORD <input type="password" name="password" id="password"class="textbox"/></span></label></div>
				
				<input type="button" value="Ajouter" onclick="verifierAdmin()"class="btn btn-3 btn-3e icon-arrow-right"> <input type="reset" value="Annuler"class="btn btn-3 btn-3e icon-arrow-right">
			</form></center>

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
<?php }else header('location:../../404.php');?>