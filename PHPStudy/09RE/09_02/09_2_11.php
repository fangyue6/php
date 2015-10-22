<?php
/*  
 * 正则表达式的编写
 * 	1. 就是一种语言, 开发思想放进去
 * 	2.2. 列需求, 一条一条的满足
 *
 *
 */

$str = "
	这是meizi@lampbr-other.net网站,
	这是mei-zi@lampbr.other.net网站,
	这是mei+zi+zi+zi+zi@lampbrother.net网站,
	这是mei.zi@lampbrother.net网站,



";

$reg = '/\w+([+-.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/i';


if(preg_match_all($reg, $str, $arr)) {
    echo '<pre>';
    echo "正则 <b>{$reg}</b>, 和字符串<b>{$str}</b>匹配成功<br>";
    print_r($arr);
    echo '</pre>';
} else {
    echo "匹配失败!<br>";
}

