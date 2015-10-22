<?php
/*
 * PHP的预处理语句 (做到) 
 *
 * 效率要提高
 *
 * 安全性要好
 *
 * 建议: 使用这种方式去执行SQL语句
 *
 */

	try {
		//创建对象
		$pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
		//设置错误使用异常的模式
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo -> query("set names utf8");
	}catch(PDOException $e) {
		echo "数据库连接失败：".$e->getMessage();
		exit;
	}


	try {
		//给数据库管理系统并直接执行
		//$pdo -> query("select * from users");
		
		//只是将这个语句放到服务器上（数据库管理系统）上, 编写后等待，没有执行
	     //   $stmt = $pdo -> prepare("insert into users(name, pass, age, sex, email) values(:name, :pass, :age, :sex, :email)");
	       $stmt = $pdo -> prepare("insert into users(name, pass, age, sex, email) values(?, ? ,?, ?, ?)");


	       $stmt -> execute(array("meizi", '123456', 18, 'nv', 'aa@bb.com'));        
	       $stmt -> execute(array("meizi2", '123456', 18, 'nv', 'aa@bb.com'));        
	       $stmt -> execute(array("meizi22", '123456', 18, 'nv', 'aa@bb.com'));        


	}catch(PDOException $e) {
		echo "错误：".$e->getMessage();
	}



