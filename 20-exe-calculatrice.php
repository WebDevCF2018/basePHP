<?php
include "20-fonctions.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>
<h1>Calculatrice</h1>
<h2>Formulaire avec variables get</h2>
<form action="" name="nom" method="get">
    <input name="chiffre1" type="text"  placeholder="1"
        value="<?php
        // si il existe la variable GET chiffre1 (on a envoyé le formulaire)
        if(isset($_GET['chiffre1'])){
            // on affiche dans le value html le contenu de chiffre1
            echo $_GET['chiffre1'];
        } ?>">

    <?php
    // si on a envoyé le formulaire
    if(isset($_GET['operateur'])){
        // initialisation de variables vides pour garder l'opérateur selectionné
        $a="";$s="";$m="";$d="";

        // si addition
        if($_GET['operateur']=="addition"){
            // on remplit la variable pour rajouter 'selected' à l'option
            $a="selected";
        }elseif ($_GET['operateur']=="soustraction"){
            $s="selected";
        }elseif ($_GET['operateur']=="multiplication"){
            $m="selected";
        }else{
            $d="selected";
        }
    }
    ?>
    <select name="operateur">
        <option value="addition" <?php echo $a;?>>+</option>
        <option value="soustraction" <?=$s?>>-</option>
        <option value="multiplication" <?=$m?>>*</option>
        <option value="division" <?=$d?>>/</option>
    </select>
    <input name="chiffre2" type="text"  placeholder="1"
    value="<?php if(isset($_GET['chiffre2'])) echo $_GET['chiffre2'] ?>">
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
