<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<!-- titre par med amine trabelsi -->
<title>Yoga Center Tunisie | Staff</title>
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
<link rel="canonical" href="http://yoga-tunisie.com/staff/" />
</head>
<body>
<!--contenue changer par rania hamouda  et khaled ben hafsia -->
<div class="h_bg">
<div class="wrap">
	<div class="logo">
	<!-- logo par med anes mazouni-->
		<h1><a href="index.php"><img title="yoga"src="images/logo.png" alt=""></a></h1>
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
			<li class="active"><a href="connect.php">Account</a></li>
			<li><a href="service.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
			<?php if(isset($_SESSION['logc']) && isset($_SESSION['pwdc'])){ ?>
			<li><a href="emploi.php">Emploi</a></li>
			<li><a href="logout.php">Logout</a></li>
					</div>
		</div>
		</div>
			<div class="nav2_bg">
		<div class="wrap2">
		<div class="menu2">
			<ul class="nav2">
				<li><a href="connect.php">Information</a></li>
				<li><a href="modif.php?log=<?php echo $_SESSION['logc']; ?>">Modify</a></li>
				<li class="active"><a href="reclamation.php">Reclamation</a></li>
				<div class="clear"></div>
			</ul>

			<?php } ?>
		<div class="clear"></div>
		</ul>
</div>
</div>
</div>
<div class="main_bg1">
<div class="wrap">
<div class="main">

 	<div class="section group1">

		<center>


		<div width="60%">
		<div class="contact-form" >

		<form method="post" action="ajoutrec.php">
			
			<input type="hidden" name="log" value="<?php echo $_SESSION['logc']; ?>"/><br/>
			<div><label><span>SUBJECT<input type="text" name="subject" class="textbox"/> </span></label></div>
			<div>
				<span><label>MESSAGE</label></span>
			 	<span><textarea name="userMsg"></textarea></span>
			</div>

			
			

			<button  onclick=""class="btn btn-3 btn-3e icon-arrow-right">Send Me</button>
		</form>
		</div>
		</div>

		
		</center>
			<br/><br/><br/><br/><br/>
			
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