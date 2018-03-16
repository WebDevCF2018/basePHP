<?php
// votre adresse email
define("NOTRE_MAIL", "michaeljpitz@gmail.com");

// si on a cliqué sur envoyer le mail texte
if (isset($_POST['votreMail'],
    $_POST['votreTitre'],
    $_POST['votreTexte']
        )
    ) {
    // on va traîter les variables car on ne peut pas faire confiance à l'utilisateur
        // on peut utiliser filter_var avec FILTER_VALIDATE_EMAIL comme argument pour vérifier si le format du mail est validate
        $mail = filter_var($_POST['votreMail'], FILTER_VALIDATE_EMAIL);
        $title = strip_tags(trim($_POST['votreTitre']));
        $text = strip_tags($_POST['votreTexte']);

        // vérification si nos variables sont valides avant d'envoyer
    if($mail==true && !empty($title) && !empty($text)){

    // variable(s) non valide(s)
    }else{
        // création d'une variable d'erreur
        $erreur = "Champs non valides, veuillez recommencer!";
    }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'envoi de mail</title>
</head>
<body>
<h1>Formulaire d'envoi de mail</h1>
<h2>Version texte</h2>
<p>Mail au format texte envoyé vers votre email</p>
<form name="enTexte" action="" method="POST">
    <?php
    if(isset($erreur)) echo "<h3>$erreur</h3>";
    ?>
    <input type="email" name="votreMail" placeholder="Merci de rentrer votre mail" required><br/>

    <input type="text" name="votreTitre" placeholder="Intitulé" required><br/>

    <textarea name="votreTexte" placeholder="Votre message" required></textarea> <br/>

    <input type="submit" value="Envoyer">

</form>
</body>
</html>
