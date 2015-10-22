<?php
/* 
 * 	默认写到了Web服务器（apache）的错误日志中
	 *
	 *
1、先配置php.ini:
error_reporting = E_ALL//将向PHP发送每个错误
display_errors=Off     //不显示错误报告
log_errors=On          //决定日志语句记录的位置
log_errors_max_log=1024// 每个日志项的最大长度
error_log=G:/myerror.log //指定错误写进的文件
2.2、使用函数：在php文件中使用error_log()来记录日志,就可以将信息写入到myerror.log文件中
如：error_log("登录失败了！");

	 */
//关闭错误报告   display_errors=On  Off

ini_set("display_errors","Off");//设置配置文件

getType($a);

echo "1111111111111111<br>";

getType();

echo "222222222222222222222<br>";

error_log("数据库连接失败!");

getType3();

echo "333333333333333333333<br>";


