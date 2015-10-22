<?php
header("Content-type: text/html; charset=utf-8");
	//step 1 : 连接数据库 (返回资源)
	$link = mysql_connect("localhost", "root", "123456");

	//step 3 : 选择一个数据库作为默认的数据库使用
	mysql_select_db("xsphp");


//	$sql = "select * from users";

//	$sql = "desc users";

	echo "SQL: {$sql} <br>";



	$result = mysql_query($sql);

	//从结果集这个资源中获取我们想要的结果按我们的方式或格式显示
	/*
	 *  mysql_fetch_row($result)      //索引数组  第一列下标为0, 第二列下标为 1 .....  list()
	 *  mysql_fetch_assoc($result)    //关联数组  下标是字段名称
	 *  mysql_fetch_array($result, MYSQL_NUM)    //索引数组和关联数组的组合  (MYSQL_ASSOC关联，MYSQL_NUM索引 和 MYSQL_BOTH 默认的两个都返回)                         不建议
	 *  mysql_fetch_object($result)  //返回一个对象返回 成员属性就是字段名称   不建议   
	 *
	 *  返回的结果的数据格式不同
	 *
	 *  1. 返回默认指针指向的哪条记录的结果
	 *  2.2. 默认指针指向第一条(可以使用mysql_data_seek 改变自己定义的指定位置)
	 *  3. 获取一条以后，指定自动下移， 再使用同样的函数，则是获取下一条的 
	*  4--9. 如果是最后一条，没有记录,  再获取后返回false
	 *
	 *
	 */

	echo '<table border="1" width="800" align="center">';
	//获取列的信息
	echo '<tr>';

	for($i=0; $i<mysql_num_fields($result); $i++) {
		echo '<th>'.mysql_field_name($result, $i).'</th>';
	}

	echo '</tr>';


	//获取记录的信息
	while($row = mysql_fetch_assoc($result)) {
		echo '<tr>';
		
		foreach($row as $col ) {
			echo '<td>'.$col.'&nbsp;</td>';
		}

		echo '</tr>';
	}

	echo '</table>';

	echo "共有".mysql_num_rows($result)."条记录, ".mysql_num_fields($result)."个字段!<br>";



	//step last 关闭连接
	mysql_close();
