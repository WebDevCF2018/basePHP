<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les fonctions utilisateur</title>
</head>
<body>
<h1>Les fonctions utilisateur</h1>
<p>PHP a un nombre important de fonctions prédéfinies, mais on peut créer ses propres fonctions, pour pouvoir effectuer des actions de manière automatisées et pouvoir les réutiliser.</p><p>!!! Il y a une différence entre structure du langage (if, else, for, echo...), les fonctions natives(renvoyant une valeur exemple ucfirts, substr...) et les procédures (fonctions ne renvoyant pas de résultat)</p>
<h2>function LeNomChoisi($arg,....){ code à exécuter;}</h2>
<?php
// création d'une fonction sans arguments, () restent obligatoires
function mafonction(){
    // return renvoie le résultat sans l'afficher et arrête le code à cette ligne
    return date("Y"); // affiche l'année actuelle en 4 chiffres
}
// appel et exécution de la fonction et affichage
$a = mafonction();
echo $a;

?>
</body>
</html>
