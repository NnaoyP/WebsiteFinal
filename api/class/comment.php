<?php 

	// Classe pour gérer les commentaires

	class CommentSection
	{
		// Seul attribut de la classe : le PDO de la base de donnée
		private $database;

		// Le constructeur va créer un PDO, les valeurs de base permettes une connection à un serveur test
		function __construct($serverAdress = 'localhost', $dbname = 'comsection', $user = 'root', $pass = '')
		{
			// Try Catch pour vérifier la s'il n'y a pas d'erreur 
			try 
			{

				$dsn = 'mysql:host='.$serverAdress.';dbname='.$dbname;

				// Gestion des réponses en UTF-8
				$options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

				// Connection au serveur Mysql
				$bdd = new PDO($dsn, $user, $pass, $options);

				// S'il y a une erreur elle sera rendu en exception
				$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				// La base deviens un attribut de l'objet
				$this->database = $bdd;

			} 

			catch (PDOException $e) 
			{
				// Création et envoi de l'erreur
				$msg = 'ERREUR PDO dans ' . $e->getFile() . ' : ' .
				$e->getLine() . ' : ' . $e->getMessage();
				throw new Exception($msg, 1);

			}

		}

		// Méthode pour poster un commentaire
		public function add_comment($name, $comment)
		{
			$this->database->exec("INSERT INTO comments (name,comment) VALUES ( '" . $name . "', '" . $comment . "' );");
		}

		// Méthode pour récupérer les commentaires (renvoie un tableau)
		public function get_comments()
		{
			// PDO::FETCH_ASSOC permet d'organiser le tableau par association
			return $this->database->query("SELECT name,comment FROM comments ;")->fetchAll(PDO::FETCH_ASSOC);
		}
	}