<?php
//创建memcache对象
$mem = new Memcache;


//连接memcache服务器
$mem -> connect("localhost", 11220);


class Test {
    public $a=1;
    public $b=2;
    public $c=3;
}

//操作
function t1(){
    global $mem;
    $mem -> add("one", "this is memecache PHPStudy!", MEMCACHE_COMPRESSED, time()+60*60*24*31);
    $mem -> add("two", array("111", "222", "3333"), MEMCACHE_COMPRESSED, 0);
    $mem -> add("three",new Test(), MEMCACHE_COMPRESSED, 0 );
    $mem -> add("four", 100, MEMCACHE_COMPRESSED, 0);
    $mem -> set("five", "this is a demo!", MEMCACHE_COMPRESSED, 1000);
}
//t1();

function t2(){
    global $mem;
    var_dump($mem->get("one"));
    echo '<br>';

    var_dump($mem->get("two"));
    echo '<br>';

    var_dump($mem->get("three"));
    echo '<br>';

    var_dump($mem->get("five"));
    echo '<br>';

    var_dump($mem->get("four"));
    echo '<br>';
}
//t2();

function t3(){
    global $mem;
    var_dump($mem->get(array("one", "five")));
    echo '<br>';
}
//t3();

function t4(){
    global $mem;
    $mem -> delete("one");
    $mem -> delete("two", 0);
   // $mem -> flush();
}
//t4();

t1();
t4();
t2();

//关闭连接
$mem -> close();

