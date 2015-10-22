<?php
	include "person.php";

	//对象
	$p = new Person("张三111", 12220, "男111");

	//将对象串行化
	$str = serialize($p);

	//将字符串保存在文件夹objstr.txt中
	file_put_contents("objstr.txt", $str);

	echo "对象转完字符串， 保存到文件中成功!<br>";

	//返串行化
	$p = unserialize($str);
	$p->say();