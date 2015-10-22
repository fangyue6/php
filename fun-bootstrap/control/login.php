<?php

//header('Content-Type:text/html; charset=utf-8');//使用gb2312编码，使中文不会变成乱码
$username=$_POST['username'];
//$username = json_decode($_POST['username']);
$password=md5($_POST['password']);
/*echo $password;
echo $username . "...".$password;
return;*/

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
    $sql = "select ID from friend_info where username=? or email=? or nickname=?";

    $stmt = $pdo -> prepare($sql);
    $stmt -> execute(array($username,$username,$username));
    $stmt -> setFetchMode(PDO::FETCH_NUM);
    $find_result= $stmt->fetchAll();

    $result_data=0;//用户名不存在
    if(!empty($find_result)){
        $result_data=1;//用户名存在
    }
    if($result_data==1){
        $sql="select * from friend_info where (username=? or email=? or nickname=? ) and password=? ";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute(array($username,$username,$username,$password));
        $stmt -> setFetchMode(PDO::FETCH_NUM);
       // $find_result= $stmt->fetchAll();
        /* $stmt -> bindColumn("ID", $id);
         $stmt -> bindColumn("username", $name);
         $stmt -> bindColumn("password", $password);
         $stmt -> bindColumn("nickname", $nickname);
         $stmt -> bindColumn("email", $email);
         if($stmt->fetch()){
             session_start();
             $_SESSION["username"]=$name;
             $_SESSION["nickname"]=$nickname;
             $_SESSION["email"]=$email;
            // $_SESSION["username"]=$name;
         }else{
             $result_data=2;//密码错误
         }*/
        if($stmt->rowCount() > 0) {
            //将用户信息一次性放到session中
            session_start();
           $_SESSION=$stmt->fetch(PDO::FETCH_ASSOC);

            //var_dump($_SESSION);
            //echo $_SESSION['username'];
           // echo $_SESSION['password'];
           // echo $_SESSION['nickname'];
            //echo $_SESSION['email'];
            //header("Location:../index.php");
        }else {
            $result_data=2;//密码错误
        }
    }
}catch(PDOException $e) {
    echo "错误：".$e->getMessage();
}
echo $result_data;
?>