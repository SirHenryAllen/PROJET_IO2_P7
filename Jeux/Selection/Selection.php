<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Toute la sélection</title>
	<link rel="stylesheet" href="StyleSelection.css">
</head>
<body>
		<nav>
			<ul>
				<li class="list-home"><a href="../../Index.html"><img id="home" src="../../Images_CSS/CSS.png"></a>
				</li>	
				</li>
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
<<<<<<< HEAD
						<li><a href="Selection.php">Toute la sélection</a></li>
=======
						<li><a href="Selection.html">Toute la sélection</a></li>
>>>>>>> 0d366f12053d899cfcd2f6222b1e0b270763b8a5
						<li><a href="../Recenser/Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="Actus.html">Actus</a>
					<ul class="sousliste">
						<li><a href="#">Toute les news</a></li>
						<li><a href="#">Articles et Chroniques récentes</a></li>
					</ul>
				</li>
<<<<<<< HEAD
                <li class="list-Critiques"><a href="../../Critiques/critiques.php">Critiques</a>
=======
                <li class="list-Critiques"><a href="../../Critiques/critiques.html">Critiques</a>
>>>>>>> 0d366f12053d899cfcd2f6222b1e0b270763b8a5
                </li>
				<li class="list-Forum"><a href="Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="Communauté.html">Communauté</a>
					<ul class="sousliste">
						<li><a href="#">Vos Articles</a></li>
						<li><a href="#">Vos Critiques</a></li>
					</ul>
				</li>
				<li class="list-Moncompte"><a href="../../MonCompte/monCompte.php"><img id="pdp" src="../../Images_CSS/pdp.png">Mon Compte</a>
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
        	<h2>Toute la sélection</h2>
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
        	</div>
        	<br>
<<<<<<< HEAD
        	<div class="liste Jeux">
        		<ul>
        			<li>Test jeu 1</li>
        			<li>Test jeu 2</li>
        			<li>Test jeu 3</li>
        		</ul>
=======
        	<div class="liste-Jeux">
                <hr>
        		<?php
                    function afficher_ligne(&$ligne){
                        $nom = $ligne["nom"];
                        $editeur = $ligne["editeur"];
                        $developpeur = $ligne["developpeur"];
                        $jour = $ligne["jour"];
                        $mois = $ligne["mois"];
                        $annee = $ligne["annee"];
                        $plateforme = $ligne["plateforme"];
                        $genre = $ligne["genre"];
                        $image = $ligne["image"];
                        $description = $ligne["description"];
                        
                        $plat[1]="Action/Aventure";
                        $plat[2]="Beat them all";
                        $plat[3]="Beat zem up";
                        $plat[4]="Compilation";
                        $plat[5]="Combat";
                        $plat[6]="Course";
                        $plat[7]="Educatif";
                        $plat[8]="FPS";
                        $plat[9]="Gestion";
                        $plat[10]="Indépendant";
                        $plat[11]="Jeux de societé";
                        $plat[12]="MMO";
                        $plat[13]="MMORPG";
                        $plat[14]="plate-forme";
                        $plat[15]="RPG";
                        $plat[16]="Stratégie";
                        $plat[17]="Autre..."

                        $plate[1]="PC";
                        $plate[2]="PS4";
                        $plate[3]="XBOX ONE":
                        $plate[4]="PS3";
                        $plate[5]="XBOX 360";
                        $plate[6]="PS2";
                        $plate[7]="XBOX";
                        $plate[8]="Autre";
                    ?>
                    
                <?php
                        echo "<p> Edité par: ".$editeur.".</p>";
                        echo "<p> Developpé par: ".$developpeur.".</p>";
                        echo "<p> Genre :".$plat[$genre].".</p>";
                        echo "<br><p><strong>Synopsis : </strong>".$description."</p>";
                        echo "</div><br><hr>";
                    }
                    while($ligne = mysqli_fetch_assoc($prods)){
                        afficher_ligne($ligne);
                    }
                ?>

>>>>>>> 0d366f12053d899cfcd2f6222b1e0b270763b8a5
        	</div>
        </div>
</body>
</html>