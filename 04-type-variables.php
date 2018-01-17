<?php
/**
 * Types de variables
 */

// on peut afficher de l'html depuis PHP et inversément
echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">";
?>
<title>Les types de variables</title>
</head>
<body>
<h1>Les types de variables</h1>
<h2>Les chaînes de caractère - String ou str</h2>
<p>Les chaînes de caractère permettent de mettre du texte de n'importe quel type et de n'importe quelle longueur dans une variable</p>
<?php
$string = "<p>Ici une chaîne de caractère</p>";
echo $string;
$str2 = 'Une autre chaîne';

// affichage ligne par ligne
echo '<p>';
echo $str2;
echo "</p>";

// affichage en une ligne avec interprétation de variable =>""
echo "<p>$str2</p>";
echo '<p>$str2</p>'; // non interprétée

// ou concaténation (le . en php, ou la virgule)
echo '<p>'.$str2."</p>";

$str3 = "557"; // type string car " ou '

// débuggage
var_dump($str3);

?>
<h2>Les numériques</h2>
<h3>Les entiers - integer ou int</h3>
<?php
$int = 51;
$int2 = -18;
$int3 = 0;
var_dump($int,$int2,$int3);
?>
<h3>Les nombres à virgules - float</h3>
<?php
$float = 5.23;
$float2 = -16.31975;
$float3 = 0.0000015;
var_dump($float,$float2,$float3);
?>
<h2>Les booléens - boolean bool</h2>
<p>Variable binaire (qui n'a que 2 position): true ou false. </p>
<?php
$bool = true;
$bool2 = false;
$bool3 = TRUE;
var_dump($bool,$bool2,$bool3);
// Affichage true => 1 et false ne renvoie rien
echo "<hr>".$bool."<hr>".$bool2."<hr>";
?>
</body>
</html>