<?php
include "init.inc.php";

$var = "this is a1 demo 4this is a demo5 this is8 a demo";

$smarty -> assign("var", $var);
$smarty -> assign("var2", 1000);

$smarty -> assign("var3", "这是hello一个演示的字符串!");


$smarty->assign( 'data', array(1,2,3,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9) );
$smarty->assign( 'tr', array('bgcolor="#eeeeee"','bgcolor="#dddddd"') );



$smarty -> display("5_6.tpl");
