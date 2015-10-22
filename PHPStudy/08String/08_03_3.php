<?php
function t1(){
    $str = "123456";
    echo md5(md5($str)."lampbrother");
}
t1();
echo "<br>--------------------<br>";
function t2(){
    $str = "www.lampbrother.net";
    echo $str."<br>";
    echo strrev($str)."<br>";
}
t2();
echo "<br>--------------------<br>";
function t3(){
    $str="1234567890.123456";
    echo $str."<br>";
    echo number_format($str)."<br>";
    echo number_format($str, 2, ".", ",")."<br>";
}
t3();
echo "<br>--------------------<br>";
?>