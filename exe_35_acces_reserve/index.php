<?php
// ouverture d'une session (pas valide pour autant)
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
<h1>Accueil</h1>
<?php
include "menu.php";
?>
<h3>Accès index.php</h3>
<p>Tout le monde a accès à la page d'accueil</p>
<h3>Accès à login.php</h3>
<p>Toute personne non connectée a accès à login.php</p>
<h3>Accès à logout.php</h3>
<p>Toute personne connectée a accès à logout.php</p>
<h2>Accès suivant les niveaux</h2>
<h3>Admin</h3>
<h4>$_SESSION['permission']==0</h4>
<p>Accès à toutes les pages p1 à p6</p>
<hr>
<h3>Modo</h3>
<h4>$_SESSION['permission']==1</h4>
<p>Accès à toutes les pages p1 à p3</p>
<hr>
<h3>Utilisateur</h3>
<h4>$_SESSION['permission']==2</h4>
<p>Accès à la page p1</p>
<hr>
<pre>
<?php
var_dump($_SESSION);
?></pre>
</body>
</html>
