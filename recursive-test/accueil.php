<?php

require_once "connect.php";
require_once "Menu.class.php";

$menu = new Menu($PDO);

?>
<html>
<head>
    <title>Notre menu</title>
</head>
<body>
<h1>Menu</h1>
<div id="menu">
    <nav><?=$menu->getSortie()?></nav>
</div>
<div id="content">
    <pre><?php

        var_dump($menu->getSortie());
    var_dump($menu->getDatas());
    ?></pre>
</div>
</body>
</html>
