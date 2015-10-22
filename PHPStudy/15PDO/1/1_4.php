<?php
header("Content-type: text/html; charset=utf-8");
/*  
 *  1. 默认的错误模式（不提示, 我们看到到问题. 被忽视!）
 *
 *
 */
function t1(){
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
    }catch(PDOException $e) {
        echo "数据库连接失败：".$e->getMessage();
        exit;
    }
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    echo $pdo->getAttribute(PDO::ATTR_ERRMODE)."<br>";
//
    $affected_rows = @$pdo -> exec("delete from helloworld");
    if(!$affected_rows) {

        echo $pdo->errorCode();
        echo '<br>';
        print_r($pdo->errorinfo());
        exit;
    }
    echo "OK!";
}
//t1();

/*
*   setAttribute();
*   PDO::ATTR_ERRMODE
*
*  1. 默认的错误模式（不提示, 我们看到到问题. 被忽视!）
*  2.2. 警告模式 PDO::ERRMODE_WARNING
*  3. 异常的模式 PDO::ERRMODE_EXCEPTION
*
*/
function t2(){
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
    }catch(PDOException $e) {
        echo "数据库连接失败：".$e->getMessage();
        exit;
    }
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo $pdo->getAttribute(PDO::ATTR_ERRMODE)."<br>";
//
    try {
        $affected_rows = $pdo -> exec("delete from helloworld");
    }catch(PDOException $e) {

        echo "错误原因：".$e->getMessage();
    }
    echo "OK!";
}
//t2();

/*
*   setAttribute();
*   PDO::ATTR_ERRMODE
*
*  1. 默认的错误模式（不提示, 我们看到到问题. 被忽视!）
*  2.2. 警告模式 PDO::ERRMODE_WARNING
*  3. 异常的模式 PDO::ERRMODE_EXCEPTION
*
*/
function t3(){
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
        $affected_rows = $pdo -> exec("delete from helloworld");
    }catch(PDOException $e) {
        echo "错误：".$e->getMessage();
    }
}
t3();