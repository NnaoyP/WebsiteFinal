<!-- Page principale du site web -->

<?php 
	// Préparation de données des technologies que j'ai utilisé
	require_once '../includes/technologies.php'; 
?>

<div class="container-fluid">
	
	<!-- Textes et images de présentation du site -->	
	<h1 class="text-beautiful text-center">Bienvenue sur mon site web !</h1>
	<hr class="w-75 align-self-center">
	<br>

	<div class="row">
		<blockquote class="col-8 p-3 text-justify h-100 align-middle">
			J'ai pris la décision de créer un site web dans le cadre de ma recherche d'alternance en contrat professionnel pour ma formation BAC+4 Concepteur développeur informatique à l'ENI de Saint-Herblain. <br><br>
			Ce site web a pour but tout d'abord de montrer mes capacités pour palier à mon manque d'expérience professionnel dans le domaine du développement mais a été un projet intéressant à refaire et à améliorer au fil des mois. <br><br>
			Il montre non seulement mes capacitées mais aussi mon évolution et représente pour moi un des projets les plus abouti et polyvalent sur lequel j'ai pu travailler pour l'instant.
		</blockquote>

		<div class="card col-4 pl-0 pr-0">
			<img src="./ressources/img/CDI.png" class="card-img-top img-fluid">
			<div class="card-body pl-2 pr-2">
				<span>Formation Concepteur Développeur informatique de l'ENI</span>
			</div>
		</div>

	</div>
	<br>
	<hr>
	<br>
	<div class="row">
		<blockquote class="offset-2 col-8 text-justify">
			Sur ce site web vous retrouverez pas mal d'informations sur moi, vous pourrez notamment retrouver : <br>
			Mes informations comme mon Prénom, Nom, Email de contact, mon numéro de téléphone et mon adresse accompagné d'une biographie. <br><br>
			 Vous pouvez retrouver mes expériences professionnelles, mes connaissances et mes compétences et me contacter et vous avez aussi à disposition mon CV en format PDF. Vous avez accès à mon compte Github et Linkedin et à une liste des différents moyens de me contacter.<br><br>

			 Pour finir vous avez à disposition une petite application AngularJS/jQuery en communication avec une API PHP que j'ai développé dans le but d'enrichir le site avec du contenu et montrer mes capacitées.
		</blockquote>
	</div>
	<br>
	<hr>
	<br>
	<div class="row">
		<div class="card col-4 pl-0 pr-0">
			<img class="card-img-top img-fluid" src="./ressources/img/CVWeb.png">
			
			<blockquote class="card-body text-center">
				La deuxième version de mon site web fait avec Angular 5.
			</blockquote>
		</div>

		<blockquote class="col-8 p-3 text-justify">
			Comme je l'ai dit plus tôt, ce site web est à sa troisième refonte. J'ai réalisé pour la première fois un site web personnel en janvier 2018 dans le but de m'aider dans mes recherches d'alternance mais surtout de m'entrainer à utiliser AngularJS auquel je n'ai jamais touché avant. <br><br>

			J'ai donc passé 2-3 semaines à apprendre AngularJS et développer le site web. Suite à cela et sur les conseils d'un recruteur, j'ai réalisé une deuxième version, cette fois-ci en Angular 5 et en une semaine, le but étant de me remettre à l'épreuve et essayer de faire
			mieux que la fois précédente. <br><br>

			Pour cette dernière version de mon site, j'ai commencé à la développer bien plus tard (mi-Mai) pendant ma POEC Web, après avoir replongé dans le code et avoir appris à utiliser bootstrap j'ai eu envie de reprendre à zéro mon site et de le faire plus beau et plus complet et le plus vite possible, et voilà comment ce site est arrivé.
		</blockquote>

	</div>
	
	<br>
	<hr>
	<br>

	<!-- Technologies que j'ai utilisé -->
	<div class="row">

		<h1 class="text-beautiful col-12 text-center">Technologies utilisées</h1>

		<blockquote class="offset-2 col-8 text-center">
			Voici une liste des frameworks, outils et languages que j'ai utilisé pour ce site :
		</blockquote>
	</div>

	<!-- Ajouté côté serveur -->
	<div class="row align-items-center p-2">
		<?php

			foreach ($technologies as $key => $value) {

			?>
				<div class="col-4 col-lg-3 align-items-center p-1 p-lg-3">
					<div class="card pl-0 pr-0 align-items-center">
					
						<div class="card-header container-fluid">
							<img class="card-img-top img-fluid offset-3 col-6" style="background-color: transparent;" src="./ressources/logo/<?=$value['img'] ?>">
						</div>

						<h3 class="card-title text-beautiful"><?=$value['name'] ?></h3>
						
					</div>
				</div>

		<?php 

			}

		?>

	</div>
</div>