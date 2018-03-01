<?php
/**
 * On va "simuler" l'existence d'un objet Arti (représentation de la table arti) en utilisant des fonctions utiles pour nos contrôleurs
 */

/*
 * renvoie : array indexé contenant un tableau associatif (Array) listeArtiAccueil( variable de connexion)
 * Nous renvoie les 5 derniers articles de notre site (idarti, titre, 300 caractères de texte, publie), si pas d'articles renvoie false
 */
function listeArtiAccueil($db){
    $sql = "SELECT idarti, titre, substr(texte,1,300) AS texte, publie  
		FROM arti
        ORDER BY publie DESC
        LIMIT 5;";
    $recup = mysqli_query($db,$sql);
    // on prends le nombre de résultat(s)
    $nb = mysqli_num_rows($recup);
    // si on a au moins 1 résultat ($nb == true)
    if($nb){
        return mysqli_fetch_all($recup, MYSQLI_ASSOC);
    }else{
        return false;
    }
}