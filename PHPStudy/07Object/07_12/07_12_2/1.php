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
 * 一、 namespace 来声明
 * 二、 在namespace声明命名空间的代码上面，不能有任何PHP代码和HTML内容输出(除了declare ), 声明命名空间只能是第一条
 */

//	declare(encoding="utf-8");

	//声明一个名子空间， 前缀为 meizi
	namespace  meizi;

	const AAA = 1;

	class Demo {
		static function one() {
			echo "1.php echo 11111111111<br>";
		}
	}

	function test() {
		echo "1.php echo 222222222222222<br>";
	}

	test();
	\meizi\test();

	echo AAA." 1.php<br>";

	echo \meizi\AAA." 1.php<br>";


	Demo::one();
	\meizi\Demo::one();
