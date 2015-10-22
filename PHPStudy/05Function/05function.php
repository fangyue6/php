<?php
header("Content-type: text/html; charset=utf-8");
function t1(){
    $b='bb';
    //动态变量
    $bb="this is s1 string<br>";
    echo $$b;
}
//------------------------------------------
function t2(){
    function s1(){
        echo "this is s1 function<br>";
    }
    function s2(){
        echo "this is s2 functio<br>";
    }
    $a="s1";
    //动态函数
    $a();
}

//------------------------------------------

function t3(){
    //引用
    function yingyong(&$c){
        $c+=1;
    }
    $c=10;
    echo "c=".$c."<br>";
    yingyong($c);
    echo "c=".$c."<br>";
}

//------------------------------------------
function t4(){
    //可变参数
    function demo4(){
        $sum=0;
        for($i=0;$i<func_num_args();$i++){
            $sum+=func_get_arg($i);
        }
        return $sum;
    }
    echo demo4(1,2,3,4,5,6,7,8,9)."<br>";
}

//------------------------------------------------------
//'------------------回调函数 start-------------------<br>';
function t5(){
    /*
 *  在使用一个函数的时候， 如果传一个变量， 不能解决多大的问题， 就需要将一个过程进入到函数中， 改变函数的执行行为.
 *
 *  在函数的调用时， 在参数中传的不是一个变量或一个值， 而是一个函数， 这就是回调函数参数
 *
 */
    $arr = array("aaaa","aa","aaaaaaaaaa", "a", "aaa","aaaaaaaaaaaaaaaaaaaa","aaaaa","dddddddd" );
    function mycom($a, $b) {
        if(strlen($a) > strlen($b))
            return 1;
        else if(strlen($a) < strlen($b))
            return -1;
        else
            return 0;
    }
    print_r($arr);echo '<br>';
    usort($arr, "mycom");
    print_r($arr);
    echo '<br>';
}
//t5();
//'------------------回调函数 start-------------------<br>';


// '------------------制作回调函数--start-----------------<br>';
function t6(){
    /*
 *  在使用一个函数的时候， 如果传一个变量， 不能解决多大的问题， 就需要将一个过程进入到函数中， 改变函数的执行行为.
 *  在函数的调用时， 在参数中传的不是一个变量或一个值， 而是一个函数， 这就是回调函数参数
 *  制作回调函数
 */
    function demo6($num, $n) {
        // $n = "PHPStudy";
        for($i=0; $i<$num; $i++) {
            if(!$n($i))
                continue;
            echo $i."<br>";
        }
    }
    function huiwen($i) {
        if($i==strrev($i))//回文数
            return true;
        else
            return false;
    }
    demo6(500, "huiwen");
}
//t6();
function t7(){
    function demo7($num, $n) {
        // $n = "PHPStudy";
        for($i=0; $i<$num; $i++) {
            //  if($n($i))
            if(!call_user_func_array($n, array($i)))
                continue;
            echo $i."<br>";
        }
    }
    function huiwen($i) {
        if($i==strrev($i))
            return true;
        else
            return false;
    }
    demo7(500, "huiwen");//回文数
}
//t7();
// '------------------制作回调函数--end-----------------<br>';

//---------------------php系统函数<br>-----start-----------------------------------
function t8(){
    $dirname = "../../php-5.6.14-Win32-VC11-x86";
    function fordir($dirname) {
        //打开目录资源
        $dir = opendir($dirname);
        //readdir($dir);
        //readdir($dir);
        while( $file = readdir($dir)) {
            $nfile = $dirname.'/'.$file;
            if(is_dir($nfile)){
                echo "目录: {$nfile}<br>";
            } else {
                echo "文件: {$nfile}<br>";
            }
        }
        closedir($dir);
        //关闭
    }
    fordir($dirname);
}
//t8();
//---------------------php系统函数<br>-----end-----------------------------------

//---------------------递归-----start-------------------------------------------
function t9(){
    $dirname = "../../php-5.6.14-Win32-VC11-x86";
    function fordir($dirname) {
        //打开目录资源
        $dir = opendir($dirname);
        while( $file = readdir($dir)) {
            $nfile = $dirname.'/'.$file;
            if(is_dir($nfile)){
                echo "目录: {$nfile}<br>";
                fordir($nfile);
            } else {
                echo "文件: {$nfile}<br>";
            }
        }
        //关闭
        closedir($dir);
    }
    fordir($dirname);
}
//t9();
//---------------------递归-----end-------------------------------------------

//---------------------自定义函数-----start-------------------------------------------
function t10(){
    include_once("../function/function.inc.php");
    one();
    include_once("../function/demo1.txt");
    two();
    include_once("../function/demo2.html");
    three();
   // require("../function/demo2.html");
   // require_once("../function/demo2.html");
}
//---------------------自定义函数-----end-------------------------------------------

//---------------------匿名函数-----start-------------------------------------------
//php5.3.0以上版本有效
function t11(){
    $var = function($a, $b, $c) {
        return $a+$b+$c;
    };   //一定要加分号结束
    $aa = $var;
    echo $aa(1,2,3)."<br>";
    echo $var(1,2,3)."<br>";
}
//t11();
//---------------------匿名函数-----end-------------------------------------------

//---------------------闭包函数-----start-------------------------------------------
function t12(){
    function demo() {
        $a = 10;
        $b = 20;
        $one = function($str) use (&$a, &$b) {
            echo $str."<br>";
            echo $b."<br>";
            $a++;
            echo $a."<br>";
            //return "";
        };
        return $one;
    }
    $var=demo();
    $var("hello world");
    $var("this is a PHPStudy");
    $var("############");
}
//t12();
function t13(){
    function demo1($fun) {
        echo $fun();
    }
    //5.3版本后
    demo1(function(){
        return "@2222222222222222<br>";
    });
    demo1(function(){
        return "###################<br>";
    });
}
//t13();
//---------------------闭包函数-----end-------------------------------------------










