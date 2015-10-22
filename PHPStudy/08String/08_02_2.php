<?php
/*
 *  var_dump();
 *
 *  print_r();
 *
 *
 *  echo
 *
 *  die();  exit(); 输出并退出程序
 *
 *  printf格式化输出
 *
 *  sprintf格式化返回
 */


$int = 100.678;

//	printf("%daaaaaaaa{$int}aaaaaaaaaaaaaaaa", $int);

$str= sprintf("%s,%1.2f,%u, %e, %b,%%,%d, %c",$int,$int,$int, $int, $int, $int, $int);

echo $str."<br>";
echo $str."<br>";
echo $str."<br>";
echo $str."<br>";
echo $str."<br>";

//echo chr($int);






