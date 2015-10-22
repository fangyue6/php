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
try {
    //创建对象
    $pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
    //设置错误使用异常的模式
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //关闭自动提交
    $pdo-> setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
}catch(PDOException $e) {
    echo "数据库连接失败：".$e->getMessage();
    exit;
}
try {
    //开启一个事务
    $pdo -> beginTransaction();

    $price = 50;
    //妹子转出50元
    $affected_rows = $pdo-> exec("update demo set ye=ye-{$price} where id=1");

    if($affected_rows > 0) {
        echo "妹子转出{$price}元成功!<br>";
    } else {
        throw new PDOException("妹子转出失败！<br>");
    }

    //峰哥会收到50元
    $affected_rows = $pdo-> exec("update demo set ye=ye+{$price} where id=3");

    if($affected_rows) {
        echo "峰哥收到{$price}元成功!";
    }else {
        throw new PDOException("峰哥收入失败！<br>");
    }
    echo "交易成功!<br>";

    //提交以上的操作
    $pdo->commit();

}catch(PDOException $e) {
    echo "错误：".$e->getMessage();
    echo "交易失败!<br>";
    //撤销所有操作
    $pdo -> rollback();
}



//运行完成以后， 最后开启自动提交
$pdo-> setAttribute(PDO::ATTR_AUTOCOMMIT, 1);
