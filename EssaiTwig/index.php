<?php
/**
 * Contrôleur frontal
 */

// Import de nos constantes de configuration
require_once "config.php";

// on va charger automatiquement les bibliothèques ou frameworks grâce à l'autoload se trouvant dans vendor (dossier d'installation de composer)
require_once "vendor/autoload.php";

// Twig est donc disponible partout sur le site, on indique le chemin vers les templates (vues)
$loader = new Twig_Loader_Filesystem('vues');

// chargement de l'environnement et chemin vers le cache
$twig = new Twig_Environment($loader, array(
    'cache' => '/cache',
));

// On va chercher un contrôleur enfant, ici le Public (on est pas admin)
require_once "controleurs/PublicController.php";