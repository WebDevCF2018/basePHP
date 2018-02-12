<?php
require "24-config.php";
// en cas d'erreur arrête le script (erreur fatale) => plus d'affichage à part cette erreur
// require "lulu.php";
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>include - include_once - require - require_once</title>
</head>
<body>
<h1>include - include_once - require - require_once</h1>
<h2>fonctions permettant de charger des autres pages php</h2>
<h3>include</h3>
<p>L'instruction de langage include inclut et exécute le fichier spécifié en argument. On peut le charger autant de X qu'on le souhaite dans la même page</p>
<p>Ne pas utiliser pour des données sensibles. Il est souvant utilisé pour charger des parties graphiques de page (menu, header, footer etc..), particulièrement si on doit les charger plusieures fois (les menus)</p>
<?php

echo "<p>$dbPort</p>";

$dbPort = 4444;

echo "<p>$dbPort</p>";

// recharge le fichier de config en écrasant les modifications éventuelles
require "24-config.php";

echo "<p>$dbPort</p>";

$dbPort = 5555;

// n'est pas chargé car chargé plus haut
require_once "24-config.php";

echo "<p>$dbPort</p>"; // reste 5555 et non 3333

include("24-menu.php");

// page qui n'existe pas avec include, le code continue a être éxécuté après l'affichage de l'erreur
include "lala.php";

?>
<hr>
<h3>include_once</h3>
<p>La structure include_once inclut et évalue le fichier spécifié durant l'exécution du script. Le comportement est similaire à include, mais la différence est que si le code a déjà été inclus, il ne le sera pas une seconde fois, et include_once retourne TRUE. Comme son nom l'indique, le fichier sera inclut une seule fois.</p>
<p>Lorsqu'on travail à plusieur, on ne sait pas nécessairement si quelq'un d'autre a déja importé le fichier, on évite ainsi les doubles inclusions</p>
<h3>require</h3>
<p>require est identique à include mis à part le fait que lorsqu'une erreur survient, il produit également une erreur fatale qui arrête le script</p>
<p>Utilisé pour les fichiers de configurations et codes indispensables (sécurité)</p>
<p>Voir avant doctype</p>
<h3>require_once</h3>
<p>L'instruction require_once est identique à require mis à part que PHP vérifie si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois.</p>
<p>A utiliser sur tous les projets d'équipe!</p>
<?php
// include, include_once, require, require_once ont des parenthèses optionelles (): fonctions qui sont devenues des structures du langage (comme print etc....)
include "24-menu.php" ;

include_once("24-footer.php");
?>
© blabla
<?php
include_once "24-footer.php";
?>
</body>
</html>
