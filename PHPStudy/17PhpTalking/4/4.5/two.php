<?php
//开启session
//
// 1. 判断客户端是否有了sessionid  变量名为PHPSESSID, 直接使用这个session id开启会话
// 也不新创建文件了， 直接找这个同名session id的session文件

	$sid = !empty($_GET[session_name()]) ? $_GET[session_name()] : '';

	if($sid !='') {
	//可以设置一下用已经的sid开启会话
		session_id($sid);
	}
	session_start();

	echo '<br>';
	print_r($_SESSION);
	echo '<br>';

	echo '<br>';


	echo session_name()." = ".session_id()."<br>";

	//	setCookie();
	//
?>
	<a href="one.php?<?php echo SID; ?>">one</a><br>
	<a href="two.php?<?php echo SID; ?>">two</a><br>
	<a href="three.php?<?php echo SID; ?>">exit</a><br>
