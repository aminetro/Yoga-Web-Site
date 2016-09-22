<?php session_start(); ob_start();?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
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
		<h1><a href="index.php"><img title="meditation"src="images/logo.png" alt="meditation-yoga"></a></h1>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
<div class="menu">
		<ul class="nav">
		<!-- police changer par med amine trabelsi / med anes mazouni -->
			<li><a href="index.php">Home</a></li>
			<li class="active"><a href="about.php">About</a></li>
			<li><a href="connect.php">Account</a></li>
			<li><a href="service.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
			<?php   if(isset($_SESSION['logc']) && isset($_SESSION['pwdc'])){ ?>
			<li><a href="emploi.php">Emploi</a></li>
			<li><a href="logout.php">Logout</a></li>
			<?php } ?>
		<div class="clear"></div>
		</ul>
</div>
</div>
</div>
<div class="main_bg1">
<div class="wrap">
<div class="main">
<div class="about">
		<div class="about-data">
			<h2>About Us</h2>
			<div class="about-desc">
				<h4>Our Center, Our Passion</h4>
				<p class="top">It's simple. Our passion became our company. We've always believed in whole health, and the power of yoga, health and wellness. We created Yoga Attitude so we could share this passion with the world. We wanted to bring the benefits of yoga, Pilates, meditation, dance, nutrition, and holistic living to everyone, everywhere. Today, we stream over a thousand high-definition videos to people in countries all over the world. We offer one of the largest and most diverse Mind-Body video and article libraries in the global arena. Our Premium, On Demand subscription service provides unlimited online access to the powerful benefits of yoga and wellness, wherever and whenever our members need them.
 </p>
				<div class="rd_more">
					<a href="details.php"><button class="btn btn-3 btn-3e icon-arrow-right">view More</button></a>
				</div>
			</div>	
			<div class="about-img">
				<a href="details.php"><img title="balance"src="images/pic8.jpg" alt="boot-camp"></a>
			</div>
			<div class="clear"></div><div class="rd_more">
				
				</div>							
		</div>

			<div class="clear"></div>
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
<?php ob_flush(); ?>