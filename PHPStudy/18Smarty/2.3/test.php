<?php
	include "smarty.class.php";

	$smarty = new Smarty();




	$pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");

	$stmt = $pdo -> prepare("select id, name, pass, sex,age,email from users order by id");

	$stmt ->execute();


	$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);


	$smarty -> assign("users", $data);
	$smarty -> assign("title", "this is a demo");
	$smarty -> assign("author", "feng and meizi");

	$smarty ->display("PHPStudy.tpl");



