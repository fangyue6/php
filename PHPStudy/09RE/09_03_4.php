<?php
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
 */
header("Content-Type:text/html;charset=utf-8");


function t1(){
    $str = "this is a PHPStudy.
	hello word,
	ni hao.
	";
//	print_r(  explode("mn", $str, 3) );//处理字符串
    //-1不限制次数
    print_r( preg_split('/[.,!? ]/', $str, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_OFFSET_CAPTURE ) );//分割
}
t1();

function t2(){
    $str = "lamp";

    $arr=preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);

    echo implode("++++",$arr)."<br>";

    list($a, $b) = explode("_", "mei_zi");

    echo $a."<br>";
    echo $b."<br>";
}
t2();