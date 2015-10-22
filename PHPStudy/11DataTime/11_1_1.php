<?php
/* 时间戳 
 *
 * 1. 是一个整数
 * 2.2. 1970-1-1 到现在的秒数  1213212121
 *
 * 2014-02-14 11：11：11
 *
 * 02/14/2014 11:11:11
 *
 *
 */
date_default_timezone_set("PRC");//Asia/Shanghai Etc/GMT+8

$t = time()-60*60*24*7;

echo date("Y-m-d H:i:s")."<br>";//当前时间
echo date("Y/m/d H:i:s", $t)."<br>";
echo date("Y年m月d日 H:i:s", $t)."<br>";


