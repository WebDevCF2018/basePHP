<?php
// appel des variables de connexion
require_once "26-config.php";
// connexion
require_once "26-connectdb.php";


// variable contenant la requête MySQL
$sql1 = "SELECT * FROM produit WHERE id BETWEEN 3 AND 6";

// exécution de la requête
$query1 = mysqli_query($db,$sql1);

// fermeture de connexion
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>sur commerce</title>
</head>
<body>
<?php
// lorsque l'on pense qu'on peut avoir plus d'un résultat, on utilise la boucle while (bonne pratique) - il liste le résultat et le transforme en tableau associatif (dans la variable $ligne), puis passe à ligne suivante et répète l'action tant qu'on a des résultats

while($ligne = mysqli_fetch_assoc($query1)){
    echo "<p>id: {$ligne['id']} | nom: {$ligne['nom']} | couleur: {$ligne['couleur']} | poids: {$ligne['poids']}</p>";
}
?>
</body>
</html>
