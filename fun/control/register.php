<?php

    header('Content-Type:text/html; charset=utf-8');//ʹ��gb2312���룬ʹ���Ĳ���������
    $username=$_POST['username'];
//$username = json_decode($_POST['username']);
    $password=$_POST['password'];
    $email=$_POST['email'];
    $nickname=$_POST['nickname'];
     //echo $uername.$password.$email.$nickname;

try {
    //��������
    $pdo = new  PDO("mysql:host=203.195.179.183;port=12613;dbname=fun", "root", "Yue920611Fang");
    //���ô���ʹ���쳣��ģʽ
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo -> query("set names utf8");
}catch(PDOException $e) {
    echo "���ݿ�����ʧ�ܣ�".$e->getMessage();
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
        $result_data=1;//�û�������
    }

$sql="select ID from friend_info where email=? ";
$stmt = $pdo -> prepare($sql);
$stmt -> execute(array($email));
$stmt -> setFetchMode(PDO::FETCH_NUM);
$find_result= $stmt->fetchAll();
if(!empty($find_result)){
    $result_data=2;//�����Ѿ�����
}

$sql="select ID from friend_info where nickname=? ";
$stmt = $pdo -> prepare($sql);
$stmt -> execute(array($nickname));
$stmt -> setFetchMode(PDO::FETCH_NUM);
$find_result= $stmt->fetchAll();
if(!empty($find_result)){
    $result_data=3;//�ǳ��Ѿ�����
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
    echo "����".$e->getMessage();
}

echo $result_data;
 ?>