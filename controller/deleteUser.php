<?php 
print_r($_POST);
print_r($_GET);
require_once("../core/Database.php");
require_once("../model/Member.php");
$id=$_GET["delete"];
echo $id;


$PDO = new Member();
print_r($PDO);

$bool= $PDO->deleteUser($id);

if($bool){
    header('location: ../index.php');
}
else{
    header('../index.php?page=addMember&&error=desole , une erreur s\' est produite');
}