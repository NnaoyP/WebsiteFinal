// Déclaration de mon module AngularJS et de ses modules (suppléments)
/*
*	ngRoute -> liaisons de l'url avec des fichiers php à intégrer à l'index (Single Page)
*	ngAnimate -> Animations réalisées principalement dans le CSS
*	ngSanitize -> Traitement pour passer du code html depuis une variable vers le DOM
*	ngCookies -> Gestion des cookies depuis AngularJS
*	ngTouch -> Pour les apareils mobiles
*/
var app = angular.module("PYWebSite" , ["ngRoute","ngAnimate","ngSanitize","ngCookies","ngTouch"]);

//Controller pour la page principale (traitements directement dans le DOM typique de Angular)

app.controller('MainController', ['$route','$routeParams', '$location', 
	function MainController($route, $routeParams, $location) {

}]);