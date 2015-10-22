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
		
		$stmt = $pdo -> prepare("insert into users(name, pass, age, sex,email) values(?, ? ,? ,? ,?)");
		$stmt -> execute(array('111', '222', 333, '444', '555'));

		//获取数据结果中的行数, 或如果是影响函数的语句执行则获取的是影响行数
		echo $stmt->rowCount();

		echo '<br>';
		//如何获取最后一个自动增涨的ID呢?
		echo $pdo -> lastInsertId();
	}catch(PDOException $e) {
		echo "错误：".$e->getMessage();
	}



