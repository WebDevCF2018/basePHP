<?php
// emxemple de résultats venant de la db pour les categ
$ti = "Permier|||Deuxième|||troisième";
$idcat = "1,3,5";
$titab = explode("|||",$ti);
$idcattab = explode(",",$idcat);
var_dump($ti,$titab,$idcat,$idcattab);
foreach ($titab AS $clef => $valeur){
    echo "<a href='{$idcattab[$clef]}'>$valeur</a> ";
}
