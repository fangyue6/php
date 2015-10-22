<?php
header("Content-type: text/html; charset=utf-8");
//step 1 : 连接数据库 (返回资源)
$link = mysql_connect("localhost", "root", "123456");

if(!$link) {
    echo "连接数据库失败:";
    echo mysql_error();
}
else{
    echo "连接成功";
}

//step 2.2 : 设置操作(设置字符集)
mysql_query("set names utf8");

//step 3 : 选择一个数据库作为默认的数据库使用
mysql_select_db("xsphp");

//step 4--9 : 操作数据库的SQL语句执行




//step last 关闭连接
mysql_close();
