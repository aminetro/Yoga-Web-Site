<?php session_start(); ob_start(); ?>
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
<script> function alerts(){alert("U Must Be Logged On In Order To View Our Sessions"); }</script>
</head>
<body onload="<?php if(isset($_GET['pub'])){ echo'alerts()';}  ?>">
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
				<li class="active"><a href="connect.php">Information</a></li>
				
				<li><a href="modif.php?log=<?php echo $_SESSION['logc']; ?>">Modify</a></li>
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
		<?php  if(isset($_SESSION['logc']) && isset($_SESSION['pwdc'])){ 
		include("admin/connexion.php");
		$logg=$_SESSION['logc'];
		$requete="SELECT * FROM listeClient where login='$logg';";
		$resultat=mysql_query ($requete);
		echo mysql_error();

?>
		<div class="tableau">
			<table  >
		
			<br/><br/><br/>
			
		<tr>  <td>LAST NAME</td>  <td>FIRST NAME</td>  <td>MOBILE</td>  <td>E-MAIL</td> <td>LOGIN</td> <td>PASSWORD</td> <td>TOKEN</td>  </tr>
		<?php echo($resultat);while ($ligne=mysql_fetch_array($resultat)) { ?>

			<tr> 				
				<td><?php echo $ligne['nom'] ;?></td>  
				<td><?php echo $ligne['prenom'] ;?></td> 
				<td><?php echo $ligne['tel']; ?></td> 
				<td><?php echo $ligne['mail'] ;?></td> 
				<td><?php echo $ligne['login']; ?></td>  
				<td><?php echo $ligne['password'] ;?></td>  
				<td><?php echo $ligne['token'] ;?></td> 
			</tr>
			
		<?php } ?>
		</table><br/>
		

		</div>
		
		
		<?php }else{ ?>
				<div class="col span_1_of_2">
					<div class="contact-form" >
			    	 	<h3>Connect</h3>
						<?php
						if(ISSET($_POST['seen1']))
						{
						include("admin/connexion.php");

						$login=$_POST['userLogin'];
						$pwd=$_POST['userPwd'];
						$logE="";$test="";$loginE="";$pwdE="";
						if(($login=="")||($pwd=="")){
							if ($login=="") {$loginE="Login is empty"; $test=$test.$loginE;}
							if ($pwd=="") {$pwdE="Password is empty"; $test=$test.$pwdE;}
						}
						   else {$requete="SELECT * FROM  `listeclient` WHERE  `login` =  '$login' AND  `password` =  '$pwd';";
								$resultat=mysql_query($requete);
								$ligne=mysql_fetch_array($resultat);
								if($ligne['login'] ==""){$logE="Login OR Password Inccorrect";$test="eeeee";}
							}						
						if($test!=""){ ?>
						<form method="post" action="connect.php" > 
						<input type="hidden" name="seen1" value="seen">

						    
						     <div>
						    	<span><label>LOGIN</label></span>
						    	<span><input name="userLogin" type="text" class="textbox" value="<?php echo($login) ?>"></span>
								<div class="error"><?php echo($loginE) ?></div>
						    </div>
							 <div>
						    	<span><label>PASSWORD</label></span>
						    	<span><input name="userPwd" type="password" class="textbox" ></span>
								<div class="error"><?php echo($pwdE) ?></div>
						    </div>
						   <div>
						   		<span><button  type="submit" value="OK" class="btn btn-3 btn-3e icon-arrow-right">Connect</button></span>
								<div class="error"><?php echo($logE) ?></div>
						  </div>

					    </form>
						<?php
						}
						else{
							session_start();
							$_SESSION['logc']=$login;
							$_SESSION['pwdc']=$pwd;
							header("location:index.php");
							}
						}
						else{
?>

					    <form method="post" action="connect.php" > 
						<input type="hidden" name="seen1" value="seen">

						    
						    <div>
						    	<span><label>LOGIN</label></span>
						    	<span><input name="userLogin" type="text" class="textbox" ></span>
						    </div>
							
							<div>
						    	<span><label>PASSWORD</label></span>
						    	<span><input name="userPwd" type="password" class="textbox" ></span>
						    </div>
						   <div>
						   		<span><button  type="submit" value="OK" class="btn btn-3 btn-3e icon-arrow-right">Connect</button></span>
						  </div>

					    </form>
					<?php } ?>
				   </div>
				</div>				
				<div class="col span_1_of_2">
				  <div class="contact-form" >
				  
				  	<h3>Subscribe</h3>
						<?php
						if(ISSET($_POST['seen2']))
						{
						include("admin/connexion.php");

						$nom=$_POST['userLName'];
						$prenom=$_POST['userFName'];
						$tel=$_POST['userPhone'];
						$mail=$_POST['userEmail'];
						$login=$_POST['userLogin'];
						$pwd=$_POST['userPwd'];
						$test="";$nomE="";$prenomE="";$telE="";$mailE="";$loginE="";$pwdE="";
						if ($nom=="") {$nomE="Last name is empty"; $test=$test.$nomE;}
						if ($prenom=="") {$prenomE="First name is empty"; $test=$test.$prenomE;}
						if ($mail=="") {$mailE="E-mail is empty"; $test=$test.$mailE;}
						  
						else{$verifmail="!^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$!";
								if(!preg_match($verifmail,$mail)) {
									$mailE="E-mail isnt valid"; $test=$test.$mailE;
								}else {$requete="SELECT * FROM  `listeclient` WHERE  `mail` =  '$mail';";
									$resultat=mysql_query($requete);
									$ligne=mysql_fetch_array($resultat);
									if($ligne['mail'] !=""){$mailE="This E-Mail is used";$test=$test.$mailE;}}
							}
						if ($tel=="") {$telE="Mobile is empty"; $test=$test.$telE;}
						else{
							if (is_numeric($tel)==false) {$telE="Mobile must be digital   " ; $test=$test.$telE;}
							if (strlen($tel)!=8){$telE=$telE."Mobile must have 8 numbers";$test=$test.$telE;}
							}
						if ($login=="") {$loginE="Login is empty"; $test=$test.$loginE;}
						  else {$requete="SELECT * FROM  `listeclient` WHERE  `login` =  '$login';";
						$resultat=mysql_query($requete);
						$ligne=mysql_fetch_array($resultat);
						if($ligne['login'] !=""){$loginE="This login is used";$test=$test.$loginE;}}
						if ($pwd=="") {$pwdE="Password is empty"; $test=$test.$pwdE;}
						
						if($test!=""){ ?>
						<form method="post" action="connect.php" > 
						<input type="hidden" name="seen2" value="seen">
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
						    	<span><label>LOGIN</label></span>
						    	<span><input name="userLogin" type="text" class="textbox" value="<?php echo($login) ?>"></span>
								<div class="error"><?php echo($loginE) ?></div>
						    </div>
							 <div>
						    	<span><label>PASSWORD</label></span>
						    	<span><input name="userPwd" type="password" class="textbox" value="<?php echo($pwd) ?>"></span>
								<div class="error"><?php echo($pwdE) ?></div>
						    </div>
							<input type="hidden" name="token" value="0"/>
						   <div>
						   		<span><button  type="submit" value="OK" class="btn btn-3 btn-3e icon-arrow-right">Subscribe</button></span>
						  </div>

					    </form>
						<?php
						}
						else{
							$requete= "INSERT INTO  `project`.`listeclient`
								VALUES ('$nom'  , '$prenom'  , '$tel' ,  '$mail' , '$login' , '$pwd' , 0);";
							if (mysql_query ($requete)) {
								session_start();
							$_SESSION['logc']=$login;
							$_SESSION['pwdc']=$pwd;
								header("location:index.php");
							}else   echo("insertion KO");
							}
						}
						else{
?>

					    <form method="post" action="connect.php" > 
						<input type="hidden" name="seen2" value="seen">
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
						    	<span><label>LOGIN</label></span>
						    	<span><input name="userLogin" type="text" class="textbox" ></span>
						    </div>
							
							<div>
						    	<span><label>PASSWORD</label></span>
						    	<span><input name="userPwd" type="password" class="textbox" ></span>
						    </div>
							<input type="hidden" name="token" value="0"/>
						   <div>
						   		<span><button  type="submit" value="OK" class="btn btn-3 btn-3e icon-arrow-right">Subscribe</button></span>
						  </div>

					    </form>
					<?php } ?>
					</div>
  				</div>		
  			<div class="clear"></div>
			<?php } ?>
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
<?php ob_flush(); ?>