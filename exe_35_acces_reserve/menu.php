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
<ul>
    <li><a href="./">Accueil</a></li>
    <?php
    if(!isset($_SESSION['permission'])){
        echo "<li>Pas d'autres pages accessibles</li>";
    }else {
    // tout personne connectée a accès à la page 1
    ?>
    <li><a href="pg1.php">page 1</a></li>
    <?php
    // les permissions 1 et 0 ont aussi accès aux pages 2 et 3
    if($_SESSION['permission'] < 2){
    ?>
    <li><a href="pg2.php">page 2</a></li>
    <li><a href="pg3.php">page 3</a></li>
    <?php
    }
    // seul l'admin a accès à ces pages
    if ($_SESSION['permission'] == 0){
    ?>
    <li><a href="pg4.php">page 4</a></li>
    <li><a href="pg5.php">page 5</a></li>
    <li><a href="pg6.php">page 6</a></li>
    <?php
    }
    }
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