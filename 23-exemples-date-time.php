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
// faire l'exemple précendent plus facilement
echo 'Le '.'date("d/m/Y") => Le '.date("d/m/Y")."<br>";
?>
<hr>
<h2>Temps choisi par l'utilisateur</h2>
<form name="" method="get" action="">
    <!-- ne fonctionne pour le moment que sous chrome, opera, et partiellement sous safari, utilisation d'un datetimepicker externe et compatible avec tous les navigateurs est préférable (bootstrap, jquery etc....) -->
    <input type="datetime-local" name="temps">
    <input type="submit" value="envoyer">
</form>
<hr>
<?php
if(isset($_GET['temps'])){

    // transformation de la date passée par l'utilisateur en timestamp (secondes), grâce à strtotime()
    echo $heure = strtotime ($_GET['temps']);

    // affichage du temps tapé par l'utilisateur au format datetime
    echo '<br>datetime => date("Y-m-d H:i:s",$heure) => '.date("Y-m-d H:i:s",$heure)."<br>";

    // écart en secondes entre le temps actuel et le temps entré par l'utilisateur
    echo '(time()-$heure) = '.time()."-$heure ".(time()-$heure)." => secondes<br>";

    // création d'une variable contenant la différence entre temps actuel et temps du formulaire
    $difTime = time()-$heure;
    echo "datetime de la différence en secondes (référence 01/01/1970) : ".date("Y-m-d H:i:s",$difTime);

    // donnez la différence en minutes entre les 2 temps (arrondie au plus proche)

    // donnez la différence en heures entre les 2 temps (arrondie à l'heure supérieure)

    // donnez la différence en jours, heures ET minutes (minutes arrondies à l'inférieure)

}
?>
<pre>
<?php
// debug
var_dump($_GET);
?></pre>
</body>
</html>
