<?php
require_once "29-config.php";
require_once "29-connectdb.php";

// on va vérifier si le formulaire a bien été envoyé (existence des variables nécessaires de type post)
if(isset($_POST['monTitre'])
    && isset($_POST['monTexte'])
    && isset($_POST['monAuteur'])
    ){
    /* on va créer des variables locales où on va stocker
    les variables POST protégées contre les attaques de type
     sql */
        // on retire les tags html et javascript
        $letitre = strip_tags($_POST['monTitre']);
        // convertit le texte en entités html, le ENT_QUOTES
        $letitre = htmlspecialchars($letitre,ENT_QUOTES);
        // on retire les espaces vides devant et derrière la chaîne de caractère
        $letitre = trim($letitre);

        $letexte = trim(htmlspecialchars(strip_tags($_POST['monTexte']),ENT_QUOTES));
        $lauteur = trim(htmlspecialchars(strip_tags($_POST['monAuteur']),ENT_QUOTES));
}

// requête sql sélectionnant tous les articles
$sql = "SELECT * FROM article ORDER BY id DESC";

// exécution de la requête
$recup = mysqli_query($db,$sql);

// on compte le nombre de résultat
$nb_recup = mysqli_num_rows($recup);



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Article</title>
</head>
<body>
<h1>Nos articles</h1><hr>
<h2>Formulaire</h2>
<form action="" method="post" name="onsenfout">
    <input type="text" name="monTitre" placeholder="Votre titre" required><br>
    <textarea name="monTexte" required></textarea><br>
    <input type="text" name="monAuteur" placeholder="Votre nom" required>
    <input type="submit" value="Envoyer">
</form>
<hr>
<h2>Nos articles</h2>
<?php
// si $nb_recup == false | $nb_recup === 0
if(!$nb_recup){
    echo "<h3>Pas encore d'article!</h3>";
// on a au moins 1 article
}else{
    while($row = mysqli_fetch_assoc($recup)){
        echo "<h4>{$row['titre']}</h4>";
        echo "<p>{$row['texte']}</p>";
        echo "<h5>Par ".$row['auteur']." le ".$row['temps']."</h5><hr>";
    }
}
?>
</body>
</html>
