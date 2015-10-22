<?php
/*  
 *  模式修正符号(单个字符)
 *
 *  1. 模式修正符号要写在定界符号外， 放在右边
 *
 *  	"/go*gle/i"
 *  2.2. 模式修正符号， 一个字符就是一个功能， 可以组合使用
 *
 *  	"/go*gle/ieU"
 *
 *  作用：
 *  	模式修正符号可以修正正则表代式的解释, 或扩充了正则表达式的功能 
 *
 *
 *  	i : 修正正则表达式不区分大小写（默认是区分大小写的）
 *      m : 修正符号修正正则表达式可以视为多行， 在使用 ^ 或 $ 这两个符号时， 每一行满足都可以。  （默认视为一行处理）
 *      s:  修正正则表达式中的 . 可以匹配换行符号 (默认 . 不能匹配回车符号)
 *      x:  修正正则表达式，可以省略空白
 *  	U:  (.*, .+) 正则表达式比较贪婪,   .*?  .+?
 */
function t1(){
    $str = "this is a Test";

    //i : 修正正则表达式不区分大小写（默认是区分大小写的）
    $reg = '/PHPStudy/i';


    if(preg_match_all($reg, $str, $arr)) {
        echo "正则 <b>{$reg}</b>, 和字符串<b>{$str}</b>匹配成功<br>";
        print_r($arr);
    } else {
        echo "匹配失败!<br>";
    }
}
t1();
echo "<br>--------------------------------<br>";

function t2(){
    $str = "Abc this is a Test
abchello world
meizi";

    //m : 修正符号修正正则表达式可以视为多行， 在使用 ^ 或 $ 这两个符号时， 每一行满足都可以。  （默认视为一行处理）
    $reg = '/^abc/im';// Array ( [0] => Array ( [0] => Abc [1] => abc ) )


    if(preg_match_all($reg, $str, $arr)) {
        echo "正则 <b>{$reg}</b>, 和字符串<b>{$str}</b>匹配成功<br>";
        print_r($arr);
    } else {
        echo "匹配失败!<br>";
    }
}
t2();
echo "<br>--------------------------------<br>";

function t3(){
    $str = "this is a te
st";
    //s:  修正正则表达式中的 . 可以匹配换行符号 (默认 . 不能匹配回车符号)
    $reg = '/te.+st/s';

    if(preg_match($reg, $str, $arr)) {
        echo "正则 <b>{$reg}</b>, 和字符串<b>{$str}</b>匹配成功<br>";
        print_r($arr);
    } else {
        echo "匹配失败!<br>";
    }
}
t3();
echo "<br>--------------------------------<br>";

function t4(){
    $str = "this <b>is</b> a PHPStudy  <b>Web</b> Serve";

    //U:  (.*, .+) 正则表达式比较贪婪,  取消贪婪模式 .*?  .+?     .任意一个 *0个或者多个 +一个或多个
    $reg = '/\<b\>(.*?)\<\/b\>/is';

    if(preg_match_all($reg, $str, $arr)) {
        echo "正则 <b>{$reg}</b>, 和字符串<b>{$str}</b>匹配成功<br>";
        print_r($arr);
    } else {
        echo "匹配失败!<br>";
    }
}
t4();
echo "<br>--------------------------------<br>";
