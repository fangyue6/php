<?php
include "init.inc.php";


$smarty -> assign("arr", array("os"=>"Linux", "webserver"=>"Apache", "db"=>"MySQL", "language"=>"PHP"));



$pdo = new  PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");


$stmt = $pdo->prepare("select id, name, age, sex, email from users");

$stmt -> execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($users);

$smarty -> assign("users", $users);

$smarty -> display("7_7.tpl");
