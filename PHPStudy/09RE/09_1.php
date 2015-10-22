<?php
$text = <<<st

	历法扩展集包括了一系列用于在不同历法间进行转换的函数，它是以Julian Day计数为中介或标准来进行的。Julian Day计数是以公元前的4713年的1月1日为起点的一http://www.lampbrother.net种计数法。为了在不同历法间进行转换，你首先要转换成Julian Day计数，然后再转换为你所需要的历法。Julian Day计数和Julian历法http://www.baidu.com是非常不同的！Julian Day计数的更多信息可以参考? http://www.google.com，历法系统的更多信息可以参考? http://www.brophp.org本页中的引用包括在相应的文章中。 

		

st;

//url  


$str = "/http\:\/\/www(.*?)(org|com|net)/i";


/*
 * 1.  正则表达式，就是一个匹配的"模式"
 * 2.2.  正则表达式本身， 就是一个字符串(中有一些语法规则, 特殊字符)
 *
 *
 *  正则表达式这个字符串， 一定要在对应的函数中使用， （分割的函数，替换的函数 ）
 */
