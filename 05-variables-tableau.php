<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Les tableaux</title>
</head>
<body>
<h1>Les tableaux</h1>
<p>Les tableaux sont des variables pouvant contenir plusieures données, et sont multi-niveaux (tableaux dans des tableaux etc...)</p>
    <h2>Les tableaux indexés</h2>
<p>Tableau dont les clefs sont automatiquement attribuées aux valeurs, en commençant à compter à 0</p>
<?php
    // méthode longue
    $tab = array("Premier","Deuxième","Troisième");
    echo "<pre>";
    var_dump($tab);

    $tab2 = ["First","Second",true,8,9.32,$tab];
    var_dump($tab2);
    echo "</pre>";
    // pour afficher des entrées (valeurs, values) de tableaux, on utilise la clef (key) correspondante
    echo $tab2[1]."<br>"; // Second
    // pour entrer dans un tableau enfant du tableau parent, on peut utiliser une suite de clefs en utilisant les [] => $var[$clef]
    echo $tab2[5][2]."<br>"; // Premier
    echo $tab2[1][2]."<br>"; // c (convertit le string en tableau)




?>
    <h2>Les tableaux relatifs</h2>
<p>Un tableau relatif fonctionne comme une tableau indexé sauf que l'on peut choisir nous même le nom des clefs<br>On choisit un numérique entier positif (int) ou une chaîne de caractère</p>
<?php

$tabAssoc = array("un"=>"premier","deux"=>"deuxième",9=>"troisème");

$tabPseudoIndex = ["premier","deuxième",5=>"troisème","quatrième","5.3"=>"cinquième",$tabAssoc,4.27,166=>0.02,true];

echo "<pre>";
var_dump($tabAssoc);
var_dump($tabPseudoIndex);
echo "</pre>";

echo $tabAssoc["deux"]."<br>";



?>
</body>
</html>