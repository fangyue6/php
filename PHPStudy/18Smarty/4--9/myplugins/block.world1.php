<?php
/*
 * 文件名  block.函数名.php
 *
 * 函数   smarty_block_函数名()
 *
 * 参数：
 * 	1. 属性关联数组
 * 	2. 标记中间的内容
 * 	3. 参数是smarty
 * 	4. 引用参数， 开始true和结束false
 *
 */

function smarty_block_world1($args, $content, $smarty, &$repeat) {
		//Array ( [content] => hello world [color] => red [size] => 7 [line] => 5 ) 

	if(!$repeat) {

		$str = "";
		
		for($i=0; $i<$args['line']; $i++) {
		
			$str .="<font color='{$args['color']}' size='{$args['size']}'>{$content}</font><br>";
		}


		return $str;	
	}
}
