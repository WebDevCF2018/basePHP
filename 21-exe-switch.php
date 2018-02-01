<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>exe switch</title>
</head>
<body>
<h1>exe switch</h1>
<h2>Liste de mots acceptés</h2>
<h3>haha | lulu | triste | jovial</h3>
<form action="" name="monForm" method="get">
    <input type="text" name="q" placeholder="Entrez un mot">
    <input type="submit" value="Envoyer">
</form>
<h4>En utilisant les variables GET et le switch</h4>
<p>Affichez ci-dessous :</p><hr>
<p><?php
// si il existe la variable de type GET (url) nommée q (page.php?q=5)
if(isset($_GET['q'])){
    // on va utiliser un switch pour vérifier la valeur de cette variable
    switch($_GET['q']){
        case "haha":
            echo "Qu'est-ce qui te fait rire?";
            break;
        case "lulu":
            echo "lala?";
            break;
        case "triste":
            $s = "";
            for($i=1;$i<=200;$i++){
                $s .= "$i | ";
            }
            
            echo substr($s,0,-2);
            break;
        case "jovial":
            // format datetime()
            echo date("Y-m-d H:i:s");
            break;
        default:
            echo $_GET['q']." n'est pas dans la liste";

    }
}
?></p><hr>
<p>Si l'utilisateur entre quelque chose qui n'est pas dans la liste, affichez $letexte." n'est pas dans la liste".</p>
<p>Si l'utilisateur entre "haha", affichez "Qu'est-ce qui te fait rire?"</p>
<p>Si l'utilisateur entre "lulu", affichez "lala?"</p>
<p>Si l'utilisateur entre "triste", affichez des numériques de 1 à 200 séparés par un " | "</p>
<p>Si l'utilisateur entre "jovial", affichez la date et l'heure actuelle au format (Y-m-d H:i:s => 2018-02-01 12:28:15)</p>
<pre><?php
var_dump($_GET);
?></pre>
</body>
</html>
