<?php
/**
 * Contrôleur gérant les catégories
 */
// chargement des modeles
require_once "modeles/CategModel.php";
require_once "modeles/ArtiModel.php";

// on va récupérer la variable GET "c" et la convertir grâce à (int) en integer, si jamais on nous attaque (variable contenant du texte autre que du numérique) la conversion transformera le texte en 0
// (int) raccourci de => settype($_GET["c"], "integer");
$idcateg = (int) $_GET["c"];

// si on a tenté de nous attaquer
if($idcateg===0){
    // on redirige vers un site externe avec header("location: url d'un site")
    header("Location: https://fr.wiktionary.org/wiki/connard");
    die();
}

// var_dump($idcateg);
// on récupère le menu depuis CategModel
$pour_menu = listeMenu($mysqli);

// on récupère tous les articles de la catégories
//$articles = listeArtiCateg($mysqli);


// on prend la vue
require_once "vues/Categ.html.php";