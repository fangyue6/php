<?php
header("Content-type: text/html; charset=utf-8");
class Fun{
    private $pdo;
    private $result;
    function __construct(){
        $result=array();
        try {
            $this->pdo = new  PDO("mysql:host=203.195.179.183;port=12613;dbname=fun", "root", "Yue920611Fang");
            $this->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo -> query("set names utf8");
        }catch(PDOException $e) {
            echo "数据库连接错误".$e->getMessage();
            exit;
        }
    }
    function getFun(){
        try {
            $sql="select * from fun order by id desc limit 1 ";
            $stmt = $this->pdo -> prepare($sql);
            $stmt -> execute();
            $stmt -> setFetchMode(PDO::FETCH_NUM);
            if($stmt->rowCount() > 0) {
                $this->result=$stmt->fetch(PDO::FETCH_ASSOC);
            }
        }catch(PDOException $e) {
            echo "查询错误".$e->getMessage();
        }
        return $this->result;
    }
}

//$fun=new Fun();
//var_dump($fun->getFun()) ;
?>
