<?php
session_start();

// variables sous forme de tableaux pour se connecter
$login=["admin","modo","Pierre","Joseph"];
$pwd = ["admin", "modo3", "Pierre","lulu"];
$perm = [0,1,2,2];

// si on a cliqué sur connexion (existence des 2 variables post)
if(isset($_POST['lelogin'],$_POST['lepwd'])){

    // pseudo sécurité (pas de db)
    $lelogin = trim($_POST['lelogin']);
    $lepwd = trim($_POST['lepwd']);

    // si le $lelogin est bien dans le tableau $login => utilisateur existant => in_array >> est une valeur dans le tableau
    if(in_array($lelogin,$login)){

        // on met dans la variable clef celle correspondant aux 3 tableaux pour vérifier le mdp
        $key = array_search($lelogin,$login);

        // le mdp correspond au login
        if($lepwd == $pwd[$key]){

            // création de nos variables de session
            $_SESSION['clef'] = session_id(); // id de session dans "clef"
            $_SESSION['nom'] = $lelogin;
            $_SESSION['permission'] = $perm[$key];

            // redirection vers l'accueil
            header("Location: ./");

        }else{
            $affiche = "Mot de passe incorrecte";
        }

    }else{
        $affiche = "Login inconnu!";
    }

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<h1>Connexion</h1>
<?php
include "menu.php";
?>
<form action="" name="connect" method="post">
    <?php
    if(isset($affiche)) echo "<h3 style='color: #ff0000;'>$affiche</h3>";
    ?>
    <input type="text" name="lelogin" placeholder="votre login" required>
    <input type="password" name="lepwd" placeholder="votre mdp" required>
    <input type="submit" value="connexion">
</form>
<h2>admin</h2>
<h3>Login : admin</h3>
<h3>PWD : admin</h3>
<h2>modo</h2>
<h3>Login : modo</h3>
<h3>PWD : modo3</h3>
<h2>util1</h2>
<h3>Login : Pierre</h3>
<h3>PWD : Pierre</h3>
<h2>util2</h2>
<h3>Login : Joseph</h3>
<h3>PWD : lulu</h3>
<?php

?>
</body>
</html>
