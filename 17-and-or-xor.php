<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Opérateurs logiques</title>
</head>
<body>
<h1>Opérateurs logiques</h1>
<img src="img/operateurs-logiques.png" alt="Opérateurs logiques" /><br>
<?php
$a = 5;
$b = 10;
$c = 15;

echo "<h2>AND / &&</h2>";
echo "<p>ET => toutes les conditions doivent renvoyer true pour que la condition globale vaille true</p>";

// AND / &&
if($a<10 and $b<15){
    echo '$a<10 and $b<15 => true and true => true<br>';
}
if($a<10 && $b<15){
    echo '$a<10 && $b<15 => true && true => true<br>';
}
if($a<10 && $b<15 && $c<15){
    // non exécuté car false
}else{
    echo '$a<10 && $b<15 && $c<15 => true && true && false => false<br>';
}
echo "<h2>OR / ||</h2>";
echo "<p>OU => une seule ou plusieurs condition renvoie true, la condition est true</p>";

// OR / ||

if($a<10 or $b<15 ){
    echo '$a<10 or $b<5 => true or true => true<br>';
}
if($a<10 || $b<5 ){
    echo '$a<10 || $b<15 => true || false => true<br>';
}

echo "<h2>XOR / ^</h2>";
echo "<p>OU BIEN => une seule des conditions composées renvoie true, la condition est true </p>";
if($a<10 xor $b<5 ){
    echo '$a<10 xor $b<5 => true xor false => true<br>';
}
if($a<10 xor $b<15 ){
    // non exécuté car false
}else{
    echo '$a<10 xor $b<15 => true xor true => false<br>';
}
if($a<5 ^ $b<5 ){
    // non exécuté car false
}else{
    echo '$a<5 ^ $b<5 => false ^ false => false<br>';
}

echo "<h2>NOT / !</h2>";
echo "<p>Inversion => true devient false et/ou false devient true </p>";

if(!($a<0)){ // false transformé en true
    echo '!($a<0) => !(false) => true<br>';
}
if(!($a<20)){
    // non exécuté car false
}else{
    echo '!($a<20) => !(true) => false<br>';
}
?>
<h2>Les combinaisons</h2>
<p>On va utiliser les parenthèses () pour isoler les conditions pour une meilleur lisibilité du code (PHP ne lit plus de gauche à droite comme javascript)</p>
<?php
if($a<0 || ($a<10&& $b<20)){
    echo '$a<0 || ($a<10&& $b<20) => false OU (true ET true) = true<br>';
}

?>
</body>
</html>
