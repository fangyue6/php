<?php
//	error_reporting(E_ALL & ~E_NOTICE);
//在php中注册一个函数， 来处理错误报告， 而不按原来的方式处理了
set_error_handler("myerrorfun");

$mess = "";
//自己的错误报告处理函数
function myerrorfun($error_type, $error_message, $error_file, $error_line) {

    global $mess;
    $mess.="发生错误级别为{$error_type}类型, 错误消息<b>{$error_message}</b>, 在文件<font color='red'>{$error_file}</font>中， 第{$error_line}行。<br>";


}



getType($a);

echo "1111111111111111<br>";

getType();

echo "222222222222222222222<br>";

//	getType3();

echo "333333333333333333333<br>";



echo "---------------------------------------------------------<br>";
echo $mess;

