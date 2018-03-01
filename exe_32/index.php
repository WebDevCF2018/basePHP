<?php
/**
 * Contrôleur frontal
 */

// appel du fichier de configuration
require_once "mysqliconfig.php";

// appel du modèle contenant une connexion mysql nécessaire à toutes les pages => $mysqli
require_once "modeles/mysqliconnect.php";

// notre contrôleur frontal va effectuer le travail de routeur "racine"

// pas de variables GET => Accueil

if(empty($_GET)){
    require_once "controleur/AccueilController.php";

// sinon si il existe une variable GET qui s'apelle c => catégorie

}elseif(isset($_GET['c'])){
    require_once "controleur/CategorieController.php";

// sinon si il existe une variable GET qui s'apelle a => article

}elseif (isset($_GET['a'])){
    require_once "controleur/ArticleController.php";

// sinon (existence d'une autre autre variable get que celles attendues) => Accueil
}else{
    require_once "controleur/AccueilController.php";
}