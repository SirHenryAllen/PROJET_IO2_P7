<!DOCTYPE html>

<?php
                        
                    function afficher_ligne(&$ligne){
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
                        $plat[17]="Autre...";

                        $plate[1]="PC";
                        $plate[2]="PS4";
                        $plate[3]="XBOX ONE";
                        $plate[4]="PS3";
                        $plate[5]="XBOX 360";
                        $plate[6]="PS2";
                        $plate[7]="XBOX";
                        $plate[8]="Autre";

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
                    ?>
                        <html>
                        <br>
                        <div class=jselec>
                            <h2><strong><?=$nom?></strong></h2>
                            <img src="<?=$image?>" alt= "imj">
                            <p><strong>Plateforme de sortie : </strong><?php echo $plate[$plateforme] ?></p>
                            <br>

                <?php
                        echo "<p><strong> Edité par : </strong>".$editeur.".</p>";
                        echo "<p><strong> Developpé par : </strong>".$developpeur.".</p>";
                        echo "<p><strong> Genre : </strong>".$plat[$genre].".</p>";
                        echo "<br><p><strong>Synopsis : </strong>".$description."</p>";
                        echo "<p><strong>Date de Sortie : </strong>".$jour."/".$mois."/".$annee."</p>";
                        echo "</div><br><hr>";
                    }
                    
                ?>