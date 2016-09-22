<?php session_start();ob_start();?>
<html lang="en-GB">
<head>



<!-- titre par med amine trabelsi -->
<title>Yoga Center Tunis| - Yoga Space Tunis - Yoga And Meditation - Yoga & Meditation</title>
<!-- changement de couleur de page mise en forme taille de letter des paragraphe par med anes mazouni / med amine trabelsi / med amine yahyaoui-->
<!-- balises meta et lien canonic par med amine trabelsi -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta HTTP-EQUIV="Content-language" CONTENT="en">
<meta name="language" content="en-GB">
<meta name="robots" content="noodp,noydir"/>
<meta name="description" content="Refresh Yoga Center in Ariana, is a peaceful retreat from the hectic outside world, focusing on teaching Vinyasa Flow Yoga to all ability levels."/>
<meta name="keywords" content="yoga, yoga instructor, yoga lessons, yoga programs online, online class, classes online, yoga teachers, yoga class online, yoga classes online,  yoga centers, online classes, yoga instruction, yoga classes, boot camp, prenatal yoga,"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="canonical" href="http://yoga-tunisie.com/" />
<!--slider-->
<link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script type='text/javascript' src="js/jquery.min.js"></script>
    <script type='text/javascript' src="js/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="js/jquery.easing.1.3.js"></script> 
    <script type='text/javascript' src="js/camera.min.js"></script> 
      <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: 'auto',
				loader: 'bar',
				pagination: false,
				thumbnails: true,
				hover: false,
				opacityOnGrid: false,
				imagePath: '../images/'
			});

		});
		function popup(){
		document.location.href='#pub';
		}
	</script>
</head>
<body <?php if(!(isset($_SESSION['logc']) && isset($_SESSION['pwdc']))) echo'onload="popup()"';  ?> >

<a href="connect.php?pub=1"><div class="lb-overlay" id="pub">
							<img title="yoga"src="images/pub.jpg" alt="iyengar-type-yoga">
							<a href="#page" class="lb-close"> </a>
						</div>
</a>
<!--contenue changer par rania hamouda  et khaled ben hafsia -->
<div class="h_bg">
<div class="wrap">
<!-- logo par med anes mazouni-->
	<div class="logo">
		<h1><a href="index.php"><img title="harmony"src="images/logo.png" alt="harmony"></a></h1>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
<div class="menu">
		<ul class="nav">
		<!-- police changer par med amine trabelsi / med anes mazouni -->
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="connect.php">Account</a></li>
			<li><a href="service.php">Services</a></li>
			<li><a href="contact.php">Contact</a></li>
			<?php if(isset($_SESSION['logc']) && isset($_SESSION['pwdc'])){ ?>
			<li><a href="emploi.php">Emploi</a></li>
			<li><a href="logout.php">Logout</a></li>
			<?php } ?>
		<div class="clear"></div>
		</ul>
</div>
</div>
</div>
<!-- image changer par khaled ben hafsia -->
<div class="fluid_container">
   <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
          <div data-src="images/slider1.jpg">           </div>
            <div data-src="images/slider2.jpg">
            </div>
            <div  data-src="images/slider3.jpg">
            </div>
            <div  data-src="images/slider4.jpg">
            </div>
  </div>
</div>
<div class="clear"></div>
<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="content">
		<h2>Welcome</h2>
			<p>Come together and feel the electricity of camaraderie and celebration of 
human interaction at Yoga Attitude Center.
The vibrant spirit of the heart of the people acknowledges and honors the interconnectedness with all life. Yoga Attitude Center offers classes and workshops focusing on the Arts for Spiritual Conscious Living.
Dedicated to supporting all personal inquiry; empowering the path of self- transformation and enhancing the health of mind and body while exploring and discovering the deeper truths of life.
May we individually and collectively live our spirit fully in the grace of love; 
living in harmony and unity with all life. Our spirit is alive , pure and free .
it simple .it always .itsis one . Welcome to « Yoga Attitude Center ».<div class="rd_more">
				<!--<a href="details.php"><button class="btn btn-3 btn-3e icon-arrow-right">view More</button></a>-->
			</div>
	</div>
	<div class="section group">
		<div class="grid_1_of_3 images_1_of_3">
			  <img title="cardio-workout"src="images/pic4.jpg" alt="workout-cardio">
			  <h3>Sweet Gyms</h3>
		</div>
		<div class="grid_1_of_3 images_1_of_3">
			  <img title="emotionnel"src="images/pic8.jpg"alt="fitness">
			  <h3>Fitness</h3>
		</div>
		<div class="grid_1_of_3 images_1_of_3">
			  <img title="yoga-attitude"src="images/pic7.jpg" alt="stretching">
			  <h3>Stretching</h3>				  
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
<div class="btm_bg">
<div class="wrap">
<div class="main">
		<div class="section group example">
				<div class="grid_1_of_2 images_1_of_2">
				<div class="grid_img">
				  	<img title="inspire"src="images/pic4.jpg" alt="inspiration">
				  	</div>
				  	<div class="grid_txt">
				  	<h3> Aerial Yoga</h3>
					<p>Aerial is a young creative type of Yoga.</p>
					<div class="rd_more">
						<a href="details.php"><button class="btn btn-3 btn-3e icon-arrow-right">view More</button></a>
					</div>
				     </div>
				     <div class="clear"></div>
 				</div>
				<div class="grid_1_of_2 images_1_of_2">
				<div class="grid_img">
				  	<img title="yoga"src="images/pic5.jpg" alt="hatha">
				  	</div>
				  	<div class="grid_txt">
				  	<h3>Anusara Yoga</h3>
					<p>Anusara is used in an almost dancelike mode witch is both challenging and fun.</p>
					<div class="rd_more">
						<a href="details.php"><button class="btn btn-3 btn-3e icon-arrow-right">view More</button></a>
					</div>
				     </div>
				     <div class="clear"></div>
 				</div>
				<div class="clear"></div>
		</div>
		<div class="section group example">
				<div class="grid_1_of_2 images_1_of_2">
				<div class="grid_img">
				  	<img title="yoga"src="images/pic6.jpg" alt="health">
				  	</div>
				  	<div class="grid_txt">
				  	<h3>Yin Yoga</h3>
					<p>How simple breath work can lead you to a deep state of relaxation.</p>
					<div class="rd_more">
						<a href="details.php"><button class="btn btn-3 btn-3e icon-arrow-right">view More</button></a>
					</div>
				     </div>
				     <div class="clear"></div>
 				</div>
				<div class="grid_1_of_2 images_1_of_2">
				<div class="grid_img">
				  	<img title="yoga-types"src="images/pic7.jpg" alt="breathing">
				  	</div>
				  	<div class="grid_txt">
				  	<h3>Forest Flow Yoga</h3>
					<p> Forest yoga is a modern style known for long holding of positions.</p>
					<div class="rd_more">
						<a href="details.php"><button class="btn btn-3 btn-3e icon-arrow-right">view More</button></a>
					</div>
				     </div>
				     <div class="clear"></div>
 				</div>
				<div class="clear"></div>
		</div>
</div>
</div>
</div>
<div class="footer-bg">
<div class="wrap">
<div class="footer">
		<div class="ftr_grid">
			<h3>FINDING YOUR PATH</h3>
			<p><a href="details.php"><img title="feeling-better"src="images/pic8.jpg"></a>Lotus Yoga Center is designed to offer quality fitness classes taught by licensed instructors. It is our mission to personally care for every client by offering dedicated guidance. <br/>We hope to teach you a new awareness of your body, mind, and spirit by offering quality classes in Yoga, Meditation, Tai Chi Chuan and ZUMBA. <br/> It is our desire to offer workshops that enrich your life and provide personal enhancement.  
  </p>
			<p class="top">Every time you step onto your mat it's a new beginning. To celebrate this spirit, this new year's issue is packed with tips, inspiration, and practice advice to infuse your yoga with the energy of possibility.</p>
			<div class="rd_more">
				<a href="details.php"><button class="btn btn-3 btn-3e icon-arrow-right">view More</button></a>
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