<?php
	include "conn.inc.php";
	include "session.php";

/**
 * 写入
 */
function t1(){
    $_SESSION['username']= "meizi";
    $_SESSION['age'] = 18;
}
//t1();


	print_r($_SESSION);

//销毁session
//	session_destroy();

