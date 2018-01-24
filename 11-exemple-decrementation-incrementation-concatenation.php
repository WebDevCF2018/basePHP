<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>incrémentation, décrémentation, opérations et opérateurs</title>
</head>
<body>
<h1>incrémentation, décrémentation, opérations et opérateurs</h1>
<h2>Attribution</h2>
<h3>égal = | additionner avec += | soustraire de -= | multiplié par *= | divisé par /=</h3>
<?php
// on attribue une valeur avec le signe =
$a = 5;
/*
incrémentation
*/
// on peut ajouter 1 à la valeur de $a de plusieures manières:
$a = $a + 1;
echo "$a<hr>";
// on peut ajouter un numérique à la variable a en utilisant le +=
$a += 1;
echo "$a<hr>";
// on peut utiliser le symbole ++ pour ajouter 1 à la variable => incrémentation
$a++;
echo "$a<hr>";
/*
décrémentation
*/
$a = $a - 1;
$a -= 1;
$a-- ;
echo "$a<hr>";

// les autres opérations de base sont disponibles
$a = $a * 2;
$a *= 2;
echo "$a<hr>";
$a /= 2;
echo "$a<hr>";

/*
 * l'endroit où on met le ++ ou le -- change l'ordre d'affectation de la variable
 */
$b = 3;
echo $b++."<hr>"; // on ajoute 1 à $b, ne sera effectué qu'après le ;
echo "$b<hr>";// ici $b vaut 4
echo ++$b."<hr>"; // ajoute 1 $b, mais avant l'affichage 5
echo "$b<hr>";// ici $b vaut 5
?>
<h2>Concaténation</h2>
<p>On utilise ce terme lorsqu'on veut ajouter quelque chose à une chaîne de caractère</p>
<p>Le . (ou la ,) est le séparateur de concaténation</p>
<?php
$txt1 = "Bonjour";
$txt2 = "les amis!";
echo $txt1." ".$txt2."<hr>";
?>
<p>En principe, on ne peut concaténer que des chaînes de type string, mais PHP fait la conversion quand il s'agit de numériques</p>
<?php
echo $a.$txt1.$b;
?>
<h3>Opérateur de concaténation .=</h3>
<?php
$txt2 .= $txt1;
echo $txt2;
// équivaut à $txt2 = $txt2.$txt1;
?><hr>
<?php
// exemple d'utilisation du .=
$tab=["un","deux","trois","quatre"];
$sortie = "";
foreach ($tab as $lulu){
    // on met en majuscule chaque première lettre de chaque mot
    $maj = ucfirst($lulu);
    // on ajoute le résultat à sortie
    $sortie .= " $maj |";
}
echo $sortie;
?>
</body>
</html>
