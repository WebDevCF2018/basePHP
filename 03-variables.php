<?php
/**
 * Les variables
 *
 * En PHP les variables commencent toujours par le signe $ suivi de lettres non accentuées ou l'underscore ( _ ) ($_mavariable), elles sont sensibles à la casse ($lulu != $Lulu).
 */

// sensible à la casse
$a25 = 1;
$A25 = 2;

$_lulu = 5; // autorisé mais non conseillé (indique qqchose en OO)

$lécole = 9; // A EVITER car cela dépend des règlages du serveur wamp, par principe nous n'utiliserons jamais de caractères accentués ou spéciaux
$cou_couLesAmis = 18; // OK
$echo = 9;


// on ne peut pas commencer le nom de variable par un chiffre
// $25a = 1;
// Le tiret est un caractère spécial (soustraction)
// $ma-maison = 5;
// pas d'espaces ni " etc....
// $pas d'espace = 7;

echo $a25,$A25,$_lulu,$lécole,$cou_couLesAmis;