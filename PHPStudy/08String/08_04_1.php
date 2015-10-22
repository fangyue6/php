<?php
/**
 * Created by PhpStorm.
 * User: fangyue
 * Date: 2015/10/12
 * Time: 21:15
 */
function t1(){
    $str= "hello";
    $str2 = "Hello";
    if(strtoupper($str) == strtoupper($str2)) {//这样就不区分大小写比较
        echo "相等";
    } else {
        echo "不相等";
    }
}
t1();
echo "<br>--------------------------<br>";


function t2(){
    $str= "aellc";
    $str2 = "Aellc";
    switch(strcasecmp($str, $str2)) {//按自然顺序比较
        case 1:
            echo "第一个数大于第二个数<br>";
            break;
        case -1:
            echo "第一个数小于第二个数<br>";
            break;
        case 0:
            echo "两个字符串相等<br>";
            break;

    }
}
t2();
echo "<br>--------------------------<br>";


function t3(){
    $str= "file11.txt";
    $str2 = "file2.txt";
    switch(strnatcasecmp($str, $str2)) {//按自然顺序比较  不区分大小写
        case 1:
            echo "第一个数大于第二个数<br>";
            break;
        case -1:
            echo "第一个数小于第二个数<br>";
            break;
        case 0:
            echo "两个字符串相等<br>";
            break;
    }
    $arr=array("file1.txt", "file2.txt", "file11.txt", "file12.txt");
    usort($arr,"strnatcasecmp");//strcmp strnatcmp  strnatcasecmp
}
t3();
echo "<br>--------------------------<br>";


function t4(){
    $arr=array("file1.txt", "File2.txt", "File11.txt", "file12.txt");

    usort($arr, "strnatcasecmp");

    print_r($arr);
}
t4();
echo "<br>--------------------------<br>";