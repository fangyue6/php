<?php
$str = "aa1aaaaa3aaaa5aaaa77777aaaa2aaaa9aaaaa0aaaaaaa<br>";


$reg = "/\d/";

/* 定界符号： 多种都可以， 常用为 //
 *
 * 原子 : 最少的一个匹配单位 (放在定界符中), 在一个正则表达式中， 至少要有一个原子
 * 元字符: 元字符不能单独使用的，修饰原子，  是用来扩展原子功能的和限定功能 (写在定界符号中)
 *
 * 模式修正符号:  修正， 对模式（正则）修正, （写在定界符号外面， 写在右边）
 *
 */

echo $str."<br>";

echo preg_replace($reg, "#", $str)."<br>";//替换

print_r(preg_split($reg, $str));//分割

echo '<br>';


if(preg_match($reg, $str, $arr) ) {//匹配成功返回真，匹配的结果放在$arr里面  preg_match_all匹配所有
    echo "正则表达式 <b>{$reg}</b> 和字符串 <b>{$str}</b> 匹配成功!<br>";
    print_r($arr);

} else {
    echo "没有匹配上<br>";
}
