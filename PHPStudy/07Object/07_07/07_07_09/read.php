<?php
	include "person.php";

	
	//读出字符串从文件中
	$str = file_get_contents("objstr.txt");

	//返串行化
	$p = unserialize($str);


	$p->say();
