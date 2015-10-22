<?php
//创建memcache对象
$mem = new Memcache;


/**
 *
sc create "Memcached Server" start= auto binPath= "C:\env\wamp\bin\memcached.exe -d runservice -m 32 -p 11211 -l 127.0.0.1" DisplayName= "Memcached Server"
sc create "Memcached Server1" start= auto binPath= "C:\env\wamp\bin\memcached.exe -d runservice -m 32 -p 11220 -l 127.0.0.1" DisplayName= "Memcached Server1"
 */

//连接memcache服务器
$mem -> addServer("localhost", 11211);
$mem -> addServer("localhost", 11220);
/*for($i=0;$i<10000;$i++){
    $mem -> add("a".$i, "this is memecache".$i." PHPStudy!", MEMCACHE_COMPRESSED, time()+60*60*24*31);
}*/

for($i=0;$i<10000;$i++){
    var_dump($mem->get("a".$i));
    echo '<br>';
}





//关闭连接
$mem -> close();

