<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Jospin Amissi | Contacts</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
	<meta name="description" content="Jospin Amissi | Web Developper and Information Technology" />
	<meta name="keywords" content="Accueil, A Propos, Folio, Contact" />
	<link rel="shortcut icon" href="image/photo1.JPG"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="robots" content="all,index,follow">
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"/>
    <script src="bootstrap/js/jquery-1.7.2.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap/js/jquery-1.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap/js/analytics.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap/js/jquery_003.js" type="text/javascript"charset="utf-8"></script>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/nivo-slider.css"/>
</head>
<body>
<div id="page">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
			<li><a href="propos.php"><span class="glyphicon glyphicon-user"></span> A Propos</a></li>
			<li><a href="folio.php?gallery=1"><span class="glyphicon glyphicon-picture"></span> Folio</a></li>
			<li class="active"><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contacts</a></li>
		</ul>
	</nav>
	
	<section class="container">
		<div class="row well" id="header">
			<div class="col-lg-6" id="logo">
				<a href="."><img src="image/logo3.png"/></a>
				<marquee>Les projets sont les promesses de l'imagination
						 faites au coeur
				</marquee>

			</div>
			<div class="col-lg-6" id="form">
				<form method="POST" action="recherche.php" id="cse-search-box"  class="col-lg-6 col-lg-offset-6">
				<div class="input-group">
				<div>
					<input type="hidden" name="cx" value="partner-pub-7251150894597704:nz8345-k1u9" />
					<input type="hidden" name="cof" value="FORID:9" /> 
					<input type="hidden" name="ie" value="ISO-8859-1" /> 
					<input name="sitesearch" value="www.google.fr" type="hidden">
					<input type="text" name="q" size="31"  class="form-control" style="text-align:right;" /> 				
					<span class="input-group-btn">
						<button class="btn btn-default" name="sa">
							<span class="glyphicon glyphicon-search"></span>
						</button>
						<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=fr"></script>
					</span>
				</div>
				</div>
				</form>
			</div>
			
		</div>
			<div class="erreure">
							<?php include('verification.php');?>
						</div>
		<div class="row well" id="caroussel" style="background-color:#99cc33; margin-top:-0px;">
		
		<div class="col-lg-offset-1 col-lg-4">
			<table>
		<div class="form-group">
			<legend><strong>Adresses:</strong></legend>
<tr><td><span class="glyphicon glyphicon-home"></span> <strong>Adresse:</strong></td><td>Lilongwe, Malawi</td></tr>
<tr><td></td><td>Dowa, Dzaleka Refugee Camp</td></tr>
<tr><td></td><td>Likuni II/51</td></tr>
<tr><td><span class="glyphicon glyphicon-phone"></span><strong> Téléphone:</strong></td><td>+265 992 129 078</td> </tr>
<tr><td></td><td>+265 882 129 078</td></tr>
</tr><tr><td><span class="glyphicon glyphicon-inbox"></span><strong> E-mail:</strong></td><td>jospinamissi@gmail.com</td>
</tr><tr><td></td><td>amissihassan@yahoo.fr</td></tr><tr><td></td><td>jospinamissi@outlook.com</td></tr>
	</div>
	</table>
			</div>
					
			<div class="col-lg-6" id="form">
				<form method="POST" action=""  class="col-lg-6">
					<div class="form-group" id="labo">
					<legend><strong>Contactez-Nous:</strong></legend>
					<label for="text">Nom:</label>
					<input id="text" class="form-control" type="text" placeholder="Ex:Kevine" name="nom" />
					<label for="text">E-mail:</label>
					<input id="text" class="form-control" type="text" placeholder="Ex:kevine@gmail.com" name="email">
					<label for="text">Téléphone:</label>
					<input id="text" class="form-control" type="text" placeholder="Ex:(+257)78306093" name="phone" />
					<label for="text">Votre Message:</label>
					<textarea id="textarea" class="form-control" placeholder="Ex: Je suis ravi......." name="message"></textarea><br/>
					<button class="btn btn-primary" type="submit" name="boutton"><span class="glyphicon glyphicon-comment"></span> Envoyer</button>
				</div>
			</form>
			
				
				</div>		
				</div>
				
				<?php include('verification.php'); ?>
		
		
	
	</section>
	<footer class="row noir">
		<div class="container">
Contactez-nous via: 
			<a href="https://www.facebook.com/Amissi.Hassan" target="_blank" class="normaltip"><img src="image/icon1.gif" class="img-circle" title="Facebook"></a>
			<a href="https://www.twitter.com/JospinAmissi" class="normaltip"><img src="image/icon2.gif" class="img-circle" title="Twitter"></a>
		<a href="https://www.linkedin.com/in/amisi-hassan-jospin-1405a442/" class="normaltip"><img src="image/icon3.gif" class="img-circle" title="Linkedin"></a>       
		<hr/>
<p>		  
	<span class="glyphicon glyphicon-copyright-mark"></span> Copyright 2022 <a href=http://"www.jospinamissi.org">Jospin Amissi</a> Tous droits réservés<br/>
	Designed by <a href="https://jospinamisi.herokuapp.com/">Jospin Amissi</a>
</p>

		</div>		
	</footer>
	
</div>
</body>
</html>

