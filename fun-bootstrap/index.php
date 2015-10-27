<?php
include "init.inc.php";
include "class/class.fun.php";
include "class/class.message.php";
include "page.class.php";
session_start();
    $flag=0;
   if(!empty($_SESSION["username"])){
        $flag=1;
       $smarty -> assign("username", $_SESSION["nickname"]);
       $smarty -> assign("id", $_SESSION["id"]);
       $message=new Message();
       $smarty -> assign("message", $message->getMessage($_SESSION["id"]));
   }else{
       $flag=0;
   }
    $smarty -> assign("flag",  $flag);

    $fun=new Fun();
    $smarty -> assign("fun",  $fun->getFun());



    $smarty -> display("index.html");