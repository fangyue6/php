<?php
/*
 *    文件名 function.函数名.php
 *   
 *    声明的函数名也要有规则
 *
 *    smarty_function_函数名() 
 *
 *    参数   
 *    	1. 数组
 *    	2. smarty
 *
 *
 */

	function smarty_function_hello1($args, $smarty) {
		//Array ( [content] => hello world [color] => red [size] => 7 [line] => 5 ) 

		$str = "";
		
		for($i=0; $i<$args['line']; $i++) {
		
			$str .="<font color='{$args['color']}' size='{$args['size']}'>{$args['content']}</font><br>";
		}


		return $str;
	}
