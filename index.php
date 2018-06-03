<!DOCTYPE html>
<html>
<head>

	<title>Site web de Yoann Pommier</title>
	<meta charset="utf-8">

	<!-- Intégration de bootstrap -->
	<link rel="stylesheet" type="text/css" href="./librairies/bootstrap/bootstrap.min.css">

	<!-- Intégration de Jquery et bootstrap JS -->
	<script type="text/javascript" src="librairies/angularjs/jquery.min.js"></script>
	<script type="text/javascript" src="librairies/bootstrap/bootstrap.min.js"> </script>

	<!-- Intégration des fonts google utilisés -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Noto+Sans|VT323|Lobster" rel="stylesheet">

	<!-- Intégration de Font-Awesome -->
	<link rel="stylesheet" href="./librairies/fontAwesome/css/fontawesome-all.min.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Intégration du fichier CSS principal -->
	<link rel="stylesheet" type="text/css" href="./styles/style.css">

	<?php 

		session_start();

		// Tableau des liens de navigation du site
		$links = [
			'main' => ['#','Accueil',''],
			'abtme' => ['#!abtme','A propos de moi','far fa-user'],
			'myskills' => ['#!myskills','Mes compétences','far fa-chart-bar'],
			'myexp' => ['#!myexp','Mes expériences pro','far fa-list-alt'],
			'contactme' => ['#!contactme','Me contacter','far fa-paper-plane'],
			'mycv' => ['#!mycv','Mon CV','far fa-file-pdf'],
			'abtwebsite' => ['#!abtwebsite','A propos de mon site','far fa-question-circle'],
			'terminal' => ['#!terminal','Terminal',''],
		];

		if (true)//!isset($_SESSION['info'])) 
		{
			include 'includes/infopopup.php';
		}

	?>

</head>

<body ng-app="PYWebSite">

	<div ng-controller="MainController" id="mainCont">

		<!-- ######### HEADER ######### HEADER ######### HEADER ######### HEADER ######### HEADER ######### -->

		<!-- Entête de la page -->
		<header class="container-fluid pl-0 pr-0 pt-2 pb-2">

			<div class="row w-100 ml-0">

				<!-- ######### NAV ######### NAV ######### NAV ######### NAV ######### NAV ######### NAV ######### -->

				<!-- Liens de navigation avec angularJS (cf : router angularjs ) -->
				<div class=" offset-1 col-2 d-block d-lg-none">
					<button type="button" class="btn btn-dark text-white p-3 w-100" data-toggle="collapse" data-target="#navcollapse" role="button" aria-expanded="false" aria-controls="navcollapse">
					    <i class="fas fa-bars"></i>
					</button>
				</div>

				<nav class="col-md-5 container d-none d-lg-block">

					<div class="row">

						<!-- J'utilise font awesome pour les logos : gratuit, utile et vraiment joli -->
						<?php 
							// Génération du menu du site
							foreach ($links as $key => $value) {
								if ($value[2] != '') 
								{
									?>
										<a href="<?=$value[0] ?>" title="<?=$value[1] ?>" class="col-2 navLinks hoverAnimate">
											<i class="<?=$value[2] ?>"></i>
										</a>
									<?php
								}
							}
						?>

					</div>

				</nav>

				<!-- ######### LOGO ######### LOGO ######### LOGO ######### LOGO ######### LOGO ######### LOGO ######### --->

				<!-- Logo du site et lien vers l'accueil -->
				<a id="mainTitle" class="col-4 col-lg-2 justify-content-center hoverAnimate" href="#!" title="Accueil"><img src="./ressources/img/logo.svg" class="hoverAnimate"></a>

				<!-- ######### NAV2 ######### NAV2 ######### NAV2 ######### NAV2 ######### NAV2 ######### NAV2 ######### -->

				<!-- Liens vers les ressources externes (Git, linkedIn) -->
				<div id="links" class="offset-5 offset-lg-2 col-4 container-fluid mr-0">

					<div class="row">

						<a class="col-3 navLinks" href="#!terminal" title="Une petite application web que j'ai conçue (SuperTerminal)"><i class="fas fa-terminal"></i></a>

						<a class="col-3 navLinks" href="http://github.com/NnaoyP" title="Mon github">
							<i class="fab fa-github-square"></i>
						</a>

						<a class="col-3 navLinks" href="https://www.linkedin.com/in/yoann-pommier-516840147/" title="Mon compte LinkedIn">
							<i class="fab fa-linkedin"></i>
						</a>

					</div>

				</div>

			</div>

			<div class="d-lg-none col-12 container-fluid collapse pl-0 pr-0 ml-0 mr-0 pb-1" id="navcollapse">

				<div class="col-12 mt-2"></div>

				<div class="pl-0 pr-0 ml-0 mr-0 mt-5 row justify-content-center">
					<!-- J'utilise font awesome pour les logos : gratuit, utile et vraiment joli -->
					<?php 
						// Génération du menu du site
						foreach ($links as $key => $value) {
							if ($value[2] != '') 
							{
								?>
									<a href="<?=$value[0] ?>" title="<?=$value[1] ?>" class="navLinks hoverAnimate p-2 col-2">
										<i class="<?=$value[2] ?>"></i>
									</a>
								<?php
							}
						}
					?>
				</div>
			</div>

		</header>

		<!-- ######### MAIN ######### MAIN ######### MAIN ######### MAIN ######### MAIN ######### MAIN ######### -->

		<!-- Affichage du contenu de la page par angularJS (cf : router angularjs ) -->
		<main class="articleViewContainer">

			<section ng-view class="contentBlock articleView container-fluid">

			</section>

		</main>
	</div>

	<!-- ######### FOOTER ######### FOOTER ######### FOOTER ######### FOOTER ######### FOOTER ######### -->

	<footer class="contentBlock navbar navbar-inverse navbar-fixed-bottom container-fluid">

		<!-- Infos -->
		<div class="offset-1 offset-lg-0 ml-lg-3 col-10 col-lg-4 card mb-3 text-white bg-dark pl-0 pr-0 footer-block">
			
			<h3 class="card-header text-center w-100 h2">Yoann Pommier</h3>
  			<img class="card-img-top w-25 align-self-center mt-1" src="ressources/img/moi.svg" alt="Image de profil indisponible">

			<div class=" card-body container-fluid">
				<i class="fas fa-mobile-alt offset-1 col-1"></i><span> 06 11 19 33 91</span><br>
				<i class="fas fa-envelope offset-1 col-1"></i><span> yoann.pommier.777@gmail.com</span><br>
				<i class="fas fa-map-marker offset-1 col-1"></i><span> Brion-près-thouet, Deux-sèvres</span>
			</div>

		</div>


		<!-- Liens de navigation du footer -->
		<div class="ml-4 ml-lg-0 col-5 col-lg-3  card pl-0 pr-0 mb-3 footer-block">
			<h4 class="card-header">Navigation</h4>
			<div class="flex-column card-body">
				<?php 

					foreach ($links as $key => $value) {
						?>
							<a class="nav-link" href="<?=$value[0] ?>" > <?=$value[1] ?> </a> 
						<?php
					}
					
				?>
			</div>
		</div>

		<!-- Sources du site web et des libraires -->
		<div class="mr-4 mr-lg-3 col-5 col-lg-3 card pl-0 pr-0 mb-3 footer-block">
			<h4 class="card-header">Sources</h4>
			<div class="flex-column card-body">

				<a class="nav-link" title="Sources de mon site web (github)" href="http://github.com/NnaoyP/WebsiteFinal">
				Site web</a>
				<a class="nav-link" title="Pour tous les logo que j'ai utilisé" href="https://fontawesome.com/">
				FontAwesome</a>
				<a class="nav-link" title="Pour les polices que j'ai utilisé" href="https://fonts.google.com/">
				GoogleFont</a>
				<a class="nav-link" title="pour le fond du site" href="https://www.toptal.com/designers/subtlepatterns/">
				Subtles Patterns</a>
				<a class="nav-link" title="Framework CSS" href="https://getbootstrap.com/">
				Bootstrap</a>
				<a class="nav-link" title="Framework JS" href="https://angularjs.org/">
				AngularJS</a>
				<a class="nav-link" title="Language CSS" href="https://sass-lang.com/">
				SASS</a>

			</div>

		</div>

	</footer>

</body>
	
	<!-- ######### LIBRARIES ######### LIBRARIES ######### LIBRARIES ######### LIBRARIES ######### LIBRARIES ######### -->

<div id="Libraries">
	<?php

		// Gestion des nombreux librairies JS.
		$jsLibraryFiles =
		[
			"angular.min.js",
			"angular-animate.min.js",
			"angular-route.min.js",
			"angular-sanitize.min.js",
			"angular-cookies.min.js",
			"angular-touch.min.js",
		];

		// Ajout des librairies
		echo "<!-- Adding Javascript Libraries -->
				";
		foreach ($jsLibraryFiles as $key => $value) {
			echo "<script src='./librairies/angularjs/" . $value . "'></script>
					";
		}

	?>

	<!-- Ajout des scripts js -->
	<script src="./scripts/main.js"></script>
	<script src="./scripts/router.js"></script>
	<script src="./scripts/terminal.js"></script>

</div>

</html>