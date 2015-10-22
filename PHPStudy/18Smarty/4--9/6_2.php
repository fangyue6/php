<?php
include "init.inc.php";

$smarty -> assign("titlecolor", "FF0000");
$smarty -> assign("ctime", date("Y-m-d H:i:s"));

$smarty -> display("6_2.tpl");
