<?php
	include "session.php";
	
	session_start();


	$_SESSION['username'] = "meizi";
	$_SESSION['age'] = 18;


	echo $_SESSION['username']."<br>";
	print_r($_SESSION);	 


//	session_destroy();
