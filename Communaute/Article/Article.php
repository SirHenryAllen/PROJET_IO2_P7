<!DOCTYPE html>

	<?php session_start(); 
	$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','nadim','Baya1934');
	?>

<html>
<head>
	<meta charset ="utf-8">
	<title>Article</title>
</head>
<head>
	<meta charset="utf-8">
	<title>Nouvelle critique</title>
	<link rel="stylesheet" href="styleArticle.css">
</head>
<body>
		<nav>
			<ul>
				<li class="list-home"><a href="../../Index.php"><img id="home" src="../../Images_CSS/CSS.png"></a>
				</li>	
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="../../Jeux/Selection/Selection.php">Toute la sélection</a></li>
						<li><a href="../../Jeux/Recenser/Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="#">Articles</a>
					<ul class="sousliste">
						<li><a href="Article.php">Tous vos articles</a></li>
						
					</ul>
				</li>
				<li class="list-Critiques"><a href="../../Critiques/critiques.php">Critiques</a>
				</li>
				<li class="list-Forum"><a href="../../Forum/Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="#">Communauté</a>
					<ul class="sousliste">
						<li><a href="Article.php">Vos Articles</a></li>
						<li><a href="critiques.php">Vos Critiques</a></li>
					</ul>
				</li>
				<li class="list-Moncompte"> <a href="../../MonCompte/monCompte.php"><img id="pdp" src="../../Images_CSS/pdp.png"> <?php if (isset($_SESSION['pseudo'])) { echo $_SESSION['pseudo']; } else { echo "Mon Compte"; } ?> </a>
				</li>		
			</ul>
		</nav>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="form">          	
            <form class="formulaire" action="">
               <input class="champ" type="text" placeholder="Tapez votre recherche ici"/>
               <input id="rechbouton" class="bouton" type="button" value="rechercher"/>      
            </form>
        </div>
        <div class="Selection">
        	<h2>Toutes les critiques</h2>
               <form class="formulaire" action="">
               <input class="champ" type="text" placeholder="Tapez votre recherche ici"/>
               <input id="rechbouton" class="bouton" type="button" value="rechercher"/>      
            </form>
        	<h3>Filtrer par : </h3>
        	<br>
        	<div class="Filtres Jeux">
        		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        		Date de sortie <select name="croissant" size="1">
        			<option value="1"> choisir </option>
        			<option value="2">plus anciennce</option>
        			<option value="3">plus récente</option>
        		</select> 
        		&nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp
        		Note <select name="date" size="1">
        			<option value="1">choisir</option>
        			<option value="2">meilleur</option>
        			<option value="3">pire</option>
        		</select>
        		&nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp
        		Plateforme <select name="Plateforme" size="1">
        			<option value="1">choisir</option>
        			<option value="2">PC</option>
        			<option value="3">PS4</option>
        			<option value="4">XboxOne</option>
        			<option value="5">PS3</option>
        			<option value="6">Xbox360</option>
        			<option value="7">PS2</option>
        			<option value="8">Xbox</option>
        		</select>
        		&nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp
               Jeu
               <br>
               <br>
               <hr>
               <br> 
               <form class="formJeu" method="POST" action="critiques.php">
                <input id="AddC" class="bouton" name="addc" type="submit" value="Ajouter un article"/>      
            	</form>
                <?php
                    if(isset($erreur)){
                        echo '<div align="center"><font color="red">'.$erreur.'</font></div>';
                    }
                ?>
        	</div>
        	<br>
        	<div class="liste Jeux">
        		<hr>
        	</div>
        </div>
</html>