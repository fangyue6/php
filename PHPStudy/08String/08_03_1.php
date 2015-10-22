<?php
//去除空格和字符串填补及大小写转换函数
/**
 * Created by PhpStorm.
 * User: fangyue
 * Date: 2015/10/12
 * Time: 20:35
 */
function t1(){

    $str = "    hello Mworld8i9oio   ";

    echo $str. "---".strlen($str)."<br>";

    $nstr =  trim($str, "0..9a..z ");// rtirm  ltrim

    echo $nstr."---".strlen($nstr)."<br>";
}
t1();
echo "<br>---------------------------<br>";

function t2(){
    $str = "lamp";

    echo $str. "---".strlen($str)."<br>";

    $nstr =  str_pad($str, 10, "", STR_PAD_BOTH);

    echo $nstr."---".strlen($nstr)."<br>";
}
//t2();
echo "<br>---------------------------<br>";

function t3(){
    $str = "this is a PHPStudy Apache MySQL PHP";

    echo $str."<br>";
    echo strtoupper($str)."<br>";//全大写
    echo strtolower($str)."<br>";//全小写
    echo ucfirst($str)."<br>";//第一个大写
    echo ucwords($str)."<br>";//每个单词第一个大写

    echo ucfirst(strtolower($str))."<br>";
}
t3();
