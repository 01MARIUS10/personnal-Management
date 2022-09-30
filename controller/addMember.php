<?php 
require_once("../core/Database.php");
require_once("../model/Member.php");

$nom=$_POST["name"];
$prenom=$_POST["lastname"];
$pseudo=$_POST["pseudo"];
$age=$_POST["age"];
$tel=$_POST["tel"];
$mail=$_POST["mail"];
$passwd=$_POST["password"];
echo "before <br>";
$PDO = new Member();
$bool= $PDO->registerUser($nom,$prenom,$pseudo,$age,$tel,$mail,$passwd);
echo "|".$bool."|<br>";

if($bool==!""){
    header('location: ..'.$uri->route);
}
header('../index.php?page=addMember&&error=desole , une erreur s\' est produite');

echo "after <br>";