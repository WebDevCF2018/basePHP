<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'envoi de mail</title>
</head>
<body>
<h1>Formulaire d'envoi de mail</h1>
<h2>Version texte</h2>
<p>Mail au format texte</p>
<form name="enTexte"  action="" method="POST">

    <input type="email" name="votreMail" placeholder="Merci de rentrer votre mail" required><br/>

    <input type="text" name="votreTitre" placeholder="Intitulé" required><br/>

    <textarea name="votreTexte" placeholder="Votre message" required></textarea> <br/>

    <input type="submit" value="Envoyer">

</form>
</body>
</html>
