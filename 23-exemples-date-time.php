<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exemples de la fonction date</title>
</head>
<body>
<h1>Exemples de la fonction date</h1>
<h2>Temps serveur - time()</h2>
<hr>
<?php
// time() - temps en secondes du serveur depuis le 01/01/1970 (UNIX)
echo 'time() => '.time()." secondes depuis le 01/01/1970<br>";

// datetime (format informatique courant permettant une gestion de classement facilitée dans une db)
echo 'datetime => date("Y-m-d H:i:s") => '.date("Y-m-d H:i:s")."<br>";

// date jour en anglais
echo 'date("l") => '.date("l")."<br>";

// date mois en anglais
echo 'date("F") => '.date("F")."<br>";

// nombre de jour dans le mois actuel
echo 'date("t") => '.date("t")."<br>";
// heure format england
echo 'date("g a") => '.date("g a")."<br>";
// date format français, les antislashs permettent de ne pas interpréter les caractères
echo 'date("\L\\e d/m/Y") => '.date("\L\\e d/m/Y")."<br>";
// faire l'exemple précendent plus facilemeni
echo 'Le '.'date("d/m/Y") => Le '.date("d/m/Y")."<br>";
?>
<hr>
<h2>Temps choisi par l'utilisateur</h2>
<form name="" method="get" action="">
    <!-- ne fonctionne pour le moment que sous chrome, opera, et partiellement sous safari, utilisation d'un datetimepicker externe et compatible avec tous les navigateurs est préférable (bootstrap, jquery etc....) -->
    <input type="datetime-local" name="temps">
    <input type="submit" value="envoyer">
</form>
<pre>
<?php
// debug
var_dump($_GET);
?></pre>
</body>
</html>
