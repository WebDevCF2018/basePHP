<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>switch</title>
</head>
<body>
<h1>switch</h1>
<p>L'utilisation d'un switch peut effectuer le même travail qu'une succession de if, elseif et de else. Le switch ne fonctionne que pour vérifier l'égalité de la valeur d'une seule variable (if elseif et else restent indispensables pour d'autres cas)</p>
<pre>
// switch(variable a tester)
switch ($var){
    // vérifie si la variable vaut "bonjour"
    case "bonjour":
        // qqchose
        break; // fin de ligne
    // autre vérification de la même variable
    case "les":
        // qqchose
        break;
    case "amis":
        // qqchose
        break;
    // si $var ne correspond à aucun des "case", action par défaut (default => else)
    default:
        // qqchose
}
</pre>
<?php
$var = "amis";

switch ($var){
    case "bonjour":
        // qqchose
        break;
    case "les":
        // qqchose
        break;
    case "amis":
        // qqchose => s'exécute dans ce cas
        echo '$var vaut '.$var;
        break;
    default:
        // qqchose
}


// sans le switch il faut une succession de if, elseif (else if) et else
if($var=="bonjour"){
    // qqchose
}else if ($var=="les"){
    // qqchose
}elseif ($var=="amis"){
    // qqchose => s'exécute dans ce cas
    echo '$var vaut '.$var;
}else{
    // qqchose
}
?>
</body>
</html>
