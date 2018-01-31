<?php
/**
 * Created by PhpStorm.
 * User: webform
 * Date: 31/01/2018
 * Time: 09:18
 */
/**
 * fonction d'addition
 */

function addition($a,$b){
    if(is_numeric($a) && is_numeric($b)){
        return $a+$b;
    }else{
        return "erreur NAN (not a number)";
    }
}
/**
 * fonction de soustraction
 */

function soustraction($a,$b){
    if(is_numeric($a) && is_numeric($b)){
        return $a-$b;
    }else{
        return "erreur NAN (not a number)";
    }
}
/**
 * fonction de multiplication
 */

function multi($a,$b){
    if(is_numeric($a) && is_numeric($b)){
        return $a*$b;
    }else{
        return "erreur NAN (not a number)";
    }
}
/**
 * fonction de division
 */

function division($a,$b){
    if(is_numeric($a) && is_numeric($b)){
        return $a/$b;
    }else{
        return "erreur NAN (not a number)";
    }
}