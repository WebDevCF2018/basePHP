<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les boucles</title>
</head>
<body>
<h1>for</h1>
<h3>Boucle la complexe en PHP, elle est principalement utilisée pour des énumérations (pagination, numéro de ligne etc...). Sa complexité lui permet paradoxalement d'éviter les erreurs de type 'boucle infinie'.</h3>
<pre>
for(initialisation de variable pour la boucle;
    tant que condition==true;
    modification de la variable initialisée){
        exécution du code (! la boucle infinie n'est pas autorisée)
}
</pre>
<?php
for($i=1;$i<=10;$i++){
    echo "$i | ";
}
// fonctionne bien pour un tableau indexé (mais pas associatif!), bien que le foreach soit préférable.
?>
<h1>while</h1>
<h3>Boucle la moins complexe en PHP, paradoxalement c'est la boucle où on fait le plus souvent des erreurs de syntaxes.</h3>
<h4>s'exécute tant que la ou les conditions sont vraies</h4>
<pre>
while(tant que condition==true){
    exécution du code (! la boucle infinie n'est pas autorisée)
}
</pre>
<?php
// initialisation
$i=1;
// s'exécute tant que la condition renvoie true
while($i<=10){
    echo "$i | ";
    // incrémentation obligatoire pour ne pas avoir de boucle sans fin
    $i++;
}
?>
</body>
</html>
