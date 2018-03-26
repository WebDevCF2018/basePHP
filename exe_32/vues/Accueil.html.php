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
            <?php
            // on coupe les résultats liés aux categ en les transformant en tableau indexé grâce au delimiter
            $idcateg = explode(",", $item['idcateg']);
            $titrecateg = explode("|||", $item['titrecateg']);
                echo "<h4>";
                foreach($titrecateg AS $key => $values){
                    echo "<a href='?c={$idcateg[$key]}'>$values</a> ";
                }
                echo "</h4>";
            ?>

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
