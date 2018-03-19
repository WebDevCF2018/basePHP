<ul>
    <li><a href="./">Accueil</a></li>
    <li><a href="pg1.php">page 1</a></li>
    <li><a href="pg2.php">page 2</a></li>
    <li><a href="pg3.php">page 3</a></li>
    <li><a href="pg4.php">page 4</a></li>
    <li><a href="pg5.php">page 5</a></li>
    <li><a href="pg6.php">page 6</a></li>
    <?php
    // si il n'existe pas de variable de connexion
    if (!isset($_SESSION["clef"])) {

        // lien pour se connecter
        echo '<li><a href="login.php">Connexion</a></li>';

    // sinon il existe une connexion
    } else {

        // lien pour se déconnecter
        echo '<li><a href="logout.php">Déconnexion</a></li>';
    }
    ?>
</ul>