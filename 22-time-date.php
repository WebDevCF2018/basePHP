<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>time() et date()</title>
</head>
<body>
<h1>time() et date()</h1>
<h2>time()</h2>
<p>time () est une fonction qui renvoie le temps du serveur au format timestamp UNIX actuel : temps en secondes depuis le premier janvier 1970</p><p>
<?php
// temps en secondes actuel
echo time();
echo "<br>";
// temps actuel en secondes il y a une minute
echo time()-60;
echo "<br>";
// temps actuel en secondes il y a une heure
echo time()-(60*60);
echo "<br>";
// temps actuel en secondes il y a 1 jour
echo time()-(60*60*24);
?></p>
<p>Permet de calculer facilement des intervals de temps</p>
<h2>date()</h2>
<p>Fonction très utilisée, permet de convertir en temps compréhensible pour un humain le timestamp (en secondes).</p>
<p>Par défault date() prend le timestamp actuel du serveur</p>
<p><a href="http://php.net/manual/fr/function.date.php" target="_blank">Liste</a> des paramètres</p>
<?php
echo date("Y-m-d H:i:s");
echo "<br>";
// idem que
echo date("Y-m-d H:i:s",time());
echo "<br>";
// temps actuel il y a une minute
echo date("Y-m-d H:i:s",(time()-60));
echo "<br>";
// temps dans 30 jours
echo date("Y-m-d H:i:s",(time()+(60*60*24*30)));

?>
</body>
</html>
