<?php
class Page{
    public static  $allRoute=["listing","add"];
}

if(isset($_GET["page"]) && in_array($_GET["page"],Page::$allRoute)){
    $_SESSION["page"]=$_GET["page"];
}
else{
    $_SESSION["page"]="listing";
}

if (isset($_GET["page"]) && !empty($_GET["page"])){
    $page=(int)$_GET["page"];
}
else{
    $page=1;
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
    $error="";
}