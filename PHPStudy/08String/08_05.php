<?php
/**
 * Created by PhpStorm.
 * User: fangyue
 * Date: 2015/10/12
 * Time: 21:25
 */

//一、	不用PHP函数，用方法写一个反转字符串的函数；
function t1(){
	$str = "hello";
//	echo strrev($str);
	function fan($str) {
        //声明一个临时的变量
        $n = "";
        //获取字符串长度
        $m = strlen($str)-1;
        for($i=$m; $i >= 0;  $i--) {
            $n .= $str{$i};
        }
        return $n;
    }
	echo fan($str);
}
t1();

//二、	写一个函数，将一个字符串(如：1234567890)，转换成(如1，234，567，890)每3位用逗号隔开的形式。
function t2(){
    $str = "12345678932132";
    function nformat($str) {
        $n = "";   //临时的变量
        $m = strlen($str); //获取字符串长度
        $k = $m %  3;  //让整个长度和3取余之后余数是多少 = 0
        for($i=0; $i < $m;  $i++) {
            if($i%3 == $k && $i!=0) {
                $n .=",";
            }
            $n .= $str{$i};
        }
        return $n;
    }
    echo nformat($str);
}
t2();

//三、	请写一个获取文件扩展名的函数
function t3(){
    function extname($url) {
        if(strstr($url, "?")) {
            //如果有问号格式的文件， 将问号前的文件取出给变量$file
            list($file) = explode("?", $url);
        } else {
            $file = $url;
        }
        //以下是第二步取出文件名
        $loc = strrpos($file, "/")+1;
        $filename = substr($file, $loc);
        //以下是第三步取扩展名称
        $arr = explode(".", $filename);
        return array_pop($arr);
    }
    echo extname("http://www.lampbrother.net/aaa/init.inc.php")."<br>";
    echo extname("init.inc.php")."<br>";
    echo extname("C:/aaa/init.inc.php")."<br>";
    echo extname("http://www.lampbrother.net/aaa/init.inc.php?a=100")."<br>";
}
t3();

/**
 *
写一个函数，算出两个文件的相对路径
如：
$a=’/a/b/c/d/e.php’
$b=’/a/b/12/34/c.php’
计算出$b相对于$a的相对路径应该是../../c/d

 */
function t4(){
    function abspath($a, $b) {
        //第一步去除公共的目录结构
        //	$a = "/a/b/c/d/e.php";
        //	$b = "/a/b/12/34/c.php";

        $a = dirname($a);    //  /a/b/c/d
        $b = dirname($b);    //  /a/b/12/34

        $a = trim($a, "/");   //   a/b/c/d
        $b = trim($b, "/");   //   a/b/12/34

        $a = explode("/", $a);  //  array("a", "b", "c", "d")
        $b = explode("/", $b);  //  array("a", "b", "12", "34")

        // $a = explode("/", trim(dirname($a), "/"));
        $num = max(count($a), count($b));
        for($i=0; $i<$num; $i++) {
            if($a[$i]==$b[$i]) {
                unset($a[$i]);
                unset($b[$i]);
            }else{
                break;
            }
        }
        //$a = array("c", "d");
        //$b = array("12", "34");
        //第二步：回到同级目录， 进入另一个目录
        $path = str_repeat("../", count($b)).implode("/", $a);    //  ../../c/d
        return $path;
    }
    $a = "/a/b/c/d/e/w/f/e.php";
    $b = "/a/b/12/34/100/c.php";
    // ../../c/d
    echo abspath($a, $b);
}
t4();

/**
 *8.1.1 字符串的处理方式1
 * 8.1.2.2 字符串的处理方式2
 * 8.2.2.1 常用的字符串输出函数1
 * 8.2.2.2.2 常用的字符串输出函数2
 * 8.3.1 去除空格和字符串填补及大小写转换函数
 * 8.3.2.2 和HTML标签相关的字符串格式化函数
 * 8.3.3 字符串格式化函数
 * 8.4--9.1 字符串比较函数
 * 8.5.1 字符串面试题1
 * 8.5.4--9 字符串面试题2
 * 8.5.3 字符串面试题3
 */