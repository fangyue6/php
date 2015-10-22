<?php
/*	$reg = '/(https?|ftps?):\/\/(www|mail|bbs|ftp)\.(.*?)\.(net|com|org|cn)([\w-\.\/\=\?\&\%]*)?/';
	$reg = '/\w+([+-.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)* /i';

 *  分割、匹配、查找、替换
 *
 *  1. 字符串处理函数 (处理快， 但有一些做不到)
 *
 *  2.2. 正则表达式函数  (功能强大，但效率要低)
 *
 *
 *  注意：如果可以直接使用字符串处理函数处理的字符串，就不要使用正则处理
 *
 *
 *  
 * 匹配查找:
 *
 * 	strstr  strpos substr
 *
 *
 * 正则匹配查找
 *
 * 	preg_match()   preg_match_all()   preg_grep();
 *
 */
	header("Content-Type:text/html;charset=utf-8");
?>

<?php
	

if(preg_match( '/(https?|ftps?):\/\/(www|mail|bbs|ftp)\.(.*?)\.(net|com|org|cn)([\w-\.\/\=\?\&\%]*)?/', $_POST['url'], $arr)) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';

	echo "完整的URL是 {$arr[0]} <br>";
	echo "协议是 {$arr[1]} <br>";
	echo "主机是 {$arr[2]} <br>";
	echo "域名是： {$arr[3]} <br>";
	echo "顶层域： {$arr[4]} <br>";
	echo "资源参数： {$arr[5]} <br>";

	
}

