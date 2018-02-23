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

// requête sql permettant de récupérer tous les auteurs pour le formulaire
$sqlaut = "SELECT idauteur,nom,prenom FROM auteur
	ORDER BY nom ASC;";

// on effectue la requête
$recup_auteur = mysqli_query($mysqli,$sqlaut);

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
<h2><a href="31-select.php">Retour</a> à l'accueil</h2>
<form action="" method="post" name="lulu">
    <label>Titre: </label><input type="text" name="letitre" required><br/>
    <label>Parution: </label><input type="date" name="ladate" required><br/>
    <label>Description: </label><textarea name="ladesc" required></textarea><br/>
    <label>Auteur: </label><select name="lauteur" required>
        <?php
        while($auteur = mysqli_fetch_assoc($recup_auteur)) {
            ?>
            <option value="<?=$auteur['idauteur']?>"><?=$auteur['nom']?> <?=$auteur['prenom']?></option>
            <?php
        }
        ?>
    </select>
    <input type="submit" value="Envoyer">
    <?php
    // affiche le contenu du post que si non vide (vide par défaut)
    if(!empty($_POST)) {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }
    ?>
</form>
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
