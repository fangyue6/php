<?php
/*
 *  分割、匹配、查找、替换
 *
 *  1. 字符串处理函数 (处理快， 但有一些做不到)
 *
 *  2.2. 正则表达式函数  (功能强大，但效率要低)
 *
 *
 *  注意：如果可以直接使用字符串处理函数处理的字符串，就不要使用正则处理
 *
 *
 *  
 * 匹配查找:
 *
 * 	strstr  strpos substr
 *
 *
 * 正则匹配查找
 *
 * 	preg_match()   preg_match_all()   preg_grep();
 *
 */

function t1(){
    $str = "this is a PHPStudy!";

    if(stristr($str, "Test")) {
        echo "存在";
    }else {
        echo "不存在";
    }
}
t1();
echo "<br>----------------------------<br>";

function t2(){
    function getFileName($url) {
        $loc = strrpos($url, "/")+1;//最后一次出现/的位置
        //echo "<br>---".$loc."<br>";

        return substr($url, $loc);
    }
    echo getFileName("http://www.baidu.com/aaa/demo.php");
    echo "<br>";
    echo getFileName("../images/logo.gif");
}
t2();

