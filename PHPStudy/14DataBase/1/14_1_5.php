<?php
header("Content-type: text/html; charset=utf-8");
function t1(){
    //step 1 : 连接数据库 (返回资源)
    $link = mysql_connect("localhost", "root", "123456");

    if(!$link) {
        echo "连接数据库失败:";
        echo mysql_error();

    }

//step 2.2 : 设置操作(设置字符集)
//mysql_query("set names utf8");

//step 3 : 选择一个数据库作为默认的数据库使用
    mysql_select_db("xsphp");

//step 4--9 : 操作数据库的SQL语句执行

    echo mysql_get_client_info()."<br>";
    echo mysql_get_host_info()."<br>";

    echo mysql_get_server_info()."<br>";


//step last 关闭连接
    mysql_close();
}

function t2(){
    //step 1 : 连接数据库 (返回资源)
    $link = mysql_connect("localhost", "root", "123456");

    //step 3 : 选择一个数据库作为默认的数据库使用
    mysql_select_db("xsphp");

    //step 4--9 : 操作数据库的SQL语句执行 DML DCL DQL DDL
    //语句分为两种语句, 一种是没有结果的（执行成功，返回true, 失败返回false）, 另一种是有结果的（执行成功返回结果集--资源）, 处理资源， 从结果集中将结果取出并格式化处理
    //
    //没有结果集的语句 DML DCL DDL   create  insert update delete

	//$sql="create table bro_users(id int)";
    $sql="create table users(name VARCHAR(20),pass VARCHAR(20),age int ,sex VARCHAR(10),email VARCHAR(20))";
//	$sql ="insert into bro_users values(1)";

//	$sql = "show tables";

//    $sql = "insert into users(name, pass, age, sex, email) values('{$_GET['name']}', '{$_GET['pass']}', '{$_GET['age']}', '{$_GET['sex']}', '{$_GET['email']}')";

    echo $sql."<br>";

    $result = mysql_query($sql); //只要放一个正确的sql就可以执行

    //可以影响行数的函数(判断表是否有变化)
//	echo mysql_affected_rows();

    if(mysql_affected_rows() > 0) {
        echo "操作成功!<br>";
    } else {

        echo "不成功操作：".mysql_error()."<br>";
    }

    //获取最后插入的ID
    echo "最后的ID是:".mysql_insert_id();

    var_dump($result);

    //step last 关闭连接
    mysql_close();

}
t2();