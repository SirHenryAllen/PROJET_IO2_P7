
<?php

	$bdd = new PDO('mysql:host=localhost;dbname=espace_membres', 'nadim', 'Baya1934');
	if(isset($_POST['jesuisinscris'])){
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$mail = htmlspecialchars($_POST['mail']);
			$mailconf = htmlspecialchars($_POST['mailconf']);
			$mdp = password_hash($_POST['passwd']);
			$mdpconf = password_hash($_POST['passwdconf']);
		if(!empty($_POST['mail']) && !empty($_POST['mailconf']) && !empty($_POST['pseudo']) && !empty($_POST['passwd']) && !empty($_POST['passwdconf'])){
			$pseudolength = strlen($pseudo);
			if($pseudolength <= 30){
				$pseudoexisted = $bdd->prepare('SELECT * FROM espace_membres WHERE pseudo = ?');
				$pseudoexisted->execute(array($_POST['pseudo']));
				$pseudoexistedeja = $pseudoexisted->rowCount();
				if($pseudoexistedeja == 0){
					if($mail == $mailconf){
						$mailexisted = $bdd->prepare('SELECT * FROM espace_membres WHERE mail = ?');
						$mailexisted->execute(array($_POST['mail']));
						$mailexistedeja = $mailexisted->rowCount();
						if($mailexistedeja == 0){
							if($mdp == $mdpconf){
								$ajouterm = $bdd->prepare('INSERT INTO espace_membres(id,pseudo, mail, mdp) VALUES(?,?,?,?)'); 
								$ajouterm->execute(array(NULL,$_POST['pseudo'], $_POST['mail'], $_POST['passwd']));
								$erreur = "Votre compte est crée !!!";
								$lol = "lol";
							}else{
								$erreur = "Les mots de passe que vous avez entrés ne correspondent pas!!";
							}
						}else{
							$erreur = "Cette adresse mail est déjà utilisé par un autre utilisateur";
						}
					}else{
						$erreur = "Revoyez votre adresse mail en vous assurant de la confirmer correctement cette fois!!";
					}
				}else{
					$erreur = "pseudo déjà utilisé par un autre utilisateur :/";
				}
			}else{
				$erreur = "Diantre votre pseudo est bien trop long cher ami :/";
			}
		}else{
			$erreur = "Certains champs sont incomplet...";
		}
	}

 ?>
<html>
	<head>
		<title>Page d'inscription</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styleInscription.css">
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
		<hr />
		<h3>#################</h3>
		<hr /><ul>
		<li><h3>Créer un compte</h3></li></ul>
		<hr />
		<div id="inscription">
			<form method="POST" action="inscription.php">
				<table>
					<tr>
						<td><label for="mail"><strong>* Adresse mail :</strong></label></td>
					</tr>
					<tr>
						<td><input type="email" placeholder="Votre adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; } ?>"/></td>
						<td><input type="email" placeholder="Confirmez votre adresse mail" name="mailconf" value="<?php if(isset($mailconf) && ($mail == $mailconf)){ echo $mailconf; } ?>"/></td>
					</tr>
				</table>
				<br />
				<table>
					<tr>
						<td><label for="pseudo"><strong>* Pseudo :</strong></label></td>
					</tr>
					<tr>
						<td><input type="text" placeholder="Votre pseudonyme" name="pseudo" value="<?php if(isset($pseudo) && ($pseudolength <= 30)){ echo $pseudo; } ?>"/></td>
					</tr>
				</table>
				<br />
				<table>
					<tr>
						<td><label for="passwd"><strong>* Mot de passe :</strong></label></td>
					</tr>
					<tr>
						<td><input type="password" placeholder="Votre mot de passe" name="passwd"/></td>
						<td><input type="password" placeholder="Confirmez votre mot de passe" name="passwdconf"/></td>
					</tr>
				</table>
				<br />
				<input type="submit" name="jesuisinscris" value="Créer mon compte" />
			</form>
			<?php
			if(isset($erreur) && isset($lol)){
				echo '<font color="black">'.$erreur."</font>"."<a href='monCompte.php'>.Connectez-vous donc!!!</a>";
			}else if(isset($erreur)){
				echo '<font color="red">'.$erreur."</font>";
			}
			?>
		</div>
	</body>
</html>