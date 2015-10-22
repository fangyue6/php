<?php
	session_start();  //开启会话
	header('Content-Type:text/html;charset=utf-8');

	const DSN = "mysql:host=localhost;dbname=xsphp";
	const DBUSER = "root";
	const DBPASS = "123456";
