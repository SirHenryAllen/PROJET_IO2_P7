<!DOCTYPE html>
<?php
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','nadim','Baya1934');
    if(isset($_POST['recensement'])){
        if(!empty($_POST['nom']) && !empty($_POST['edit']) && !empty($_POST['dev']) && !empty($_POST['jour']) && !empty($_POST['mois']) && !empty($_POST['annee']) && !empty($_POST['plateforme']) && !empty($_POST['genre']) && !empty($_POST['description']) && !empty($_POST['icone'])){
            $nom = $_POST['nom'];
            $editeur = $_POST['edit'];
            $developpeur = $_POST['dev'];
            $jour = $_POST['jour'];
            $mois = $_POST['mois'];
            $annee = $_POST['annee'];
            $plateforme = $_POST['plateforme'];
            $genre = $_POST['genre'];
            $description = $_POST['description'];
            $image = $_POST['icone'];
            $nomlen = strlen($nom);
            if($nomlen <= 60){
                if($jour <= 31 && $jour >= 0 && $mois <= 12 && $mois >= 0 && $annee <= 2100 && $annee >=1970){
                    $newgame = $bdd->prepare('INSERT INTO Jeux(id,nom,editeur,developpeur,jour,mois,annee,plateforme,genre,description, image) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
                    $newgame->execute(array(null,$_POST['nom'],$_POST['edit'], $_POST['dev'], $_POST['jour'], $_POST['mois'], $_POST['annee'], $_POST['plateforme'], $_POST['genre'], $_POST['description'],$_POST['icone']));
                    $erreur="Le Jeu a été ajouté à la selection";
                }else{
                    $erreur= "La date de sortie est incoherentes";
                }
            }else{
                $erreur= "Le nom est trop long";
            }
        }else{
            $erreur= "Certains champs sont incomplets";
        }
    }
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
						<li><a href="../Selection/Selection.php">Toute la sélection</a></li>
						<li><a href="Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="../../Actus/Actus.html">Actus</a>
					<ul class="sousliste">
						<li><a href="#">Toute les news</a></li>
						<li><a href="#">Articles et Chroniques récentes</a></li>
					</ul>
				</li>
				<li class="list-Critiques"><a href="../../Critiques/critiques.php">Critiques</a>
				</li>
				<li class="list-Forum"><a href="../../Forum/Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="../../Communaute/Communauté.html">Communauté</a>
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
            
            
            
            
            
                <tr>
                <td>
            
            <form method="POST" action="Recenser.php">
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               Nom : <input class="champ" type="text" name="nom" placeholder="Entrer le nom ici"/>  
            
           
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               Editeur : <input class="champ" type="text" name="edit" placeholder="Entrer le nom ici"/>  
            
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               Développeur : <input class="champ" type="text" name="dev" placeholder="Entrer le nom ici"/>  
            <br>
               &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
               Date de sortie : <input class="date" type="number" name="jour" placeholder="jour"/>
               <input class="date" type="number" name="mois" placeholder="mois"/>  
               <input class="date" type="number" name="annee" placeholder="année"/>  
            
            <br>
        	
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
        	
            <br>
        	
            
        		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        		genre : <select name="genre" size="1">
        			<option value="1">Action/Aventure</option>
        			<option value="2">Beat them all</option>
        			<option value="3">Beat them up</option>
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
        	
            </td>
            <td>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            </td>
            <td>
            
                <label for="icone">Ajouter lien d'image (JPG, PNG ou GIF | max. 15 Ko) :<br />
                <input type="text" name="icone"  id="icone" /></label><br />
                <br>

               
                <label for="description">Ajouter une description :<br />
                <textarea name="description" id="description"></textarea></label><br />
            
            </td>
            </tr>
        
                    
            </table>
            <input id="recenser" type="submit" name="recensement" value="Recenser">
            </form>
            &nbsp &nbsp
            <?php
                if(isset($erreur)){
                    echo '<font color="red">'.$erreur.'</font>';
                }
            ?>

        </div>
       
</body>
</html>