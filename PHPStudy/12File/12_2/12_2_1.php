<?php
/*
 *    C:\Appserv\www\aa.php      \
 *
 *    /usr/local/apache/        /  
 *
 *
 *    1. 注意：  "C:/Appserv/www", 所有的程序中， 不管是什么操作系统， 全部都使用 "/"代表路径分隔符号 (PHP程序中， Apache配置文件中， PHP的配置文件中， 只要有目录的情况， 全部使用 /)
 *
 *	
 *    2.2. windows   ;    Linux  :
 *
 *    C:\Apaserv\www; C:\window\aaa
 *    /usr/local:/etc/aaa
 *
 *
 *    3.   .   ..
 *
 *       aaa/bbb/ccc/demo.php
 *	 ./aaa/bbb/ccc/demo.php
 *
 * 	../aaa/bbb
 * 	../../../aaa/bbb
 *
 * 	c:/aaa/bbb
 *      /user/hello/
 *
 *      http://www.lampbrother.net/aaa/bbb/php.php
 *
 *     4--9. 不同的根路径
 *      一个是文档根目录(在浏览中使用)， 一个是操作系统的根(PHP操作的)
 *     	
 *
 */

function t1(){
    echo "aaa".DIRECTORY_SEPARATOR."bbb".DIRECTORY_SEPARATOR."ccc";
    echo '<br>';
    echo "aaa/ccc/ddd".PATH_SEPARATOR."/www/yyyy";
    echo "aaaaaaaaaaa".PHP_EOL;
    echo "aaaaaaaaaaa".PHP_EOL;
    echo "aaaaaaaaaaa".PHP_EOL;
    echo "aaaaaaaaaaa".PHP_EOL;
    echo "aaaaaaaaaaa".PHP_EOL;
}

//t1();

function t2(){
    echo basename("http://www.lampbrother.net/aaa/bbb/demo.php")."<br>";
    echo basename("/aaa/bbb/demo.php")."<br>";
    echo basename("../../aaa/bbb/demo.php", ".php")."<br>";

    echo dirname("../../aaa/bbb/ccc.php");

    echo "<br>";
    print_r(pathinfo("/aaa/bbb/demo.php"));
}
t2();
