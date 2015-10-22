<?php
header("Content-type: text/html; charset=utf-8");
/*
*    mysql_connect("localhost", "root", "123456");
*    mysql_select_db("xsphp");
*
*    创建PDO对象也可以直接有以上功能, 还可以选择处理那个数据库系统
*
*    DSN (Data Source Name 数据源名称)
*        主机
*        库
*        具体的哪种数据库的驱动
*
*/
function t1(){

    try {
        $pdo = new PDO("oci:dbname=//192.168.1.111:1521/xsphp", "root", "123456");
    }catch(PDOException $e) {
        echo "数据库连接失败：".$e->getMessage();
        exit;
    }

    echo "创建PDO对象成功!";
}
//t1();

function t2(){
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
    }catch(PDOException $e) {
        echo "数据库连接失败：".$e->getMessage();
        exit;
    }
    var_dump($pdo);

    //echo "创建PDO对象成功!";
}
t2();