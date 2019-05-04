<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<meta charset ="utf-8">
		<title>Index</title>
		<link rel ="stylesheet" href="styleIndex.css">
		
	</head>
	<body>
		<nav>
			<ul>
				<li class="list-home"><a href="Index.php"><img id="home" src="Images_CSS/CSS.png"></a>
				</li>	
				</li>
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="Jeux/Selection/Selection.php">Toute la sélection</a></li>
						<li><a href="Jeux/Recenser/Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="Actus/Actus.html">Actus</a>
					<ul class="sousliste">
						<li><a href="#">Toute les news</a></li>
						<li><a href="#">Articles et Chroniques récentes</a></li>
					</ul>
				</li>
				<li class="list-Critiques"><a href="Critiques/critiques.php">Critiques</a>
				</li>
				<li class="list-Forum"><a href="Forum/Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="Communaute/Communauté.html">Communauté</a>
					<ul class="sousliste">
						<li><a href="#">Vos Articles</a></li>
						<li><a href="#">Vos Critiques</a></li>
					</ul>
				</li>
				<li class="list-Moncompte"> <a href="MonCompte/monCompte.php"><img id="pdp" src="Images_CSS/pdp.png"> <?php if (isset($_SESSION['pseudo'])) { echo $_SESSION['pseudo']; } else { echo "Mon Compte"; } ?> </a>
				</li>		
			</ul>
		</nav>
		<br/>
		<br/>
		<br/>
		<h3><img class="head" src ="Images_CSS/CSS.png" > </h3>
		
		<div>          	
            <form action="" class="formulaire">
               <input class="champ" type="text" placeholder="Tapez votre recherche ici"/>
               <input id="rechbouton" class="bouton" type="button" value="rechercher"/>      
            </form>
        </div>
        <div class="Acceuil">
        	<span id="Vignetteacceuil">
        		<?php  ?>
        		<h2>Acceuil</h2>
        	</span>
        	<div class="Sousbloc1">
        		<h3>Dernier jeu recensé</h3>
        		<hr>
        		<br>
            		<?php
                    require_once "Jeux/Selection/Aux.php";
                    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','nadim','Baya1934');
                    $rq= 'SELECT * FROM Jeux;';
                    $stmt = $bdd->query($rq);
                    $ligne = $stmt->fetchAll();
                    foreach($ligne as $a){
                        afficher_ligne($a); break;
                    }

                ?>
        	</div>
        	<div class ="Sousbloc2">
        		<h3>Dernière critique</h3>
        		<hr>
        		<br>

        	</div>
        </div>
	</body>
	<footer>
		<p> Copyright &copy; Marouflar Corp - 2018-2019 - Tout Droits Réservés - Veuillez contacter un marouflard attitré pour toute utilisation du site </p>
	</footer>
</html>