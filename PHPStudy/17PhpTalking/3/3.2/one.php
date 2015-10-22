<?php
    header("Content-type: text/html; charset=utf-8");
	$username = "meizi18";
	$sex = "nv";
	//只要使用setCookie()这个函数就可以将一个或多个变量放到客户端cookie中
	setCookie("username", $username, time()+24*60*60);
	setCookie("sex", $sex, time()+24*60*60);
	setCookie("lx[phone]", "1111111", time()+10000);
	setCookie("lx[email]", "2222@wwww.com", time()+1000);
	setCookie("arr[0]", 'aaaa', time()+100000);
	setCookie("arr[1]", "bbbb", time()+10000);


	echo "保存成功!<br>";

	print_r($_COOKIE);
