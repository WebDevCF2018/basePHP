<?php
/**
 * créations de fonctions perso
 */

/*
 * fonction permettant d'additioner 2 numériques
 * 2 arguments obligatoires: doivent être numériques
 */
function addition($arg1,$arg2){
    // si les 2 variables sont bien numériques (sécurité)
    if(is_numeric($arg1) && is_numeric($arg2)){
        // calcul de l'addition dans la variable sortie
        $sortie = $arg1+$arg2;
        // envoi du résultat hors de la fonction
        return $sortie;
    }else{ // elle ne sont pas toutes 2 numériques (sécurité)
        // on envoie une erreur à la place de calculer l'addition
        return "Vos variables ne sont pas numériques";
    }
}
/*
 * fonction permettant de soustraire 2 numériques ($arg1 - $arg2)
 * 2 arguments obligatoires: doivent être numériques
 */
function soustraction($arg1,$arg2){
    // si les 2 variables sont bien numériques (sécurité)
    if(is_numeric($arg1) && is_numeric($arg2)){
        // calcul de la soustraction dans la variable sortie
        $sortie = $arg1-$arg2;
        // envoi du résultat hors de la fonction
        return $sortie;
    }else{ // elle ne sont pas toutes 2 numériques (sécurité)
        // on envoie une erreur à la place de calculer l'addition
        return "Vos variables ne sont pas numériques";
    }
}
/*
 * fonction permettant de multiplier 2 numériques ($arg1 - $arg2)
 * 2 arguments obligatoires: doivent être numériques
 */