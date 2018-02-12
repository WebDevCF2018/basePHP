<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>mysqli procédural</title>
</head>
<body>
<h1>mysqli procédural</h1>
<p>mysqli est une extension de PHP permettant de se connecter à une base de données de type MySQL, et d'effectuer des requêtes de tous types sur celle-ci.</p>
<p>Nous commençons avec cette extension car elle permet de coder en mode procédural ET en mode OO (Orienté objet). Elle est un intermédiaire entre l'ancienne extension "mysql" devenue obsolète, et PDO qui ne permet que l'OO</p>
<a href="http://php.net/manual/fr/mysqlinfo.api.choosing.php" target="_blank">Choisir une API (application programming interface)</a>
<?php
// on va mettre dans des variables
$db_host = "localhost"; // url serveur mysql
$db_port = 3306; // port du serveur mysql
$db_name = "commerce"; // nom de la DB
$db_login = "root"; // login de l'utilisateur
$db_pwd = ""; // mdp de l'utilisateur
$db_charset = "utf8"; // encodage (utf8 est le plus utilisé pour communiquer entre php et mysql)


// ouverture de connexion en mysqli procédural
// $mysqli = mysqli_connect("example.com", "user", "password", "database","port");
$db = mysqli_connect($db_host,$db_login,$db_pwd,$db_name,$db_port);

// on indique qu'on va utiliser l'utf8 pour la communication php/mysql (ici la table est en latin1_swedish_ci)
mysqli_set_charset($db,$db_charset);

// requête sur la database // selection de tous les champs de la table 'produit'
$query = mysqli_query($db,"SELECT * FROM produit");

$req = mysqli_query($db,"SELECT * FROM fournisseur");

// fermeture de connexion (se ferme automatiquement en fin de page si non permanente, donc peu fréquente)
mysqli_close($db);
?>
<h2>Contenu de la table 'produit'</h2>
<p>Affichage de $query avant traitement (pas formaté pour être affiché) </p>
<pre>
<?php
var_dump($query);
?></pre>
<p>Affichage des résultats sous forme de tableau associatif avec une boucle while</p>
<?php
// mysqli_fetch_assoc transforme le réultat d'une ligne en tableau associatif (relatif)
while($resultat = mysqli_fetch_assoc($query)){
    echo "id : ".$resultat['id'];
    echo " - nom : ".$resultat['nom'];
    echo " - couleur : ".$resultat['couleur'];
    echo " - poids : ".$resultat['poids'];
    echo "<hr>";

}
// idem que pour produit
echo "<table cellpadding='5px' border='1px'><tr><th>id</th><th>nom</th><th>ville</th></tr>";

while ($r = mysqli_fetch_assoc($req)){
    echo "<tr>";
    echo "<td>".$r['id']."</td>";
    echo "<td>".$r['nom']."</td>";
    echo "<td>".$r['ville']."</td>";
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>
