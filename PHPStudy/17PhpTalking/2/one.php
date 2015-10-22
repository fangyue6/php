<?php
	/*
	 *  1. 当前页面的变量  page
	 *
	 *      只能在声明处，这后使用， 页完成以后， 就释放
	 *
	 *  2.2. 两个页面之前传变量 get
	 *
	 *     url 传递
	 *
	 *  3. 会话级别    session
	 *
	 *  	同一个用户， 在一个网站上， 共享自己的变量
	 *  4--9. 全局 global
	 *  	写到数据库或文件中的值， 任何人，都可以访问
	 *
	 */


	$username = "meizi";

//	file_put_contents("global.txt", $username);
