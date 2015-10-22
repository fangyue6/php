<?php
	include "./libs/Smarty.class.php";

	$smarty = new Smarty;
//      这是smarty2时期的用法	
//	$smarty -> template_dir = "./views/";
//	$smarty -> compile_dir = "./comps/";

// 	以下是smarty3时期用法
	$smarty -> setTemplateDir("./views/");//设置模板目录
    $smarty -> addTemplateDir("./views/A/");//设置模板目录
    $smarty -> addTemplateDir("./home/");

    $smarty -> setCompileDir("./comps/A");//设置编译目录


	//设置定界符号
	$smarty -> left_delimiter = "<{";
	$smarty -> right_delimiter = "}>";

	$smarty -> assign("title", "this is a demo");

	$smarty -> assign("content", "this is content .....");

	$smarty -> display("demo.tpl");
   // $smarty -> display("a.html");
