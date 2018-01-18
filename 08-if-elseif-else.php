<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les conditions if - elseif et else</title>
</head>
<body>
<h1>Les conditions if - elseif et else</h1>
<h2>La condition simple: if</h2>
<p>Vérifie si une condition est vraie (true) et exécute le code entre { }</p>
<?php
// chiffre au hasard entre 1 et 10
$hasard = mt_rand(1,10);
// si le chiffre trouvé au hasard est plus petit que 5
if($hasard<5){
    echo '$hasard est plus petit que 5 :'." $hasard<br>";
}
?>
<h2>La condition si, sinon: if and else</h2>
<p>Vérifie si une condition est vraie (true) et exécute le code entre { } SINON exécute le code entre { } du else</p>
<?php
if($hasard<5){
    echo '$hasard est plus petit que 5 :'." $hasard<br>";
}else{
    echo '$hasard est plus grand ou égal à 5 :'." $hasard<br>";
}
?>

<h2>La condition si, sinon si et sinon: if, elseif and else</h2>
<p>Vérifie si une condition est vraie (true) et exécute le code entre { }, SINON SI (elseif ou else if) une autre condition est vraie et exécute le code entre { } SINON exécute le code entre { } du else</p>
<?php
// si hasard est plus petit ou égal à 2
if($hasard <= 2){
    echo 'if $hasard est <= 2 :'." $hasard<br>";
}elseif($hasard <= 5){
    echo 'elseif $hasard est <= 5 (mais >2) :'." $hasard<br>";
}else if($hasard <= 7){
    echo 'else if $hasard est <= 7 (mais >5) :'." $hasard<br>";
}else{
    echo 'else Dans les autres cas: ($hasard est >7) :'." $hasard<br>";
}
?>


<h2>Les opérateurs de comparaison (sans le typage)</h2>
<img src="img/compa.png" alt="comparaison"/>
</body>
</html>
