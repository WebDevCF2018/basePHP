<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>titre</title>
</head>
<body>
<?php
$text = " L'éléphant n'aime pas le<br> même foin!&@\" <script>héhéhé</script> ";
echo"<p>";
echo $text;
echo "<hr>";
// vire les espaces avant et/ou arrières
echo trim($text);
echo "<hr>";
// vire les tags html, javascript etc..
echo strip_tags($text);
echo "<hr>";
// transforme les caractères spéciaux du texte en entité html, le ENT_QUOTES définit que le ' et " sont également transformé
echo htmlspecialchars($text,ENT_QUOTES);
echo "<hr>";
echo trim(htmlspecialchars(strip_tags($text),ENT_QUOTES));
echo "<hr>";
 $text = strip_tags($text);
 $text = htmlspecialchars($text,ENT_QUOTES);
 $text = trim($text);
 echo $text;
echo "</p>";
?>

</body>
</html>
