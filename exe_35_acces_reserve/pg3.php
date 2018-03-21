<?php
// démarage de session (ou continuation)
session_start();

// si il n'existe pas la variable de session "clef" OU que "clef" ne correspond plus à l'id de session, OU qu'on est connecté en tant qu'utilisateur ($_SESSION['permission']==2)
if(!isset($_SESSION["clef"])||
    $_SESSION["clef"]!=session_id()||
    $_SESSION['permission']==2
){

    // on éjecte l'utilisateur vers index.php
    header("Location: ./");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page 3</title>
</head>
<body>
<h1>Page 3</h1>
<?php
include "menu.php";
?>
<h2>Bienvenue à <?=$_SESSION['nom']?></h2>
<h3>Les permissions 0 et 1 ont accès à cette page</h3>
<h3>Vous avez la permission <?=$_SESSION['permission']?></h3>
<p>ici le contenu de la page 3 blablabla</p>
<pre>
<?php
var_dump($_SESSION);
?>
</pre>
</body>
</html>
