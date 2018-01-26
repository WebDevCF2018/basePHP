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
// récupération de la valeur ($value) de chaque entrée à chaque tour (itération)

    foreach (array_expression as $value){
        //commandes
    }

// récupération de la clé ($key) et de la valeur ($value) de chaque entrée à chaque tour (itération)

    foreach (array_expression as $key => $value){
        //commandes
    }</pre>
<p>La première forme passe en revue le tableau array_expression. À chaque itération, la valeur de l'élément courant est assignée à $value et le pointeur interne de tableau est avancé d'un élément (ce qui fait qu'à la prochaine itération, on accédera à l'élément suivant).</p>
<p>La seconde forme assignera en plus la clé de l'élément courant à la variable $key à chaque itération.</p>
<?php
// tableau indexé
$cookie = array("Chocolat","sucre","farine","lait",);
// tableau associatif
$muffin = [ "sucre"  => "100g",
            "farine" => "280g",
            "oeufs"  => 2,
            "lait"   => "150ml",
            "beurre" => "80g",
          ];
// foreach sans clef sur cookie (récupération valeur)
foreach ($cookie as $valeur){
    echo "$valeur | ";
}
echo "<hr>";
// foreach avec clef sur cookie (récupération clef ET valeur)
foreach ($cookie as $clef => $valeur){
    echo "$clef : $valeur | ";
}

echo "<hr>";

// foreach sans clef sur muffin (récupération valeur)
foreach ($muffin as $valeur){
    echo "$valeur | ";
}
echo "<hr>";
// foreach avec clef sur muffin (récupération clef ET valeur)
foreach ($muffin as $clef => $valeur){
    echo "$clef : $valeur | ";
}
echo "<hr>";


echo"<pre>débuggage: \n\r";
echo var_dump($cookie,$muffin)."</pre>";
?>
</body>
</html>
