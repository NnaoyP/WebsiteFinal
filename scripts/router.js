// Script de liaison des routes
// Permet de récupérer les contenus des fichiers dans ./views/ 
// et de les rajouter à la balise "article" sur la page principale
// en fonction de l'url demandé
// cf : angular-route

app.config(($routeProvider) => {

	$routeProvider

	// Racine, page principale
	.when("/", {
		templateUrl : "./views/main.php"
	})

	.when("/abtme", {
		templateUrl : "./views/abtme.php"
	})

	.when("/myskills", {
		templateUrl : "./views/myskills.php"
	})

	.when("/myexp", {
		templateUrl : "./views/myexp.php"
	})

	.when("/contactme", {
		templateUrl : "./views/contactme.php"
	})

	.when("/mycv", {
		templateUrl : "./views/mycv.php"
	})

	.when("/abtwebsite", {
		templateUrl : "./views/abtwebsite.php"
	})

	.when("/terminal", {
		templateUrl : "./views/terminal.php"
	})

	// Page non trouvée : (la redirection vers la page 404 sera géré côté serveur)
	.when("/404", {
		templateUrl : "./views/404.php"
	});
	
});