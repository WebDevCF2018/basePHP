<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil du site</title>
</head>
<body>
<h1>Accueil</h1>
<div id="menu">
    <?php
    include "vues/menu.php";
    ?>
</div>
<div id="contenu">
    <?php


    // pas d'articles
    if ($articles == false) {
        echo "<h2>Pas encore d'articles!</h2>";
    } else {
        foreach ($articles AS $item) {
            ?>
            <h3><a href="?a=<?= $item['idarti'] ?>"><?= $item['titre'] ?></a></h3>
            <!-- ici le foreach pour les categ -->
            <h4><a href="?c=1">Categ1</a> - <a href="?c=2">Categ2</a></h4>
            <p><?= $item['texte'] ?> ... <a href="?a=<?= $item['idarti'] ?>">Lire la suite</a></p>
            <p><?= $item['publie'] ?></p>
            <hr>
            <?php
        }
    }
    ?>
</div>
</body>
</html>
