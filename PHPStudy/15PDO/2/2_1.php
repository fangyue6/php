<?php
/*
 * PHP的预处理语句 (做到) 
 *
 * 效率要提高
 *
 * 安全性要好
 *
 * 建议: 使用这种方式去执行SQL语句
 *
 */

try {
    //创建对象
    $pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
    //设置错误使用异常的模式
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo -> query("set names utf8");
}catch(PDOException $e) {
    echo "数据库连接失败：".$e->getMessage();
    exit;
}
try {
    /*
        $pdo -> exec("insert into users(name, pass) values('aaa', "1234")");
        $pdo -> exec("insert into users(name, pass) values('bbb', "1235")");
        $pdo -> exec("insert into users(name, pass) values('ccc', "1236")");
        $pdo -> exec("insert into users(name, pass) values('ddd', "17237")");
        $pdo -> exec("insert into users(name, pass) values('eee', "1273")");
        $pdo -> exec("insert into users(name, pass) values('fff', "5123")");
        $pdo -> exec("insert into users(name, pass) values('ggg', "12573")");
        $pdo -> exec("insert into users(name, pass) values('www', "1423")");
        $pdo -> exec("insert into users(name, pass) values('xxx', "1273")");
     */


    //	$pdo->exec("delete from users where id='{$_GET['id']}'");

    $sql = "delete from users where id='{$_GET['id']}'";

    echo $sql."<br>";

}catch(PDOException $e) {
    echo "错误：".$e->getMessage();
}



