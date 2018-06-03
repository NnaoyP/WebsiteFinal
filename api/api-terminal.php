<?php
	
	// Ajout de la classe CommentSection
	require_once 'class/comment.php';

	// Permet à Angular de communiquer avec l'API
	header("Access-Control-Allow-Origin: *");
	
	// Instanciation d'un objet CommentSection qui permet de communiquer avec une base de données
	$comSection = new CommentSection();

	// Vérificaiton si une requête a été faite
	if (isset($_GET['ask'])) 
	{
		// Traitement de la requête
		switch ($_GET['ask']) {

			// Renvoie un nombre random
			case 'random':
				echo rand(0,100);
				break;

			// Permet d'envoyer un commentaire
			case 'comment':
				if ( isset( $_GET['name'] ) && isset( $_GET['com'] ) ) 
				{
					$comSection->add_comment($_GET['name'],$_GET['com']);
					echo "Votre commentaire a été envoyé, faites la commande affcom pour afficher les commentaires.";
				}
				break;

			// Permet d'afficher le commentaire
			case 'affcom':
				echo json_encode($comSection->get_comments());
				break;
			

			//Envoie une erreur 'Bad Request'
			default:
				http_response_code("400");
				break;
		}
	}

	// Si aucune requête n'a été envoyée, affiche les reqêtes possibles
	else
	{
		echo "random => renvoie un chiffre entre 0 et 100 <br>";
		echo "comment (Pseudo) (Commentaire) => Permet d'écrire un commentaire <br>";
		echo "affcom => Affiche les commentaires enregistrés <br>";
	}