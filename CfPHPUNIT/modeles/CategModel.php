<?php
/**
 * On va "simuler" l'existence d'un objet Categ (représentation de la table categ) en utilisant des fonctions utiles pour nos contrôleurs
 */

/*
 * renvoie : array indexé contenant un tableau associatif (Array) listeMenu( variable de connexion)
 * Nous renvoie les différentes rubriques dans l'ordre alphabétique de notre site (idcateg et titre)
 */
function listeMenu($db){
    $sql = "SELECT idcateg,titre FROM categ ORDER BY slug ASC;";
    $recup = mysqli_query($db,$sql) or die("Erreur chargement menu");
    // on met dans un tableau associatif tous les résultats
    $sortie = mysqli_fetch_all($recup, MYSQLI_ASSOC);
    return $sortie;
}
/*
 * renvoie : array associatif d'un élément ------ (variable de connexion, variable int de catégorie)
 * Nous renvoie la rubrique de notre site grâce à son idcateg (titre et description)  ou false si pas de categ
 */
function recupCategInfo($db,$id){
    $id = (int) $id;
    $sql = "SELECT titre, description 
			FROM categ
            WHERE idcateg = $id;";
    $recup = mysqli_query($db,$sql);
    $nb = mysqli_num_rows($recup); // 1 ou 0
    if($nb){
        return mysqli_fetch_assoc($recup);
    }else{
        return false;
    }
}