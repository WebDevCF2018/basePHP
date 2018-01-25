<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Variables GET</title>
</head>
<body>
<h1>Variables GET</h1>
<p>Les variables de type GET sont les variables qu'on peut observer dans les URLs: En PHP on les trouvera souvent au format http://www.facebook.com/index.php?variable1=contenu&var2=contenu2 </p>
<p>
    <a href="14-variables-GET.php">Accueil</a>
    | <a href="14-variables-GET.php?id=1">Section 1</a>
    | <a href="?id=lulu">Section 2</a>
</p>
<?php
// si il existe (isset) une variable get nommée id
if(isset($_GET['id'])){
    // pour récupérer une variable de type GET, on doit utiliser la super globale $_GET
    echo $_GET['id'];

}else{
    echo "<h3>Nous sommes sur la page d'accueil</h3>";
}
// affichage de toutes les variables GET
echo "<pre>";
var_dump($_GET); // vide si on est sur l'accueil
echo "</pre>";
?>
</body>
</html>
