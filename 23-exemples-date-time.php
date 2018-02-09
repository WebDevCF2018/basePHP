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
    echo '(time()-$heure) = '.time()."-$heure => ".(time()-$heure)." => secondes<br>";

    // création d'une variable contenant la différence entre temps actuel et temps du formulaire
    $difTime = time()-$heure;
    echo "datetime de la différence en secondes (référence 01/01/1970) : ".date("Y-m-d H:i:s",$difTime)."<br>";


    // 1) donnez la différence en minutes entre les 2 temps (arrondie au plus proche)
    $min = round($difTime/60);
        // si chiffre négatif, afficher "X minutes dans le future<br>", sinon afficher "X minutes dans le passé<br>"
    if($min<0){
        // on retire le moins comme ça
        echo substr("$min minutes dans le futur<br>",1);
        // on comme ça abs() donne la valeur absolue (non négative)
        echo abs($min)." minutes dans le futur<br>";
    }else{
        echo "$min minutes dans le passé<br>";
    }


    // 2) donnez la différence en heures entre les 2 temps (arrondie à l'heure supérieure)
    $heure = ceil($difTime/(60*60));

        // si chiffre négatif, afficher "X heures dans le future<br>", sinon afficher "X heures dans le passé<br>"
    if($heure<0){
        echo abs($heure)." heures dans le futur<br>";
    }else{
        echo "$heure heures dans le passé<br>";
    }

    // 3) donnez la différence en jours, heures ET minutes (minutes arrondies à l'inférieure)

    $final=""; // conteneur de résultat de type string vide

    // si le chiffre est négatif (on est dans le futur)
    if($difTime<0){
        // date dans le futur
        $final .= "Dans ";
    }else{
        // date dans le passé
        $final .= "Il y a ";
    }

    // on met $difTime en positif quoi qu'il arrive (faciliter les calculs)
    $difTime = abs($difTime);

    /*
     * JOURS
     */
    $TotalJours = $difTime/(60*60*24);
    // on arrondit les jours à l'entier
    $jourArrondi = floor($TotalJours);

    // si $TotalJours arrondi à l'entier inférieur est plus grand que 0
    if($jourArrondi>0){
        // on rajoute les jours à $final si on en au moins 1
        $final .= $jourArrondi." jour(s), ";
        // on va soustraire les jours (arrondis à l'inférieur) convertis en secondes du total des secondes (-= => retirer à la valeur)
        $difTime -= $jourArrondi*24*60*60;
    }

    /*
     * HEURES
     */
    // total des heures restantes après retrait des jours ($difTime)
    $TotalHeures = $difTime/(60*60);
    $heureArrondi = floor($TotalHeures);
    if($heureArrondi>0){
        // on rajoute dans finale le nombre d'heures à afficher
        $final .= $heureArrondi." heure(s),";
        // on soustrait les heures (arrondies à l'inférieur) converties en secondes du total des secondes (-= => retirer à la valeur)
        $difTime -= $heureArrondi*60*60;
    }


    /*
     * MINUTES
     */
    $TotalMinutes = $difTime/60;
    $minuteArrondi = floor($TotalMinutes);

    // fin
    echo $final;
}
?>
<pre>
<?php
// debug
var_dump($_GET);
?></pre>
</body>
</html>
