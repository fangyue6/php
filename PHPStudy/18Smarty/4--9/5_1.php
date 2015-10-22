<?php

include "init.inc.php";

$var = "this is a demo this is a demo this is a demo";

$smarty -> assign("var", $var);


$smarty -> display("5_1.tpl");
