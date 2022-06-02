<?php
require '../../database/db-config.php';
try{
$PDO =new PDO($DB_DNS,$DB_USER,$DB_PASS,$option);

}catch(PDOException $e){
    echo "erreur:".$e->getMessage()."<br>";
    exit;
}
$nom=$_POST["name"];
$prenom=$_POST["lastname"];
$pseudo=$_POST["pseudo"];
$age=$_POST["age"];
$tel=$_POST["tel"];
$mail=$_POST["mail"];
$passwd=$_POST["password"];



$sql="INSERT INTO `user`(`user_firstname`,`user_lastname`,`user_pseudo`,`user_age`,`user_sex`,`user_tel`,`user_mail`,`user_password`)
VALUES
('".$nom."','".$prenom."','".$pseudo."',".$age.",'man','".$tel."','".$mail."','".$passwd."');";

$request= $PDO->prepare($sql);
$request->execute();
header('location: ../../index.php');