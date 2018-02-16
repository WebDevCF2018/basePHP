<?php
/**
 * Connexion avec mysqli
 */

require_once "29-config.php";

// nous mettons l'@ pour éviter l'affichage du warning natif (qui disparaît normalement en mode production)
$db = @mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME, DB_PORT);

// si il existe une erreur de connexion
if(mysqli_connect_error($db)){
    echo "<h3>Erreur n°".mysqli_connect_errno($db)."</h3>";
    echo "<h3>Erreur: ".mysqli_connect_error($db)."</h3>";
    // on force l'arrêt du script
    die("Arrêt du script");
}

mysqli_set_charset($db,DB_CHARSET);
