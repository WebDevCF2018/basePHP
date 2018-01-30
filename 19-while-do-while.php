<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les boucles</title>
</head>
<body>
<h1>for</h1>
<h3>Boucle la complexe en PHP, elle est principalement utilisée pour des énumérations (pagination, numéro de ligne etc...). Sa complexité lui permet paradoxalement d'éviter les erreurs de type 'boucle infinie'.</h3>
<pre>
for(initialisation de variable pour la boucle;
    tant que condition==true;
    modification de la variable initialisée){
        exécution du code (! la boucle infinie n'est pas autorisée)
}
</pre>
<?php
for($i=1;$i<=10;$i++){
    echo "$i | ";
}
// fonctionne bien pour un tableau indexé (mais pas associatif!), bien que le foreach soit préférable.
?>
<h1>while</h1>
<h3>Boucle la moins complexe en PHP, paradoxalement c'est la boucle où on fait le plus souvent des erreurs de syntaxes. On utilise souvant le while pour des vérifications de valeurs (ou résultats) non numériques</h3>
<h4>s'exécute tant que la ou les conditions sont vraies</h4>
<pre>
while(tant que condition==true){
    exécution du code (! la boucle infinie n'est pas autorisée)
}
</pre>
<?php
// initialisation
$i=1;
// s'exécute tant que la condition renvoie true
while($i<=10){
    echo "$i | ";
    // incrémentation obligatoire pour ne pas avoir de boucle sans fin
    $i++;
}
echo "<hr>";
// on utilise souvant le while pour des vérifications de valeurs (ou résultats) non numériques
$a = false; $b = false; $c = true;
echo "$a $b $c<br>";
while($c==true && $b==false){
    if($a==false){
        $a = true;
    }else{
        $b = true;
    }
    echo "$a $b $c<br>";
}
?>
<h1>do while</h1>
<h3>Variante du while, sauf que le premier tour de boucle est toujours exécuté même si le while nous indique false</h3>
<h4>Utile si on veut exécuter la boucle au moins une fois, ce qui est plus rare en php que dans des langages comme le c</h4>
<?php
$a = 0;
// exemple while
while($a>=1 && $a< 10){
    // ne s'exécutera jamais ($a est plus petit que 1)
    $a++;
}

$b=0;
do{
    // exécute cette ligne (grâce au do) même le while qui suit est faux
    echo "$b | ";
}while($b>=1 && $b< 10);

echo "<hr>";

$c=0;
do{
    // exécute cette ligne (grâce au do) même le while qui suit est faux
    echo "$c | ";
    $c++;
}while($c>=1 && $c< 10);

?>
</body>
</html>
