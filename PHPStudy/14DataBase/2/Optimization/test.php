<?php
	header("Content-Type:text/html;charset=utf-8");
	include "page.class.php";

	

	$page = new Page(98, 10);

	echo $page -> fpage(3,4,5,6,0);//指定想使用哪些分页功能，哪些显示，哪些不显示
?>


