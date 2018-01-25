<?php
// on importe nos données au format array depuis 15-datas.php
include "15-datas.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exemple avec variables get</title>
</head>
<body>
<h1>Notre site</h1>
<h2>Exemples venant de 15-datas.php</h2>
<a href="15-get-include.php">Accueil</a> |
<?php
// tant q'on a des éléments dans le tableau $datasTitre, on récupère sa clef ($key) et sa valeur (=> $values)
foreach ($datasTitre as $key => $values){
    // on crée les liens avec la variable de type GET 'id' remplie avec la clef du tableau, et la valeur comme texte du lien
    echo "<a href='?id=$key'>$values</a> | ";
}

// condition si il n'existe pas de variable GET 'id'
if(!isset($_GET['id'])){
    echo "<h3>Page d'accueil</h3>";
}else{
    echo "<h3>".$datasTitre[$_GET['id']]."</h3>";
    // sinon on affiche le texte venant du tableau $datasTxt en utilsant la variable GET 'id' comme clef (correspondance des clefs des 2 tableaux)
    echo "<p>".$datasTxt[$_GET['id']]."</p>";
}

?>
</body>
</html>
