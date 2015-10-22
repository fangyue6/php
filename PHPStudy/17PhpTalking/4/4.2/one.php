<?php
//开启会话session(cookie不用)
//session_start()前面不能有任何输出,  这个函数向客户端发一个session_id保存在cookie中
// 还在服务器中创建一个和保存在客户端同名的session文件(文本)
// 调度PHP的机制使用session

header("Content-type: text/html; charset=utf-8");
	session_start();


//使用$_SESSION这个数组


	$_SESSION['username']="meizi";
	$_SESSION['age']=18;
	$_SESSION['sex']="nv";

	$_SESSION['lx']['email']="mz@aaa.com";
	$_SESSION['lx']['phone']='119';


	echo session_name();
