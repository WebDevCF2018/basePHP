<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les constantes</title>
</head>
<body>
<h1>Les constantes</h1>
<p>En PHP procédural, une constante est une variable définie avec define(), en majuscule et sans $, directement avec sa valeur. La constante a une valeur fixe et donc non modifiable.</p>
<?php
// création de la constante COUCOU
define("COUCOU","Hello world !");

echo COUCOU;
// impossible de modifier d'aucune manière
// COUCOU = "tata";
// define("COUCOU","Yeah!");

// bonne pratique, tout en majuscule en utilisant l'"_" comme séparateur
define("UN_NOM_COMPOSE",true);
echo UN_NOM_COMPOSE;
?>
</body>
</html>
