<?php
	$bdd = new PDO('mysql:host=localhost;dbname=espace_membres','nadim','Baya1934');
	function lire_produits($bdd){
		$req = "SELECT * FROM Jeux";
		$res = mysqli_query($bdd, $req);
		return $res;
		//variante phphmyadmin : $res= $bdd->prepare("SELECT * FROM Jeux");
	}
?>