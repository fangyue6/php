<?php
header("Content-type: text/html; charset=utf-8");
//创建memcache对象
$mem = new Memcache;


//连接memcache服务器
$mem -> addServer("localhost", 11211);
$mem -> addServer("localhost", 11220);



//数据库的连接和操作
$sql = "select id, name, pass, age, sex, email from users order by id";


$key=md5($sql);
echo "key值 为".$key."<br>";
//直接从内存memcahce要数据
$data = $mem->get($key);

//如果用数据就从内容中返回数据， 如果没有才连接数据库，执行SQL语句
if(empty($data)) {
    echo "我进来了<br>";
    //连接
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=xsphp", "root", "123456");
    }catch(PDOException $e) {
        echo "数据库连接失败:".$e->getMessage();
    }
    //获取数据，执行查询语句
    $stmt = $pdo -> prepare($sql);

    $stmt -> execute();

    $data = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    $mem -> set($key, $data, MEMCACHE_COMPRESSED, 10);

    echo "这是第一次访问从数据库获取的数据并放到了内存中!<br>";
}

echo '<pre>';
print_r($data);
echo '</pre>';


//关闭连接
$mem -> close();

