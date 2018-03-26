<?php
// Initialisation de la session.
session_start();

// Détruit toutes les variables de session (données côté serveur)
$_SESSION = array();

// Si vous voulez détruire complètement la session, effacez également
// le cookie de session. (côté navigateur/utilisateur)
// Note : cela détruira la session et pas seulement les données de session !
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalement, on détruit la session. (destruction du fichier texte côté serveur)
session_destroy();

// redirection vers accueil
header("Location: ./");