<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Jospin Amissi | Folio</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
	<meta name="description" content="Jospin Amissi | Web Developper and Information Technology" />
	<meta name="keywords" content="Accueil, A Propos, Folio, Contact" />
	<link rel="shortcut icon" href="image/photo1.JPG"/>
	<meta name="robots" content="all,index,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"/>
    <script src="bootstrap/js/jquery-1.7.2.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap/js/jquery-1.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap/js/analytics.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap/js/jquery_003.js" type="text/javascript"charset="utf-8"></script>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/global.css"/>
	<link rel="stylesheet" href="css/nivo-slider.css"/>
</head>
<body>
<div id="page">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
			<li><a href="propos.php"><span class="glyphicon glyphicon-user"></span> A Propos</a></li>
			<li class="active"><a href="folio.php?gallery=1"><span class="glyphicon glyphicon-picture"></span> Folio</a></li>
			<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contacts</a></li>
		</ul>
	</nav>
	
	<section class="container">
	
		<div class="row well" id="header">
			<div class="col-lg-6" id="logo">
				<img src="image/logo3.png"/>
				<marquee>Les projets sont les promesses 
				de l'imagination faites au coeur
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

		<div class="row well">
			<div class="well gauche">
				<ul>
					<li class="active"><a href="folio.php?gallery=1"> -> Familles</a></li>
					<li><a href="folio.php?formation=2"> -> Formations</a></li>
					<li><a href="folio.php?universite=3"> -> Universités</a></li>
					<li><a href="folio.php?promenade=4"> -> Promenades</a></li>
				</ul>
			</div>
			<div class="well interne">
				<?php
				if(isset($_GET['gallery']))
				{
					include('gallery.php');
				}
				if(isset($_GET['formation']))
				{
					include('formation.php');
				}
				if(isset($_GET['promenade']))
				{
					include('promenade.php');
				}
				if(isset($_GET['universite']))
				{
					include('universite.php');
				}
			
				?>
				
				
			</div>
		</div>

	</section>
	</div>
	<footer class="row noir">
		<div class="container">
Contactez-nous via: 
			<a href="http://www.facebook.com/Amissi.Hassan" target="_blank" class="normaltip"><img src="image/icon1.gif" class="img-circle" title="Facebook"></a>
			<a href="http://www.twitter.com/Jospin Amissi" class="normaltip"><img src="image/icon2.gif" class="img-circle" title="Twitter"></a>
		<a href="http://www.linked.com/Amissi Hassan" class="normaltip"><img src="image/icon3.gif" class="img-circle" title="Linkedin"></a>       
		<hr/>
<p>		  
	<span class="glyphicon glyphicon-copyright-mark"></span> Copyright 2017 <a href=http://"www.jospinamissi.org">Jospin Amissi</a> Tous droits réservés<br/>
	Designed by <a href=http://"www.jospinamissi.org">Jospin Amissi</a>
</p>

		</div>		
	</footer>
	
</div>
</body>
</html>

<script type="text/javascript">
$(window).load(function() {
$('#slider').nivoSlider();
});
</script>