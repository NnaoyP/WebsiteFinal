app.controller('Terminal', ['$scope', '$sanitize', '$http', ($scope, $sanitize, $http) => {

	var apiServer = 'http://127.0.0.1/api/api-terminal.php';

	$scope.terminal = new Array("Bienvenue sur le super terminal pour voir les commandes disponible tapez help ou ?<br>");
	
	//Event listener du champ, il vérifie si l'entrée de l'utilisateur est la touche 'entrée' et envoie la commande.
		$scope.cmdKeyUP = (e)=>
		{
			// Récupération de l'entrée utilisateur
			let fullcmd = $scope.cmd.trim().split(' ');
			let cmd = fullcmd[0];

			if(e.keyCode == 13 && cmd != '')
			{	
				addLine(getCallerSpan("yellow","User") + fullcmd.join(' '));

				treatCmd(cmd.toLowerCase().trim(),fullcmd);

				$scope.cmd = ('');
				
				// Fait descendre le curseur au fur et à mesure des commandes
				$('#terminal').scrollTop($("#terminal").prop('scrollHeight'));
			}
		}

		// Traite la commande entrée par l'utilisateur et renvoie vers les fonctions appropriées
		function treatCmd(cmd,fullcmd)
		{

			if(cmd.charAt(0) == '=')
			{
				calcul(cmd);
			}

			else
			{
				switch (cmd) {

					case "clear":
					case "cls":
						clearScreen();
						break;

					case "help":
					case "?":
						getHelp();
						break;
					case "yeah":
					case "yeah !":
						addLine( getCallerSpan('purple','SuperTerminal') + "Yeaaaaaaah !" );
						break;
					case "le sens de l'univers et de tout le reste":
						addLine( getCallerSpan('purple','SuperTerminal') + "Waiting 2 Billions years ...");
						addLine( getCallerSpan('purple','SuperTerminal') + "42" );
						break;
					case "who's calling ?":
						addLine( getCallerSpan('green','Cthulhu') + "Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn !" );
						break;
					case "my ultimate is ready":
						getUltimate();
						break;
					case "exit":
						exitScreen();
						break;
					case "comment":
						comment(fullcmd);
						break;
					case "affcom":
						affcom();
						break;
					default:
						sendCommand(cmd);
						break;
				}
			}
		}

		// Permet de créer un code HTML pour créer un acteur sur le terminal
		function getCallerSpan(col,call)
		{
			let colors = {
				'blue': "cmd-blue",
				'red': "cmd-red",
				'yellow': "cmd-yellow",
				'green': "cmd-green",
				'purple': "cmd-purple",
			}

			return "<span class='"+colors[col]+"'>["+call+"]</span> > ";
		}

		// Commande pour réaliser un calcul (écrit le resultat sur le terminal)
		function calcul(cmd)
		{
			let calc = cmd.substring(1, cmd.length);
			addLine(getCallerSpan('blue','Calculatrice')+calc+" = "+eval(calc));
		}

		// Commande pour remettre le terminal à zéro
		function clearScreen()
		{
			$scope.terminal = [];
			addLine( getCallerSpan('blue','CLEAR') + "Screen cleaned !" );
		}

		// Commande pour visualiser les commandes disponible (y compris celles de l'API REST)
		function getHelp()
		{
			$http.get(apiServer)
			.then( (data) => {
				
				console.log(data.data);
				let treatedData = data.data.replace(/(=>)/g,"<span class='cmd-purple' >=></span>");
				console.log(treatedData);

				addLine(getCallerSpan('blue','HELP'));
				addLine("help/? <span class='cmd-purple' >=></span> Voir les commandes disponibles");
				addLine("clear/cls <span class='cmd-purple' >=></span> Nettoyer l'historique du terminal");
				addLine("=(calcul) <span class='cmd-purple' >=></span> Faire un calcul");
				addLine("exit <span class='cmd-purple' >=></span> Quitter le terminal (vous devrez recharger la page)");
				addLine(treatedData);

			});
		}

		// Éteint le terminal (l'utilisateur doit recharger la page)
		function exitScreen()
		{
			$("#terminal").remove();
			$("#screen").html("TERMINAL TERMINÉ");
		}

		// Easter egg (cf : Overwatch)
		function getUltimate()
		{
			function alea(nb)
			{
				return Math.floor(Math.random() * Math.floor(nb));
			}

			let ultimates =
			[
				{name:"Dva",ulti:"Nerf This ! >:3"},
				{name:"Hanzo",ulti:"Ryu ga waga teki oku rau !"},
				{name:"Genji",ulti:"Ryujin no ke okudae !"},
				{name:"Reinhardt",ulti:"Hammer down !"},
				{name:"Sombra",ulti:"Apagando las luces !"},
				{name:"Mc-Cree",ulti:"It's High Nooooon"},
				{name:"Soldier 76",ulti:"I've got you in my sight !"},
				{name:"Reaper",ulti:"DIE DIE DIE DIE DIE !"},
				{name:"Junkrat",ulti:"Fire in the hole !"},	
			];

			let ultiAlea = ultimates[alea(ultimates.length)];

			addLine(getCallerSpan('purple',ultiAlea.name)+ultiAlea.ulti);
		}

		// Envoie un commentaire à l'API pour l'enregistrer dans la base de données
		function comment(fullcmd)
		{
			if(fullcmd[1] != undefined && fullcmd[2] != undefined)
			{
				let cmd = fullcmd[0];
				let cmdName = fullcmd[1];
				let cmdComment = fullcmd.slice(2,fullcmd.length).join(' ');

				$http.get(apiServer+"?ask="+cmd+"&name="+cmdName+"&com="+cmdComment).then( (response) => 
				{
					addLine(getCallerSpan('green','Serveur')+response.data);
				}, (err) => 
				{
					addLine(getCallerSpan('red','ERREUR')+err.statusText);
				});
			}
			else
			{
				addLine(getCallerSpan('red','ERREUR')+"Vous devez renseiger votre nom et un commentaire");
			}
		}

		// Récupère et affiche les commentaires de l'API (enregistrés dans la base de données)
		function affcom()
		{
			$http.get(apiServer+'?ask=affcom').then( (response) => 
				{
					let comments = response.data;

					console.log(comments);

					comments.forEach( (element) => 
					{
						addLine("<span class='cmd-yellow'>"+element.name+"</span> : "+element.comment);
					});

				} , (err) => 
				{
					addLine(getCallerSpan('red','ERREUR')+err.statusText);
				});
		}

		// Envoie une commande à l'API et écrit la réponse sur le terminal
		function sendCommand(cmd)
		{
			$http.get(apiServer + '?ask=' + cmd).then( (response) => 
				{
					addLine(getCallerSpan('green','Serveur')+response.data);
				},(err) => 
				{	
					let errMessage = (err.statusText == "Bad Request")? "La commande "+cmd+" n'existe pas" : err.statusText;
					addLine(getCallerSpan('red','ERREUR')+errMessage);
				});
		}

		// Écrit sur le terminal
		function addLine(str)
		{
			$scope.terminal.push($sanitize(str+"<br>"));
		}

}]);