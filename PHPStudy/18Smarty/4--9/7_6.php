<?php
include "init.inc.php";


$smarty -> assign("arr", array("os"=>"Linux", "webserver"=>"Apache", "db"=>"MySQL", "language"=>"PHP"));



$smarty -> display("7_6.tpl");
