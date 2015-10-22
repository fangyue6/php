<?php

	header("Content-Type:text/html;charset=utf-8");
	include "init.inc.php";
	include "page.class.php";
	

	//一定要加， 如果没有缓存则连接和查询数据
	if(!$smarty->isCached("index.tpl",  $_SERVER['REQUEST_URI'])) {

		$smarty -> assign("arr", array("os", "Linux", "webserver", "Apache", "db","MySQL", "language","PHP"));


        $pdo = new  PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");

        $page = new Page(40, 5);


        $sql = "select id, name, age, sex, email from users {$page->limit}";

        echo $sql;

        $stmt = $pdo->prepare($sql);

        $stmt -> execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //print_r($users);

        $smarty -> assign("users", $users);

        $smarty -> assign("fpage", $page->fpage());

	}


	$smarty->assign("time", date("Y-m-d H:i:s"));


	$smarty -> display("9_2.tpl", $_SERVER['REQUEST_URI']);


//	$smarty -> clearAllCache();
	

