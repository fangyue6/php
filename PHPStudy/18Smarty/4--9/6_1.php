<?php
include "init.inc.php";

$smarty->registerPlugin("block", "world", "world");


function world($args, $content, $aaa) {
    //Array ( [content] => hello world [color] => red [size] => 7 [line] => 5 )

    $str = "";

    for($i=0; $i<$args['line']; $i++) {

        $str .="<font color='{$args['color']}' size='{$args['size']}'>{$content}</font><br>";
    }


    return $str;
}


/*
	$smarty->registerPlugin("function", "hello", "hello");


	function hello($args, $smarty) {
		//Array ( [content] => hello world [color] => red [size] => 7 [line] => 5 ) 

		$str = "";
		
		for($i=0; $i<$args['line']; $i++) {
		
			$str .="<font color='{$args['color']}' size='{$args['size']}'>{$args['content']}</font><br>";
		}


		return $str;

	}
 */
$smarty -> display("6_1.tpl");
