<?php
include "20-fonctions.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exe recap</title>
</head>
<body>
<h1>Exe recap</h1>
<h2>Formulaire avec variables get</h2>
<form action="" name="nom" method="get">
    <input name="chiffre1" type="text"  placeholder="1"> *
    <input name="chiffre2" type="text"  placeholder="1">
    <input  type="submit"  value="=">
</form>
<h3>Demande</h3>
<p>Ïncluez le fichier contenant notre fonction multi, si l'utilisateur clique sur le signe "=", affichez la réponse au calcul ci-dessous (il faut vérifier l'existence des 2 variables get pour le faire)</p><p>
<?php
// si les variables get existent (voir url)
if(isset($_GET["chiffre1"],$_GET["chiffre2"])){
    // on affiche (echo) le résultat de la fonction multi($_GET["chiffre1"],$_GET["chiffre2"])
    echo multi($_GET["chiffre1"],$_GET["chiffre2"]);
}
?></p>
</body>
</html>
