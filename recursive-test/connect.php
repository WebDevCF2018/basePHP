<?php
define("DB_TYPE","mysql");
define("DB_HOST","localhost");
define("DB_NAME","recursive");
define("DB_PORT",3306);
define("DB_LOGIN","root");
define("DB_PWD","");
define("DB_CHARSET","utf8");

try {
    $PDO = new PDO(DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT . ";charset=" . DB_CHARSET, DB_LOGIN, DB_PWD);

    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Erreur: " . $e->getMessage();
    echo "<br>";
    echo "N° " . $e->getCode();// code erreur
    die();// arrêt du script
}


