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

header("Content-Type:text/html;charset=utf-8");
function t1(){
    $num = 0;
    $str = "http://www.phpbrother.net/php/demo.php";
    $newstr = str_replace("php", "java", $str, $num);
    echo $str."<br>";
    echo $newstr."<br>";

    echo "替换的次数为：{$num}<br>";
}
t1();
echo "<br>-------------------<br>";

function t2(){
    $str = "this is a PHPStudy.
	hello word,
	ni hao.
	";
//	print_r(  explode("mn", $str, 3) );
    print_r( preg_split('/[.,!? ]/', $str, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_OFFSET_CAPTURE ) );
}
//t2();

function t3(){
    $num = 0;
    //正常  峰哥 妹子
    $str="这是一句正常的峰哥句子，妹子但里面有一些不能显示的文字";
    $newstr = str_replace(array("正常", "妹子", "峰哥"), "**", $str, $num);
    echo $str."<br>";
    echo $newstr."<br>";

    echo "替换的次数为：{$num}<br>";
}
t3();
echo "<br>-------------------<br>";