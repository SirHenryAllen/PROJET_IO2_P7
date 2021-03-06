<!DOCTYPE html>
<?php
	session_start();
	$bdd=new PDO('mysql:host=localhost;dbname=espace_membres','nadim','Baya1934');
	if(isset($_SESSION['id'])){
		header('Location: profil.php?id='.$_SESSION['id']);
	}else{
		if(isset($_POST['formconnexion'])){
			$pseudoconnect = $_POST['pseudo'];
			$mdpconnect = $_POST['mdp'];
			if(!empty($pseudoconnect) && !empty($mdpconnect)){
				$requser = $bdd->prepare("SELECT * FROM espace_membres WHERE pseudo = ? AND mdp = ?");
				$requser->execute(array($pseudoconnect, $mdpconnect));
				$userexist = $requser->rowCount();
				if($userexist == 1){
					$userinfo = $requser->fetch();
					$_SESSION['id'] = $userinfo['id'];
					$_SESSION['pseudo'] = $userinfo['pseudo'];
					$_SESSION['mail'] = $userinfo['mail'];
					header('Location: profil.php?id='.$_SESSION['id']);
				}else{
					$erreur = "Pseudo ou Mot de passe incorrect";
				}
			}else{
				$erreur = "Tous les champs doivent être complétés !";
			}
		}
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Se connecter aux 80's</title>
		<link rel="stylesheet" href="styleMonCompte.css">
	</head>
	<body class="barre">
		<nav>
			<ul>
				<li class="list-home"><a href="../Index.php"><img id="home" src="../Images_CSS/CSS.png"></a>
				</li>	
				</li>
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="../Jeux/Selection/Selection.php">Toute la selection</a></li>
						<li><a href="../Jeux/Recenser/Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="#">Articles</a>
					<ul class="sousliste">
						<li><a href="../Communaute/Article/Article.php">Tous vos articles</a></li>
						
					</ul>
				</li>
				<li class="list-Critiques"><a href="../Critiques/critiques.php">Critiques</a>
				</li>
				<li class="list-Forum"><a href="Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="#">Communauté</a>
					<ul class="sousliste">
						<li><a href="../Communaute/Article/Article.php">Vos Articles</a></li>
						<li><a href="../Critiques/critiques.php">Vos Critiques</a></li>
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
								<input type="password" placeholder="Votre Mot de passe" name="mdp" />
							</td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="formconnexion" value="Se connecter"/>
							</td>
						</tr>
					</table>
				</form>
				<p>
					Vous n'êtes toujours pas inscrit? <a href="inscription.php">Rejoignez-nous dès à present !!</a>
				</p>
				<br/>
				<?php 
					if(isset($erreur)){
						echo '<font color="red">'.$erreur.'</font>';
					}
				?>
			</div>
		</div>
	</body>

</html>