<?php
/*
 *
 *
 *
 */

$str = "hello world";

$str1 = "妹子你好";


echo substr($str, 0, 7)."<br>";
echo mb_substr($str1, 0, 7, "utf-8")."<br>";


