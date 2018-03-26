<?php
session_start();
$_SESSION['chemin2']= "On est passé par la page 3";

// compteur de pages vues
if(!isset($_SESSION['hit'])){
    $_SESSION['hit']=1;
}else{
    $_SESSION['hit']++;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>titre</title>
</head>
<body>
<a href="./">Accueil</a> | <a href="page2.php">Page 2</a> | <a href="page3.php">Page 3</a> | <a href="logout.php">logout</a>
<h2>Ici on affiche des variables créées sur index.php, plus la variable "chemin"</h2>
<pre><?php
    var_dump($_SESSION);
    ?></pre>
<h3>Calcul du temps resté sur le site</h3>
<p>Différence entre le temps actuel (time()) et la variable de session "debut_connect</p>
<p><?php echo (time()-$_SESSION["debut_connect"]) ?></p>
</body>
</html>
