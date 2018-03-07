<?php
/**
 * On va "simuler" l'existence d'un objet Arti (représentation de la table arti) en utilisant des fonctions utiles pour nos contrôleurs
 */

/*
 * renvoie : array indexé contenant un tableau associatif (Array) listeArtiAccueil( variable de connexion)
 * Nous renvoie les 5 derniers articles de notre site (idarti, titre, 300 caractères de texte, publie), si pas d'articles renvoie false
 * 2 ) et les categ.titre clicables vers "?c="categ.idcateg pour chaque article, l'article aparaît même si il n'a pas de categ
 */
function listeArtiAccueil($db){
    $sql = "SELECT a.idarti, a.titre, SUBSTRING(a.texte,1,300) AS texte, a.publie, 
		GROUP_CONCAT(c.idcateg) AS idcateg, 
        GROUP_CONCAT(c.titre SEPARATOR '|||') AS titrecateg  
		FROM arti a
			LEFT JOIN categ_has_arti h 
				ON h.arti_idarti = a.idarti
			LEFT JOIN categ c 
				ON h.categ_idcateg = c.idcateg
		GROUP BY a.idarti
		ORDER BY a.publie DESC
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

/*
 * renvoie : array indexé contenant un tableau associatif (Array) listeArtiCateg( variable de connexion, id de la categ)
 * Nous renvoie tous les articles de notre catégorie (idarti, titre, 300 caractères de texte, publie), si pas d'articles renvoie false
 */
function listeArtiCateg($db,$idc){
    $idc = (int) $idc; // mode parano, on veut être certain que $idc ne permet pas une injection sql en le transformant en entier

    $sql = "SELECT a.idarti, a.titre, substr(a.texte,1,300) AS texte, a.publie  
		FROM arti a
        # jointure pour avoir les idcategs
        INNER JOIN categ_has_arti h
			ON h.arti_idarti = a.idarti
        # lorsque la catégorie se trouve dans la table jointure    
		WHERE h.categ_idcateg=$idc
        ORDER BY a.publie DESC
        ;";
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

/*
 * renvoie : array associatif d'un élément listeArtiComplet (variable de connexion, variable int d'article)
 * Nous renvoie l'article complet de notre site grâce à son id plus les champs idcateg et titrecateg,  ou false si pas d'article
 */
function listeArtiComplet($db,$idartic){
    $idartic = (int) $idartic;
    $sql = "SELECT  a.titre, a.texte, a.publie, 
		GROUP_CONCAT(c.idcateg) AS idcateg, 
        GROUP_CONCAT(c.titre SEPARATOR '|||') AS titrecateg  
		FROM arti a
			LEFT JOIN categ_has_arti h 
				ON h.arti_idarti = a.idarti
			LEFT JOIN categ c 
				ON h.categ_idcateg = c.idcateg
        WHERE a.idarti = $idartic
; ";
    $recup = mysqli_query($db,$sql);
    // on prends le nombre de résultat(s)
    $nb = mysqli_num_rows($recup);
    // si on a au moins 1 résultat ($nb == true)
    if($nb){
        return mysqli_fetch_assoc($recup);
    }else{
        return false;
    }
}