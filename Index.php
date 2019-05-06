<!DOCTYPE html>
<?php session_start(); 
	  $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','nadim','Baya1934');
?>
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
				<li class="list-Actus"><a href="#">Articles</a>
					<ul class="sousliste">
						<li><a href="Communaute/Article/Article.php">Tous les articles</a></li>
						
					</ul>
				</li>
				<li class="list-Critiques"><a href="Critiques/critiques.php">Critiques</a>
				</li>
				<li class="list-Forum"><a href="Forum/Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="#">Communauté</a>
					<ul class="sousliste">
						<li><a href="Communaute/Article/Article.php">Vos Articles</a></li>
						<li><a href="Critiques/critiques.php">Vos Critiques</a></li>
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
        		<h2 id="DernierAct">Dernières Actus du site</h2>
        	</span>
        	<div class="Sousbloc1">
        		<h3>Dernier jeu recensé</h3>
        		<hr>
        		
            		<?php
                   
                    $rq= 'SELECT * FROM Jeux;';
                    $stmt = $bdd->query($rq);
                    $ligne = $stmt->fetchAll();
                    echo '<h3><strong>'.$ligne[count($ligne)-1]['nom'].'</strong></h3><img src="Jeux/'.$ligne[count($ligne)-1]['image'].'" alt= "imj" width="100px" height="100px"><br><br><a style="color:#470440" href="Jeux/Selection/Selection.php">-> afficher dans Toute la selection...</a>';

                ?>
        	</div>
        	<div class ="Sousbloc2">
        		<h3>Dernière critique</h3>
        		<hr>
        		<?php
                
                    $rq= 'SELECT * FROM Critiques;';
                    $stmt = $bdd->query($rq);
                    $ligne = $stmt->fetchAll();
                    echo '<h3><strong>Critique de '.$ligne[count($ligne)-1]['publisher'].' sur '.$ligne[count($ligne)-1]['nom'].'</strong></h3><br><br><a style="color:#470440" href="Critiques/critiques.php">-> afficher dans Critiques...</a>';

                ?>

        	</div>
        	<div class = "Sousbloc3">
        		<h3>Dernier article</h3>
        		<hr>
        		<?php 

        		?>
        	</div>


        </div>
	</body>
	<footer>
		<p> Copyright &copy; Marouflar Corp - 2018-2019 - Tout Droits Réservés - Veuillez contacter un marouflard attitré pour toute utilisation du site </p>
	</footer>
</html>