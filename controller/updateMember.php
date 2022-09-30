<?php 
print_r($_POST);
print_r($_GET);
require_once("../core/RouterLink.php");
require_once("../core/Database.php");
require_once("../model/Member.php");
$id=$_GET["modify"];
$uri = new RouterLink();

$nom=$_POST["name"];
$prenom=$_POST["lastname"];
$pseudo=$_POST["pseudo"];
$age=$_POST["age"];
$tel=$_POST["tel"];

var_dump($id,$nom,$prenom,$pseudo,$age,$tel);

$PDO = new Member();
print_r($PDO);

$bool= $PDO->updateUser($id,$nom,$prenom,$pseudo,$age,$tel);

if($bool){
    header('location: ..'.$uri->route);
}
else{
    header('../index.php?page=UpdateMember&&error=desole , une erreur s\' est produite');
}
