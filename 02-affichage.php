<?php
/**
 * Affichage de texte en php
 */

// première méthode echo avec "" ou '' ! Il y a une différence, les '' n'interprêtent pas les variables, les "" si
echo "Coucou<br>";
echo 're-coucou<br>';

// utilisation de l'antislash \ pour protéger la chaîne et que PHP comprenne que la ligne n'est pas finie
echo "Marc m'a dit: \"Salut\"<br>";
echo 'Marc m\'a dit: "Salut"<br>';

// "echo" n'est pas sensible à la casse => ECHO
ECHO "C'est moche!<br>";

echo <<<END
Cette méthode permet d'avoir des simples ou "doubles"
guillemets sur plusieurs lignes, sans devoir s'inquiéter d'échapper ceux-ci.<br>
END;

// autre manière d'afficher: fermer les balises php et les réouvrir par la suite
?>
    <p>Ceci est de l'html non interprété.</p>
<!-- Ceci équivaut à < ?php echo "blabla";?> -->
    <p><?='blabla'?></p>

<?php
// même règles que echo
print "Affiche comme echo<br>";
// existe avec les () (comme dans java)
print("Idem<br>");















