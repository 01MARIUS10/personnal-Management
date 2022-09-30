<?php
session_start();
require_once("core/Database.php");
require_once "core/RouterLink.php";
require_once("model/Member.php");
require_once 'database/db-config.php';

require_once 'controller/router.php';

ob_start();
require ("./view/@shared/header.php");
$header = ob_get_clean();

$PDO = new Member();
$uri = new RouterLink();

if(in_array($_SESSION["page"],$uri->allRoute)){
    if($_SESSION["page"]=="listing"){
        $data_User = $PDO->getUsers($order,$page);
    }
    ob_start();
    require "view/loan/".$_SESSION["page"]."User.php";
    $content = ob_get_clean();
    require("./view/layout.php"); 
}
else{
    require_once("view/loan/errorUser.php");
}
?>