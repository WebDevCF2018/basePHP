<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>foreach</title>
</head>
<body>
<h1>foreach()</h1>
<p>La structure de langage foreach fournit une façon simple de parcourir des tableaux. foreach ne fonctionne que pour les tableaux et les objets, et émettra une erreur si vous tentez de l'utiliser sur une variable de type différent ou une variable non initialisée. Il existe deux syntaxes :</p>
<pre>
    foreach (array_expression as $value){
        //commandes
    }
    foreach (array_expression as $key => $value){
        //commandes
    }</pre>
<p>La première forme passe en revue le tableau array_expression. À chaque itération, la valeur de l'élément courant est assignée à $value et le pointeur interne de tableau est avancé d'un élément (ce qui fait qu'à la prochaine itération, on accédera à l'élément suivant).</p>
<p>La seconde forme assignera en plus la clé de l'élément courant à la variable $key à chaque itération.</p>
<?php

?>
</body>
</html>
