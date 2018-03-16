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

        // création de notre entête pour que le mail soit valide (moins de chance d'arriver dans le spam)
        $entete = "From: $mail" . "\r\n" .
            "Reply-To: $mail" . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // envoie du mail au format texte dans notre boite mail
        $envoi = @mail(NOTRE_MAIL,"CF2m - ".$title, $text, $entete);
        // si envoi ok
        if($envoi){
            $message = "Votre message a bien été envoyé";
        }else{
            $message = "Echec inconnu lors de l'envoi, veuillez recommencer!";
        }

    // variable(s) non valide(s)
    }else{
        // création d'une variable d'erreur
        $message = "Champs non valides, veuillez recommencer!";
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
    if(isset($message)) echo "<h3>$message</h3>";
    ?>
    <input type="email" name="votreMail" placeholder="Merci de rentrer votre mail" required><br/>

    <input type="text" name="votreTitre" placeholder="Intitulé" required><br/>

    <textarea name="votreTexte" placeholder="Votre message" required></textarea> <br/>

    <input type="submit" value="Envoyer">

</form>
</body>
</html>
