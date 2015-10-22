<?php
include "init.inc.php";
include "page.class.php";
session_start();
    $flag=0;
   if(!empty($_SESSION["username"])){
        $flag=1;
       $smarty -> assign("username", $_SESSION["username"]);
   }else{
       $flag=0;
   }
    $smarty -> assign("flag",  $flag);

    $smarty -> display("index.html");