<?php
include "init.inc.php";


$smarty -> assign("var", 6);
$smarty -> assign("var1", 8);

$smarty -> assign("arr", array(1,2,3,4,5,6,7,8));

$smarty -> display("7_3.tpl");
