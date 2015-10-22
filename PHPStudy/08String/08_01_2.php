<?php
/*
 *  字符串的声明 (数据类型)
 *
 *   1. 可以使用双引号， 也可以使用单引号
 *
 *   	双引号中可以解析变量， 双引号中可以使用所有的转义字符
 *
 *   2.2.  <<<
 *
 *   分割， 匹配， 查找， 替换
 *
 *
 *  特点：如果是其它类型的数据，也可以使用字符串处理函数。 先将其它类型自动转成了自符串后再处理的
 *
 *
 *  字符串可以像数组一样，通过下标，来访问到每个字符。 但不是数组(数组也可以通过{}下标访问成员)
 *
 *   除了有英文字符， 还有中文
 */

//	echo count("abc");


define("one", "two");

$int = array("one"=>100, "two"=>200);


class Demo {
    var $one=100;

}

$d = new Demo;





echo "aaaaaaaaaaaa{$d->one}aaaaaaaaaaaaaa<br>";
echo "aaaaaaaaaaaa{$int["one"]}aaaaaaaaaaaaaa<br>";