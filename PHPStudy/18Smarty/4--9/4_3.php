<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING);
	session_start();
	include "init.inc.php";

	
/*
 *
 *     $smarty -> assign("smarty", array(
 *				"get"=>$_GET,
 *				"post"=>$_POST,
 *				"session"=>$_SESSION,
 *				"cookie"=>$_COOKIE
 *				....
 *
 *	
 *     				))
 *
 *
 *
 */		

    $_SESSION['hello']="sssss";
	$smarty -> display("4_3.tpl");
