<?php

    header('Content-Type:text/html; charset=utf-8');//使用gb2312编码，使中文不会变成乱码
    $username=$_POST['username'];
//$username = json_decode($_POST['username']);
    $password=$_POST['password'];
    $email=$_POST['email'];
    $nickname=$_POST['nickname'];
     //echo $uername.$password.$email.$nickname;

try {
    //创建对象
    $pdo = new  PDO("mysql:host=203.195.179.183;port=12613;dbname=fun", "root", "Yue920611Fang");
    //设置错误使用异常的模式
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo -> query("set names utf8");
}catch(PDOException $e) {
    echo "数据库连接失败：".$e->getMessage();
    exit;
}

try {
    $sql = "select ID from friend_info where username=?";

    $stmt = $pdo -> prepare($sql);
    $stmt -> execute(array($username));
    $stmt -> setFetchMode(PDO::FETCH_NUM);
    $find_result= $stmt->fetchAll();

    $result_data=0;
    if(!empty($find_result)){
        $result_data=1;//用户名存在
    }

$sql="select ID from friend_info where email=? ";
$stmt = $pdo -> prepare($sql);
$stmt -> execute(array($email));
$stmt -> setFetchMode(PDO::FETCH_NUM);
$find_result= $stmt->fetchAll();
if(!empty($find_result)){
    $result_data=2;//邮箱已经存在
}

$sql="select ID from friend_info where nickname=? ";
$stmt = $pdo -> prepare($sql);
$stmt -> execute(array($nickname));
$stmt -> setFetchMode(PDO::FETCH_NUM);
$find_result= $stmt->fetchAll();
if(!empty($find_result)){
    $result_data=3;//昵称已经存在
}

    if($result_data==0){
        $sql="insert into friend_info(username,password,email,nickname) values(?,?,?,?) ";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute(array($username,md5($password),$email,$nickname));
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['email']=$email;
        $_SESSION['nickname']=$nickname;
    }
}catch(PDOException $e) {
    echo "错误：".$e->getMessage();
}

echo $result_data;
 ?>