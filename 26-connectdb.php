<?php
// si jamais les variables de config ne sont pas encore chargées, on les charge, sinon on ne fait rien
require_once "26-config.php";

// connexion
$db = mysqli_connect($db_host,$db_login,$db_pwd,$db_name,$db_port);
// communication utf8 avec la db
mysqli_set_charset($db,$db_charset);