<?php
// appel du fichier de config contenant les constantes de connexion
require_once "31-config.php";

// connexion à la DB en mysqli procédural, arrêt en cas d'erreur de connexion
require_once "mysqliconnect.php";

// requête sql qui va récupérer tous les 'livre' avec le 'nom' et 'prenom' de leur 'auteur' et l' 'url' de l'image
$sql = "SELECT l.*, a.nom, a.prenom, i.url
	FROM livre l
		INNER JOIN auteur a
			ON l.auteur_idauteur = a.idauteur
		LEFT JOIN image i
			ON l.idlivre = i.livre_idlivre;";

// on effectue la requête
$recup = mysqli_query($mysqli,$sql);

// on compte le nombre de ligne de résultat
$compte = mysqli_num_rows($recup);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nos livres</title>
</head>
<body>
<h1>Nos livres</h1>
<h2><a href="31-insert-select-form.php">Insérez</a> un livre</h2>
<?php
// si on a pas encore de livre
if($compte==0){
    echo "<h3>Pas encore de livre!</h3>";
}else{
    while ($a = mysqli_fetch_assoc($recup)){
        ?>
    <h3><?=$a['titre']?></h3>
        <?php
        // si on a une image ($a['url'] est différent (!) de vide (empty))
        if(!empty($a['url'])) {
            ?>
            <img src="<?= $a['url'] ?>" width='100px' height='100px' alt=''/>
            <?php
        }
        ?>
    <p><?=$a['description']?></p>
    <p>Ecrit en <?=substr($a['parution'],0,-6)?> par <?=$a['prenom']?> <?=$a['nom']?></p>
        <?php
    }
}
?>
</body>
</html>
