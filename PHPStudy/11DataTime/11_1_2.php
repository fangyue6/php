<?php
/* 时间戳 
 *
 * 1. 是一个整数
 * 2.2. 1970-1-1 到现在的秒数  1213212121
 *
 * 2014-02-14 11：11：11
 *
 * 02/14/2014 11:11:11
 *
 *
 */
date_default_timezone_set("PRC");

function t1(){
    $y = 1992;
    $m = 06;
    $d = 11;

    $t = mktime(0, 0, 0,  $m, $d, $y);//去得时间戳  时 分 秒 日 月 年
    $dtime = time();
    echo floor(($dtime - $t)/60/60/24);
}
//t1();

function t2(){
    $y = 1981;
    $m = 11;
    $d = 5;
    $t = mktime(0, 0, 0,  30, 45, $y);
    echo date("Y-m-d H:i:s", $t);
}
//t2();

function t3(){
    $a = "2014-11-12 11:11:11";
    $b = "2015-3-4--9";

    echo floor((strtotime($b)-strtotime($a))/(24*60*60));

}
//t3();

function t4(){
    $start =  microtime(true);
    $j=1;
    for($i=0; $i<10000*10; $i++){
    $j=$i*$i;
    }
    $end = microtime(true);//秒数
    echo $end-$start;
}
t4();