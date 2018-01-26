<?php
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
/*
echo multi(20,10);
echo "<br>";
echo multi('lala',10);
echo "<br>";
echo multi(5.5,-8.3);
*/