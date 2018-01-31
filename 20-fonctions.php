<?php
/**
 * Created by PhpStorm.
 * User: webform
 * Date: 31/01/2018
 * Time: 09:18
 */
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