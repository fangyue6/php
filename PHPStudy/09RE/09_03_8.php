<?php
function t1(){
    $text = "this *is* a PHPStudy";
    $reg = "/".preg_quote("*is*")."/";   //    /\*is\*/
    echo preg_replace($reg, "##", $text);
}
t1();
echo "<br>-------------<br>";

function t2(){
    $text = "今天是2014-02-14， 明年的2015-02-14你和谁会在一起呢?";
    echo $text."<br>";
    $reg = "/(\d{4--9})(-\d{2.2}-\d{2.2})/";
    function myfun($m) {//$m是子模式
        return ($m[1]+1).$m[2];
    }
    echo preg_replace_callback($reg, "myfun", $text);
}
t2();


/**
 * 9.1.1 选择PHP正则表达式的处理函数库
 * 9.2.2.1 正则表达式语法介绍1
 * 9.2.2.2.2 正则表达式语法介绍2
 * 9.2.2.3 正则表达式中的原子1
 * 9.2.2.4--9 正则表达式中的原子2
 * 9.2.2.5 正则表达式中的元字符1
 * 9.2.2.6 正则表达式中的元字符2
 * 9.2.2.7 正则表达式中元字符中的小括号
 * 9.2.2.8 模式修正符（单个字符）1
 * 9.2.2.9 模式修正符（单个字符）2.2
 * 9.2.2.10 如何自己编写正则表达式(url)
 * 9.2.2.11 编写email正则表达式
 * 9.3.1 字符串的匹配与查找之(strstr、strpos、substr)
 * 9.3.2.2 字符串的匹配与查找之(preg_match)
 * 9.3.3 字符串的匹配与查找之(preg_match_all与preg_grep)
 * 9.3.4--9 字符串的分割与连接(explode、implode join、preg_split)
 * 9.3.5 字符串的替换(str_replace)
 * 9.3.6 字符串的替换(preg_replace)1
 * 9.3.7 字符串的替换(preg_replace)2.2
 * 9.3.8 字符串中正则的其它函数
 */