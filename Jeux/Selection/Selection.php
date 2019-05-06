<!DOCTYPE html>
<?php 
    session_start(); 
    $bdd= new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','nadim','Baya1934');
    if(isset($_POST['rech'])){
        if(!empty($_POST['recherche'])){
            $reqrech = $bdd->prepare('SELECT * FROM Jeux WHERE nom = ?');
            $reqrech->execute(array($_POST['recherche']));
            $gameexist = $reqrech->rowCount();
            if($gameexist == 1){
                $destination= $_POST['recherche'];
                header('Location: Selection.php#'.$destination); // fonctionne pas :/
            }else{
                $erreur= "Nous n'avons trouvé aucune entrée du catalogue correspendant à votre recherche :/";
            }
        }else{
            $erreur= "Veuillez entrer quelque chose...";
        }
    }
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Toute la sélection</title>
	<link rel="stylesheet" href="StyleSelection.css">
</head>
<body>
		<nav>
			<ul>
				<li class="list-home"><a href="../../Index.php"><img id="home" src="../../Images_CSS/CSS.png"></a>
				</li>	
				</li>
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="Selection.php">Toute la sélection</a></li>
						
						<li><a href="../Recenser/Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="Actus.html">Actus</a>
					<ul class="sousliste">
						<li><a href="#">Toute les news</a></li>
						
					</ul>
				</li>
                <li class="list-Critiques"><a href="../../Critiques/critiques.php">Critiques</a>
                
                </li>
				<li class="list-Forum"><a href="Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="Communauté.html">Communauté</a>
					<ul class="sousliste">
						<li><a href="#">Vos Articles</a></li>
						<li><a href="../../Critiques/critiques.php">Vos Critiques</a></li>
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
		
        <div class="Selection">
        	<h2>Toute la sélection</h2>
               <form class="formulaire" method="POST" action="Selection.php">
               <input class="champ" type="text" name="recherche" placeholder="Tapez votre recherche ici"/>
               <input id="rechbouton" class="bouton" type="submit" name="rech" value="Rechercher"/>   
               <div align="right"><?php if(isset($erreur)){ echo '<font color="red">'.$erreur.'</font>'; } ?></div>   
            </form>
        	<h3 style="margin-left:2%">Filtrer par : </h3>
        	<br>
        	<div class="Filtres Jeux" style="clear:both">
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

        	<div class="liste-Jeux">
                <hr>
        		<?php
                    require_once "Aux.php";
                    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','nadim','Baya1934');
                    $rq= 'SELECT * FROM Jeux;';
                    $stmt = $bdd->query($rq);
                    $ligne = $stmt->fetchAll();
                    $gneli = array_reverse($ligne);
                    foreach($gneli as $a){
                        afficher_ligne($a);
                    }

                ?>
        	</div>
        </div>
</body>
</html>