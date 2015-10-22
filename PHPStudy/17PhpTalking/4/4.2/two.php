<?php
//开启session
//
// 1. 判断客户端是否有了sessionid  变量名为PHPSESSID, 直接使用这个session id开启会话
// 也不新创建文件了， 直接找这个同名session id的session文件

header("Content-type: text/html; charset=utf-8");
	session_start();

	echo '<br>';
	print_r($_SESSION);
	echo '<br>';

	echo '<br>';



	echo $_SESSION['username'];
