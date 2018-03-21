<?php
// démarage de session (ou continuation)
session_start();

// si il n'existe pas la variable de session "clef" OU que "clef" ne correspond plus à l'id de session, OU qu'on est connecté en tant qu'autre chose que admin ($_SESSION['permission']>=0 ou $_SESSION['permission']!=0)
if(!isset($_SESSION["clef"])||
    $_SESSION["clef"]!=session_id()||
    $_SESSION['permission']>0
){

    // on éjecte l'utilisateur vers index.php
    header("Location: ./");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page 5</title>
</head>
<body>
<h1>Page 5</h1>
<?php
include "menu.php";
?>
<h2>Bienvenue à <?=$_SESSION['nom']?></h2>
<h3>La permission 0 a accès à cette page</h3>
<h3>Vous avez la permission <?=$_SESSION['permission']?></h3>
<p>Il est impossible de fixer à cette école de pensée des contours précis, que ce soit en termes de dates, d’auteurs ou de thèses. Les auteurs postérieurs en ont donné des définitions différentes, incluant ou excluant certains auteurs et privilégiant certaines thèses, selon qu’ils souhaitaient présenter leurs propres positions comme en rupture avec les positions présumées « classiques » ou au contraire cohérentes avec elles.</p>
<pre>
<?php
var_dump($_SESSION);
?>
</pre>
</body>
</html>
