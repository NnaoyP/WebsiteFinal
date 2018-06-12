<?php require_once '../includes/hobbies.php'; ?>

<div class="container-fluid">
	
	<h1 class="text-center text-beautiful"> A propos de moi </h1>
	<hr>
	<br>

	<p class="text-justify offset-2 col-8">

		<h2 class="text-beautiful">Mon parcours jusqu'au développement</h2>

		<br>

		Je m'appelle Yoann Pommier, j'ai 21 ans et je suis dans le domaine de la programmation informatique, je cherche actuellement une entreprise pour réaliser un contrat professionnel de 24 mois en tant que Concepteur Développeur Informatique. 

		<br><br> 

		Je me suis plongé dans l'informatique dès mon plus jeune âge et je me suis très vite débrouillé avec le fonctionnement mais aussi avec la maintenance de mon ordinateur et celui de ma famille. 

		<br><br>

		Mon envie d'entrer dans le monde du "Dev" est venue bien après lorsque je me suis retrouvé au lycée dans un domaine qui ne me correspondais absolument pas (J'ai été dirigé vers la chaudronnerie suite à de mauvais conseil et plusieurs critiques de mon entourage sur les métiers de l'informatique), j'ai donc après une longue remise en question choisis de partir vers ma passion : l'informatique. 

		<br>

		Je n'ai pas mis tant de temps que ça à me décider dans quel domaine de l'informatique je souhaitais partir, ma seconde passion pour les jeux vidéo et son industrie ainsi que le plaisir que je me suis découvert en chaudronnerie à créer et à moduler les choses m'a donné envie de me diriger vers le développement informatique et j'ai donc préparé mon parcours pour me diriger dans cette voie. 

		<br><br>

		Après avoir été accepté en passerelle pour aller en Bac Pro Systèmes Électroniques et Numériques, j'ai mis tous mes efforts et ai obtenu le bac avec mention très bien ce qui m'a permis d'accéder instantanément dans une classe de BTS Systèmes Numériques en option informatique et réseau.

		<br><br>
		<hr class="w-75 align-self-center">
		<br>

		<h2 class="text-beautiful">Mon parcours dans le développement</h2>

		<br>

		Mes deux années de BTS se sont très bien passées, j'ai appris à développer en C et C++ j'ai eu l'occasion de faire un peu de langage Web comme du HTML/CSS et PHP ainsi que du SQL. J'ai alors compris que mon choix était vraiment le bon, à chaque fois que l'on me demandait un de réaliser un TP, le fait de me créer un algorithme dans ma tête, d'essayer de lui donner vie, de résoudre les problèmes que je rencontrais. Je me suis vite rendu compte en aidant mes camarades que j'étais très bon pour trouver les problèmes et comprendre leurs démarches, j'avais aussi tendance à être un des premiers à toujours finir le travail demandé. 

		<br><br>

		J'ai finalement obtenu mon BTS et j'ai souhaité partir vers une alternance pour rester en apprentissage mais je voulais commencer à avoir de l'expérience pure dans le développement, car j'ai remarqué que le niveau scolaire est bien en dessous du niveau que l'on peut avoir avec un peu d'expérience et que les techniques apprise en entreprise seraient bien plus enrichissantes. 
		
		<br><br> 
		<hr class="w-75 align-self-center">
		<br>

		<h2 class="text-beautiful">Ma recherche d'alternance</h2>

		<br>
		
		J'ai choisi de me diriger vers l'ENI car leurs formations sont très polyvalentes et me permettent d'avoir une vue d'ensemble sur les environnements et les techniques de développement les plus rependues. Leur infrastructure est pratique et est sur Nantes qui est une ville très intéressante car elle très riche en entreprises d'informatique.

		<br><br>

		J'ai tout d'abord pensé qu'il serait facile de trouver une entreprise en alternance, chose dont j'ai pu vite expérimenter l'inverse. J'étais trop inexpérimenté dans la recherche d'emploi et mon absence d'expériences professionnelle, de projets personnels ainsi que mes simples bases du développement ont créés un fossé qui m'a fait passer une année à expérimenter et apprendre les techniques de la recherche d'emploi. 

		<br><br>

		À la moitié de cette année j'ai décidé après une petite période de las de repartir à zéro, de me créer un site web, de revoir le javascript et d'apprendre à utiliser AngularJS.
		Suivant ce site web je suis parti sur Angular5 et ai refait une deuxième version de mon site web.

		<br><br> 
		<hr class="w-75 align-self-center">
		<br>

		<h2 class="text-beautiful">Ma situation actuelle</h2>

		<br>
		
		Après quelques mois de recherche j'ai été contacté par l'ENI pour me proposer une POEC (Préparation opérationnelle à l'emploi collective) Web orientée PHP pour une durée d'un mois et demi que j'ai accepté. Cette POEC me permet de me remettre à jour, d'apprendre des technologies que je n'aurai jamais utilisé et d'être à Nantes pour être plus disponible pour des entretiens ainsi qu'un stage de deux semaines.

		<br><br>

		Je suis actuellement encore dans ma POEC et en recherche d'alternance.

	</p>

	<br><br>
	<hr>
	<br>
	<h1 class="text-center text-beautiful"> Mes hobbies </h1>
	<hr>
	<br>

	<div class="row align-items-center p-2">
		<?php

			foreach ($hobbies as $key => $value) {

			?>
				<div class="col-6 col-lg-4 align-items-center p-1 p-lg-3">
					<div class="card pl-0 pr-0 align-items-center">
					
						<div class="card-header container-fluid">
							<img class="card-img-top img-fluid offset-3 col-6" style="background-color: transparent;" src="./ressources/img/hobbies/<?=$value['img'] ?>">
						</div>

						<button class="btn btn-dark w-100" data-toggle="collapse" data-target="<?='#hobby'.$key ?>">
							<h3 class="card-title text-beautiful"><?=$value['name'] ?></h3>
						</button>

						<div class="card-body collapse" id="<?='hobby'.$key ?>">
							<?=$value['desc'] ?>
						</div>
						
					</div>
				</div>

		<?php 

			}

		?>

	</div>


</div>