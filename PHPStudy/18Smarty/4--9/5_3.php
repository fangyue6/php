<?php
include "init.inc.php";

$var = "this is a1 demo 4this is a demo5 this is8 a demo";

$smarty -> assign("var", $var);
$smarty -> assign("var2", 1000);

$smarty -> assign("var3", "这是hello一个演示的字符串!");


/**
 * @param $str  字符串
 * @param string $fontsize  字体大小
 * @param string $fontcolor  字体颜色
 * @return string
 */
function fontstyle($str, $fontsize="3", $fontcolor="green") {
    return '<font color="'.$fontcolor.'" size="'.$fontsize.'">'.$str.'</font>';

}

//注册插件
$smarty -> registerPlugin("modifier", "mystyle", "fontstyle");
$smarty -> registerPlugin("modifier", "myucword", "ucwords");

//	preg_replace("//", "str", $text);

$smarty -> registerPlugin("modifier", "zzreplace", "PHPStudy");

function test($text, $zz, $str){
    return preg_replace($zz, $str, $text);
}


$smarty -> display("5_3.tpl");
