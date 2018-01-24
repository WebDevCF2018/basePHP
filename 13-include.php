<?php
// on va importer un fichier .php contenant nos fonctions
include "nosFonctions1.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>include</title>
</head>
<body>
<h1>include</h1>
<p>include permet d'inclure du code php depuis un fichier externe</p>
<?php
// ne fonctionnera pas car pas le bon nombre d'argument
//addition();
echo addition(7,"r");// une des variable n'est pas numérique, notre fonction nous envoie un message d'erreur
echo "<hr>";
$bon1 = addition (25,50);
echo $bon1;
echo "<hr>";
echo soustraction(15,5);
echo "<hr>";
echo soustraction(37,-8);
echo "<hr>";
echo soustraction(['tab'],-8); // erreur
echo "<hr>";
echo multiplie(10,5);
echo "<hr>";
echo multiplie("d","Bill"); // erreur
echo "<hr>";
echo multiplie(84,16);
echo "<hr>";
echo divise(10,5);
echo "<hr>";
echo divise("d","Bill"); // erreur
echo "<hr>";
echo divise(84,16);

?>
</body>
</html>
