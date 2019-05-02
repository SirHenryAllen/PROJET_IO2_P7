<?php

function afficher_entete($titre){
?>
	<html>
	<head>
		<title><?=$titre?></title>
		<meta charset="utf-8">
	</head>
	<body>
<?php
}

function afficher_pied_page(){
	echo "</body></html>";
}
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
	<div class ="Jeuxdes">
	<h3><? echo $nom;?></h3>
	<h1><?echo '<font color = "blue">'.$plate[$plateforme].'</font>'?></h1>
	<br><br>
	<img src=<?echo $image; ?> >
<?
	echo "<p> Edité par: ".$editeur.".</p>";
	echo "<p> Developpé par: ".$developpeur.".</p>";
	echo "<p> Genre :".$plat[$genre].".</p>";
	echo "<br><p><strong>Synopsis : </strong>".$description."</p>";
	echo "</div><br><hr>";
}
function page_produits($prods){
	afficher_entete("Toute La Selection");
?>
<?
	while($ligne = mysqli_fetch_assoc($prods))
		afficher_ligne($ligne);

	afficher_pied_page();
}
?>
}

