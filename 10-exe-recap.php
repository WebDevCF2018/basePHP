<?php

/*
 *
 * Les bonnes partiques voudraient que le code n'affichant rien soit exécuté AVANT l'affichage de quoique ce soit (<!DOCTYPE html>...)
 *
 */

// initialisations de variables
$var1 = 5;
$var2 = 8;
$var3 = mt_rand(0,6);
$var4 = mt_rand(1,10);
$var5 = "Courage!";
$var6 = "vous avez presque fini";
$var7 = ["un","deux","trois"];
$var8 = true;

// variable de type tableau indexé contenant toutes les variables (voir à partir d'exe2)
$tab=[$var1,$var2,$var3,$var4,$var5,$var6,$var7,$var8];

// on compte le nombre valeurs du tableau
$nb = count($tab);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Petits exe de fin de journée</title>
</head>
<body>
<h1>Petits exe de fin de journée</h1>

<h2>Prems</h2>
<p>affichez ici les variables numériques séparées par un "-"</p>
<?php
// simple
echo "$var1 - $var2 - $var3 - $var4<br>";

// is_int vérifie le type d'une variable: renvoi true si nombre entier
if(is_int($var1)){
    echo "$var1 - ";
}
if(is_int($var2)){
    echo "$var2 - ";
}
// on peut écrire un if sans accolade, mais on le fait généralement quand on ne travail que sur une ligne (risque de ne pas bien se retrouver dans son code, ou pire, problèmes liés à la version du serveur exécutant le script)
if(is_int($var3)) echo "$var3 - ";
if(is_int($var4)) echo "$var4  ";
if(is_int($var5)) echo "$var5 - ";
// autre manière de faire un if avec : et endif
if(is_int($var6)):
    echo "$var6 - ";
endif;
if(is_int($var7)) echo "$var7 - ";
if(is_int($var8)) echo "$var8 - ";

?>
<h2>Deums</h2>
<p>Affichez ici les variables de type string concaténées entre elles et séparées par un " "</p>
<?php
// simple
echo "$var5 $var6<br>";

// simple concaténation
echo $var5." ".$var6."<br>";

// utilisation du tableau ($tab) et du nombre d'éléments dans le tableaux ($nb) contenant toutes les variables pour une boucle for (voir début de fichier)
for($i=0; $i<$nb; $i++){
    if(is_string($tab[$i])){
        echo $tab[$i]." ";
    }
}

?>
<h2>Trios</h2>
<p>Affichez ici le contenu du tableau $var7 en utilisant une boucle for, en séparant les éléments par " - "</p>
<?php

?>
<h2>Quatros</h2>
<p>Affichez ici le contenu du tableau $var7 en utilisant une boucle for, en séparant les éléments par " - ", et en supprimant le dernier " - "</p>
<?php

?>
<h2>cinquos</h2>
<p>Affichez ici le contenu de $var3 et $var4 en respectant le format suivant:<br> $var3 vaut X et $var4 vaut X. Le total des 2 fait X. La multiplication des 2 fait X </p>
<?php

?>
<h2>sextos</h2>
<p>si ($var2+$var3) est plus grand que ($var1+$var4) ALORS on affiche "YES" SINON on affiche "NO"</p>
<?php

?>
</body>
</html>
