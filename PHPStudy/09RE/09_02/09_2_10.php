<?php
/*  
 * 正则表达式的编写
 * 	1. 就是一种语言, 开发思想放进去
 * 	2.2. 列需求
 *
 *
 */

$str = "
	这是http://www.lampbrother.net网站,
	这是http://www.lampbrother.net/php/网站,
	这是http://www.lampbrother.net/php/demo.php网站,
	这是http://www.lampbrother.net/php/demo.inc.php?username=admin&p=123456网站,
	这是http://www.baidu.com网站
	这是http://www.aaa.baidu.com网站
	这是https://www.lampbrother.net网站
	这是ftp://mail.lampbrother.net网站
	这是ftps://www.lampbrother.net网站


";
//https?  表示s可有可没有    ([\w-\.\/\=\?\&\%]*)? 表示([\w-\.\/\=\?\&\%]*)可有可没有
$reg = '/(https?|ftps?):\/\/(www|mail|bbs|ftp)\.(.*?)\.(net|com|org|cn)([\w-\.\/\=\?\&\%]*)?/';


if(preg_match_all($reg, $str, $arr)) {
    echo '<pre>';
    echo "正则 <b>{$reg}</b>, 和字符串<b>{$str}</b>匹配成功<br>";
    print_r($arr);
    echo '</pre>';
} else {
    echo "匹配失败!<br>";
}

