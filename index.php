<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Jospin Amissi | Accueil</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
	<meta name="description" content="Jospin Amissi | Web Developper and Information Technology" />
	<meta name="keywords" content="Accueil, A Propos, Folio, Contact" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="robots" content="all,index,follow">
	<link rel="shortcut icon" href="image/photo1.JPG"/>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css"/>
    <script src="bootstrap/js/jquery-1.7.2.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap/js/jquery-1.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap/js/analytics.js" type="text/javascript" charset="utf-8"></script>
    <script src="bootstrap/js/jquery_003.js" type="text/javascript"charset="utf-8"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js" type="text/javascript"charset="utf-8"></script>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/nivo-slider.css"/>
</head>
<body>
<div id="page">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
			<li><a href="propos.php"><span class="glyphicon glyphicon-user"></span> A Propos</a></li>
			<li><a href="folio.php?gallery=1"><span class="glyphicon glyphicon-picture"></span> Folio</a></li>
			<li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contacts</a></li>
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
					<input name="sitesearch" value="www.google.com" type="hidden">
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
		
		
		
		<div id="side" class="slider-wrapper theme-default">
		<div class="row well nivoSlider" id="slider">
			<img src="image/photo1.JPG" />
			<img src="image/photo13.JPG" />
			<img src="image/photo24.jpg" />
			<img src="image/photo12.jpg" />
			<img src="image/photo14.JPG" />	
			<img src="image/photo15.JPG" />	
			<img src="image/photo16.JPG" />	
			<img src="image/photo22.jpg" />
			<img src="image/photo8.jpg" />
			<img src="image/photo9.jpg" />		
		</div>
		</div>
		
		
		<div id="describe" class="row well">
			<div class="article">
				<div class="title">Mon Métier</div>
				 <a href=""><img src="image/fo11.jpg" width="383" height="250" alt="" /></a>
						<div class="description">
						
			Je m'appelle AMISI HASSAN Jospin, étudiant dans le département des Sciences Informatiques,
			Concentration Informatique Pure à l'Université Espoir d'Afrique à Bujumbura. Dans le domaine de l'informatique je me suis concentré plus 
			dans la Programmation Web c'est-à-dire la création de site web statique et dynamique, le développement des applications Android et 
			la création de logiciels de sytème de gestion de bases de données.
						</div>
						
						
						
						<a type="submit" data-toggle="modal" href="metier.php" data-target="#infos" ><center><span class="readmore">Lire Plus</span></center></a>
					</div>
					
					
			
			<div class="article">
				<div class="title">Mon Expérience</div>
				 <a href=""><img src="image/experiences.JPG" width="383" height="250" alt="" /></a>
						<div class="description">
				
			La programmation web est l'un de domaine de l'informatique le plus important dans le monde
			d'aujourd'hui, voici quelques formations que j'avais fait en programmation web dont voici:
			>>> Web Designing, Graphisme, Adobe Photoshop et Indesign avec le groupe de la Nouvelle Technologie de l'Information et de la Communication(NTIC) au Burundi.
			>>> Formation en Web Designing à l'Entreprise COTAL TECHNOLOGIES au Burundi.
									</div>
				<a type="submit" data-toggle="modal" href="experience.php" data-target="#expert" ><center><span class="readmore">Lire Plus</span></center></a>
					</div>

			<div class="article">
				<div class="title">Services</div>
				 <a href=""><img src="image/pr9.jpg" width="383" height="250" alt="" /></a>
						<div class="description">
			Les services realisés sont nombreux: Concepteur du Site Web de <a href=http://"www.amcav.site88.net">AMCAV</a> qui est une Association des Mamans Chrétiennes pour l'Assistance aux Vulnérables,
			de mon site web personnel <a href=http://"www.jospinamissi.org">JOSPIN AMISSI</a>, 
			travaux en équipe sur le site <a href=http://"www.isuba.org">ISUBA CORPORATION</a> qui sera bient&ocirc;t sur le net.
			</div>
				<a type="submit" data-toggle="modal" href="service.php" data-target="#service" ><center><span class="readmore">Lire Plus</span></center></a>
					</div>
			
			</div>
			
			<div class="modal fade" id="infos">
						<div class="modal-dialog">
							<div class="modal-content"></div>
						</div>
					</div>
			<div class="modal fade" id="expert">
						<div class="modal-dialog">
							<div class="modal-content"></div>
						</div>
					</div>
			<div class="modal fade" id="service">
						<div class="modal-dialog">
							<div class="modal-content"></div>
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
	<span class="glyphicon glyphicon-copyright-mark"></span> Copyright 2017 <a href=http://"www.jospinamissi.comeze.com">Jospin Amissi</a> Tous droits réservés<br/>
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


<!--<script type="text/javascript">
$(document).ready(function(){ 
var $carrousel = $('#roundabout'), // on cible le bloc du carrousel
	$img = $('#roundabout img'), // on cible les images contenuesdans le carrousel 
	indexImg = $img.length - 1, // on définit l'index du dernierélément
	i = 0, // on initialise un compteur
	$currentImg = $img.eq(i); // enfin, on cible l'image courante,qui possède l'index i (0 pour l'instant)
	$currentImg.css('display', 'block');
	
	function slideImg()
	{
		setTimeout(function()
		{ // on utilise une fonction anonyme
			if(i < indexImg){ // si le compteur est inférieur au dernier index
				i++; // on l'incrémente
			}
			else{ // sinon, on le remet à 0 (première image)
				i = 0;
			}
			$img.css('display', 'none');
			$currentImg = $img.eq(i);
			$currentImg.css('display', 'block');
			slideImg(); // on oublie pas de relancer la fonction à la fin
		}, 5000); // on définit l'intervalle à 5000 millisecondes (5s)
	}
slideImg(); // enfin, on lance la fonction une première fois
	})
</script>-->