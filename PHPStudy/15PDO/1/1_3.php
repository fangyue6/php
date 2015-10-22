<?php
header("Content-type: text/html; charset=utf-8");
/*
 *    mysql_connect("localhost", "root", "123456");
 *    mysql_pconnect();
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

try {
    $pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456", array(PDO::ATTR_AUTOCOMMIT=>false,PDO::ATTR_PERSISTENT=>1 ));
}catch(PDOException $e) {
    echo "数据库连接失败：".$e->getMessage();
    exit;
}

//var_dump($pdo);

//	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, false);

echo "<br>PDO是否关闭自动提交功能：". $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);
echo "<br>当前PDO的错误处理的模式：". $pdo->getAttribute(PDO::ATTR_ERRMODE);
echo "<br>表字段字符的大小写转换： ". $pdo->getAttribute(PDO::ATTR_CASE);
echo "<br>与连接状态相关特有信息： ". $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo "<br>空字符串转换为SQL的null：". $pdo->getAttribute(PDO::ATTR_ORACLE_NULLS);
echo "<br>应用程序提前获取数据大小：".$pdo->getAttribute(PDO::ATTR_PERSISTENT);
echo "<br>与数据库特有的服务器信息：".$pdo->getAttribute(PDO::ATTR_SERVER_INFO);
echo "<br>数据库服务器版本号信息：". $pdo->getAttribute(PDO::ATTR_SERVER_VERSION);
echo "<br>数据库客户端版本号信息：". $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION);



