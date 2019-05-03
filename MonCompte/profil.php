<!DOCTYPE html>
	<?php
		session_start();
		$bdd = new PDO('mysql:host=localhost;dbname=espace_membres','nadim','Baya1934');

	?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Se connecter aux 80's</title>
		<link rel="stylesheet" href="styleProfil.css">
	</head>
	<body class="barre">
		<nav>
			<ul>
				<li class="list-home"><a href="../Index.html"><img id="home" src="../Images_CSS/CSS.png"></a>
				</li>	
				</li>
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="../Jeux/Selection/Selection.php">Toute la selection</a></li>
						<li><a href="../Jeux/Recenser/Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="Actus.html">Actus</a>
					<ul class="sousliste">
						<li><a href="#">Toute les news</a></li>
						<li><a href="#">Articles et Chroniques récentes</a></li>
					</ul>
				</li>
				<li class="list-Critiques"><a href="../Critiques/critiques.php">Critiques</a>
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
		<div class="profil">
			<hr/>
			<ul>
				<li><h3>Se connecter</h3></li>
			</ul>
			<hr/>
			<ul class="debut">
				<li><h3>Profil de ...</h3></li>
			</ul>
			<hr/>
			<br/>
			<div class="desc">
				
			</div>
		</div>
	</body>

</html>