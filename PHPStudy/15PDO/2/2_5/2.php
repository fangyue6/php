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
		
		$stmt = $pdo -> prepare("select id, name, age, sex, email from users where id > ? and id < ?");
		$stmt -> execute(array(500, 800));
		//绑定栏目

		$stmt -> bindColumn(1, $id);
		$stmt -> bindColumn(2, $name);
		$stmt -> bindColumn(3, $age);
		$stmt -> bindColumn(4, $sex);
		$stmt -> bindColumn(5, $email);


		//可以设置结果的模式, 以下的代码使用fetch()或fetchAll()都是使用这个方面设置的数组的格式
		$stmt -> setFetchMode(PDO::FETCH_NUM);


		//mysql_fetch_array()   mysql_fetch_rows mysql_fetch_array()

		echo '<table border="1" width=800 align="center">';
		while($stmt -> fetch()) {
			echo '<tr>';
			echo '<td>'.$id.'</td>';
			echo '<td>'.$name.'</td>';
			echo '<td>'.$age.'</td>';
			echo '<td>'.$sex.'</td>';
			echo '<td>'.$email.'</td>';
			echo '</tr>';
		}

		echo '</table>';
 		

	}catch(PDOException $e) {
		echo "错误：".$e->getMessage();
	}



