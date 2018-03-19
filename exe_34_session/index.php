<?php

// lancement d'une session anonyme (nom par défaut: PHPSESSID), crée un fichier texte dans un dossier temporaire du serveur, et un cookie nommé PHPSESSID dans le cache du navigateur de l'utilisateur. Il y a une correspondance entre la clef se trouvant dans le cookie et le nom du fichier sur le serveur.
session_start();

// affichage de la clef de session, unique lien entre le cookie et le serveur
// echo session_id();

// on peut utiliser la session ouverte pour stocker des informations sur le serveur, qui pourront être récupérées d'une page à l'autre, du moment qu'un session_start() y soit présent

// si nous ne sommes pas encore passé sur index.php (non existence de la variable de session "debut_connect"
if(!isset($_SESSION["debut_connect"])) {
    // création de "debut_connect" avec le timestamp du premier affichage de index.php
    $_SESSION["debut_connect"] = time();
}
$_SESSION['en_memoire']= "Une phrase à la con.";

// compteur de pages vues
if(!isset($_SESSION['hit'])){
    $_SESSION['hit']=1;
}else{
    $_SESSION['hit']++;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
<a href="./">Accueil</a> | <a href="page2.php">Page 2</a> | <a href="page3.php">Page 3</a> | <a href="logout.php">logout</a>
<h2>Affichage du contenu de la session</h2>
<pre><?php
var_dump($_SESSION);
?></pre>

<h3>Calcul du temps resté sur le site</h3>
<p>Différence entre le temps actuel (time()) et la variable de session "debut_connect</p>
<p><?php echo (time()-$_SESSION["debut_connect"]) ?></p>
</body>
</html>
