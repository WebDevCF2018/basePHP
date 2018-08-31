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
    <nav></nav>
</div>
<div id="content">
    <pre><?php
    var_dump($menu->getDatas());
    ?></pre>
</div>
</body>
</html>
