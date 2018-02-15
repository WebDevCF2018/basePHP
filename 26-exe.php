<?php
require_once "26-connectdb.php";
$sql="SELECT nom,ville FROM client ORDER BY nom ASC";
$requete=mysqli_query($db,$sql);
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exe</title>
</head>
<body>
<h1>exe</h1>
<p>Chargez en utilisant comme modèle "26-requetes-sql", tous les "client" (nom et ville) se trouvant dans "commerce" par leur "nom" ascendant</p>
<table border="1px" cellpadding="5">
    <tr>
        <th>Client</th>
        <th>Ville</th>
    </tr>
<?php
 // et affichez ici le "nom" et la "ville" (pas l'id!)
while ($ligne = mysqli_fetch_assoc($requete)){
    echo "<tr><td>";
    echo $ligne["nom"]."</td><td>".$ligne["ville"]."</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
