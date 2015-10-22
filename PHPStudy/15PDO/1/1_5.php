<?php
header("Content-type: text/html; charset=utf-8");
/* 
 * PDO中执行SQL语句的方法有两个主要的:
 *
 *    1.  exec()   用来处理非结果集的  insert update delete create ....
 *
 *      返回影响的函数
 *
 *      如果是插入语句可以使用lastinsertid()方法获取最后自动插入id
 *
 *
 *    2.2.  query()   用来处理有结果集的语句  select   desc  show
 *
 * 	返回来的是 PDOStatement类的对象， 再通过这个类的方法，获取结果。 也可以直接foreach遍历获取结果（但不常用）
 *
 *    set names utf8;
 *
 *    $pdo -> query("set names utf8");
 *    $pdo -> exec("set names utf8");
 */

function t1(){
    try {
        //创建对象
        $pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
        //设置错误使用异常的模式
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo "数据库连接失败：".$e->getMessage();
        exit;
    }
    try {
        //使用PDO中的方法执行语句
        $affected_rows = $pdo -> exec("insert into users(name, pass, sex, age, email) values('aaa', 'bbb', 'nn', '11', 'aaa@b.com')");

        echo $affected_rows."<br>";
        echo $pdo->lastinsertid();//最后一条

    }catch(PDOException $e) {
        echo "错误：".$e->getMessage();
    }
}
//t1();

function t2(){
    try {
        //创建对象
        $pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
        //设置错误使用异常的模式
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo "数据库连接失败：".$e->getMessage();
        exit;
    }
    try {
        //使用PDO中的方法执行语句
        $stemt = $pdo -> query("select * from users");

        foreach($stemt as $arr) {
            print_r($arr);
            echo '<br>';
        }
    }catch(PDOException $e) {
        echo "错误：".$e->getMessage();
    }
}
t2();