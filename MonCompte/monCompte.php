<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Se connecter aux 80's</title>
		<link rel="stylesheet" href="styleMonCompte.css">
	</head>
	<body class="barre">
		<nav>
			<ul>
				<li class="list-home"><a href="../Index.html"><img id="home" src="../Images_CSS/CSS.png"></a>
				</li>	
				</li>
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="../Jeux/Jeux.html">Toute la selection</a></li>
						<li><a href="#">Recenser</a></li>
						<li><a href="#">Les Mieux notés</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="Actus.html">Actus</a>
					<ul class="sousliste">
						<li><a href="#">Toute les news</a></li>
						<li><a href="#">Articles et Chroniques récentes</a></li>
					</ul>
				</li>
				<li class="list-Critiques"><a href="Critiques.html">Critiques</a>
					<ul class="sousliste">
						<li><a href="#">Toutes les critiques</a></li>
						<li><a href="#">Critiques récentes</a></li>
					</ul>
				</li>
				<li class="list-Forum"><a href="Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="Communauté.html">Communauté</a>
					<ul class="sousliste">
						<li><a href="#">Vos Articles</a></li>
						<li><a href="#">Vos Critiques</a></li>
					</ul>
				</li>
				<li class="list-Moncompte"><a href="#"><img id="pdp" src="../Images_CSS/pdp.png">Mon Compte</a>
				</li>		
			</ul>
		</nav>
	</body>
	<body class="sansbarre">
		<div class="seco">
			<hr/>
			<ul>
				<li><h3>Se connecter</h3></li>
			</ul>
			<hr/>
			<ul class="debut">
				<li><h3>Se connecter</h3></li>
			</ul>
			<hr/>
			<h4 class="rappel">Vous ne pourrez vous connecter à votre compte que si vous êtes déja inscrit sur le site</h4>
			<hr/>
			<br/>
			<br/>
			<div id="connexion">
				<form method="POST" action="">
					<table>
						<tr>
							<td>
								<label for="pseudo">
								Pseudo :
								</label>
							</td>
							<td>
								<input type="text" placeholder="Votre pseudonyme" name="pseudo" />
							</td>
						</tr>
						<tr>
							<td>
								<label for="mdp">
								Mot de passe :
								</label>
							</td>
							<td>
								<input type="text" placeholder="Votre Mot de passe" name="mdp" />
							</td>
						</tr>
					</table>
				</form>
				<p>
					Vous n'êtes toujours pas inscrit? <a href="inscription.php">Rejoignez-nous dès à present !!</a>
				</p>
			</div>
		</div>
	</body>

</html>