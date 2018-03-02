<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Catégorie: <?=$detailCateg['titre']?></title>
</head>
<body>
<h1>Catégorie: <?=$detailCateg['titre']?></h1>
<p><?=$detailCateg['description']?></p>
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
