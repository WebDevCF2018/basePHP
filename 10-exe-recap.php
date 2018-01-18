<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Petits exe de fin de journée</title>
</head>
<body>
<h1>Petits exe de fin de journée</h1>
<?php
// initialisations de variables
$var1 = 5;
$var2 = 8;
$var3 = mt_rand(0,1);
$var4 = mt_rand(1,10);
$var5 = "Courage!";
$var6 = "vous avez presque fini";
$var7 = ["un","deux","trois"];
$var8 = true;
?>
<h2>Prems</h2>
<p>affichez ici les variables numériques séparées par un "-"</p>
<?php

?>
<h2>Deums</h2>
<p>Affichez ici les variables de type string concaténées entre elles et séparées par un " "</p>
<?php

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
</body>
</html>
