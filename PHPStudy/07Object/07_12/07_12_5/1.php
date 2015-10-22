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
 * 三、定义多个名子空间，以最后一个为主
 *四、在实际的编程实践中，非常不提倡在同一个文件中定义多个命名空间。 (不要在大括号外部加任何代码)
 */

	namespace hello\world;


	function demo() {
		echo "11111111111111<br>";
	}

	$fun = __NAMESPACE__.'\demo';

	$fun();

	echo __NAMESPACE__."<br>";
	//namespace\demo();
