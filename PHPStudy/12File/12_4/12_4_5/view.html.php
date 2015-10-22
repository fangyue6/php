<?php
	$filename = "view.html";
	//不是必须的， 设置类型
	header("Content-Type:text/html");
	//当成附件来处理，浏览器就形成下载或打开
	header("Content-Disposition:attachment;filename={$filename}");
	//设置大小
	header("Content-Length:".filesize($filename));
	//讲文件内容全部输出
	readfile($filename);
