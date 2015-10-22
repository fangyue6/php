<?php
/**
 * Created by PhpStorm.
 * User: fangyue
 * Date: 2015/10/13
 * Time: 21:49
 */
error_reporting(E_ALL^E_NOTICE^E_WARNING);
$host = "203.195.179.183:12613";
$user = "root";
$pass = "Yue920611Fang";
$db = "fun";

//打开数据库连接
$connection = mysql_connect($host, $user, $pass);
//选择数据库
mysql_select_db($db) or die("Unable to select database!");
//构造一个SQL查询
$title="ssssww";
$content="aaaaee";
$query = "INSERT INTO fun(title, content) VALUE('$title', '$content')";
//执行该查询
$result = mysql_query($query) or die("Error in query: $query. ".mysql_error());

//插入操作成功后，显示插入记录的记录号
echo "记录已经插入， mysql_insert_id() = ".mysql_insert_id();

//关闭当前数据库连接
mysql_close($connection);