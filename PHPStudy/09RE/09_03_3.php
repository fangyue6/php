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
 */
header("Content-Type:text/html;charset=utf-8");



$arr = array("abcd1", "he llo2", "world", "ni hao");


$content=preg_grep('/\s/', $arr);//\s带空格  过滤数组  Array ( [1] => he llo2 [3] => ni hao )

print_r($content);
