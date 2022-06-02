<?php
session_start();
if(isset($_GET["page"]) && $_GET["page"]=="addMember")
    $_SESSION["page"]="addMember";
else
    $_SESSION["page"]="listing";

require_once 'element/header.php';
require_once 'database/db-config.php';



$order="";
if (isset($_GET["order"]) && !is_null($_GET["order"])){
    $order="ORDER BY user_".$_GET["order"];
}


try{
    $PDO=new PDO($DB_DNS,$DB_USER,$DB_PASS,$option);
}catch (PDOException $e){
    echo "error:".$e->errorMessage();
}

$sql='SELECT * FROM user '.$order;

$request= $PDO->prepare($sql);
$request->execute();


$data_User=$request->fetchall(PDO::FETCH_ASSOC);
?>
   
   
    <div class="header">
        <p>mon bloc de list dynamique</p>
        <p>
            <button><a href="index.php?page=addMember">Add member</a></button>
            <button><a href="index.php?page=listing">list</a></button>
        </p>
          </div>

<?php
    if($_SESSION["page"]=="addMember")
        require "element/layout/addMember.php";
    else
        require "element/layout/listing.php";
    require_once "element/footer.html";
?>
