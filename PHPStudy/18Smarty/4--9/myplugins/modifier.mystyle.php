<?php
/*   
 *   1. 插件位置要确定  $smarty -> setPluginsDir();
 *   2. 文件命名要有规则 才能通过文件名确定这个文件  modifier.函数数名.php
 *   3. 函数名要有规则, 才能找到这个文件中的这个函数
 *   4. 参数要有规则 第一个必须是要处理变量， 第二个以后才是使用的参数  
	 * 
	 *
	 */
	function smarty_modifier_mystyle($str, $size="3", $color="green") {
		return "<font color='{$color}' size='{$size}'>{$str}</font>";
	}
