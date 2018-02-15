<?php
require_once "26-connectdb.php";

// requête sql ne comptant qu'un résultat à coup sûr
$sql1 = "SELECT * FROM produit WHERE id=3 ";
$req1 = mysqli_query($db,$sql1);
$resultat1 = mysqli_fetch_assoc($req1); // en dehors d'un while, mysqli_fetch_assoc ne prend que le premier résultat

// requête sql ou on peut avoir 1 ou 0 résultat (id existe ou non)
$sql2 = "SELECT * FROM produit WHERE id=80 ";
$req2 = mysqli_query($db,$sql2);
$resultat2 = mysqli_fetch_assoc($req2); // contient 1 ou 0 résultats
// on va compter le nombre de ligne de résultat (pas de résultat: 0 , un résultat: 1)
$existe = mysqli_num_rows($req2);

// requête sql qui peut avoir 0, 1 ou plusieurs résultats
$sql3 ="SELECT * FROM produit WHERE id>5 AND id<20";
$req3 = mysqli_query($db,$sql3);
$compte = mysqli_num_rows($req3); // contient le nombre de résultats
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>titre</title>
</head>
<body>
<?php
echo '$sql1'." n'a qu'un résultat : id: ".$resultat1['id']." nom: ".$resultat1['nom']." couleur: ".$resultat1['couleur']." poids: ".$resultat1['poids'];
echo "<hr>";


// si $existe vaut true (1 => true) | $existe===1 | $existe == 1 || $existe ==true
if($existe){
    echo '$sql2'." n'a qu'un résultat : id: ".$resultat2['id']." nom: ".$resultat2['nom']." couleur: ".$resultat2['couleur']." poids: ".$resultat2['poids'];
}else{ // (0 => false)
    echo 'Article introuvable pour $sql2';
}
echo "<hr>";


echo "<h3>Nous avons $compte résultat";
if($compte>1){ echo "s";} // si plus d'un résultats, on met un s
echo "</h3>";
if($compte==0){ // si pas d'article
    echo 'Article introuvable pour $sql3';
}else { // si au moins 1 article (ou plus donc utilisation du while)
    while ($r = mysqli_fetch_assoc($req3)) {
        echo '$sql3' . " : id: " . $r['id'] . " nom: " . $r['nom'] . " couleur: " . $r['couleur'] . " poids: " . $r['poids']."<br>";
    }
}
?>
</body>
</html>
