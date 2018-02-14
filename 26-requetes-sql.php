<?php
// appel des variables de connexion
require_once "26-config.php";
// connexion
require_once "26-connectdb.php";


// variable contenant la requête MySQL
$sql1 = "SELECT * FROM produit";

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
// lorsque l'on pense qu'on peut avoir plus d'un résultat, on utilise la boucle while (bonne pratique)

?>
</body>
</html>
