<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $article['titre'] ?></title>
</head>
<body>
<h1><?= $article['titre'] ?></h1>
<div id="menu">
    <?php
    include "vues/menu.php";
    ?>
</div>
<div id="contenu">
    <h2><?= $article['titre'] ?></h2>
    <?php

    // on coupe et on transforme en array les résultats de la requête liés aux sections
    $idcateg=explode(",",$article["idcateg"]);
    $titrecateg=explode("|||",$article["titrecateg"]);

    foreach($titrecateg AS $key => $values){
        echo "<a href='?c={$idcateg[$key]}'>$values</a>  ";
    }

    // pas d'articles
    if ($article == false) {
        echo "<h2>Cet article n'existe plus</h2>";
    } else {
            ?>
            <p><?= nl2br($article['texte']) ?></p>
            <p><?= $article['publie'] ?></p>
            <hr>
            <?php
    }
    ?>
</div>
</body>
</html>
