<?php
include "init.inc.php";

$var = "自定义插件";

$smarty -> assign("var", $var);
$smarty -> assign("var2", 1000);

$smarty -> assign("var3", "这是hello一个演示的字符串!");


$smarty -> display("5_4.tpl");
