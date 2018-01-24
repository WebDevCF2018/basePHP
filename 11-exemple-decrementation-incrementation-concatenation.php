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
?>
</body>
</html>
