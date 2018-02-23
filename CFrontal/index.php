<?php
/**
 * front Controler
 */

require_once "config.php";

$permission = ["accueil","galerie","liens","contact","cv"];

if(isset($_GET['section'])){
    if(in_array($_GET['section'],$permission)) {
        include_once $_GET['section'].".php";
    }else{
        include_once "accueil.php";
    }
}else{
    include_once "accueil.php";
}