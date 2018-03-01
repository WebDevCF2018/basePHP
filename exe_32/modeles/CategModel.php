<?php
/**
 * On va "simuler" l'existence d'un objet Categ (représentation de la table categ) en utilisant des fonctions utiles pour nos contrôleurs
 */

/*
 * renvoie : array indexé contenant un tableau associatif (Array) listeMenu( variable de connexion)
 * Nous renvoie les différentes rubriques dans l'ordre alphabétique de notre site (slug et titre)
 */
function listeMenu($db){
    $sql = "SELECT slug,titre FROM categ ORDER BY slug ASC;";
    $recup = mysqli_query($db,$sql) or die("Erreur chargement menu");
    // on met dans un tableau associatif tous les résultats
    $sortie = mysqli_fetch_all($recup, MYSQLI_ASSOC);
    return $sortie;
}
