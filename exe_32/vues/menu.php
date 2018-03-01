<ul>
    <li><a href="./">Accueil</a></li>
    <?php
    foreach ($pour_menu AS $itemMenu) {
    ?>
        <li><a href="?c=<?=$itemMenu['slug']?>"><?=$itemMenu['titre']?></a></li>
    <?php
    }
    ?>
</ul>