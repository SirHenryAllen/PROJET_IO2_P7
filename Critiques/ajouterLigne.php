<!DOCTYPE html>
<?php
	session_start();
	function afficher_ligneC(&$ligne){
?>
	<html>
	<br>
	<h2>Critique de <?=$ligne["publisher"]?> sur <?=$ligne["nom"]?></h2>
	<div class="cselec">
		<p style="margin-left: 12px"><strong>Note: <?=$ligne["Note"]?></strong>/20</p>
		<br>
		<p style="margin-left: 20px"><strong>Avis: </strong><?=$ligne["description"]?></p>
		<br>
		<hr>
	</div>
<?php
	}
?>
