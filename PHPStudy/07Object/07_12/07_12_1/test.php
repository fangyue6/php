<?php
/*
 *  命名空间 --- 名子空间
 *
 *	
 *	 1. 常量
 *	 2.2. 函数
 *	 3. 类
 *
 *
 */
	namespace meizi;

	include "func.inc.php";
	include "1.php";



	function one() {
		echo "aaaaaaaaaaaaa<br>";
	}

	function two() {
		echo "bbbbbbbbbbbbbbb<br>";
	}

	one();

	\one();


	define("meizi/ROOT", "9999999999999");
