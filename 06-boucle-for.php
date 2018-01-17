<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>La boucle for</title>
</head>
<body>
<h1>La boucle for</h1>
<p>Une boucle, nommée également "structure itérative", permet de répéter une portion de code un nombre déterminé ou non de fois. Une boucle doit toujours se terminer, sinon nous avons une erreur de type boucle infinie, qui prend beaucoup de ressources et ne s'arrête que lors du time out serveur.</p>
<p>La boucle for, si elle paraît complexe de prime abord, à cause de son écriture comprenant initialisation, vérification, modification, est finalement la plus efficace pour éviter les boucles infinies</p>
<?php
// pour afficher des numériques de 0 à 10
// tantque(initialisation[lue 1x au début de boucle]; condition [exécutée tant que la condition est vraie]; modification [incrémention ou décrémentation exécutée en fin de boucle])
for($i=0; $i <= 10; $i++){
    echo '$i => '."$i<br>";
}
// affichez les numériques de 100 à 66 inclus (séparateur - et espace)
for ($s =100 ; $s >= 66 ; $s--) {
    echo $s . " - ";
}


// exemple pour retirer le dernier - après 66

$sortie="";// création d'une variable vide de type string
for ($s =100 ; $s >= 66 ; $s--) {
    $sortie .= $s . " - "; // concaténation de $sortie (.=) avec le résultat de la boucle
}
echo "<hr/>";
// affichage de la variable $sortie APRES la boucle en retirant les 2 derniers caractères: substr($variable, premier caractère à afficher (int), caractères à supprimer
echo substr($sortie, 0, -2);
echo "<hr/>";

// autre exemple pour retirer le dernier - après 66 (plus de temps de calcul)

for ($s =100 ; $s >= 66 ; $s--) {
    if($s==66){
        echo $s;
    }else{
        echo $s . " - ";
    }
}















?>
</body>
</html>
