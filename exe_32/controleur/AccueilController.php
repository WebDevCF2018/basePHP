<?php
/**
 * Contrôleur gérant la page d'accueil
 */

// chargement des modeles
require_once "modeles/CategModel.php";

// on récupère le menu depuis CategModel
$pour_menu = listeMenu($mysqli);
// var_dump($pour_menu);

// on prend la vue
require_once "vues/Accueil.html.php";