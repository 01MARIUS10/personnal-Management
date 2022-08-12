<?php
session_start();
require_once("core/Database.php");
require_once("model/Member.php");
require_once 'database/db-config.php';


if(isset($_GET["page"]) && $_GET["page"]=="add"){
    $_SESSION["page"]="add";
} 
else{
    $_SESSION["page"]="listing";
} 
if(isset($_GET["modify"]) && !empty($_GET["modify"])){
    $_SESSION["modify"]=$_GET["modify"];
    $_SESSION["page"]="listing";
}else{
    $_SESSION["modify"]="";
} 

if (isset($_GET["order"]) && !is_null($_GET["order"])){
    $order="ORDER BY user_".$_GET["order"];
}
else{
    $order="";
}

if(isset($_GET["error"]) && !empty($_GET["error"])){
    $showError="";
    $error=$_GET["error"];
}else{
    $showError="hidden";
}

ob_start();
require ("./view/@shared/header.php");
$header = ob_get_clean();
$PDO = new Member();

if($_SESSION["page"]=="add"){
    ob_start();
    require "view/loan/addNew.php";
    $content = ob_get_clean();
}
else{
    $data_User = $PDO->getAllUserOrder($order);
    ob_start();
    require "view/loan/listing.php";
    $content = ob_get_clean();
}

require("./view/layout.php"); 
?>
