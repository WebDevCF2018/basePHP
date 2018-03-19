<?php
// démarage de session (ou continuation)
session_start();

// si il n'existe pas la variable de session "clef" OU que "clef" ne correspond plus à l'id de session
if(!isset($_SESSION["clef"])||$_SESSION["clef"]!=session_id()){

    // on éjecte l'utilisateur vers index.php
    header("Location: ./");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page 1</title>
</head>
<body>
<h1>Page 1</h1>
<?php
var_dump($_SESSION);
?>
</body>
</html>
