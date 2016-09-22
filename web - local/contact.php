<?php session_start(); ?>
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
<title>Yoga Center Tunisie | Contact</title>
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
<link rel="canonical" href="http://yoga-tunisie.com/contact/" />
<script href=""></script>
</head>
<body>

<div class="h_bg">
<div class="wrap">
	<div class="logo">
	<!-- logo par med anes mazouni-->
		<h1><a href="index.php"><img title="body-alignement"src="images/logo.png" alt=""></a></h1>
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
			<li class="active"><a href="contact.php">Contact</a></li>
			<?php  if(isset($_SESSION['logc']) && isset($_SESSION['pwdc'])){ ?>
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
 	<div class="section group1">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
							<!-- changement de la location dans la map vers espris par med amine trabelsi -->
					   			<iframe alt="loacation-center-yoga-tunis" width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;ie=UTF8&amp;ll=36.898636,10.191171&amp;spn=0.01069,0.021136&amp;t=m&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;ie=UTF8&amp;ll=36.898636,10.191171&amp;spn=0.01069,0.021136&amp;t=m&amp;z=16&amp;source=embed" style="color: #a59484;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						<p>El-Ghazella , Tunis,</p>
						<p>Center Yoga Attitude,</p>
						<p>Tunisie</p>
				   		<p>Phone:(216) 71 528 628</p>
				   		<p>Fax: (216) 71 699 248</p>

				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form" >
				  
				  	<h3>Contact Us</h3>
						<?php
						if(ISSET($_POST['seen']))
						{
						include("admin/connexion.php");

						$nom=$_POST['userLName'];
						$prenom=$_POST['userFName'];
						$tel=$_POST['userPhone'];
						$mail=$_POST['userEmail'];
						$msg=$_POST['userMsg'];
						$test="";$nomE="";$prenomE="";$telE="";$mailE="";$msgE="";
						if ($nom=="") {$nomE="Last name is empty"; $test=$test.$nomE;}
						if ($prenom=="") {$prenomE="First name is empty"; $test=$test.$prenomE;}
						if ($mail=="") {$mailE="E-mail is empty"; $test=$test.$mailE;}
						else{$verifmail="!^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$!";
								if(!preg_match($verifmail,$mail)) {
									$mailE="E-mail isnt valid"; $test=$test.$mailE;
								}
							}
						if ($tel=="") {$telE="Mobile is empty"; $test=$test.$telE;}
						else{
							if (is_numeric($tel)==false) {$telE="Mobile must be digital   " ; $test=$test.$telE;}
							if (strlen($tel)!=8){$telE=$telE."Mobile must have 8 numbers";$test=$test.$telE;}
							}
						if ($msg=="") {$msgE="Message is empty"; $test=$test.$msgE;}

						if($test!=""){ ?>
						<form method="post" action="contact.php" > 
						<input type="hidden" name="seen" value="seen">
					    	<div>
						    	<span><label>LAST NAME</label></span>
						    	<span><input name="userLName" type="text" class="textbox" value="<?php echo($nom) ?>"></span> 
								<div class="error"><?php echo($nomE) ?></div>
						    </div>
							<div>
						    	<span><label>FIRST NAME</label></span>
						    	<span><input name="userFName" type="text" class="textbox" value="<?php echo($prenom) ?>"></span>
								<div class="error"><?php echo($prenomE) ?></div>
						    </div>
							<div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" value="<?php echo($tel) ?>"></span>
								<div class="error"><?php echo($telE) ?></div>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox" value="<?php echo($mail) ?>"></span>
								<div class="error"><?php echo($mailE) ?></div>
						    </div>
						    
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"><?php echo $msg ?></textarea></span>
								<div class="error"><?php echo($msgE) ?></div>
						    </div>
						   <div>
						   		<span><button  type="submit" value="OK" class="btn btn-3 btn-3e icon-arrow-right">Send Me</button></span>
						  </div>

					    </form>
						<?php
						}
						else{
							$requete= "INSERT INTO  `project`.`messages`
								VALUES (NULL , '$nom'  , '$prenom'  , '$tel' ,  '$mail' , '$msg');";
							if (mysql_query ($requete)) 
								header("location:index.php");
							else   echo("insertion KO");
							}
						}
						else{
?>

					    <form method="post" action="contact.php" > 
						<input type="hidden" name="seen" value="seen">
					    	<div>
						    	<span><label>LAST NAME</label></span>
						    	<span><input name="userLName" type="text" class="textbox" ></span>
						    </div>
							<div>
						    	<span><label>FIRST NAME</label></span>
						    	<span><input name="userFName" type="text" class="textbox" ></span>
						    </div>
							<div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox" ></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox" ></span>
						    </div>
						    
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"></textarea></span>
						    </div>
						   <div>
						   		<span><button  type="submit" value="OK" class="btn btn-3 btn-3e icon-arrow-right">Send Me</button></span>
						  </div>

					    </form>
					<?php } ?>
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