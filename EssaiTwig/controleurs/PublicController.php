<?php
/**
 * Contrôleur public
 */

// connexion à la db, qui est un modèle (on part de index.php => CF)
require_once "modeles/mysqliconnect.php";

// récupération de tous les "auteur" => normalement un modèle
$recup_auteurs = mysqli_query($mysqli,"SELECT * FROM auteur;");

// tableau contant tous les auteurs
$tous_auteurs = mysqli_fetch_all($recup_auteurs, MYSQLI_ASSOC);

//echo "<pre>";
//var_dump($tous_auteurs);
//echo "</pre>";

// appel de la vue
echo $twig->render("auteurs.html.twig",array("resultat"=>$tous_auteurs));
