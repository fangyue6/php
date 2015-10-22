<?php
header("Content-Type:text/html;charset=utf-8");
/*	$reg = '/(https?|ftps?):\/\/(www|mail|bbs|ftp)\.(.*?)\.(net|com|org|cn)([\w-\.\/\=\?\&\%]*)?/';
	$reg = '/\w+([+-.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)* /i';

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
 *
 * 分割：
 *	explode()   implode() -- join()
 *
 *
 *正则表达式
	preg_split()  
 *
 *
 *
 * 替换
 * 	字符串处理  str_replace()
 *
 *
 * 	正则表达式  preg_replace()	
 */
function t1(){

    $str ="如果没有一些特殊的<b>替换</b>需求（<u>比如正则表达式</u>），你应该使用该函数替换 <font color='red'>ereg_replace()</font> 和 preg_replace()。 ";
    $html = "/\<[\/\!]*?[^\<\>]*?\>/is";//删除所有html标记
    $newstr = preg_replace($html, "", $str);
    echo $str."<br>";
    echo $newstr."<br>";
}
t1();
echo "<br>-----------------------------<br>";

function t2(){
    $str ="如果没有一些特殊的<b>替换</b>需求（<u>比如正则表达式</u>），你应该使用该函数替换 <font color='red'>ereg_replace()</font> 和 preg_replace()。 ";
    $html = "/\<[\/\!]*?[^\<\>]*?\>/is";
    $newstr = preg_replace($html, "", $str, 4);//4代表替换次数
    echo $str."<br>";
    echo $newstr."<br>";
}
t2();
echo "<br>-----------------------------<br>";

function t3(){
    $str =  array(
        "如果没有一些http://www.baidu.com特殊的<b>替换</b>需5求（<u>比如正则表达式</u>），你应http://www.lampbrother.net该使用该http://bbs.brophp.org函数替9换 <font color='red'>ereg_replace()</font> 和9 preg_replace()。 ",
        "如果没有一些http://www.baidu.com特殊的<b>替换</b>需5求（<u>比如正则表达式</u>），你应http://www.lampbrother.net该使用该http://bbs.brophp.org函数替9换 <font color='red'>ereg_replace()</font> 和9 preg_replace()。 ",
        "如果没有一些http://www.baidu.com特殊的<b>替换</b>需5求（<u>比如正则表达式</u>），你应http://www.lampbrother.net该使用该http://bbs.brophp.org函数替9换 <font color='red'>ereg_replace()</font> 和9 preg_replace()。 ",
        "如果没有一些http://www.baidu.com特殊的<b>替换</b>需5求（<u>比如正则表达式</u>），你应http://www.lampbrother.net该使用该http://bbs.brophp.org函数替9换 <font color='red'>ereg_replace()</font> 和9 preg_replace()。 "
    );
    $reg  = array(
        '/\<[\/\!]*?[^\<\>]+?\>/is',
        '/(https?|ftps?):\/\/(www|mail|bbs|ftp)\.(.*?)\.(net|com|org|cn)([\w-\.\/\=\?\&\%]*)?/e',
        '/\d/'
    );
    $rep = array(
        '',
        '"<a href=\'$1://$2.2.$3.$4--9\'>".strtoupper("$1://$2.2.$3.$4--9")."</a>"',
        '@'
    );
    $newstr = preg_replace($reg, $rep, $str);

    echo '<pre>';
    print_r($str)."<br>";
    print_r($newstr)."<br>";
    echo '</pre>';
}
t3();
