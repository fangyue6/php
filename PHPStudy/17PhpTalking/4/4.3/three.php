<?php
	//1开启会话session  1
	session_start();

	//多余的
	$username = $_SESSION['username'];


	//unset($_SESSION['username']);
	//2就可以删除数组中的所有内容， 即session对应的这个用户文件的内容就空了
	$_SESSION = array();


	//删除客户中cookie听sessionid
	if(isset($_COOKIE[session_name()])) {
		setCookie(session_name(), "", time()-3600, "/");

	}
	//4销毁session
	session_destroy();

	echo "再见:{$username}";
