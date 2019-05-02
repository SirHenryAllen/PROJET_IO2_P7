<!DOCTYPE html>
<?php
    
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Rencenser</title>
	<link rel="stylesheet" href="styleRecenser.css">
</head>
<body>
		<nav>
			<ul>
				<li class="list-home"><a href="../../Index.html"><img id="home" src="../../Images_CSS/CSS.png"></a>
				</li>	
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="../Selection/Selection.html">Toute la sélection</a></li>
						<li><a href="Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="Actus.html">Actus</a>
					<ul class="sousliste">
						<li><a href="#">Toute les news</a></li>
						<li><a href="#">Articles et Chroniques récentes</a></li>
					</ul>
				</li>
				<li class="list-Critiques"><a href="../../Critiques/critiques.html">Critiques</a>
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
        	
            <table>
            
            <thead>
            <h2>Recenser nouveau jeu</h2>
            </thead>
            
            <div class="test">
            
            <tbody>
            
                <tr>
                <td>
            
            <form class="formulaire" action="">
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               Nom : <input class="champ" type="nom" placeholder="Entrer le nom ici"/>  
            </form>
            
            <form class="formulaire" action="">
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               Editeur : <input class="champ" type="edit" placeholder="Entrer le nom ici"/>  
            </form>
            
            <form class="formulaire" action="">
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               Développeur : <input class="champ" type="dev" placeholder="Entrer le nom ici"/>  
            </form>
            
            <br>
            
            <form class="formulaire" action="">
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               Date de sortie : <input class="date" type="jour" placeholder="jour"/>
               /<input class="date" type="mois" placeholder="mois"/>  
               /<input class="date" type="annee" placeholder="année"/>  
            </form>
            
            <br>
        	
            <div class="Plateforme">
        		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        		Plateforme : <select name="plateforme" size="1">
        			<option value="1">PC</option>
        			<option value="2">PS4</option>
        			<option value="3">XboxOne</option>
        			<option value="4">PS3</option>
        			<option value="5">Xbox360</option>
        			<option value="6">PS2</option>
        			<option value="7">Xbox</option>
        			<option value="8">Autre...</option>
        		</select>
        	</div>
        	
            <br>
        	
            <div class="Genre">
        		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        		genre : <select name="genre" size="1">
        			<option value="1">Action/Aventure</option>
        			<option value="2">Beat them all</option>
        			<option value="3">Beat the up</option>
        			<option value="4">Compilation</option>
        			<option value="5">Combat</option>
        			<option value="6">Course</option>
        			<option value="7">Educatif</option>
        			<option value="8">FPS</option>
        			<option value="9">Gestion</option>
        			<option value="10">Indépendant</option>
        			<option value="11">Jeux de société</option>
        			<option value="12">MMO</option>
        			<option value="13">MMORPG</option>
        			<option value="14">plate-forme</option>
        			<option value="15">RPG</option>
        			<option value="16">Stratégie</option>
        			<option value="17">Autre...</option>
        		</select>
        	</div>
            </td>
            <td>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            </td>
            <td>
            <div class="Insertion">
            <form method="post" action="reception.php" enctype="multipart/form-data">
                <label for="icone">Ajouter une image (JPG, PNG ou GIF | max. 15 Ko) :</label><br />
                <input type="file" name="icone" id="icone" /><br />
                <br>
                <label for="mon_fichier"> Autre fichier (tous formats | max. 1 Mo) :</label><br />
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                <input type="file" name="mon_fichier" id="mon_fichier" /><br />
                <br>
                <label for="titre">Description du fichier (max. 50 caractères) :</label><br />
                <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
                <br>
                <label for="description">Ajouter une description (max. 255 caractères) :</label><br />
                <textarea name="description" id="description"></textarea><br />
            </form>
            </div>
            </td>
            </tr>
                </tbody>
            </div>
            </table>
        </div>
       
        <div class="recenser">
           <input type="submit" name="submit" value="Envoyer" /> 
           <?php $bdd = new PDO('nom','edit','dev','jour','moi','annee','plateforme','genre'); ?>
        </div>
</body>
</html>